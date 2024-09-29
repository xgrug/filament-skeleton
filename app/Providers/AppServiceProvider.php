<?php

declare(strict_types=1);

namespace App\Providers;

use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //多语言切换
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch): void {
            $switch
                ->visible(true,true)
                ->locales([
                    'zh_CN',
                    'en',
                    'zh_TW'])
                ->labels([
                    'zh_CN' => '简体中文',
                    'en'    => '英文',
                    'zh_TW' => '繁体中文',
                ])
            ;
        });
    }
}
