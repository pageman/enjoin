<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Thread;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Just for testing - the user should be logged in. In a real
     * app, please use standard authentication practices
     */
    public function __construct()
    {
        $user = User::find(1);
        Auth::login($user);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $id = $request->input('id');
        if (!empty($id)) 
        {
            $data = User::join('user_interests','user_id','=','users.id')->where('interest_id',$id)->distance(14.5,121, 121.024)->get();
        }
        else
        {
            $data = User::distance(14.5,121, 121.024)->get();
        }
        
        $users = User::where('id', '!=', Auth::id())->get();
        return view('account.index', compact('users', 'data'));
    }

    public function getLocation()
    {
        $data = User::distance(14,121, 100)->get();
        return $data;
    }

    /**
     * Display landing page
     *
     * @return Response
     */
    public function landing()
    {
        //$users = User::where('id', '!=', Auth::id())->get();
        return view('landing');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
