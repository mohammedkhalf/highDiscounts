<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Cart;
use App\Model\Errors;
use App\Model\DepartmentProducts;
use App\Model\Products ;
use App\Model\ProductsGallary ;
use App\Model\ProductsColor ;
use App\Model\ProductsSize ;
use App\Model\AboutUs;
use App\Model\ShoppingCart ;
use App\Model\Country ;
use App\Model\Order ;
use App\Model\Wishlist ;
use App\Model\OrderItem ;
use App\Model\DepartmentProducts as Dep;
use App\Model\ContactUs;
use App\Model\SliderImage;
use Validator;
use Session;
use Auth;
class ProductsApi extends Controller
{
 public function slider ()
 {
     $slider = SliderImage::orderBy('id','desc')->get();
      return response(responses( true, null,['slider'=>$slider]));
 }
 
 public function categories ()
 {
    $parent_categories=Dep::where('parent',0)->get();
      return response(responses( true, null,['parent_categories'=>$parent_categories]));
 }

 public function subCategories($id)
 {
      $sub_categories=Dep::where('parent',$id)->get();
      return response(responses( true, null,['sub_categories'=>$sub_categories]));
 }
 
  public function productCategory($id)
 {
      $product_categories=Dep::find($id);
      return response(responses( true, null,['product_categories'=>$product_categories]));
 }
 
 public function products ($id)
 {
     $products=Products::where('dep_id',$id)->get();
     return response(responses( true, null,['products'=>$products]));
 }
 
  public function singleProducts ($id)
 {
     $single_product=Products::find($id);
      $department = Dep::where('id','=',$single_product->dep_id)->first();
      $gallary  = ProductsGallary::where('product_id','=',$id)->pluck('media')->filter();
      $size  = ProductsSize::where('product_id','=',$id)->pluck('size')->filter();
      $color  = ProductsColor::where('product_id','=',$id)->pluck('color')->filter();
       $relatedProduct = Products::where('dep_id',$single_product->dep_id)->get();
     return response(responses( true, null,['singleProduct'=>$single_product,'department_en_name'=>$department->en_name,'department_ar_name'=>$department->ar_name,'relatedProduct'=>$relatedProduct,'gallary'=>$gallary,'size'=>$size,'color'=>$color]));
 }
 
 public function brand ()
 {
     $brand= Dep::where('parent', '!=',0)->orderBy('id', 'asc')->take(20)->get();
      return response(responses( true, null,['sub_categories'=>$brand]));
 }
 
 public function latestProduct()
 { 
     $latest_product=Products::orderBy('id', 'desc')->take(5)->get();
     return response(responses( true, null,['products'=>$latest_product]));
 }
 
 public function onSale()
 {
     $on_sale=Products::all()->random(5);
     return response(responses( true, null,['products'=>$on_sale]));
 }
 
 public function featuredProduct()
 {
      $featured_product=Products::all()->random(5);
     return response(responses( true, null,['products'=>$featured_product]));
 }

 public function recommendedProduct()
 {
      $recommended_product=Products::all()->random(5);
     return response(responses( true, null,['products'=>$recommended_product]));
 }
 
 public function mostLiked()
 {
      $most_liked=Products::all()->random(5);
     return response(responses( true, null,['products'=>$most_liked]));
 }
 
  public function topRated()
 {
      $top_rated=Products::all()->random(5);
     return response(responses( true, null,['products'=>$top_rated]));
 }
 
  public function bestSeller()
 {
      $best_seller=Products::all()->random(5);
       return response(responses( true, null,['products'=>$best_seller]));
     
 }
 
 public function search (Request $request)
 {
         $product =  Products::Where('en_title', $request['nameSearch'])
                ->orWhere('en_title', 'like', '%' . $request['nameSearch'] . '%')
                ->orWhere('ar_title', $request['nameSearch'])
                ->orWhere('ar_title', 'like', '%' . $request['nameSearch'] . '%')
                ->get();
      
      return response(responses( true, null,['products'=>$product]));
 }
 
 public function addToCart(Request $request)
 {
        $product  = Products::find($request->product_id);
        $cart = new ShoppingCart;
        $cart->user_id    = $request->user_id;
        $cart->product_id = $product->id;
        $cart->price = $product->price;
        $cart->weight = $product->weight;
        $cart->vendor_id = $product->user_id;
        $cart->vendor_type = $product->user_type;
        $cart->save();
  $totalcount= ShoppingCart::where('user_id','=', $request->user_id)->count();
   if( $request->lang == "en"){
      return response(responses( true,["success"=>[trans('api.added')]],['count'=>$totalcount]));
   }else {
       return response(responses( true,["success"=>["تم اضافة البيانات بنجاح"]],['count'=>$totalcount]));
   }
    }
    
 public function getcart($id)
 {
         $cart = ShoppingCart::where('user_id','=',$id)->get();
         $totalprice =  ShoppingCart::where('user_id','=',$id)->sum('price');
         $totalweight =  number_format((ShoppingCart::where('user_id','=',$id)->sum('weight')),2);
         $totalcount= ShoppingCart::where('user_id','=',$id)->get()->count();
         return response(responses( true, null,['cart'=>$cart,'totalprice'=>$totalprice,'totalweight'=>$totalweight,'count'=>$totalcount]));
  }

    
 public function getcartcount($id)
 {
         $totalcount= ShoppingCart::where('user_id','=',$id)->get()->count();
         return response(responses( true, null,['count'=>$totalcount]));
  }

