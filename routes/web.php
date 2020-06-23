<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('test',function (){
// return "Hello World";
// });
// Route::get('index', function () {
//     return view('index');
// });

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::group(['prefix' => '/'], function () {
    Route::get('index','front\indexController@index')->name('index');
    Route::get('category','front\indexController@category')->name('category');
    Route::get('collection','front\indexController@collection')->name('collection');
    Route::get('product','front\indexController@product')->name('product');
     });



########################### admin Route ##########################
Route::group(['prefix' => 'admin' ], function () {

    Route::get('login',function(){
        return view('admin.login');
        });

    Route::get('index','backEnd\indexController@index')->middleware('isAdmin');

    Route::get('register',function(){
        return view('admin.register');
        });

    Route::get('forget',function(){
        return view('admin.forget');
        });
    Route::get('cards',function(){
        return view('admin.cards');
        });
    Route::get('tables',function(){
        return view('admin.tables');
        });
    Route::get('404',function(){
        return view('admin.404');
        });
    Route::get('blank',function(){
        return view('admin.blank');
        });

    Route::get('charts',function(){
        return view('admin.charts');
        });
    Route::get('animation',function(){
        return view('admin.utilities-animation');
        });
    Route::get('border',function(){
            return view('admin.border');
        });
// ############# categories route
    Route::get('categories','backEnd\CategoryController@categories'); //show category

    Route::any('categories/save','backEnd\CategoryController@save'); //category save

    Route::any('categories/delete/{categories_id}','backEnd\CategoryController@delete'); //category delete

    Route::any('categories/categoryEdit/{categories_id}','backEnd\CategoryController@edit'); //category edit

    Route::any('categories/update/{categories_id}','backEnd\CategoryController@update')->name('admin.categories.update'); //category update
// ############# End categories route


        /*  members route  */
    Route::get('members', 'backEnd\membersController@index'); // show member page
    Route::get('members/edit/{member_id}', 'backEnd\membersController@edit')->name('admin.members.edit'); // edit member
    Route::post('members/update/{member_id}', 'backEnd\membersController@update')->name('admin.members.update'); // update member
    Route::any('members/delete/{member_id}', 'backEnd\membersController@delete')->name('admin.members.delete'); // Delete member
    Route::any('other',function(){
        return view('admin.other');
        });

        /* End   members route  */

        ############## moderators route #########
        Route::get('moderators', 'backEnd\moderatorsController@index');
        Route::get('moderators/edit/{moderator_id}', 'backEnd\moderatorsController@edit')->name('admin.moderators.edit'); // edit modertors
       Route::post('moderators/update/{moderator_id}', 'backEnd\moderatorsController@update')->name('admin.moderators.update'); // update modertors
       Route::any('moderators/delete/{moderator_id}', 'backEnd\moderatorsController@delete')->name('admin.moderators.delete'); // Delete modertors
        ############## End moderators route #########

});
########################### End  admin Routes ##########################
Route::get("admin/test","backEnd\CategoryController@index");
