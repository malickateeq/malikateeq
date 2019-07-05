<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Settings;
use App\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::where('id', '>', '0')->first(); 
        $user = User::where('id', '>', '0')->first(); 
        return view('welcome')->with('settings', $settings)->with('user', $user);
        //
    }

    public function dashboard()
    {
        $settings = Settings::where('id', '>', '0')->first();
        $user = User::where('id', '>', '0')->first(); 
        return view('home')->with('settings', $settings)->with('user', $user);
        //
    }

    public function site_settings()
    {
        $settings = Settings::where('id', '>', '0')->first();
        $user = User::where('id', '>', '0')->first(); 
        return view('site-settings')->with('settings', $settings)->with('user', $user);
        //
    }

    public function profile_settings()
    {
        $settings = Settings::where('id', '>', '0')->first();
        $user = User::where('id', '>', '0')->first(); 
        return view('profile-settings')->with('settings', $settings)->with('user', $user);
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function update_profile(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('id', '=', Auth::user()->id)->first();
        $request['password'] = Hash::make($request->password);
        $user->update($request->all());


        //
    }
    public function update_site(Request $request)
    {
        return $request;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
