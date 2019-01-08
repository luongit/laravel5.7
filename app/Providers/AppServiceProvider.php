<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('old_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, Auth::user()->password);
        });

        Validator::extend('password_very', function ($attribute, $value, $parameters, $validator) {
        
            if(!request()->username) return false;
            $account = User::where('email',request()->username)->orWhere('phone',request()->username)->first();
            if (!$account) return false;
            return Hash::check($value, $account->password);
        });
        Validator::extend('email_phone_exists', function ($attribute, $value, $parameters, $validator) {
            $account = User::where('email',$value)->orWhere('phone',$value)->first();
            return (bool) $account ? true : false;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
