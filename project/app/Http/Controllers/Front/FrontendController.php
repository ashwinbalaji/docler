<?php

namespace App\Http\Controllers\Front;

use App\acceleration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Subscriber;
use App\Models\AboutImg;
use App\Models\User;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Brand;
use App\Models\Condtion;
use App\Models\Pricing;
use App\Models\Specification;
use App\Models\BlogCategory;
use App\Models\BodyType;
use App\Models\FuelType;
use App\Models\TransmissionType;
use App\Models\Car;
use App\Models\Generalsetting;
use App\Models\Pagesetting as PS;
use App\Models\Category;
use App\Models\Testimonial;
use App\Classes\GeniusMailer;
use App\cylinders;
use App\drive_type;
use App\engine_capacity;
use App\fuel_economy;
use App\fuel_tank_capacity;
use App\fuel_type;
use App\height;
use App\horsepower;
use App\length;
use App\make;
use App\models;
use App\seating_capacity;
use App\top_speed;
use App\torque;
use App\transmission;
use App\trunk_capacity;
use App\wheelbase;
use App\width;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Validator;

class FrontendController extends Controller {

    public function home() {
        $data['testimonials'] = Testimonial::orderBy('id', 'DESC')->get();
        $data['blogs'] = Blog::orderBy('id', 'DESC')->limit(3)->get();
        $data['make'] = make::where('status', 1)->get();
        $data['conditions'] = array();
        $data['conditions'] = Condtion::where('status', 1)->get();
        $data['fuel_type'] = fuel_type::where('status', 1)->get();

        $data['pricings'] = Pricing::all();
        $data['lcars'] = Car::where('status', 1)->orderBy('id', 'RAND')->limit(25)->get();
        $data['fcars'] = Car::where('status', 1)->where('featured', 1)->orderBy('id', 'RAND')->limit(25)->get();

        // echo json_encode($data['fcars']);
        // exit;
        return view('front.home', $data);
    }

    //car compare option 
    public function carcompare() {

        $data['make'] = make::where('status', 1)->get(); //brand 
        $data['model'] = models::where('status', 1)->get();
        return view('front.carcompare', $data);
    }

    //car compare option 
    public function getCars(Request $request) {

        $data = $request->all();

        $make_id = $data['make_id'];

        $data['car'] = car::where('make_id', $make_id)->get();
        ;

        echo json_encode($data['car']);
        exit;
    }

    //get car details function 
    public function getCarDetails(Request $request) {

        $data = $request->all();

        $car_id = $data['car_id'];

        $data['carDetails'] = car::where('id', $car_id)->get();

        echo json_encode($data['carDetails']);
        exit;
    }

    // car compare  function 
    public function getCompareDetails(Request $request) {

        $datas = $request->all();

        $car_id = $datas['car_id'];
        $car_id1 = $datas['car_id1'];

        $data['car'] = Car::findOrFail($car_id);
        $data['car1'] = Car::findOrFail($car_id1);

        $view = view('car_compare_details', $data);
        echo $view;
        // echo json_encode($data['carDetails']);
        // exit;
    }

    public function about() {
        $skills = Skill::orderBy('marks', 'DESC')->get();
        $aboutimgs = AboutImg::orderBy('id', 'DESC')->get();
        $specs = Specification::all();
        return view('front.about', compact('skills', 'specs', 'aboutimgs'));
    }

    public function faq() {
        $data['faqs'] = Faq::all();
        return view('front.faq', $data);
    }

    public function contact() {
        return view('front.contact');
    }

    public function dynamicPage($slug) {
        $data['menu'] = Page::where('slug', $slug)->first();
        return view('front.dynamic', $data);
    }

    public function sendmail(Request $request) {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $ps = PS::first();

        $name = $request->name;
        $from = $request->email;
        $to = $ps->contact_email;
        $subject = $request->subject;

        $headers = "From: $name <$from> \r\n";
        $headers .= "Reply-To: $name <$from> \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = $request->message;

        @mail($to, $subject, $message, $headers);

        return response()->json("Mail sent successfully!");
    }

    public function prices($id) {
        $pricing = Pricing::find($id);
        return $pricing;
    }

