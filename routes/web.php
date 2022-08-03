<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ColorController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CountDownTimerController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\CompaniesBrandLogoController;
use App\Http\Controllers\Backend\MedicineFishFeedController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SizeController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//__frontend page routes start from here__//
Route::get('/',[FrontendController::class,'index']);
Route::get('/about-us',[FrontendController::class,'AboutUs'])->name('about.us');
Route::get('/contact-us',[FrontendController::class,'contactUs'])->name('contact.us');
Route::get('/our-team',[FrontendController::class,'OurTeam'])->name('our.team');
Route::get('/news',[FrontendController::class,'News'])->name('news');
Route::get('/news/details/{slug}',[FrontendController::class,'NewsDetails'])->name('news.details');
Route::get('/career',[FrontendController::class,'Career'])->name('career');
Route::get('/team-member-description/{slug}',[FrontendController::class,'TeamMemberDescription'])->name('team.member.description');
Route::get('/category-details/{slug}',[FrontendController::class,'CategoryDetails'])->name('category.details');
Route::get('/sub-cat-details/{slug}',[FrontendController::class,'SubCatDetails'])->name('sub.cat.details');
Route::get('/medicine-feed',[FrontendController::class,'MedicineFeed'])->name('medicine.feed');
Route::get('/category',[FrontendController::class,'']);
Route::post('/contact-store',[FrontendController::class,'ContactStore'])->name('contact.store');
Route::get('/shopping-cart',[FrontendController::class,'ShoppingCart'])->name('shopping.cart');
// Route::get('/product-list',[FrontendController::class,'ProductList'])->name('product.list');
//shopping cart routes
Route::get('/product-details/{slug}',[CartController::class,'ProductDetails'])->name('product-details');
Route::post('/add-to-cart',[CartController::class,'AddToCart'])->name('add.to.cart');
Route::get('/show-cart',[CartController::class,'ShowCart'])->name('show.cart');
// Route::get('/product-category/{category_id}',[FrontendController::class,'CategoryWiseProduct'])->name('category.wise.product');
// Route::get('/product-brand/{category_id}',[FrontendController::class,'BrandWiseProduct'])->name('brand.wise.product');
Route::get('/product/{id}',[FrontendController::class,'AllProduct'])->name('all.product');

//__frontend page routes end from here__//

