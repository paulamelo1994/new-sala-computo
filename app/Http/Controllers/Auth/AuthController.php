<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(): View
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration(): View
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    /* $encodeado = base64_encode($credentials["password"]);
    $decodeado = base64_decode($credentials["password"]); */


    // Verifica las credenciales y el estado del usuario
    $user = DB::table('usuarios_sistema')
        ->where('usuariosistema_username', $credentials['email'])
        ->where('usuariosistema_password', $credentials['password'])
        ->where('usuariosistema_estado', 1)
        ->first();


    if ($user) {
        // Autenticación exitosa
        // print_r($user);
        
        return redirect()->intended('dashboard')
            ->withSuccess('You have Successfully logged in');
    }

    return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
}



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard(): RedirectResponse
    {
        if (Auth::check()) {
            // Autenticación exitosa
            print_r("Entró al dashboard");
            /* return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully logged in'); */
        }
        print_r("No entró al dashboard");
        /* return redirect("login")->withSuccess('Opps! You do not have access'); */
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}