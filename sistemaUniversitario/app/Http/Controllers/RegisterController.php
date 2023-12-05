<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request) {
        // dd($request->get('email'));

        // modificar el request
        $request->request->add(['email' => Str::slug($request->email)]);

        $this->validate($request, [
            'email'=>'required | max:30',
            'password'=>'required |min:3|max:30',
        ]);

        Admin::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        //Auutenticar

        /*auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);*/

        //otra forma de autenticar
        auth()->attempt($request->only('email','password'));

        //Redireccionar
        return redirect()->route('admin.index');


    }

}
