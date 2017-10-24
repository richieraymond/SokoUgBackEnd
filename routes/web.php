<?php
use App\Region;
use App\District;
use App\Admin;
use Illuminate\Support\Facades\Input;
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
    return view('home');
})->middleware('auth');
Route::resource('shop','Shop');
Route::resource('sokologin', 'CustomerLogin');
Route::resource('categories', 'CategoryController')->middleware('auth');
Route::resource('subcategories', 'SubcategoryController')->middleware('auth');
Route::resource('products', 'ProductController');
Route::resource('customer','CustomerController');
Route::post('/api/category/{id}', 'PageController@getSubcategory');
Route::resource('companies','CompanyController')->middleware('auth');
Route::resource('admins','RegisterAdmin')->middleware('auth');
Route::post('storecompany','CompanyController@store')->middleware('auth')->name('storecompany');
Auth::routes();
Route::post('retrievelcations','RetrieveLocations@retrieveCountry')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('countries','Countries')->middleware('auth');
Route::resource('regions','RegionsController')->middleware('auth');
Route::resource('districts','DistrictsController')->middleware('auth');
Route::resource('promotions','PromotionPackageController')->middleware('auth');
Route::resource('profile/','userProfile')->middleware('auth');
Route::get('/ajax-region',function(){
    $country_id=Input::get('country_id');
    $regions=Region::where('country_id','=',$country_id)->get();
    return Response::json($regions);
});
Route::resource('towns','TownsController')->middleware('auth');
Route::get('/ajax-district',function(){
    $region_id=Input::get('region_id');
    $districts=District::where('region_id','=',$region_id)->get();
    return Response::json($districts);
});
Route::get('deactivate/',function(){
     $uid=Input::get('xzvf');
     $user = Admin::find($uid);
     $user->status=false;
     $user->save();
     return redirect('admins/');
})->middleware('auth');
Route::get('activate/',function(){
     $uid=Input::get('xzvfx');
     $user = Admin::find($uid);
     $user->status=true;
     $user->save();
     return redirect('admins/');
})->middleware('auth');


