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

Route::get('/',         function() { return Redirect::to('login'); });
Route::get('logout',    function() { Auth::logout(); return Redirect::to('login'); });

Route::post('login', function()
{
    try
    {
        Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')));
        return Redirect::to('/');
    }
    catch (Toddish\Verify\UserNotFoundException $e)
    {
        return Redirect::to('login')->with('error', Lang::get('users.message_user_has_not_been_found'));
    }
    catch (Toddish\Verify\UserUnverifiedException $e)
    {
        return Redirect::to('login')->with('error', Lang::get('users.message_user_has_not_been_verified'));
    }
    catch (Toddish\Verify\UserDisabledException $e)
    {
        return Redirect::to('login')->with('error', Lang::get('users.message_user_has_been_disabled'));
    }
    catch (Toddish\Verify\UserDeletedException $e)
    {
        return Redirect::to('login')->with('error', Lang::get('users.message_user_has_been_deleted'));
    }
    catch (Toddish\Verify\UserPasswordIncorrectException $e)
    {
        return Redirect::to('login')->with('error', Lang::get('users.message_incorrect_password'));
    }
});
Route::get('login', function()
{
    return View::make('login');
});

Route::get('/',
[
    'uses'      => 'HomeController@GetIndex',
]);
/*
Route::get('/squads/{nickname}/squad.xml',
[
    'uses'      => 'SquadController@GetSquadXML',
]);

Route::get('/squads/{nickname}/squad.xsl',
[
    'uses'      => 'SquadController@GetSquadXSL',
]);

Route::get('/squads/{nickname}/squad.dtd',
[
    'uses'      => 'SquadController@GetSquadDTD',
]);

Route::get('/squads/{nickname}/squad.css',
[
    'uses'      => 'SquadController@GetSquadCSS',
]);

Route::get('/squads/{nickname}/logo.paa',
[
    'uses'      => 'SquadController@GetSquadLogoPAA',
]);

Route::get('/squads/{nickname}/logo.png',
[
    'uses'      => 'SquadController@GetSquadLogoPNG',
]);
*/