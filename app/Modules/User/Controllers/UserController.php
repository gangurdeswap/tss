<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    |
    |
    */
    public function testView()
    {
        return view('User::test_view');
    }
}
