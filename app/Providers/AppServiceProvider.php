<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\blade;
use Illuminate\Support\facades\view;


Blade::directive('mine',function($x){
    return "<?php  echo 'hello world'.$x?>";
});

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        $data=['name'=>'ali','age'=>'20'];

        View::share('data',$data);
    }
}
