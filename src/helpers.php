<?php

if (!function_exists('language')) {
    /**
     * Get the language instance.
     *
     * @return \LaravelRussian\Language\Language
     */
    function language()
    {
        return app('language');
    }
}
