<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function()
{
    return View::make('home');
}));

Route::group(array('before' => 'Sentinel\auth'), function()
{
    # Resources
    Route::resource('organizations', 'OrganizationsController');
    Route::resource('people', 'PeopleController');
    Route::resource('organizations.credentials', 'CredentialsController');
    Route::resource('retainers', 'RetainersController');
    Route::resource('contracts', 'ContractsController');

    # People Importer
    Route::post('import/people', 'PeopleController@import');
    Route::get('import/people', array('as' => 'import.people', 'uses' => 'PeopleController@upload'));

    # Organizations Importer
    Route::post('import/organizations', 'OrganizationsController@import');
    Route::get('import/organizations', array('as' => 'import.organizations', 'uses' => 'OrganizationsController@upload'));

    # Retainers Importer
    Route::post('import/retainers', 'RetainersController@import');
    Route::get('import/retainers', array('as' => 'import.retainers', 'uses' => 'RetainersController@upload'));

    # Contracts Importer
    Route::post('import/contracts', 'ContractsController@import');
    Route::get('import/contracts', array('as' => 'import.contracts', 'uses' => 'ContractsController@upload'));

    # Credentials Importer
    Route::post('import/credentials', 'CredentialsController@import');
    Route::get('import/credentials', array('as' => 'import.credentials', 'uses' => 'CredentialsController@upload'));
});