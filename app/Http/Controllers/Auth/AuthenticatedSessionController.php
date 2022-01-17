<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth1.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // $request->authenticate();

        // $request->session()->regenerate();
        $user = User::where(['email'=>$request->email])->get();
        if(User::login($request)){
            return response()->json([
                'check_user' => 'true',
                'user_name' => $user[0]['name'],
                'user_id' => $user[0]['id']
            ]);
        }
        else{
            return response()->json([
                'check_user' => 'false'
            ]);
        }
        // if(Hash::make($request->password)==$user[0]->password){
        //     return response()->json([
        //         'check_user' => 'true',
        //         'hpwd' =>Hash::make($request->password),
        //         'pwd' =>$request->password
        //     ]);
        // } 
        // else{
        //     return response()->json([
        //         'check_user' => 'false',
        //          'hpwd' =>Hash::make($request->password),
        //         'pwd' =>$request->password
        //     ]);
        // }   
   
        // $user = Auth::user();
        // if(!isset($user)){
        //     return response()->json([
        //         'check_user' => 'true',
        //         'message' => 'successfully logined'
        //     ]);
        // }
        // else{
        //     return response()->json([
        //         'check_user' => 'false'
        //     ]);
        // }       
        
        // if($user->name=='admin'){
        //     return redirect(RouteServiceProvider::Admin);
        // }
        // else{
        //     return redirect()->intended(RouteServiceProvider::HOME);
        // }
        
  
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
