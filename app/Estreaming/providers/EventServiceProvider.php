<?php namespace Estreaming\Providers;

use Estreaming\Events\UserEventHandler;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

    /**
     * Register
     */
    public function register()
    {
        // register the event
        a
        $this->app->events->subscribe(new UserEventHandler);
    }

}