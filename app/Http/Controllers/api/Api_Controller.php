<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\special_products\Mod_special_products;
use App\Models\products_categories\Mod_category;
use App\mymodels\product_model;
use Illuminate\Support\Facades\Auth;
use App\Models\shopping_cart\Mod_Shoppingcart;

use Validator;
use DB;
class Api_Controller extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')-> accessToken;
        $success['name'] =  $user->name;

$name=$input['name'];
$password=$input['password'];
     $registered_user = DB::table('users')
        ->select(DB::raw('select * form users'))
        ->where('name',$name)
        ->where('password',$password)
        ->get();
       // return response()->json(['success'=>$success], $this->successStatus);
           return response()->json(['message'=>'Successfull Registertion','status'=>'200','object'=>$registered_user]);
        }
    
    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */


    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this-> successStatus);
    }

    //kabeer
    public function signup (Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required',
        ]);
        if ($validator->passes()) {
            $newUser=new User;
            $newUser->fname=$request->input('fname');
            $newUser->lname=$request->input('lanme');
            $newUser->post_code=$request->input('postcode');

            $newUser->address=$request->input('address');
            $newUser->email=$request->input('email');
            $newUser->contact_no=$request->input('contact_no');
            $newUser->password=$request->input('password');
            $newUser->save();
            return response()->json(['message'=>'Successfull SignUp','status'=>'200','object'=>$newUser]);
        }
        else{
            return response()->json(['message'=>'Failed SignUp','status'=>'401']);
        }
    }

//kabeer
public function updateProfile(Request $request){
     $validator = Validator::make($request->all(), [
            'id'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'contact_no'=>'required',
            'post_code'=>'required',
            'address'=>'required'
        ]);
        if ($validator->passes()) {
            $user_id=$request->input('id');
            $updateableUser=User::findOrFail($user_id);
            $updateableUser->fname=$request->input('fname');
            $updateableUser->lname=$request->input('lname');
            $updateableUser->email=$request->input('email');
            $updateableUser->contact_no=$request->input('contact_no');
            $updateableUser->post_code=$request->input('post_code');
            $updateableUser->address=$request->input('address');
            $updateableUser->save();
            return response()->json(['message'=>'Profile Updated Successfully','status'=>'200','object'=>$updateableUser]);
        }
        else{
            return response()->json(['message'=>'Failed SignUp','status'=>'401']);
        }
}


public function listSpecialProducts($id){
 
    $special_product=Mod_special_products::all();
    if(count($special_product)>0){

        return response()->json(['message'=>'Successfull','status'=>'200','object'=>$special_product]);
    }
    else{
        return response()->json(['message'=>'Failed Query','status'=>'401']);
    }
}




public function listProductsByCategory($id){
    

          $category=  Mod_category::whereId($id)->first();

          if($category){

        $category_name=$category->category_name;
          $allproducts_by_category = DB::table('product_models')
          ->where('category', '=', $category_name)
          ->get();
         if(count($allproducts_by_category)>0){
            return response()->json(['message'=>'Successfull','status'=>'200','object'=>$allproducts_by_category]);
         }
         else{
              return response()->json(['message'=>'No Prodcuts For This Category','status'=>'401']);
          }

          }
          else{
              return response()->json(['message'=>'Failed Query','status'=>'401']);
          }
         

}


public function productDetail($id){
     $product=product_model::whereId($id)->first();


       if($product){
         return response()->json(['message'=>'Successfull','status'=>'200','object'=>$product]);
     
          }
          else{
              return response()->json(['message'=>'Failed Query','status'=>'401']);
          }
}

public function relatedProduct($id){
      $category=  Mod_category::whereId($id)->first();

          if($category){
        $category_name=$category->category_name;

          $allproducts_by_category = DB::table('product_models')
          ->where('category', '=', $category_name)
          ->get();
         if(count($allproducts_by_category)>0){
            return response()->json(['message'=>'Successfull','status'=>'200','object'=>$allproducts_by_category]);
         }
         else{
              return response()->json(['message'=>'No Prodcuts For This Category','status'=>'401']);
          }

          }
          else{
              return response()->json(['message'=>'Failed Query','status'=>'401']);
          }
}

public function addToCart(Request $request){

 $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'product_id' => 'required',
            'total_items' => 'required',
            'total_amount' => 'required',
            'address'=>'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        else{
$shoppingcart= new Mod_Shoppingcart;
$shoppingcart->user_id=$request->input('user_id');
$shoppingcart->product_id=$request->input('product_id');
$shoppingcart->total_items=$request->input('total_items');
$shoppingcart->total_amount=$request->input('total_amount');
$shoppingcart->address=$request->input('address');
$shoppingcart->status=$request->input('status');
$shoppingcart->save();
if($shoppingcart){
    return response()->json(['message'=>'Successfull','status'=>'200','object'=>$shoppingcart]); 
}
else{
   return response()->json(['message'=>'Failed Query','status'=>'401']); 
}


        }


}

    public function token(){
        echo csrf_token();
    }
}

