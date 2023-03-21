<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
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
  public function boot(UrlGenerator $url)
  {
    $url->forceScheme('https');
    
    App::terminating(function () 
    {
        // 以下のコードでは、なせかアプリケーション終了していないのに、画面が切り替わるときにデータが消える
        // DB::table('game_users')->delete();
        // DB::table('try_images')->delete();
       
    });
  }
}
