<?php

namespace GrupoNorba\PtBrLang\Providers;

use Illuminate\Support\ServiceProvider;

class PtBrLangServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__."/../../resources/lang/pt-br" => resource_path('lang/pt-br')
        ], 'laravel_lang_pt-br');
    }
}