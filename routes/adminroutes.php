<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route ;

  ########################### admin Route ##########################
  Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin' ], function () {
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
        Route::any('other',function(){
            return view('admin.other');
            });



Route::namespace('backEnd')->group(function(){  // backEnd Controller
    Route::get('index','indexController@index');  // index dashboard
    Route::get('login','Auth\loginController@index')->withoutMiddleware('isAdmin');
            // ############# categories route
        Route::get('categories','Category\CategoryController@categories'); //show category
        Route::post('categories/save','Category\CategoryController@save'); //category save
        Route::any('categories/delete/{categories_id}','Category\CategoryController@delete'); //category delete
        Route::get('categories/categoryEdit/{categories_id}','Category\CategoryController@edit'); //category edit
        Route::any('categories/update/{categories_id}','Category\CategoryController@update')->name('admin.categories.update'); //category update
             ############# End categories route
           ############  members route ######################

        Route::get('members', 'members\membersController@index'); // show member page
        Route::get('members/edit/{member_id}', 'members\membersController@edit')->name('admin.members.edit'); // edit member
        Route::post('members/update/{member_id}', 'members\membersController@update')->name('admin.members.update'); // update member
        Route::any('members/delete/{member_id}', 'members\membersController@delete')->name('admin.members.delete'); // Delete member

            /* ############ End members route ######################  */
            ############## moderators route #########
            Route::get('moderators', 'moderator\moderatorsController@index');
            Route::get('moderators/edit/{moderator_id}', 'moderator\moderatorsController@edit')->name('admin.moderators.edit'); // edit modertors
           Route::post('moderators/update/{moderator_id}', 'moderator\moderatorsController@update')->name('admin.moderators.update'); // update modertors
           Route::any('moderators/delete/{moderator_id}', 'moderator\moderatorsController@delete')->name('admin.moderators.delete'); // Delete modertors
            ############## End moderators route #########
            ############## begin Items route #########
            Route::get('items','items\itemsController@index'); // Show all items page
            Route::get('items/add','items\itemsController@add'); // add New Item
            Route::get('items/product/{id}','items\itemsController@product'); // spcail page for one item
            Route::post('items/save','items\itemsController@save'); // save Item
            Route::get('items/{spcial}/{id}','items\itemsController@spcial');  // items of any category
            // diable & Enable & DELETE
            Route::any('disabledItem','items\itemsController@disabledItem')->name('item.disabled'); // disabled item
            Route::any('disable/{id}','items\itemsController@disable')->name('item.disable'); // disable Items
            Route::any('enable/{id}','items\itemsController@enable')->name('item.disable'); // Enable Items
            Route::any('delete/{id}','items\itemsController@delete');// Delete Item
            ############## End Items route ###########
}); // End namespace (backEnd)




});  // end perfix (admin) & middleware (is Admin)

########################### End  admin Routes ##########################
