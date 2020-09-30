<?php

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
Route::get('/test', function () {
    return view('test');
});
Route::get('/sql', function () {
    return view('pl.sql');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/alter', function () {
    return view('alterextra');
});
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/sql', function () {
    return view('pl.sql');
});
Route::get('/artists', function () {
    return view('pages.artists');
});
Route::get('/ahmedhistory', function () {
    return view('pages.ahmedhistory');
});
Route::get('/shahidulhistory', function () {
    return view('pages.shahidulhistory');
});
Route::get('/Munemhistory', function () {
    return view('pages.Munemhistory');
});
Route::get('/shafiuddin', function () {
    return view('pages.shafiuddin');
});
Route::get('/admin', function () {
    return view('admin.index');
});
route :: post('order','AllPageController@confirm');

Route::get('/order', function () {
   return view('pages.order');
});
Route::get('/check', function () {
    return view('pages.check');
});

Route::get('/lojoindata', function () {
    return view('admin.lojoindata');
});
Route :: get('/admin/insertintopainting',function(){
    return view('admin.insertintopainting');
});
/*
Route :: get('/admin/lojoindata',function(){
    return view('admin.lojoindata');
});
*/
//SHOW =================
Route::get('xyz', 'AllPageController@logcheck');
Route::get('pages/index', 'AllPageController@index');
Route::get('pages/order', 'AllPageController@order');
Route::get('xxx', 'AllPageController@showgallery');
Route::get('pages/artists', 'AllPageController@showartist');
Route::get('pages/exhibition', 'AllPageController@showexhibition');
Route::get('pages/createac', 'AllPageController@showcreateac');
Route::get('pages/shahidulhistory', 'AllPageController@showsha');
Route::get('admin/db', 'AllPageController@showdb');


 
Route::get('admin/index', 'AllPageController@showhome');
//SHOW INSERT-------------------------------------------------------------------------
Route::get('admin/insertintogallery', 'AllPageController@insertg');
Route::get('admin/insertintoexhibition', 'AllPageController@inserte');
Route::get('admin/insertintoartist', 'AllPageController@inserta');
Route::get('admin/insertintocustomer', 'AllPageController@insertc');

Route::get('admin/has', 'AllPageController@hs');
Route::get('admin/buy', 'AllPageController@by');

//UPDATE ======================================================================
Route::get('admin/updategallery', 'AllPageController@updatee');
route :: post('editform','AllPageController@editex');
route :: get('editform','AllPageController@exhibitionupdateform');
Route::get('admin/updategallery', 'AllPageController@updateg');

route :: get('editform','AllPageController@editform');
route :: post('edit','AllPageController@edit');

Route::get('admin/update', 'AllPageController@showupdate');
//INSERT============================================================================

Route::get('admin/insert', 'AllPageController@showinsert');
Route::post('create', 'AllPageController@insertintogallery');

Route::get('admin/insert', 'AllPageController@showinsert');
Route::post('create1', 'AllPageController@insertintoexhibition');

Route::get('admin/insert', 'AllPageController@showinsert');
Route::post('create2', 'AllPageController@insertintoartist');

Route::get('admin/insert', 'AllPageController@showinsert');
Route::post('create3', 'AllPageController@insertintocustomer');

//Route::get('admin/insert', 'allPageController@showinsert');
//Route::get('admin/insertform', 'allPageController@insertp');
Route::post('admin/insertform', 'AllPageController@insertintopainting');
Route::post('admin/insert', 'AllPageController@has');
Route::post('admin/insert', 'AllPageController@buy');

//DELETE =========================================================================
Route::get('admin/delete', 'AllPageController@showdelete');

Route::get('admin/deletegallery', 'AllPageController@deleteg');

//route :: get('deleteform','AllPageController@deleteform');
route :: post('delete','AllPageController@gdelete');

Route::get('admin/deletexhibition', 'AllPageController@deleteex');

route :: get('exhibitiondeleteform','AllPageController@exhibitiondeleteform');
route :: post('delete','AllPageController@exdelete');

//union =================================================================
route :: get('admin/lojoindata','AllPageController@union');
//LEFT OUTER JOIN ======================================================
route :: get('admin/lojoindata','AllPageController@lojoin');
//AGGREGATE================================
route :: get('admin/agg','AllPageController@agg');






