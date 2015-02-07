<?php namespace Estreaming\Providers;

use Estreaming\Events\UserEventHandler;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

    /**
     * Register
     * Register events
     */
    public function register()
    {
        // register the event = fix
        $this->app->events->subscribe(new UserEventHandler);
    }

}