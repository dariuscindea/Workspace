<?php

class AuthController extends BaseController
{

    public function showLogin(): void
    {
        $message = Session::instance()->get('auth.message');

        view('auth/login', with: ['authMessage' => $message]);
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

    public function showRegister(): void
    {
        view('auth/register');
    }

    public function register(): void
    {
        $name = $_POST['user_name'];
        $email = $_POST['email'];

        $password = password_hash($_POST['password'], config('auth.algo'));

        User::query()->insert(compact(['name', 'email', 'password']));

        redirect(route('auth.login.show'), with: ['auth.message' => '']);
    }
}