//__backend page routes start from here__//
Route::group(['middleware' => ['test']], function () {
Route::prefix('users')->group(function () {
Route::get('/all',[UserController::class,'index'])->name('users.all');
Route::get('/create',[UserController::class,'create'])->name('users.create');
Route::post('/store',[UserController::class,'store'])->name('users.store');
Route::get('/edit/{id}',[UserController::class,'edit'])->name('users.edit');
Route::post('/update/{id}',[UserController::class,'update'])->name('users.update');
Route::get('/destroy/{id}',[UserController::class,'destroy'])->name('users.destroy');

});

// Profile Routes start from here
Route::prefix('profile')->group(function () {
Route::get('/user',[UserController::class,'index'])->name('profile.user');
Route::post('/store',[UserController::class,'store'])->name('profile.store');
Route::get('/edit',[UserController::class,'edit'])->name('profile.edit');
Route::post('/update',[UserController::class,'update'])->name('profile.update');
Route::get('/change-password',[ProfileController::class,'ChangePassword'])->name('change.password');
Route::post('/update-password',[ProfileController::class,'UpdatePassword'])->name('update.password');
});

//Count Down Timers routes start from here__//
Route::prefix('timers')->group(function () {
Route::get('/view',[CountDownTimerController::class,'index'])->name('timers.view');
Route::get('/create',[CountDownTimerController::class,'create'])->name('timers.create');
Route::post('/store',[CountDownTimerController::class,'store'])->name('timers.store');
Route::get('/edit/{id}',[CountDownTimerController::class,'edit'])->name('timers.edit');
Route::post('/update/{id}',[CountDownTimerController::class,'update'])->name('timers.update');
Route::get('/destroy/{id}',[CountDownTimerController::class,'destroy'])->name('timers.destroy');
});



//Logo routes start from here
Route::prefix('logos')->group(function () {
Route::get('/view',[LogoController::class,'index'])->name('logos.view');
Route::get('/create',[LogoController::class,'create'])->name('logos.create');
Route::post('/store',[LogoController::class,'store'])->name('logos.store');
Route::get('/edit/{id}',[LogoController::class,'edit'])->name('logos.edit');
Route::post('/update/{id}',[LogoController::class,'update'])->name('logos.update');
Route::get('/destroy/{id}',[LogoController::class,'destroy'])->name('logos.destroy');
//this routes for different type of companies brands logo
Route::get('/brand/logo/view',[CompaniesBrandLogoController::class,'index'])->name('companies.logo.view');
Route::get('/brand/logo/create',[CompaniesBrandLogoController::class,'create'])->name('companies.logo.create');
Route::post('/brand/logo/store',[CompaniesBrandLogoController::class,'store'])->name('companies.logo.store');
Route::get('/brand/logo/edit/{id}',[CompaniesBrandLogoController::class,'edit'])->name('companies.logo.edit');
Route::post('/brand/logo/update/{id}',[CompaniesBrandLogoController::class,'update'])->name('companies.logo.update');
Route::get('/brand/logo/destroy/{id}',[CompaniesBrandLogoController::class,'destroy'])->name('companies.logo.destroy');
});

//sliders routes start from here
Route::prefix('sliders')->group(function () {
Route::get('/view',[SliderController::class,'index'])->name('sliders.view');
Route::get('/create',[SliderController::class,'create'])->name('sliders.create');
Route::post('/store',[SliderController::class,'store'])->name('sliders.store');
Route::get('/edit/{id}',[SliderController::class,'edit'])->name('sliders.edit');
Route::post('/update/{id}',[SliderController::class,'update'])->name('sliders.update');
Route::get('/destroy/{id}',[SliderController::class,'destroy'])->name('sliders.destroy');
});


//contacts routes start from here
Route::prefix('contacts')->group(function () {
Route::get('/view',[ContactController::class,'index'])->name('contacts.view');
Route::get('/create',[ContactController::class,'create'])->name('contacts.create');
Route::post('/store',[ContactController::class,'store'])->name('contacts.store');
Route::get('/edit/{id}',[ContactController::class,'edit'])->name('contacts.edit');
Route::post('/update/{id}',[ContactController::class,'update'])->name('contacts.update');
Route::get('/destroy/{id}',[ContactController::class,'destroy'])->name('contacts.destroy');
});

//__ about routes start from here __//
Route::prefix('about')->group(function () {
Route::get('/view',[AboutController::class,'index'])->name('about.view');
Route::get('/create',[AboutController::class,'create'])->name('about.create');
Route::post('/store',[AboutController::class,'store'])->name('about.store');
Route::get('/edit/{id}',[AboutController::class,'edit'])->name('about.edit');
Route::post('/update/{id}',[AboutController::class,'update'])->name('about.update');
Route::get('/destroy/{id}',[AboutController::class,'destroy'])->name('about.destroy');
//__ Team routes start from here __//
Route::get('team/view',[TeamController::class,'index'])->name('about.team.view');
Route::get('team/create',[TeamController::class,'create'])->name('about.team.create');
Route::post('team/store',[TeamController::class,'store'])->name('about.team.store');
Route::get('team/edit/{id}',[TeamController::class,'edit'])->name('about.team.edit');
Route::post('team/update/{id}',[TeamController::class,'update'])->name('about.team.update');
Route::get('team/destroy/{id}',[TeamController::class,'destroy'])->name('about.team.destroy');
//__ News routes start from here __//
Route::get('news/view',[NewsController::class,'index'])->name('about.news.view');
Route::get('news/create',[NewsController::class,'create'])->name('about.news.create');
Route::post('news/store',[NewsController::class,'store'])->name('about.news.store');
Route::get('news/pdf/{id}',[NewsController::class,'viewPdf'])->name('about.news.pdf');
Route::get('news/edit/{id}',[NewsController::class,'edit'])->name('about.news.edit');
Route::post('news/update/{id}',[NewsController::class,'update'])->name('about.news.update');
Route::get('news/destroy/{id}',[NewsController::class,'destroy'])->name('about.news.destroy');
//__ Career routes start from here __//
Route::get('career/view',[CareerController::class,'index'])->name('about.career.view');
Route::get('career/create',[CareerController::class,'create'])->name('about.career.create');
Route::post('career/store',[CareerController::class,'store'])->name('about.career.store');
Route::get('career/pdf/{id}',[CareerController::class,'viewPdf'])->name('about.career.pdf');
Route::get('career/edit/{id}',[CareerController::class,'edit'])->name('about.career.edit');
Route::post('career/update/{id}',[CareerController::class,'update'])->name('about.career.update');
Route::get('career/destroy/{id}',[CareerController::class,'destroy'])->name('about.career.destroy');
});
//__ Services Management start __//

Route::prefix('services')->group(function () {
//__ service one routes __//
Route::get('/service/view',[ServiceController::class,'index'])->name('services.view');
Route::get('/service/create',[ServiceController::class,'create'])->name('services.create');
Route::post('/service/store',[ServiceController::class,'store'])->name('services.store');
Route::get('/service/edit/{id}',[ServiceController::class,'edit'])->name('services.edit');
Route::post('/service/update/{id}',[ServiceController::class,'update'])->name('services.update');
Route::get('/service/destroy/{id}',[ServiceController::class,'destroy'])->name('services.destroy');
});
//__Services Management route end__//
//category routes start from here__//
Route::prefix('categories')->group(function () {
Route::get('/view',[CategoryController::class,'index'])->name('categories.view');
Route::get('/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/store',[CategoryController::class,'store'])->name('categories.store');
Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::post('/update/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::get('/destroy/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');
//sub-category routes start from here__//
Route::get('/sub/view',[SubCategoryController::class,'index'])->name('sub.categories.view');
Route::get("/sub/get", [SubCategoryController::class, 'get_sub_cat'])->name('single.subcategory');
Route::get('/sub/create',[SubCategoryController::class,'create'])->name('sub.categories.create');
Route::post('/sub/store',[SubCategoryController::class,'store'])->name('sub.categories.store');
Route::get('/sub/edit/{id}',[SubCategoryController::class,'edit'])->name('sub.categories.edit');
Route::post('/sub/update/{id}',[SubCategoryController::class,'update'])->name('sub.categories.update');
Route::get('/sub/destroy/{id}',[SubCategoryController::class,'destroy'])->name('sub.categories.destroy');
});
//Brand routes start from here__//
Route::prefix('brands')->group(function () {
Route::get('/view',[BrandController::class,'index'])->name('brands.view');
Route::get('/create',[BrandController::class,'create'])->name('brands.create');
Route::post('/store',[BrandController::class,'store'])->name('brands.store');
Route::get('/edit/{id}',[BrandController::class,'edit'])->name('brands.edit');
Route::post('/update/{id}',[BrandController::class,'update'])->name('brands.update');
Route::get('/destroy/{id}',[BrandController::class,'destroy'])->name('brands.destroy');
});
//Color routes start from here__//
Route::prefix('colors')->group(function () {
Route::get('/view',[ColorController::class,'index'])->name('colors.view');
Route::get('/create',[ColorController::class,'create'])->name('colors.create');
Route::post('/store',[ColorController::class,'store'])->name('colors.store');
Route::get('/edit/{id}',[ColorController::class,'edit'])->name('colors.edit');
Route::post('/update/{id}',[ColorController::class,'update'])->name('colors.update');
Route::get('/destroy/{id}',[ColorController::class,'destroy'])->name('colors.destroy');
});
//Size routes start from here__//
Route::prefix('sizes')->group(function () {
Route::get('/view',[SizeController::class,'index'])->name('sizes.view');
Route::get('/create',[SizeController::class,'create'])->name('sizes.create');
Route::post('/store',[SizeController::class,'store'])->name('sizes.store');
Route::get('/edit/{id}',[SizeController::class,'edit'])->name('sizes.edit');
Route::post('/update/{id}',[SizeController::class,'update'])->name('sizes.update');
Route::get('/destroy/{id}',[SizeController::class,'destroy'])->name('sizes.destroy');
});
//product routes start from here__//
Route::prefix('products')->group(function () {
Route::get('/view',[ProductController::class,'index'])->name('products.view');
Route::get('/create',[ProductController::class,'create'])->name('products.create');
Route::post('/store',[ProductController::class,'store'])->name('products.store');
Route::get('/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::get('/details/{slug}',[ProductController::class,'details'])->name('products.details.info');
Route::post('/updated/{id}',[ProductController::class,'update'])->name('products.update');
Route::get('/destroy/{id}',[ProductController::class,'destroy'])->name('products.destroy');
//medicine and fish feed routes
Route::get('/medicine/view',[MedicineFishFeedController::class,'index'])->name('products.medicine.view');
Route::get('/medicine/create',[MedicineFishFeedController::class,'create'])->name('products.medicine.create');
Route::post('/medicine/store',[MedicineFishFeedController::class,'store'])->name('products.medicine.store');
Route::get('/medicine/edit/{id}',[MedicineFishFeedController::class,'edit'])->name('products.medicine.edit');
Route::post('/medicine/updated/{id}',[MedicineFishFeedController::class,'update'])->name('products.medicine.update');
Route::get('/medicine/destroy/{id}',[MedicineFishFeedController::class,'destroy'])->name('products.medicine.destroy');


});

//User Email route for admin panel
Route::prefix('email')->group(function () {
Route::get('user-email.view',[FrontendController::class,'UserEmailView'])->name('user-email.view');
Route::get('/user-email.destroy/{id}',[FrontendController::class,'destroy'])->name('user-email.destroy');
});
});
// group middleware End here
