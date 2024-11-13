<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //-----------------------User Dashboard-----------------------------------
    
    public function loadUserDahsboard(){
        return view('ecommWebApp.users.userdashboard');
    }

// -------------------SellersDashboard----------------------    // 
    public function loadSellersDahsboard(){
        return view('ecommWebApp.sellersAdmin.sellersDashboard');
    }
    
    public function addProductsView(){
        return view('ecommWebApp.sellersAdmin.addProducts');
    }

    public function addProducts(Request $request){
   
            try {
                // Validation rules
                $rules = [
                    'product_category' => 'required|string',
                    'product_name' => 'required|string',
                    'product_price' => 'required|numeric',
                    'product_quantity' => 'required|integer',
                    'product_description' => 'required|string',
                    'product_keywords' => 'required|string',
                    'brand' => 'nullable|string',
                    'variations' => 'nullable|string',
                    'internal_Notes' => 'nullable|string',
                ];
    
                // Optionally, add rules for images
                if ($request->hasFile('product_image1')) {
                    $rules['product_image1'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
                }
                if ($request->hasFile('product_image2')) {
                    $rules['product_image2'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
                }
    
                // Perform validation
                $validator = Validator::make($request->all(), $rules);
    
                // Check if validation fails
                if ($validator->fails()) {
                    return response()->json(['error' => $validator->errors()], 400);
                }
    
                // Create product
                $productData = [
                    'product_category' => $request->input('product_category'),
                    'product_name' => $request->input('product_name'),
                    'product_price' => $request->input('product_price'),
                    'product_quantity' => $request->input('product_quantity'),
                    'product_description' => $request->input('product_description'),
                    'product_keywords' => $request->input('product_keywords'),
                    'brand' => $request->input('brand'),
                    'variations' => $request->input('variations'),
                    'internal_Notes' => $request->input('internal_Notes'),
                ];
    
                // Handle optional images
                if ($request->hasFile('product_image1')) {
                    $productData['product_image1'] = $request->file('product_image1')->store('images');
                }
                if ($request->hasFile('product_image2')) {
                    $productData['product_image2'] = $request->file('product_image2')->store('images');
                }
    
                // Create product instance
                $product = Product::create($productData);
                
                // Return success response
                return response()->json(['message' => 'Product added successfully'], 200);
            } catch (\Exception $e) {
                // Handle exception
                return response()->json(['error' => 'Failed to add product. ' . $e->getMessage()], 500);
            }
        
       
    }


// ------------------------User Register------------------------------------------
public function userRegister(Request $request)
{       
    try {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users', // Keep 'remail' for validation
            'password' => 'string|required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email; 
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Your Registration has been successful');
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Registration failed. ' . $e->getMessage()]);
    }
}


    
// --------------------------User Login------------------------------------------------    
    public function loginload(){
        return view( 'login' );
    }

    public function userLogin(Request $request){
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);
    
        $userCredentials = $request->only('email', 'password');
        
        if(Auth::attempt($userCredentials)){
            $user = Auth::user();
            $request->session()->put('user',$user);
            if($user->role == 'SuperAdmin'){
                return view('Superadmin.sadminDash');
            } elseif($user->role == 'Admin'){
                return view('SellersAdmin.sellerDash');
            } else {
                // return view('ecommWebApp.userdashboard');
                return redirect('/user-dashboard');
            }
        } else {
            return back()->with('error', 'Invalid Username and Password');
        }
    }
    
// ----------------------------Logout-----------------------------------------------------
    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
