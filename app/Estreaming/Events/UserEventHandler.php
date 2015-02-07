<?php namespace Estreaming\Events;

use Mail;

class UserEventHandler
{


    public function onSeminarRegister(array $event)
    {
        Mail::send('emails.seminarRegister', $event[0], function($message) use ($event)
        {
            $message->to(\Auth::getUser()->email, \Auth::getUser()->info->first_name . ' ' . \Auth::getUser()->info->last_name )->subject('Registered on a seminar!');
        });
    }

    public function onRegister(array $event)
    {
        Mail::send('emails.welcome', $event, function($message) use ($event)
        {
            $message->to($event['user']['email'], $event['user']['first_name'] . ' ' . $event['user']['last_name'])->subject('Welcome!');
        });
    }

    public function onNewSeminar(array $event)
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
        $events->listen('user.seminar.register', 'Estreaming\Events\UserEventHandler@onSeminarRegister');
        $events->listen('user.register', 'Estreaming\Events\UserEventHandler@onRegister');
        $events->listen('seminar.created', 'Estreaming\Events\UserEventHandler@onNewSeminar');
    }
}