<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Cart ;
use App\User;
use App\Model\Products ;
use App\Model\ProductsGallary ;
use App\Model\ProductsColor ;
use App\Model\ProductsSize ;
use App\Model\AboutUs;
use App\Model\ShoppingCart ;
use App\Model\Country ;
use App\Model\Order ;
use App\Model\OrderItem ;
use App\Model\DepartmentProducts as Dep;
use App\Model\ContactUs;
use Validator;
use Session;
use Auth;

class HomeApi extends Controller
{

    public function index()
    {

        $allproducts = Products::orderBy('id','desc')->take(10)->get();
        $department = Dep::where('parent','=',0)->get();
return response(['status' => true,  'allproducts'=>$allproducts, 'department'=>$department]);
      
    }

    public function single($id)
    {
        $product  = Products::find($id);
        $department = Dep::where('id','=',$product->dep_id)->pluck('en_name');
        $similarProduct = Products::where('dep_id',$product->dep_id)->take(3)->orderBy('id','desc')->get();
        $ratedProduct = Products::where('dep_id',$product->dep_id)->get();
        $lastPosted = Products::take(5)->orderBy('id','desc')->get();
     
        return response(['status' => true,'title'=>trans('admin.single_product'),'department'=>$department,'product'=>$product , 'similarProduct'=>$similarProduct ,'ratedProduct'=>$ratedProduct,'lastPosted'=>$lastPosted]);
    }

    public function getAddToCart(Request $request, $id)
    {
        if (Auth::user() && Auth::user()->level == 'user') {
        $product  = Products::find($id);
        $adde = new ShoppingCart;
        $adde->user_id    = Auth::user()->id;
        $adde->product_id = $product->id;
        $adde->price = $product->price;
        $adde->vendor_id = $product->user_id;
        $adde->vendor_type = $product->user_type;
        $adde->save();
        }
   
        
        return back();
    }
    public function getCart()
    {
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

        return view(app('f').'.checkout', ['product'=>$product , 'total'=>$total ,'cities'=>$cities]);
    }

    public function PlaceOrder(Request $request)
    {

        $total =  ShoppingCart::where('user_id','=',Auth::user()->id)->sum('price');

        $rules = [
            'city' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric', 
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
            $add->level               = 'prepare';
            $add->code               = '#'.time().rand(11,00).$add->id;
            $add->price               = $total;
            $add->save();
            $lastid = $add->id;
            $product  = ShoppingCart::where('user_id','=',Auth::user()->id)->get()->all();
            foreach ($product as $item) {
                $addOrderItems = new OrderItem;
                $addOrderItems->order_id = $lastid;
                $addOrderItems->product_id = $item->product_id;
                $addOrderItems->item_price = $item->price;
                 $addOrderItems->vendor_id = $item->vendor_id;
                $addOrderItems->vendor_type = $item->vendor_type;
                $addOrderItems->save();
                $item->delete();
            }
            session()->flash('success', trans('admin.order_placed'));
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

    public function productDepartment(Request $request)
    {
        $data=Products::where('dep_id', $request->id)->get();
//        return view('front.prodcut_category')->with('products',$products);
        return response()->json($data);

    }
    public function singleProduct(Request $request)
    {
       // return "welcome";
        $data=url('/single_product/'.$request->id);
        return response()->json($data);
//        $product  = Products::find($request->id);
//        $department = Dep::where('id','=',$product->dep_id)->pluck('en_name');
//        $similarProduct = Products::where('dep_id',$product->dep_id)->take(3)->orderBy('id','desc')->get();
//        $ratedProduct = Products::where('dep_id',$product->dep_id)->get();
//        $lastPosted = Products::take(5)->orderBy('id','desc')->get();
//        return view(app('f').'.single_product',['title'=>trans('admin.single_product'),'department'=>$department,'product'=>$product , 'similarProduct'=>$similarProduct ,'ratedProduct'=>$ratedProduct,'lastPosted'=>$lastPosted]);
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

    public function aboutus ()
    {
        $about=AboutUs::find(1);
        return view('front.aboutus')->with('about',$about);
    }


public function categories ()
{
            $departments=Dep::where('parent',0)->get();
              responses( false, [],[$departments]);

}
public function countires()
{
    $countries= Country::where('parent','>',0)->get();
       response(responses( true,null,['countries'=>$countries]));
    
}
 public function cities()
{
    $cities= Country::where('parent','>','0')->get();
     return  response(responses( true,null,['cities'=>$cities]));
    
}

}
