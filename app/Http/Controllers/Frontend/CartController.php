<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\CompaniesBrandLogo;
use App\Models\Slider;
use App\Models\About;
use App\Models\Service;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductSubImage;
use Session;
use Mail;
use Cart;

class CartController extends Controller
{

    //__  Shopping Cart function __//
    public function AddToCart(Request $request){

    }
    //__ Product Details function __//
    public function ProductDetails($slug){
        $data['categorieses']= Category::all();
        $data['CompaniesBrandLogos']=CompaniesBrandLogo::all();
        $data['products']=Product::where('slug',$slug)->get();
        $data['services']= Service::all();
        $data['abouts']=About::all();
        $data['services']= Service::all();
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contacts']=Contact::first();
        return view('frontend.single-pages.product-details',$data);
    }
    //__ About Us function__ //
    public function ShowCart()
    {
        $data['categorieses']= Category::all();
        $data['CompaniesBrandLogos']=CompaniesBrandLogo::all();
        $data['products']=Product::all();
        $data['services']= Service::all();
        $data['abouts']=About::all();
        $data['services']= Service::all();
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contacts']=Contact::first();
        return view('frontend.single-pages.about-us',$data);
    }


    public function destroy($id)
    {
        $contactUs=ContactUs::find($id);
        $contactUs->delete();
        return redirect()->back();

    }


}
