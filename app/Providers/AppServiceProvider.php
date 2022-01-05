<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\About;
use App\Contact;
use App\Socialmedia;
use App\Category;
use App\Counter;


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
    public function boot()
    {
        $about=About::all();
       view()->share('data',$about);

        $contact=Contact::all();
       view()->share('data1',$contact);

       $socialmedia=Contact::all();
       view()->share('data2',$socialmedia);

        $cat=Category::all();
       view()->share('data3',$cat);

       
    }
}
