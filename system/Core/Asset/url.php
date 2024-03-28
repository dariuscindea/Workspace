<?php

if (!function_exists('url')) {
    function url(string $url): string
    {
        return "/public/assets/css/style.css/public/assets/$url";
    }
}