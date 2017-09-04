<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





/*Route::get('base1',function(){
	return 'hello';
});

Route::post('base2',function(){
	return 'world';
});

//多请求路由
Route::match(['get','post'],'multi1',function(){
	return 'multi1';
});

Route::any('multi2',function(){
	return 'multi2';
});

//路由参数
Route::get('user/{id}',function($id){
	return $id;
});*/

/*Route::get('user/{name?}',function($name = null){
	return 'user_name'.$name;
});*/

/*Route::get('user/{id}/{name?}',function($id,$name = 'sean'){
	return 'id_'.$id.'user_name_'.$name;
})->where(['id'=>'[0-9]','name'=>'[A-Za-z]+']);*/

//路由别名
/*Route::get('user/member-center',['as'=>'center',function(){
	return route('center');
}]);*/

//路由群组
/*Route::group(['prefix'=>'member'],function(){

   Route::get('user/center',['as'=>'center',function(){
	  return route('center');
   }]);

   Route::any('multi2',function(){
	  return 'multi2';
   });

});*/


//路由的输出视图
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','Home\LogController@index');
Route::get('member/info', 'MemberController@info');
Route::any('admin/index','Home\AdminController@index');
Route::any('log/index','Home\LogController@index');
Route::any('log/check','Home\LogController@check');