    public function cars(Request $request) {
        $data['brands'] = Make::where('status', 1)->get();
        //$data['cats'] = Category::where('status', 1)->get();
        $data['cats'] = array();
        $data['conditions'] = Condtion::where('status', 1)->get();

        $data['btypes'] = array();
        $data['ftypes'] = array();
        $data['ttypes'] = array();

        // $data['btypes'] = BodyType::where('status', 1)->get();
        $data['fuel_type'] = fuel_type::where('status', 1)->get();
        $data['acceleration'] = acceleration::where('status', 1)->get();

        $data['cylinders'] = cylinders::where('status', 1)->get();
        $data['drive_type'] = drive_type::where('status', 1)->get();

        $data['engine_capacity'] = engine_capacity::where('status', 1)->get();
        $data['fuel_economy'] = fuel_economy::where('status', 1)->get();
        $data['fuel_tank_capacity'] = fuel_tank_capacity::where('status', 1)->get();
        $data['height'] = height::where('status', 1)->get();
        $data['horsepower'] = horsepower::where('status', 1)->get();
        $data['length'] = length::where('status', 1)->get();
        $data['make'] = make::where('status', 1)->get();
        $data['model'] = models::where('status', 1)->get();
        $data['top_speed'] = top_speed::where('status', 1)->get();
        $data['torque'] = torque::where('status', 1)->get();
        $data['transmission'] = transmission::where('status', 1)->get();
        $data['trunk_capacity'] = trunk_capacity::where('status', 1)->get();
        $data['wheelbase'] = wheelbase::where('status', 1)->get();
        $data['width'] = width::where('status', 1)->get();
        $data['seating_capacity'] = seating_capacity::where('status', 1)->get();
        // $data['ttypes'] = TransmissionType::where('status', 1)->get();

        $data['minprice'] = Car::min('price');
        $data['maxprice'] = Car::max('price');

        $minprice = $request->minprice;
        $maxprice = $request->maxprice;

        $brands = $request->brand_id;
        $fuel_type_id = $request->fuel_type_id;
        $acceleration_id = $request->acceleration_id;
        $cylinders_id = $request->cylinders_id;

        $drive_type_id = $request->drive_type_id;

        $engine_capacity_id = $request->engine_capacity_id;

        $fuel_economy_id = $request->fuel_economy_id;
        $fuel_tank_capacity_id = $request->fuel_tank_capacity_id;
        $height_id = $request->height_id;
        $horsepower_id = $request->horsepower_id;
        $length_id = $request->length_id;
        $make_id = $request->make_id;
        $model_id = $request->model_id;
        $seating_capacity_id = $request->seating_capacity_id;
        $top_speed_id = $request->top_speed_id;
        $torque_id = $request->torque_id;
        $transmission_id = $request->transmission_id;
        $trunk_capacity_id = $request->trunk_capacity_id;
        $wheelbase_id = $request->wheelbase_id;
        $width_id = $request->width_id;
        // echo json_encode($fuel_type_id);
        // exit;

        $sort = !empty($request->sort) ? $request->sort : 'desc';
        $view = !empty($request->view) ? $request->view : 10;
        $type = !empty($request->type) ? $request->type : 'all';

        $data['cars'] = Car::when($minprice, function ($query, $minprice) {
                            return $query->where('price', '>=', $minprice);
                        })
                        ->when($maxprice, function ($query, $maxprice) {
                            return $query->where('price', '<=', $maxprice);
                        })
                        ->when($brands, function ($query, $brands) {
                            return $query->whereIn('make_id', $brands);
                        })
                        ->when($acceleration_id, function ($query, $acceleration_id) {
                            return $query->whereIn('acceleration_id', $acceleration_id);
                        })
                        ->when($cylinders_id, function ($query, $cylinders_id) {
                            return $query->whereIn('cylinders_id', $cylinders_id);
                        })
                        ->when($drive_type_id, function ($query, $drive_type_id) {
                            return $query->whereIn('drive_type_id', $drive_type_id);
                        })
                        ->when($engine_capacity_id, function ($query, $engine_capacity_id) {
                            return $query->whereIn('engine_capacity_id', $engine_capacity_id);
                        })
                        ->when($fuel_economy_id, function ($query, $fuel_economy_id) {
                            return $query->whereIn('fuel_economy_id', $fuel_economy_id);
                        })
                        ->when($fuel_tank_capacity_id, function ($query, $fuel_tank_capacity_id) {
                            return $query->whereIn('fuel_tank_capacity_id', $fuel_tank_capacity_id);
                        })
                        ->when($fuel_type_id, function ($query, $fuel_type_id) {
                            return $query->whereIn('fuel_type_id', $fuel_type_id);
                        })
                        ->when($height_id, function ($query, $height_id) {
                            return $query->whereIn('height_id', $height_id);
                        })
                        ->when($horsepower_id, function ($query, $horsepower_id) {
                            return $query->whereIn('horsepower_id', $horsepower_id);
                        })
                        ->when($length_id, function ($query, $length_id) {
                            return $query->whereIn('length_id', $length_id);
                        })
                        ->when($make_id, function ($query, $make_id) {
                            return $query->whereIn('make_id', $make_id);
                        })
                        ->when($model_id, function ($query, $model_id) {
                            return $query->whereIn('model_id', $model_id);
                        })
                        ->when($seating_capacity_id, function ($query, $seating_capacity_id) {
                            return $query->whereIn('seating_capacity_id', $seating_capacity_id);
                        })
                        ->when($top_speed_id, function ($query, $top_speed_id) {
                            return $query->whereIn('top_speed_id', $top_speed_id);
                        })
                        ->when($torque_id, function ($query, $torque_id) {
                            return $query->whereIn('torque_id', $torque_id);
                        })
                        ->when($transmission_id, function ($query, $transmission_id) {
                            return $query->whereIn('transmission_id', $transmission_id);
                        })
                        ->when($trunk_capacity_id, function ($query, $trunk_capacity_id) {
                            return $query->whereIn('trunk_capacity_id', $trunk_capacity_id);
                        })
                        ->when($wheelbase_id, function ($query, $wheelbase_id) {
                            return $query->whereIn('wheelbase_id', $wheelbase_id);
                        })
                        ->when($width_id, function ($query, $width_id) {
                            return $query->whereIn('width_id', $width_id);
                        })
                        // ->when($fuel_type, function ($query, $fuel_type) {
                        // 	return $query->whereIn('fuel_type_id', $fuel_type);
                        // })
                        ->when($sort, function ($query, $sort) {
                            if ($sort == 'desc') {
                                return $query->orderBy('id', 'DESC');
                            } elseif ($sort == 'asc') {
                                return $query->orderBy('id', 'ASC');
                            } elseif ($sort == 'price_desc') {
                                return $query->orderBy('price', 'DESC');
                            } elseif ($sort == 'price_asc') {
                                return $query->orderBy('price', 'ASC');
                            }
                        })
                        ->when($type, function ($query, $type) {
                            if ($type == 'featured') {
                                return $query->where('featured', 1);
                            }
                        })
                        ->where('status', 1)->where('admin_status', 1)->paginate($view);



        return view('front.cars', $data);
    }

