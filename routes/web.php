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


//Home Page
Route::get('/', 'HomeController@index');
//login
Route::get('login', 'UserController@login')->name('login');
Route::post('login', 'UserController@store')->name('storeAdmin');

Route::group(['middleware' => 'guest'], function () {

    //forget password
    Route::get('forget_password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('showLinkRequestForm');
    Route::post('forget_password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('sendResetLinkEmail');
    Route::get('forget_password/reset/{token}', 'ResetPasswordController@showResetForm')->name('showResetForm');
    Route::post('forget_password/reset', 'ResetPasswordController@reset')->name('reset');

});


Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', 'UserController@logout')->name('logout');

    //Admin Page
    Route::get('admin', 'UserController@index')->name('admin');


    Route::resource('album', 'AlbumController', [
        'names' => [
            'index' => 'album',
            'create' => 'createAlbum',
            'store' => 'storeAlbum'
        ]
    ]);

    Route::resource('category', 'CategoryController', [
        'names' => [
            'index' => 'category',
            'create' => 'createCategory',
            'store' => 'storeCategory',

        ]
    ]);

    Route::resource('certification', 'CertificationController', [
        'names' => [
            'index' => 'certification',
            'create' => 'createCertificate',
            'store' => 'storeCertificate'
        ]
    ]);

    Route::resource('contact', 'ContactController', [
        'names' => [
            'index' => 'contact',
            'create' => 'createContact',
        ]
    ]);

    Route::resource('docs', 'DocsController', [
        'names' => [
            'index' => 'docs',
            'create' => 'createDocs',
            'store' => 'storeDocs',
        ]
    ]);

    Route::resource('education', 'EducationController', [
        'names' => [
            'index' => 'education',
            'create' => 'createEducation',
            'store' => 'storeEducation',
        ]
    ]);

    Route::resource('language', 'LanguageController', [
        'names' => [
            'index' => 'language',
            'create' => 'createLanguage',
            'store' => 'storeLanguage',
        ]
    ]);

    Route::post('message/save', 'MessageController@save')->name('saveMessage');

    Route::resource('message', 'MessageController', [
        'names' => [
            'index' => 'message',
            'create' => 'createMessage'
        ]
    ]);

    Route::resource('profile', 'ProfileController', [
        'names' => [
            'index' => 'profile',
            'create' => 'createProfile',
            'store' => 'storeProfile',

        ]
    ]);

    Route::resource('recommend', 'RecommendationController', [
        'names' => [
            'index' => 'recommend',
            'create' => 'createRecommend'
        ]
    ]);

    Route::resource('skills', 'SkillsController', [
        'names' => [
            'index' => 'skills',
            'create' => 'createSkills'
        ]
    ]);

    Route::resource('social-network', 'SocialNetworkController', [
        'names' => [
            'index' => 'social-network',
            'create' => 'createSocialNetwork',

        ]
    ]);

    Route::resource('work-experience', 'WorkExperienceController', [
        'names' => [
            'index' => 'work-experience',
            'create' => 'createWorkExperience'
        ]
    ]);

    Route::resource('work-sample', 'WorkSampleController', [
        'names' => [
            'index' => 'work-sample',
            'create' => 'createWorkSample'
        ]
    ]);

    Route::resource('blog', 'BlogController', [
        'names' => [
            'index' => 'blog'
        ]
    ]);
});
