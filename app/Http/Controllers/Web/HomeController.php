<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Cart ;
//use App\Model\DepartmentProducts;
use App\Model\Products ;
use App\Model\ProductsGallary ;
use App\Model\ProductsColor ;
use App\Model\ProductsSize ;
use App\Model\ShoppingCart ;
use App\Model\Country ;
use App\Model\Order ;
use App\Model\DepartmentProducts as Dep;
use App\Model\ContactUs;
use Validator;
use Session;
use Auth;

class HomeController extends Controller
{

    public function index()
    {

        $allproducts = Products::orderBy('id','desc')->take(10)->get();
        $department = Dep::where('parent','=',0)->get();

        return view(app('f').'.home',['allproducts'=>$allproducts , 'department'=>$department]);
    }




    public function single($id)
    {
        $product  = Products::find($id);
        $department = Dep::where('id','=',$product->dep_id)->pluck('en_name');
        $similarProduct = Products::where('dep_id',$product->dep_id)->take(3)->orderBy('id','desc')->get();
        $ratedProduct = Products::where('dep_id',$product->dep_id)->get();
        $lastPosted = Products::take(5)->orderBy('id','desc')->get();
        return view(app('f').'.single_product',['title'=>trans('admin.single_product'),'department'=>$department,'product'=>$product , 'similarProduct'=>$similarProduct ,'ratedProduct'=>$ratedProduct,'lastPosted'=>$lastPosted]);
    }





    public function getAddToCart(Request $request, $id)
    {
        $product  = Products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product , $product->id);
        $adde = new ShoppingCart;
        $adde->user_id    = Auth::user()->id;
        $adde->product_id = $product->id;
        $adde->price = $product->price;
        $adde->save();
        $request->session()->put('cart', $cart);
        return back();
    }
    public function getCart()
    {
        if (!Session::has('cart')) {
            return view(app('f').'.shopping-cart',['product'=>null]);
        }
        $oldCart =Session::get('cart') ;
        $cart = new Cart($oldCart);
        $product = ShoppingCart::where('user_id','=',Auth::user()->id)->get()->all();
        $total =  ShoppingCart::where('user_id','=',Auth::user()->id)->sum('price');



        return view(app('f').'.shopping-cart' , ['product'=>$product , 'total'=>$total]);
    }
    /**
     * Remove the specified item from shopping_cart.
     *

     */
    public function destroyitem($id) {
        $delete = ShoppingCart::find($id);
        $delete->delete();
        return back();

    }

     public function checkout()
   {
         $cities =  Country::where('parent','!=',null)->get()->all();
         $product  = ShoppingCart::where('user_id','=',Auth::user()->id)->get()->all();
         $total =  ShoppingCart::where('user_id','=',Auth::user()->id)->sum('price');

    public function checkout()
    {
        $cities =  Country::where('parent','!=',null)->get()->all();
        $product  = ShoppingCart::where('user_id','=',Auth::user()->id)->get()->all();
        $total =  ShoppingCart::where('user_id','=',Auth::user()->id)->sum('price');

        return view(app('f').'.checkout', ['product'=>$product , 'total'=>$total ,'cities'=>$cities]);
    }


 public function PlaceOrder(Request $request)
   {
    $total =  ShoppingCart::where('user_id','=',Auth::user()->id)->sum('price');
    $rules = [

    public function PlaceOrder(Request $request)
    {
        $rules = [

            'city' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',

            
        ];
   $Validator   = Validator::make($request->all(),$rules);


        ];
        $Validator   = Validator::make($request->all(),$rules);

        $Validator->SetAttributeNames ([
            'city' => trans('admin.city'),
            'name' => trans('admin.name'),
            'address' => trans('admin.address'),
            'email' => trans('admin.email'),
            'phone' => trans('admin.phone'),


        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $add = new Order;
            $add->user_id             = Auth::user()->id;
            $add->country_id          = $request->input('city');
            $add->name                = $request->input('name');
            $add->address             = $request->input('address');
            $add->email               = $request->input('email');
            $add->phone               = $request->input('phone');
            $add->price               = $total;
            $add->save();


 session()->flash('success',trans('admin.orderplaced'));
            }
                   return back();
      }

            $add->save();
            session()->flash('success',trans('admin.orderplaced'));
        }
        return back();
    }






    public function products()
    {
        $products=Products::paginate(12);
        return view('front.shop')->with('products',$products);
    }

    public function departments()
    {
        $departments=Dep::where('parent',0)->get();
//        return $departments;
//        die();
        return view('front.categories')->with('departments',$departments);
    }

    public function childDepartments(Request $request)
    {
        $data =Dep::where('parent','=',$request->id)->get();
//        return $data;
//        die();
        return response()->json($data);
    }

    public function contactus()
    {
        return view('front.contactus');
    }

    public function addContact(Request $request)
    {
        //  return
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);
        $contact = new ContactUs;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        return redirect('/contactus')->with('success','this message has been send');

    }


}
