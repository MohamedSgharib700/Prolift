<?php

/*
|--------------------------------------------------------------------------
| Web Site Routes
|--------------------------------------------------------------------------
|
*/
Auth::routes();

Route::get('/', 'siteController@home');

Route::get('wittur_plants', 'siteController@wltturPlants');

Route::get('products', 'siteController@products');

Route::get('category', 'siteController@prod_singl');

Route::get('product/{product}', 'siteController@Product')->name('productShow');

Route::get('service/{service}', 'siteController@Service')->name('serviceShow');

Route::get('services', 'siteController@services');

Route::get('wittur_academy', 'siteController@wltturAcademy');

Route::get('about_us', 'siteController@aboutUs');

Route::get('contact_Us', 'siteController@contactUs');

Route::get('news_blog', 'siteController@newsBlog');

Route::get('post/{post}/post', 'siteController@newsDetils');

Route::post('contact_us', 'siteController@messages');

Route::post('/submit', 'siteController@messagesHome')->name('submitForm');




/*
|--------------------------------------------------------------------------
| Dachboord Routes
|--------------------------------------------------------------------------
|
*/
 Route::get('adminpanel', 'AdminController@home');

 Route::get('users_show', 'AdminController@userShow');

Route::get('user_show/{user}/delete', 'AdminController@userDelete');

Route::get('edit/{user}/edit', 'AdminController@userEdit');

Route::post('update/{user}/update', 'AdminController@userUpdate')->name('user') ;

Route::post('user_add', 'AdminController@userAdd');

Route::get('user_show', 'AdminController@userShow');

Route::get('header_footer', 'AdminController@headerFooter');

Route::get('edit/{header}', 'AdminController@headerEdit');

Route::post('update/{header}', 'AdminController@headerUpdate')->name('header') ;

Route::get('edit/{about}/e', 'AdminController@aboutEdit');

Route::post('update/{about}/e', 'AdminController@AboutUpdate')->name('question') ;

Route::get('edit/{footer}/edited', 'AdminController@footerEdit');

Route::post('update/{footer}/edited', 'AdminController@footerUpdate')->name('footer') ;

Route::get('slides_show', 'AdminController@slidesShow');

Route::get('slide/{slide}/delete', 'AdminController@slideDelete');

Route::get('slide/{slide}edit', 'AdminController@slideEdit');

Route::post('slide/{slide}update', 'AdminController@slideUpdate')->name('slide') ;

Route::get('slide/form_add', 'AdminController@SlidesFormAdd');

Route::post('slide/add', 'AdminController@slideAdd');

Route::get('services_show', 'AdminController@servicesShow');

Route::get('service/{service}/delete', 'AdminController@serviceDelete');

Route::get('service_show/{service}edit', 'AdminController@serviceEdit');

Route::post('service/{service}update', 'AdminController@serviceUpdate')->name('service') ;

Route::get('service_form_add', 'AdminController@servicesFormAdd');

Route::post('service/add', 'AdminController@serviceAdd');

Route::get('clints_show', 'AdminController@clintsShow');

Route::get('clint/{clint}/delete', 'AdminController@clintDelete');

Route::get('clint/{clint}edit', 'AdminController@clintEdit');

Route::post('clint/{clint}update', 'AdminController@clintUpdate')->name('clint') ;

Route::get('clint/form_add', 'AdminController@clintFormAdd');

Route::post('clint/add', 'AdminController@clintAdd');

Route::get('abouts_show', 'AdminController@aboutShow');

Route::get('{about}edit', 'AdminController@aboutPEdit');

Route::post('{about}update', 'AdminController@aboutPUpdate')->name('abouts') ;

Route::get('{title}/edit', 'AdminController@titlePEdit');

Route::post('title/{title}/update', 'AdminController@titlePUpdate')->name('titles') ;

Route::get('products_show', 'AdminController@productsShow');

Route::get('product/{product}/delete', 'AdminController@productDelete');

Route::get('product_show/{product}edit', 'AdminController@productEdit');

Route::post('product/{product}update', 'AdminController@productUpdate')->name('product') ;

Route::get('form_add', 'AdminController@productFormAdd');

