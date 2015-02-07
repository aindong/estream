<?php namespace Estreaming\Events;

use Mail;

class UserEventHandler
{


    public function onSeminarRegister($event)
    {
        Mail::send('emails.seminarRegister', $event, function($message) use ($event)
        {
            $message->to(\Auth::getUser()->email, \Auth::getUser()->info->first_name . ' ' . \Auth::getUser()->info->last_name )->subject('Registered on a seminar!');
        });
    }

    public function onRegister($event)
    {
        Mail::send('emails.welcome', $event, function($message) use ($event)
        {
            $message->to($event->email, $event->user->info->first_name . ' ' . $event->user->info->last_name)->subject('Welcome!');
        });
    }

    public function onNewSeminar($event)
    {

    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return array
     */
    public function subscribe($events)
    {
        $events->listen('user.seminar.register', 'UserEventHandler@onSeminarRegister');
        $events->listen('user.register', 'UserEventHandler@onRegister');
        $events->listen('seminar.created', 'UserEventHandler@onNewSeminar');
    }
}