<?php

class Auth
{
    public static function attempt(array $credentials): bool
    {
        $user = User::query()->where($credentials)->select(['*'])->get();

        if ($user) {
            Session::instance()->set('user', json_encode($user));

            return true;
        }

        return false;
    }
}