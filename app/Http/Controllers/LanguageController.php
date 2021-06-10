<?php

namespace App\Http\Controllers;

use App\Models\Language;

class LanguageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getLanguages()
    {
        $languages = Language::all();
        return $languages;
    }
}
