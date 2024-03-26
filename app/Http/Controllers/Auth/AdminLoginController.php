<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AdminLoginController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }


    /**
     * Handle incoming login request.
     * @throws ValidationException
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        $user = User::where('email', $request->get('email'))->first();

        if ($user->role !== "administrator") {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        $request->authenticate();
        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }
}
