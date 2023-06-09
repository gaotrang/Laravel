<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/test', function(){
    $a = 'Nguyen Van Tét';
    return "<h1>Hello: $a</h1>";
});
/////////////-------------------------------------------------------------------------/////////
Route::get('user/index', function(){
    return "<h1>List User</h1>";
});

//Route + Controller + Action
Route::get('test/index', [TestController::class, 'index']);
Route::get('test/detail', [TestController::class, 'detail']);

//Route dynamic view
//muon gan gia tri dong thi them {} vai bien
// ? nghia la co cung dc || ko co cung dc
Route::get('test/detail/{id?}/{test?}', [TestController::class, 'show']);

//Route return view
Route::get('/', function(){
    return view('welcome');
});
//view se chi dinh ve thu muc resource
Route::get('list_user', function(){
    return view('user.list_user');
});

// Route::get('list_product_category', function(){
//     return view('admin.product.product_category.list_product_category');
// });
Route::get('list_product_category', [ProductCategoryController::class, 'index']);
Route::get('admin/list_product_category', [AdminProductCategoryController::class, 'index']);

Route::get('list_user_blade', function(){
    return view('user.list_user_blade');
} );


Route::get('list_user_blade',[ProductController::class, 'index']);

Route::get('home', function(){
    return view('client.pages.home');
})->name('home');
Route::get('blog', function(){
    return view('client.pages.blog');
} );
Route::get('contact', function(){
    return view('client.pages.contact');
} );
Route::get('shop-details', function(){
    return view('client.pages.shop-details');
} );
Route::get('shop-grid', function(){
    return view('client.pages.shop-grid');
} );
Route::get('shoping-cart', function(){
    return view('client.pages.shoping-cart');
} );
Route::get('check-out', function(){
    return view('client.pages.check-out');
} );
Route::get('blog-details', function(){
    return view('client.pages.blog-details');
} );

Route::get('admin', function(){
    return view('admin.layout.master');
} );

Route::get('admin/blog', function(){
    return view('admin.pages.blog');
} );

Route::get('admin/user', function(){
    return view('admin.pages.user');
} );
Route::get('admin/product', function(){
    return view('admin.pages.product');
}) ->name('admin.product');

Route::get('login', function(){
    return view('client.pages.login');
} );
Route::get('register', function(){
    return view('client.pages.register');
} );

Route::post('luunguoidung', [NguoiDungController::class, 'luuNguoiDung'])->name('nguoidung.dangki');
Route::post('dangnhap', [NguoiDungController::class, 'dangnhap'])->name('nguoidung.dangnhap');
