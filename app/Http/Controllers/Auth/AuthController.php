<?php

class AuthController extends BaseController
{

    public function showLogin(): void
    {
        $message = Session::instance()->get('auth.message');

        view('auth/login', with: ['auth.message' => $message]);
    }
    public function login(): void
    {
        $username = $_POST['email'];
        $password = $_POST['password'];

        if (! Auth::attempt(['email' => $username, 'password' => $password])) {
            redirect(route('auth.login.show'), with: ['auth.message' => "credentials don't match our records."]);
            return;
        }

        redirect(route('admin.index'));
    }

    public function logout(): void
    {
        Auth::logout();

        redirect(route('auth.login.show'));
    }
}