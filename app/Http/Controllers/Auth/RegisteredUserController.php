<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            //all users
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role_id' => ['required', 'string','max:255'],
            'phone' => ['required', 'string','max:255'],
            'dob' => ['required', 'string','max:255'],
            'address' => ['required', 'string','max:255'],
            'gender' => ['required', 'string','max:255'],
            
            //teachers
            'tfaculty' => ['', 'string','max:255'],
            'teaching1' => ['', 'string','max:255'],
            'teaching2' => ['', 'string','max:255'],
            'teaching3' => ['', 'string','max:255'],
            'teaching4' => ['', 'string','max:255'],
            'teaching5' => ['', 'string','max:255'],
            'classincharge' => ['', 'string','max:255'],

            //users
            'gender' => ['', 'string','max:255'],
            'faculty' => ['', 'string','max:255'],
            'classin' => ['', 'string','max:255'],
            'parent_name' => ['', 'string','max:255'],
            'parent_email' => ['', 'string','max:255'],
            'parent_phone' => ['', 'string','max:255'],
            'subject1' => ['', 'string','max:255'],
            'subject2' => ['', 'string','max:255'],
            'subject3' => ['', 'string','max:255'],
            'subject4' => ['', 'string','max:255'],
            'subject5' => ['', 'string','max:255'],
            'subject6' => ['', 'string','max:255'],
            'subject7' => ['', 'string','max:255'],
            'subject8' => ['', 'string','max:255'],
            'subject9' => ['', 'string','max:255'],
            'subject10' => ['', 'string','max:255'],
            
            
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            //all users
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'address' => $request->address,
            
            //teachers
            'tfaculty' => $request->tfaculty,
            'teaching1' => $request->teaching1,
            'teaching2' => $request->teaching2,
            'teaching3' => $request->teaching3,
            'teaching4' => $request->teaching4,
            'teaching5' => $request->teaching5,
            'classincharge' => $request->classincharge,

            //students
            'faculty' => $request->faculty,
            'address' => $request->address,
            'classin' => $request->classin,
            'parent_name' => $request->parent_name,
            'parent_email' => $request->parent_email,
            'parent_phone' => $request->parent_phone,
            'subjedt1' => $request->subjedt1,
            'subjedt2' => $request->subjedt2,
            'subjedt3' => $request->subjedt3,
            'subjedt4' => $request->subjedt4,
            'subjedt5' => $request->subjedt5,
            'subjedt6' => $request->subjedt6,
            'subjedt7' => $request->subjedt7,
            'subjedt8' => $request->subjedt8,
            'subjedt9' => $request->subjedt9,
            'subjedt10' => $request->subjedt10,
            
            'password' => Hash::make($request->password),
        ]);

        $user->attachRole($request->role_id);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
