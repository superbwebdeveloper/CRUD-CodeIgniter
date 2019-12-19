<?php
if (!function_exists('page_slug')) {
    function page_slug($string)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
    }
}
