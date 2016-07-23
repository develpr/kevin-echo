<?php namespace Kevin\Providers;

use Kevin\Device;
use Illuminate\Support\ServiceProvider;
use Kevin\Validators\DeviceCodeValidator;

class AppServiceProvider extends ServiceProvider
{
    private $simpleBindings = [
        
    ];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerEloquentListeners();
        $this->registerValidators();
        $this->registerErrorHandlers();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->simpleBindings as $contract => $service) {
            $this->app->bind($contract, $service);
        }
    }

    private function registerErrorHandlers(){
    }

    private function registerEloquentListeners()
    {

    }

    private function registerValidators()
    {

    }
}
