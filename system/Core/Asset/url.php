<?php

if (!function_exists('url')) {
    function url(string $url): string
    {
        return "/public/assets/$url";
    }
}