 public function destroyItemCart($id) 
 {
        $cart = ShoppingCart::find($id);
        if($cart !== null){
             $totalcount= ShoppingCart::where('user_id','=', $cart->user_id)->count();
             $cart->delete();
             return response(responses( true, ["success"=>[trans('api.deleted')]],['count'=>$totalcount]));
        }else{
             return response(responses( false, ["error"=>["something went Wrong"]],null));
        }
    }
    
 public function addToWishList(Request $request) 
 {
        $product  = Products::find($request->product_id);
        $wish = new Wishlist;
        $wish->user_id    = $request->user_id;
        $wish->product_id = $product->id;
        $wish->save();

        return response(responses( true,["success"=>[trans('api.added')]],null));
 }
 
 public function getWishList($id) 
 {
     $wishlist = Wishlist::where('user_id','=',$id)->get();
     return response(responses( true, null,['wishlist'=>$wishlist]));
 }
 
 public function destroyItemWishList($id)
 {
    
        $wishList = Wishlist::find($id);
        if($wishList !== null){
        $wishList->delete();
        return response(responses( true, ["success"=>[trans('api.deleted')]],null));
        }else{
            return response(responses( false, ["error"=>["something went Wrong"]],null));
        }
   
 }
 
 
 public function PlaceOrder(Request $request)
    {

        $rules = [
            'user_id'=>'required',
            'city' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ];
        $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'user_id'=>'user id is required',
            'city' => trans('admin.city'),
            'name' => trans('admin.name'),
            'address' => trans('admin.address'),
            'email' => trans('admin.email'),
            'phone' => trans('admin.phone'),
        ]);
        if($Validator->fails())
        {
            return response(['status' => false, 'messages' =>$Validator->messages(),'data'=>null ]);
        }else{
            
        $total =  ShoppingCart::where('user_id','=',$request->user_id)->sum('price');
        
        $shipping = Country::where('id','=',$request->input('city'))->sum('shipping');
        
        $subtotal = $shipping + $total;
       
        $totalweight =  ShoppingCart::where('user_id','=',$request->user_id)->sum('weight');
        
         $product  = ShoppingCart::where('user_id','=',$request->user_id)->get()->all();
            
            if($product== null)
            {    return response(responses( false, ["error"=>[trans('admin.empty_cart')]],null));
             
            }
            else
            {
                
            $add = new Order;
            $add->user_id             = $request->user_id;
            $add->country_id          = $request->input('city');
            $add->name                = $request->input('name');
            $add->address             = $request->input('address');
            $add->email               = $request->input('email');
            $add->phone               = $request->input('phone');
            $add->level               = 'prepare';
            $add->code               = '#'.time().rand(11,00).$add->id;
            if ($totalweight > 1){
            for ($i=1 ; $i<=$totalweight ; $i++) {
            $subtotal = $subtotal + 50;
                 }
            }
            $add->price               = $subtotal;
            $add->seen               = 0;
            $add->save();

            $lastid = $add->id;
                
                foreach ($product as $item) {
                $addOrderItems = new OrderItem;
                $addOrderItems->order_id = $lastid;
                $addOrderItems->product_id = $item->product_id;
                $addOrderItems->item_price = $item->price;
                $addOrderItems->vendor_id = $item->vendor_id;
                $addOrderItems->vendor_type = $item->vendor_type;
                $addOrderItems->save();
                 ShoppingCart::where('id',$item->id)->delete();
                // $item->delete();
            }
           return response(responses( true, ["success"=>[trans('admin.order_placed')]],null));
            }
            
 
        }
       
    }
    
  public function myOrders($id)
    {
        $order = Order::where('user_id','=',$id)->get();
       return response(responses( true,null,['Order'=>$order]));
        
    }
     public function myOrdersItems($id)
    {
        
        
        $orders_item=OrderItem::where('order_id','=',$id)->get();
       return response(responses( true,null,['orders_item'=>$orders_item]));
        
    }

     public function track(Request $request)
    {
            $rules = [
            'code' => 'required',
            'email' => 'required',
            ];
        $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'code' => trans('admin.code'),
            'email' => trans('admin.email'),
         
        ]);
        if($Validator->fails())
        {
          return response(['status' => false, 'messages' =>$Validator->messages(),'data'=>null ]);
        }
        else{
        $order = Order::where([['code','=',$request->input('code')],['email','=',$request->input('email')]])->first();
        
         $orderItem  = OrderItem::where('order_id','=',$order->id)->get();
      
     return response(responses( true, ['order'=>$order,'orders_item'=>$orderItem],null));
       
    }
    }
  public function handle(Request $request)
    {
        $add = new Errors;
      $add->message             = $request->message;
      $add->save();  
      return response(responses( true, ["success"=>[trans('admin.added')]],null));
}
 
 
}