    public function details($id) {

        $car = Car::findOrFail($id);

        if ($car->status == 1) {
            $car->views = $car->views + 1;
            $car->save();

            $simCars = Car::where('status', 1)->where('admin_status', 1)->limit(5)->get();
            $data['simCars'] = $simCars;

            $data['car'] = $car;
            return view('front.details', $data);
        } else {
            return back();
        }
    }

    public function checkvalidity() {
        $gs = Generalsetting::first();
        $users = User::all();
        foreach ($users as $key => $user) {
            if (!empty($user->expired_date)) {

                $exdate = new \Carbon\Carbon($user->expired_date);
                $today = new \Carbon\Carbon(Carbon::now());
                $diff = $exdate->diffInDays(Carbon::now());


                if (($diff + 1) == 5) {
                    // send mail to expired models
                    $to = $user->email;
                    $subject = 'Subscription Expiration Alert!';
                    $msg = "Your subscription package will be expired after 5 days. Please buy new subscription package.";

                    if ($gs->is_smtp == 1) {
                        $data = [
                            'to' => $to,
                            'type' => "expiration_alert",
                            'mname' => $user->last_name,
                            'aname' => "",
                            'aemail' => "",
                            'wtitle' => $gs->title,
                        ];

                        $mailer = new GeniusMailer();
                        $mailer->sendAutoMail($data);
                    } else {
                        //Sending Email To Customer
                        $headers = "From: " . $gs->from_name . "<" . $gs->from_email . ">";
                        mail($to, $subject, $msg, $headers);
                    }
                }
                $today = new \Carbon\Carbon(Carbon::now());
                if ($today->gte($exdate)) {
                    $user->current_plan = NULL;
                    $user->ads = 0;
                    $user->expired_date = NULL;
                    $user->save();


                    // send mail to expired models
                    $to = $user->email;
                    $subject = 'Subscription Package Expired!';
                    $msg = "Your subscription package is expired. Please buy new subscription package.";

                    //Sending Email To Customer
                    $headers = "From: " . $gs->from_name . "<" . $gs->from_email . ">";
                    mail($to, $subject, $msg, $headers);
                }
            }
        }
    }

