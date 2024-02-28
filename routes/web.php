<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\FloriographyComponent;
use App\Http\Livewire\FloriographyDetailsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserEditProfileComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\OccasionComponent;
use App\Http\Livewire\FlowerComponent;
use App\Http\Livewire\HeaderSearchComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminOccasionComponent;
use App\Http\Livewire\Admin\AdminFlowerComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddOccasionComponent;
use App\Http\Livewire\Admin\AdminAddFlowerComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditOccasionComponent;
use App\Http\Livewire\Admin\AdminEditFlowerComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\AdminHomeOccasionComponent;
use App\Http\Livewire\Admin\AdminHomeFlowerComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminSettingComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminViewUserComponent;
use App\Http\Livewire\Admin\AdminViewUserDetailsComponent;
use App\Http\Livewire\Admin\AdminFloriographyComponent;
use App\Http\Livewire\Admin\AdminAddFloriographyComponent;
use App\Http\Livewire\Admin\AdminEditFloriographyComponent;
use App\Http\Livewire\Admin\AdminEditFloriographyComponent2;
use App\Http\Livewire\Admin\AdminProfileComponent;
use App\Http\Livewire\Admin\AdminEditProfileComponent;



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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomeComponent::class);
Route::get('/generate-inv', [InvoiceController::class, 'generatePDF']);
Route::get('/download-pdf', [InvoiceController::class, 'downloadPDF']);

Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}',CategoryComponent::class)->name('product.category');
Route::get('/product-occasion/{occasion_slug}',OccasionComponent::class)->name('product.occasion');
Route::get('/product-flower/{flower_slug}',FlowerComponent::class)->name('product.flower');

Route::get('/search', SearchComponent::class)->name('product.search');
Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');
Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');
Route::get('/contactus', ContactComponent::class)->name('contactus');
Route::get('/aboutus', AboutUsComponent::class)->name('aboutus');

Route::get('/floriography', FloriographyComponent::class)->name('all.floriography');
Route::get('/floriography/{slug}', FloriographyDetailsComponent::class)->name('floriography.details');



//For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/orders', UserOrdersComponent::class)->name('user.orders');
    Route::get('/user/orders/{order_id}', UserOrderDetailsComponent::class)->name('user.orderdetails');
    Route::get('/user/change-password', UserChangePasswordComponent::class)->name('user.changepassword');
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    Route::get('/user/profile/edit', UserEditProfileComponent::class)->name('user.editprofile');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/profile', AdminProfileComponent::class)->name('admin.profile');
    Route::get('/admin/profile/edit', AdminEditProfileComponent::class)->name('admin.editprofile');

    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/occasions', AdminOccasionComponent::class)->name('admin.occasions');
    Route::get('/admin/flowers', AdminFlowerComponent::class)->name('admin.flowers');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/occasion/add', AdminAddOccasionComponent::class)->name('admin.addoccasion');
    Route::get('/admin/flower/add', AdminAddFlowerComponent::class)->name('admin.addflower');
    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/occasion/edit/{occasion_slug}', AdminEditOccasionComponent::class)->name('admin.editoccasion');
    Route::get('/admin/flower/edit/{flower_slug}', AdminEditFlowerComponent::class)->name('admin.editflower');

    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');

    Route::get('/admin/floriography', AdminFloriographyComponent::class)->name('admin.floriography');
    Route::get('/admin/floriography/add', AdminAddFloriographyComponent::class)->name('admin.addfloriography');
    // Route::get('/admin/floriography/edit/{floriography_id}', AdminEditFloriographyComponent::class)->name('admin.editfloriography');
    Route::get('/admin/floriography/edit/{floriography_slug}', AdminEditFloriographyComponent2::class)->name('admin.editfloriography2');

    Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}', AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

    Route::get('/admin/home-categories', AdminHomeCategoryComponent::class)->name('admin.homecategories');
    Route::get('/admin/home-occasions', AdminHomeOccasionComponent::class)->name('admin.homeoccasions');
    Route::get('/admin/home-flowers', AdminHomeFlowerComponent::class)->name('admin.homeflowers');

    Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
    Route::get('/admin/coupon/add', AdminAddCouponComponent::class)->name('admin.addcoupon');
    Route::get('/admin/coupon/edit/{coupon_id}', AdminEditCouponComponent::class)->name('admin.editcoupon');

    Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}', AdminOrderDetailsComponent::class)->name('admin.orderdetails');

    Route::get('/admin/settings', AdminSettingComponent::class)->name('admin.settings');
    Route::get('/admin/contact-us', AdminContactComponent::class)->name('admin.contact');

    Route::get('/admin/viewusers', AdminViewUserComponent::class)->name('admin.viewusers');
    Route::get('/admin/viewusers/{user_id}', AdminViewUserDetailsComponent::class)->name('admin.viewuserdetails');
});

