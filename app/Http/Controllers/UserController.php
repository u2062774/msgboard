<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    
    public function create()
    {
        return view('users/create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
           
        $data = $request->all();
        $user = $this->createUserData($data);

        Auth()->login($user);
         
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    public function createUserData(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
}