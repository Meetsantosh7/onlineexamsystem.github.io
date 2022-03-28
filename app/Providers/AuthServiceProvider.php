<?php
namespace App\Providers;


/*use Illuminate\Support\Facades\Gate;*/
//new added line for ACL -add as GateContract
/*use Illuminate\Contracts\Auth\Access\Gate as GateContract;*/
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Gate;



class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       
        Gate::define('isAdmin', function($user){

            return ($user->user_type=='teacher');
        });
    
        // Gate::define('isAuthor', function($user){
        //     return ($user->user_type=='author');
        // });

        // Gate::define('isUser', function($user){
        //      return ($user->user_type=='user');

        // });

       

    }
}