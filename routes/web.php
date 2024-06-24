<?php
//URL::forceScheme('https');
//Route::get('/', 'HomepageCtrl@cbss',array());



Route::get('/', 'HomepageCtrl@homepage', array());

Route::get('testpage', 'TestpageCtrl@testpage', array());

Route::group(array('namespace' => 'Admin'), function () {

  Auth::routes();
  Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'DashboardControl@index', array());
    Route::get('/profile', 'DashboardControl@profile', array());
    Route::post('/profile/save', 'DashboardControl@save', array());
    Route::post('summernotefilesave', 'DashboardControl@summernotefilesave');

    // section cmspage module
    Route::get('cms-page', 'CmspageCtrlAdmin@index', array());
    Route::get('cms-page/create', 'CmspageCtrlAdmin@create');
    Route::post('cms-page/save', 'CmspageCtrlAdmin@save');
    Route::get('cms-page/edit/{id}', 'CmspageCtrlAdmin@edit', array());
    Route::get('cms-page/export', 'CmspageCtrlAdmin@export');


    // section MediaGallery
    Route::get('/media-gallery', 'MediaGalleryCtrlAdmin@index', array());
    Route::get('/media-gallery/view/{id}', 'MediaGalleryCtrlAdmin@view', array());
    Route::get('media-gallery/new', 'MediaGalleryCtrlAdmin@add');
    Route::post('media-gallery/save', 'MediaGalleryCtrlAdmin@save');
    Route::get('media-gallery/export', 'MediaGalleryCtrlAdmin@export');



    // section setting module
    Route::get('setting', 'SettingCtrlAdmin@index', array());
    Route::get('setting/view/{id}', 'SettingCtrlAdmin@view', array());
    Route::get('setting/new', 'SettingCtrlAdmin@add');
    Route::post('setting/save', 'SettingCtrlAdmin@save');
    //Route::get('setting/export', 'CmsBlockCtrlAdmin@export'); 


    // section cms banner module
    Route::get('/cms-banner', 'CmsBannerCtrlAdmin@index', array());
    Route::get('/cms-banner/view/{id}', 'CmsBannerCtrlAdmin@view', array());
    Route::get('cms-banner/new', 'CmsBannerCtrlAdmin@add');
    Route::post('cms-banner/save', 'CmsBannerCtrlAdmin@save');
    Route::get('cms-banner/export', 'CmsBannerCtrlAdmin@export');


    // product 
    Route::get('product', 'ProductCtrlAdmin@index', array());
    Route::get('product/view/{id}', 'ProductCtrlAdmin@view', array());
    Route::get('product/new', 'ProductCtrlAdmin@add');
    Route::post('product/save', 'ProductCtrlAdmin@save');
    Route::get('product/export', 'ProductCtrlAdmin@export');
    Route::post('product/massaction', 'ProductCtrlAdmin@massaction');
    Route::post('product/dataupload', 'ProductCtrlAdmin@dataupload');

    Route::get('attributes', 'AttributesCtrlAdmin@index', array());
    Route::get('attributes/view/{id}', 'AttributesCtrlAdmin@view', array());
    Route::post('attributes/save', 'AttributesCtrlAdmin@save');
    Route::get('attributes/export', 'AttributesCtrlAdmin@export');
    Route::get('attributes/new/', 'AttributesCtrlAdmin@add', array());
    Route::post('attributes/massaction', 'AttributesCtrlAdmin@massaction');


    Route::get('attributes-option', 'AttributesOptionCtrlAdmin@index', array());
    Route::get('attributes-option/view/{id}', 'AttributesOptionCtrlAdmin@view', array());
    Route::post('attributes-option/save', 'AttributesOptionCtrlAdmin@save');
    Route::get('attributes-option/export', 'AttributesOptionCtrlAdmin@export');
    Route::get('attributes-option/new/', 'AttributesOptionCtrlAdmin@add', array());
    Route::post('attributes-option/massaction', 'AttributesOptionCtrlAdmin@massaction');

    // product category
    Route::get('product-category', 'ProductCategoryCtrlAdmin@index', array());
    Route::get('product-category/view/{id}', 'ProductCategoryCtrlAdmin@view', array());
    Route::get('product-category/new', 'ProductCategoryCtrlAdmin@add');
    Route::post('product-category/save', 'ProductCategoryCtrlAdmin@save');
    Route::get('product-category/export', 'ProductCategoryCtrlAdmin@export');


    // product sub category
    Route::get('product-sub-category', 'ProductSubCategoryCtrlAdmin@index', array());
    Route::get('product-sub-category/view/{id}', 'ProductSubCategoryCtrlAdmin@view', array());
    Route::get('product-sub-category/new', 'ProductSubCategoryCtrlAdmin@add');
    Route::post('product-sub-category/save', 'ProductSubCategoryCtrlAdmin@save');
    Route::get('product-sub-category/export', 'ProductSubCategoryCtrlAdmin@export');
    Route::get('get-sub-category', 'ProductSubCategoryCtrlAdmin@getCategoryById');
    // admin User routes
    Route::get('/admin-user', 'AdminUserCtrlAdmin@index', array());
    Route::get('/admin-user/view/{id}', 'AdminUserCtrlAdmin@view', array());
    Route::post('admin-user/save', 'AdminUserCtrlAdmin@save');
    Route::get('admin-user/export', 'AdminUserCtrlAdmin@export');
    Route::get('/admin-user/new/', 'AdminUserCtrlAdmin@add', array());


    // section cms block module
    Route::get('/redirect-url', 'RedirectUrlCtrlAdmin@index', array());
    Route::get('/redirect-url/view/{id}', 'RedirectUrlCtrlAdmin@view', array());
    Route::get('redirect-url/new', 'RedirectUrlCtrlAdmin@add');
    Route::post('redirect-url/save', 'RedirectUrlCtrlAdmin@save');
    Route::get('redirect-url/export', 'RedirectUrlCtrlAdmin@export');
    Route::post('redirect-url/dataupload', 'RedirectUrlCtrlAdmin@dataupload');
    Route::get('/', 'LoginController@index', array());
  });
});


Route::get('/{parent_slug}', 'CmspageCtrl@pages', array());
//Route::get('/{parent_slug}/{child_slug}', 'CmspageCtrl@pages',array());
Route::fallback('CmspageCtrl@pageNotFound');
