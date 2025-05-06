<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // list users
    protected $users = [
        'admin' => [
            'username' => 'admin',
            'name' => 'Administrator',
            'role' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => 'admin123',
        ],
        'adi' => [
            'username' => 'adi',
            'name' => 'King Adi',
            'role' => 'User',
            'email' => 'adi@mail.com',
            'password' => 'adi123',
        ],
        'fana' => [
            'username' => 'fana',
            'name' => 'Mas Fana',
            'role' => 'User',
            'email' => 'fana@mail.com',
            'password' => 'fana123',
        ],
        'altailwind' => [
            'username' => 'altailwind',
            'name' => 'King Altailwind',
            'role' => 'User',
            'email' => 'atmaja@mail.com',
            'password' => 'altailwind123',
        ]
    ];

    public function index()
    {
        if (!session()->has('auth')) {
            return redirect()->route('login')->with('message', 'Silahkan login dulu mas');
        }

        $user = Crypt::decryptString(session()->get('auth'));

        if (request('username')) {
            return view('dashboard');
        } else {
            return redirect()->route('dashboard', ['username' => $user]);
        }
    }

    public function login(Request $request)
    {
        if (session()->has('auth')) {
            $user = Crypt::decryptString(session()->get('auth'));
            return redirect()->route('dashboard', ['username' => $user])->with('message', 'Sudah login king ' . $user);
        }

        if ($request->isMethod('post')) {
            $loginData = $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
            ]);

            $user = strtolower($loginData['username']);

            session()->put('auth', Crypt::encryptString($user));

            return redirect()->intended(route('dashboard'));
        }

        return view('login');
    }

    public function pengelolaan()
    {
        if (!session()->has('auth')) {
            return redirect()->route('login')->with('message', 'Silahkan login dulu mas');
        }
        $users = $this->users;
        return view('pengelolaan', compact('users'));
    }


    public function profile()
    {
        if (!session()->has('auth')) {
            return redirect()->route('login')->with('message', 'Silahkan login dulu mas');
        }

        $user = Crypt::decryptString(session()->get('auth'));
        $user = [
            'username' => $user,
            'name' => 'King ' . $user,
            'role' => $user == 'admin' ? 'admin' : 'User',
            'email' => $user . '@mail.com',
            'password' => '',
        ];
        return view('profile', compact('user'));
    }

    public function logout()
    {
        // clear session data
        session()->flush();
        // regenerate session 
        session()->regenerate();

        return redirect()->route('login')->with('message', 'Berhasil logout king OwO');
    }
}