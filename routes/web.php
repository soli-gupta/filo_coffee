<?php
//URL::forceScheme('https');
//Route::get('/', 'HomepageCtrl@cbss',array());



Route::get('/', 'HomepageCtrl@homepage', array());

Route::get('testpage', 'TestpageCtrl@testpage', array());
Route::get('people', 'PeopleCtrl@index', array())->name('people');
Route::get('career', 'CareerCtrl@index', array())->name('career');
Route::get('awards', 'AwardsCtrl@index', array())->name('awards');

Route::get('our-value', 'OurValuesCtrl@index', array())->name('our-values');
Route::get('who-we-are', 'WhoWeAreCtrl@index', array())->name('who-we-are');

// All Sectors Route
Route::get('{sector_slug}', 'SerctorsCtrl@index', array())->name('sectors');

// All Services Route
Route::get('advisory', 'AdvisoryCtrl@index', array())->name('advisory');

// All Practices Route
Route::get('{practices_slug}', 'DirectTaxCtrl@index', array())->name('practices');

Route::group(array('namespace' => 'Admin'), function () {

  Auth::routes();
  Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'DashboardControl@index', array());
    Route::get('/profile', 'DashboardControl@profile', array());
    Route::post('/profile/save', 'DashboardControl@save', array());
    Route::post('summernotefilesave', 'DashboardControl@summernotefilesave');

    // admin User routes
    Route::get('/admin-user', 'AdminUserCtrlAdmin@index', array());
    Route::get('/admin-user/view/{id}', 'AdminUserCtrlAdmin@view', array());
    Route::post('admin-user/save', 'AdminUserCtrlAdmin@save');
    Route::get('admin-user/export', 'AdminUserCtrlAdmin@export');
    Route::get('/admin-user/new/', 'AdminUserCtrlAdmin@add', array());


    // section cmspage module
    Route::get('cms-page', 'CmspageCtrlAdmin@index', array());
    Route::get('cms-page/create', 'CmspageCtrlAdmin@create');
    Route::post('cms-page/save', 'CmspageCtrlAdmin@save');
    Route::get('cms-page/edit/{id}', 'CmspageCtrlAdmin@edit', array());
    Route::get('cms-page/export', 'CmspageCtrlAdmin@export');


    // cms banner module
    Route::get('/cms-banner', 'CmsBannerCtrlAdmin@index', array());
    Route::get('/cms-banner/view/{id}', 'CmsBannerCtrlAdmin@view', array());
    Route::get('cms-banner/new', 'CmsBannerCtrlAdmin@add');
    Route::post('cms-banner/save', 'CmsBannerCtrlAdmin@save');
    Route::get('cms-banner/export', 'CmsBannerCtrlAdmin@export');


    // Sector  module Route
    Route::get('sectors', 'SectorCtrlAdmin@index', array());
    Route::get('sectors/view/{id}', 'SectorCtrlAdmin@view', array());
    Route::post('sectors/save', 'SectorCtrlAdmin@save');
    Route::get('sectors/export', 'SectorCtrlAdmin@export');
    Route::get('sectors/new/', 'SectorCtrlAdmin@add', array());
    Route::post('sectors/massaction', 'SectorCtrlAdmin@massaction');

    // Sector Services Template Module
    Route::get('/sectors-services', 'SectorServicesCtrlAdmin@index', array());
    Route::get('/sectors-services/view/{id}', 'SectorServicesCtrlAdmin@view', array());
    Route::get('sectors-services/new/{id}', 'SectorServicesCtrlAdmin@add');
    Route::post('sectors-services/save', 'SectorServicesCtrlAdmin@save');

    // Services  module Route
    Route::get('services', 'ServicesCtrlAdmin@index', array());
    Route::get('services/view/{id}', 'ServicesCtrlAdmin@view', array());
    Route::post('services/save', 'ServicesCtrlAdmin@save');
    Route::get('services/export', 'ServicesCtrlAdmin@export');
    Route::get('services/new/', 'ServicesCtrlAdmin@add', array());
    Route::post('services/massaction', 'ServicesCtrlAdmin@massaction');


    //  Practices  module Route
    Route::get('practices', 'PratciesCtrlAdmin@index', array());
    Route::get('practices/view/{id}', 'PratciesCtrlAdmin@view', array());
    Route::post('practices/save', 'PratciesCtrlAdmin@save');
    Route::get('practices/export', 'PratciesCtrlAdmin@export');
    Route::get('practices/new/', 'PratciesCtrlAdmin@add', array());
    Route::post('practices/massaction', 'PratciesCtrlAdmin@massaction');

    // Location Controller Route
    Route::get('locations', 'LocationCtrlAdmin@index', array());
    Route::get('locations/view/{id}', 'LocationCtrlAdmin@view', array());
    Route::post('locations/save', 'LocationCtrlAdmin@save');
    Route::get('locations/export', 'LocationCtrlAdmin@export');
    Route::get('locations/new/', 'LocationCtrlAdmin@add', array());
    Route::post('locations/massaction', 'LocationCtrlAdmin@massaction');


    // Leadership AdminController
    Route::get('leadership', 'LeadershipCtrlAdmin@index', array());
    Route::get('leadership/view/{id}', 'LeadershipCtrlAdmin@view', array());
    Route::get('leadership/new', 'LeadershipCtrlAdmin@add');
    Route::post('leadership/save', 'LeadershipCtrlAdmin@save');
    Route::get('leadership/export', 'LeadershipCtrlAdmin@export');

    // Our Value Service Controller
    Route::get('our-value-services', 'OurValueServiceCtrlAdmin@index', array());
    Route::get('our-value-services/view/{id}', 'OurValueServiceCtrlAdmin@view', array());
    Route::post('our-value-services/save', 'OurValueServiceCtrlAdmin@save');
    Route::get('our-value-services/export', 'OurValueServiceCtrlAdmin@export');
    Route::get('our-value-services/new/', 'OurValueServiceCtrlAdmin@add', array());
    Route::post('our-value-services/massaction', 'OurValueServiceCtrlAdmin@massaction');

    // Awards AdminController
    Route::get('awards', 'AwardsCtrlAdmin@index', array());
    Route::get('awards/view/{id}', 'AwardsCtrlAdmin@view', array());
    Route::get('awards/new', 'AwardsCtrlAdmin@add');
    Route::post('awards/save', 'AwardsCtrlAdmin@save');
    Route::get('awards/export', 'AwardsCtrlAdmin@export');

    // section MediaGallery
    Route::get('/media-gallery', 'MediaGalleryCtrlAdmin@index', array());
    Route::get('/media-gallery/view/{id}', 'MediaGalleryCtrlAdmin@view', array());
    Route::get('media-gallery/new', 'MediaGalleryCtrlAdmin@add');
    Route::post('media-gallery/save', 'MediaGalleryCtrlAdmin@save');
    Route::get('media-gallery/export', 'MediaGalleryCtrlAdmin@export');


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

    // section setting module
    Route::get('setting', 'SettingCtrlAdmin@index', array());
    Route::get('setting/view/{id}', 'SettingCtrlAdmin@view', array());
    Route::get('setting/new', 'SettingCtrlAdmin@add');
    Route::post('setting/save', 'SettingCtrlAdmin@save');


    // product 
    Route::get('product', 'ProductCtrlAdmin@index', array());
    Route::get('product/view/{id}', 'ProductCtrlAdmin@view', array());
    Route::get('product/new', 'ProductCtrlAdmin@add');
    Route::post('product/save', 'ProductCtrlAdmin@save');
    Route::get('product/export', 'ProductCtrlAdmin@export');
    Route::post('product/massaction', 'ProductCtrlAdmin@massaction');
    Route::post('product/dataupload', 'ProductCtrlAdmin@dataupload');

    // Blog Controller
    Route::get('blog-post', 'BlogPostCtrlAdmin@index', array());
    Route::get('blog-post/view/{id}', 'BlogPostCtrlAdmin@view', array());
    Route::get('blog-post/new', 'BlogPostCtrlAdmin@add');
    Route::post('blog-post/save', 'BlogPostCtrlAdmin@save');
    Route::get('blog-post/export', 'BlogPostCtrlAdmin@export');

    //
    Route::get('articles', 'ArticlesCtrlAdmin@index', array());
    Route::get('articles/view/{id}', 'ArticlesCtrlAdmin@view', array());
    Route::get('articles/new', 'ArticlesCtrlAdmin@add');
    Route::post('articles/save', 'ArticlesCtrlAdmin@save');
    Route::get('articles/export', 'ArticlesCtrlAdmin@export');

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
