<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah user ada di database
        $user = User::where('username', $request->username)
                   ->where('password', $request->password)
                   ->first();

        // Jika user ditemukan (username dan password cocok)
        if ($user) {
            // Simpan data user ke session
            session(['user' => [
                'id_user' => $user->id_user,
                'username' => $user->username,
                'roles' => $user->roles,
            ]]);

            // Redirect berdasarkan roles
            if ($user->roles === 'admin') {
                return redirect()->route('home')->with('success', 'Welcome Admin!');
            } elseif ($user->roles === 'operator') {
                return redirect()->route('home')->with('success', 'Welcome Operator!');
            }

            return redirect()->route('home');
        }

        // Jika login gagal
        return back()->withErrors(['loginError' => 'Username atau password salah!']);
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}