Route::post('product/add', 'AdminController@productAdd');

Route::get('info_report_show', 'AdminController@infoShow');

Route::get('report/{report}edit', 'AdminController@reportEdit');

Route::post('report/{report}/update', 'AdminController@reportUpdate')->name('report') ;

Route::get('news/{news}edit', 'AdminController@newsEdit');

Route::post('news/{news}/update', 'AdminController@newsUpdate')->name('news') ;

Route::get('contactData/{contactData}edit', 'AdminController@contactDataEdit');

Route::post('contactData/{contactData}','AdminController@contactDataUpdate')->name('contactData') ;

Route::get('plants_show', 'AdminController@plantsShow');

Route::get('slieder/{slieder}edit', 'AdminController@sliederEdit');

Route::post('slieder/{slieder}/update', 'AdminController@sliederUpdate')->name('slieder') ;

Route::get('plant/{plant}/delete', 'AdminController@plantDelete');

Route::get('plant/{plant}edit', 'AdminController@plantEdit');

Route::post('plant/{plant}update', 'AdminController@plantUpdate')->name('plant') ;

Route::get('plant/form_add', 'AdminController@plantFormAdd');

Route::post('plant/add', 'AdminController@plantAdd');

Route::get('contact/{contact}edit', 'AdminController@contactsEdit');

Route::post('contact/{contact}update', 'AdminController@contactsUpdate')->name('contact') ;


Route::post('employe/add', 'AdminController@employeAdd');


Route::get('aboutus_show', 'AdminController@aboutUsShow');

Route::get('slider/{slider}edit', 'AdminController@sliderAboutEdit');

Route::post('slider/{slider}update', 'AdminController@sliderAboutUpdate')->name('slider') ;

Route::get('about/{about}/delete', 'AdminController@aboutUsDelete');

Route::get('about_form/{about}/edit', 'AdminController@aboutUsEdit');

Route::post('about/{about}update', 'AdminController@aboutUsUpdate')->name('about') ;

Route::get('about/form_add', 'AdminController@aboutFormAdd');

Route::post('about/add', 'AdminController@aboutUsAdd');

Route::get('contactus_shows', 'AdminController@contactUssShow');

Route::get('contactUs/{contactUs}edit', 'AdminController@contactUsEdit');

Route::post('contactUs/{contactUs}update', 'AdminController@contactUsUpdate')->name('contactUss') ;

Route::get('messages_shows', 'AdminController@messagesShow');

Route::get('message/{message}/delete', 'AdminController@messageDelete');

Route::get('message/{message}edit', 'AdminController@messageOpen');

Route::get('blog_shows', 'AdminController@blogShow');

Route::get('title/{title}edit', 'AdminController@titleEdit');

Route::post('title/{title}update', 'AdminController@titleUpdate')->name('title') ;

Route::get('post/{post}/delete', 'AdminController@postDelete');

Route::get('post/{post}edit', 'AdminController@postEdit');

Route::post('post/{post}update', 'AdminController@postUpdate')->name('post') ;

Route::get('post/form_add', 'AdminController@postFormAdd');

Route::post('post/add', 'AdminController@postAdd');

Route::get('category_shows', 'AdminController@categoryServicShow'); 

Route::get('categoryS/{categoryS}/delete', 'AdminController@categoryServicDelete');

Route::get('categoryS/{categoryS}edit', 'AdminController@categoryServicEdit');

Route::post('categoryS/{categoryS}update', 'AdminController@categoryServicUpdate')->name('categoryS') ;

Route::get('categoryS/form_add', 'AdminController@categorySFormAdd');

Route::post('categoryS/add', 'AdminController@categorySAdd');


Route::get('categoryP/{categoryP}/delete', 'AdminController@categoryProductDelete');

Route::get('categoryP/{categoryP}edit', 'AdminController@categoryProductEdit');

Route::post('categoryP/{categoryP}update', 'AdminController@categoryProductUpdate')->name('categoryP') ;

Route::get('categoryP/form_add', 'AdminController@categoryPFormAdd');

Route::post('categoryP/add', 'AdminController@categoryPAdd');



















