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
use App\Models\Career;
use App\Models\Team;
use App\Models\Service;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Medicine;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductSubImage;
use Session;
use Mail;


class FrontendController extends Controller
{
    //all header function is here
    public function index()
    {
        $data['logo'] = Logo::first();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['contacts'] = Contact::first();
        $data['categorieses'] = Category::all();
        // $data['brands'] = Product::select('brand_id')->groupBy('brand_id')->get();
        // $data['products']=Product::orderBy('id','desc')->paginate(12);
        $data['products'] = Product::all();
        $data['newses'] = News::all();
        $data['careers'] = Career::all();
        $data['subCategories'] = SubCategory::all();
        return view('frontend.layouts.home', $data);
    }
    //__ ProductList function__ //
    public function ProductList()
    {
        $data['categorieses'] = Category::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['abouts'] = About::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['subCategories'] = SubCategory::all();
        // $data['contacts'] = Contact::first();
        // $data['brands'] = Product::select('brand_id')->groupBy('brand_id')->get();
        // $data['products']=Product::orderBy('id','desc')->paginate(12);
        $data['products'] = Product::all();
        $data['newses'] = News::all();
        return view('frontend.single-pages.product-list', $data);
    }
    //__ Category Wise Product function__ //
    public function CategoryWiseProduct($category_id)
    {
        $data['subCategories'] = SubCategory::all();
        $data['categorieses'] = Category::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['abouts'] = About::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['contacts'] = Contact::first();
        $data['newses'] = News::all();
        $data['brands'] = Product::select('brand_id')->groupBy('brand_id')->get();
        $data['products'] = Product::where('category_id', $category_id)->orderBy('id', 'desc')->get();
        return view('frontend.single-pages.category-wise-product', $data);
    }
    //__ Brand Wise Product function__ //
    public function BrandWiseProduct($brand_id)
    {
        $data['categorieses'] = Category::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['abouts'] = About::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['contacts'] = Contact::first();
        $data['brands'] = Product::select('brand_id')->groupBy('brand_id')->get();
        $data['products'] = Product::where('brand_id', $brand_id)->orderBy('id', 'desc')->get();
        $data['newses'] = News::all();
        return view('frontend.single-pages.brand-wise-product', $data);
    }

    //__ Shopping Cart function__ //
    public function ShoppingCart()
    {
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['abouts'] = About::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['contacts'] = Contact::first();
        $data['newses'] = News::all();
        return view('frontend.single-pages.shopping-cart', $data);
    }
    //__ About Us function__ //
    public function AboutUs()
    {
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contacts'] = Contact::first();
        $data['newses'] = News::all();
        return view('frontend.single-pages.about-us', $data);
    }
    //__ Our Team function__ //
    public function OurTeam()
    {

        $data['teams'] = Team::all();
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contacts'] = Contact::first();
        $data['newses'] = News::all();
        return view('frontend.single-pages.team', $data);
    }
    //__ Team member description function__ //
    public function TeamMemberDescription($slug)
    {
        $team_id = Team::where('slug',$slug)->first();
        $data['teams'] = Team::where('id',$team_id->id)->get();
        // $data['teams'] = Team::where('slug', $slug)->get();
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contacts'] = Contact::first();
        $data['newses'] = News::all();
        return view('frontend.single-pages.team-member-desc', $data);
    }
    //__ News function__ //
    public function News()
    {
        $data['teams'] = Team::all();
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contacts'] = Contact::first();
        $data['newses'] = News::all();
        return view('frontend.single-pages.news', $data);
    }

    //__ NewsDetails function__ //
    public function NewsDetails($slug)
    {
        $data['teams'] = Team::all();
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contacts'] = Contact::first();
        $data['newses'] = News::where('slug',$slug)->get();
        return view('frontend.single-pages.news-details', $data);
    }


    //__ Career function__ //
    public function Career()
    {  
        $data['teams'] = Team::all();
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contacts'] = Contact::first();
        $data['newses'] = News::all();
        return view('frontend.single-pages.career',$data);
    }
    //__ Contact Us function__ //
    public function ContactUs()
    {
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['abouts'] = About::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contacts'] = Contact::first();
        $data['newses'] = News::all();
        return view('frontend.single-pages.contact-us', $data);
    }
       //__ CategoryDetails Us function__ //
       public function CategoryDetails($slug)
       {
    
        $data['categorieses'] = Category::all();
        $data['careers'] = Career::all();
        $data['contacts'] = Contact::first();
        $category_id = Category::where('slug',$slug)->first();
        $data['categories_individual'] = Category::where('id',$category_id->id)->get();
        $data['subCategories'] = SubCategory::all();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['products'] = Product::all();
        $data['services'] = Service::all();
        $data['abouts'] = About::all();
        $data['logo'] = Logo::first();
        $data['newses'] = News::all();
        return view('frontend.single-pages.category-details', $data);
       }

    //__ Sub Category Details Function__ //
    public function SubCatDetails($slug)
    {
        $data['contacts'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::where('slug', $slug)->get();
        $data['newses'] = News::all();
        return view('frontend.single-pages.sub-cat-details', $data);
    }

    //__ Product Details function__ //
    public function AllProduct($id)
    {
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['contacts'] = Contact::first();
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['newses'] = News::all();
        $data['products'] = Product::where('sub_category_id', $id)->get();

        // $data['product_sub_images']=ProductSubImage::where('product_id',$data['product']->id)->get();
        // $data['product_colors']=ProductColor::where('product_id',$data['product']->id)->get();
        // $data['product_sizes']=ProductSize::where('product_id',$data['product']->id)->get();
        return view('frontend.single-pages.all-product', $data);
    }
        //__ MedicineFeed Details function__ //
    public function MedicineFeed()
    {
        $data['CompaniesBrandLogos'] = CompaniesBrandLogo::all();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['logo'] = Logo::first();
        $data['contacts'] = Contact::first();
        $data['categorieses'] = Category::all();
        $data['subCategories'] = SubCategory::all();
        $data['newses'] = News::all();
        $data['medicines'] = Medicine::all();
        return view('frontend.single-pages.medicine-fish-feed', $data);
    }
    

    //__ Store Contact Us function__ //
    public function ContactStore(Request $request)
    {
        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->phone = $request->phone;
        $contactUs->email = $request->email;
        $contactUs->product_name = $request->product_name;
        $contactUs->massage = $request->massage;
        $contactUs->save();
        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'product_name' => $request->product_name,
            'massage' => $request->massage
        );
 
        Mail::send('frontend.Email.email-contact',$data, function ($massage){
            $massage->from('jondo@gmail.com','S.N ADVANCE LIMITED');
            $massage->to('jondo@gmail.com');
            $massage->subject('Thank you so much for contact with us');
        });
        Session::flash('success', 'Massage Sent Successfully');
        return redirect()->back();
    }
    //__ User Email function for Contact Us__ //
    public function UserEmailView()
    {
        $mail['userEmail'] = ContactUs::orderBy('id', 'desc')->get();
        return view('frontend.Email.user-email-view', $mail);
    }
    //__ Contact Us Delete function__ //
    public function destroy($id)
    {
        $contactUs = ContactUs::find($id);
        $contactUs->delete();
        return redirect()->back();
    }
}
