<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return $user;
    }

    public function  store(Request $request)
    {
        $user = new User();

        $user->fullname = $request['fullname'];
        $user->age = $request['age'];
        $user->gender = $request['gender'];
        $user->profession = $request['profession'];
        $user->email = $request['email'];

        $user->save();

        if ( ! $user->save())
        {
            App::abort(500, 'Some Error');
        }

        //User was created show OK message
        return Response::json(array('success' => true, 'user_created' => 1), 200);
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function  destroy($id) 
    {
        // $start = microtime(true);

        // $time = microtime(true) - $start;

        // $data = array([
        //     'time' => $time,
        //     'data' => $user
        // ]);
        $user = User::find($id);
        $user->delete();

        //User was created show OK message
        return Response::json(array('success' => true, 'user_deleted' => 1), 200);
    }


}
