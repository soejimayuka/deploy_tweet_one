<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// π½ 1θ‘θΏ½ε  π½
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
  // π½ η·¨ι π½
  public function boot(UrlGenerator $url)
  {
    $url->forceScheme('https');
  }
}
