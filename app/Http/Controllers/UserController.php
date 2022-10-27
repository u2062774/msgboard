<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    
    public function create(Request $request)
    {
        return view('users/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        $data = $request->all();
        $check = $this->create($data);
        
        $request->session()->regenerate();
        return redirect()->intended('/');
    }
}