    // -------------------------------- BLOG SECTION ----------------------------------------

    public function blog(Request $request) {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(3);
        if ($request->ajax()) {
            return view('front.pagination.blog', compact('blogs'));
        }
        $bcats = BlogCategory::all();
        $tags = null;
        $tagz = '';
        $name = Blog::pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));

        return view('front.blog', compact('blogs', 'bcats', 'tags'));
    }

    public function subscribe(Request $request) {
        //--- Validation Section
        $rules = [
            'email' => 'required|unique:subscribers',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

        $subsc = new Subscriber;
        $subsc->email = $request->email;
        $subsc->save();

        return response()->json("You are subscribed successfully!");
    }

    public function blogcategory(Request $request, $slug) {
        $bcat = BlogCategory::where('slug', '=', str_replace(' ', '-', $slug))->first();
        $blogs = $bcat->blogs()->orderBy('id', 'DESC')->paginate(3);
        $bcats = BlogCategory::all();
        if ($request->ajax()) {
            return view('front.pagination.blog', compact('blogs'));
        }
        $tags = null;
        $tagz = '';
        $name = Blog::pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));

        return view('front.blog', compact('bcats', 'bcat', 'blogs', 'tags'));
    }

    public function blogtags(Request $request, $slug) {
        $bcat = BlogCategory::where('slug', '=', str_replace(' ', '-', $slug))->first();
        $blogs = Blog::where('tags', 'like', '%' . $slug . '%')->orderBy('id', 'DESC')->paginate(3);
        if ($request->ajax()) {
            return view('front.pagination.blog', compact('blogs'));
        }
        $bcats = BlogCategory::all();
        $tags = null;
        $tagz = '';
        $name = Blog::pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));

        return view('front.blog', compact('bcats', 'bcat', 'blogs', 'tags', 'slug'));
    }

    public function blogsearch(Request $request) {
        $search = $request->search;
        $blogs = Blog::where('title', 'like', '%' . $search . '%')->orWhere('details', 'like', '%' . $search . '%')->paginate(3);
        if ($request->ajax()) {
            return view('front.pagination.blog', compact('blogs'));
        }
        $bcats = BlogCategory::all();
        $tags = null;
        $tagz = '';
        $name = Blog::pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));
        return view('front.blog', compact('bcats', 'blogs', 'tags', 'search'));
    }

    public function blogshow($id) {
        $tags = null;
        $tagz = '';
        $bcats = BlogCategory::all();
        $blog = Blog::findOrFail($id);
        $blog->views = $blog->views + 1;
        $blog->update();
        $name = Blog::pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));

        $blog_meta_tag = $blog->meta_tag;
        $blog_meta_description = $blog->meta_description;
        return view('front.blogshow', compact('blog', 'bcats', 'tags', 'blog_meta_tag', 'blog_meta_description'));
    }

    // -------------------------------- BLOG SECTION ENDS----------------------------------------
}
