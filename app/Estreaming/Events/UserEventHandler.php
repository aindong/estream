<?php namespace Estreaming\Events;

use Mail;

class UserEventHandler
{

    protected $url = 'https://post.chikka.com/smsapi/request';
    protected $client_id = 'bb623b12ab953d3ab003531a855e5cc557bf2f72f97304c6d54dcd0317d64001';
    protected $secret_key = 'da5d135fb18831479d61bc2bdc1b4023bed0a11af5970d28647be1c1bc70c14b';
    protected $short_code = '292907608';

    public function send($message, $recipient, $mustInit = true)
    {
        $message_id = str_pad(rand(), 32, '0', STR_PAD_LEFT);

        $params = array(
            'message_type' => 'SEND',
            'mobile_number' => $recipient,
            'shortcode' => $this->short_code,
            'message_id' => $message_id,
            'message' => $message,
            'client_id' => $this->client_id,
            'secret_key' => $this->secret_key,
        );

        $query = http_build_query($params);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, count($params));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        // Add the message_id in the response.
        $response = json_decode($response, true);
        $response['message_id'] = $message_id;
        $response = json_encode($response);
        return $response;
    }


    public function onSeminarRegister(array $event)
    {
        $result = $this->send('Thank you for registering into a seminar!', \Auth::getUser()->info->contactnumber);

        Mail::send('emails.seminarRegister', $event, function($message) use ($event)
        {
            $message->to(\Auth::getUser()->email, \Auth::getUser()->info->first_name . ' ' . \Auth::getUser()->info->last_name )->subject('Registered on a seminar!');
        });
    }

    public function onRegister(array $event)
    {
        $result = $this->send('Thank you for registering to aiers!', $event['user']['contactnumber']);

        Mail::send('emails.welcome', $event, function($message) use ($event)
        {
            $message->to($event['user']['email'], $event['user']['first_name'] . ' ' . $event['user']['last_name'])->subject('Welcome!');
        });
    }

    public function onNewSeminar(array $event)
    {
        $seminar = \Seminar::find($event['id']);
        $seminar = $seminar->toArray();

        //print_r($event);exit;

        $users = \User::all();
        foreach ($users as $user) {
            $result = $this->send('New seminar has been added on aiers!', $user->info->contactnumber);

            Mail::send('emails.newSeminar', $seminar, function($message) use ($user, $seminar)
            {
                $message->to($user->email, $user->info->first_name . ' ' . $user->info->last_name)->subject('New seminar has been added!');
                $message->attach(public_path() . '/public/uploads/invitation/' . $seminar['invitation']);
            });
        }
    }

    public function onWebcastStatusChanged(array $event)
    {
        $request = \WebcastRequest::find($event['id']);
        $result = $this->send('Your request for webcasting has been '.strtoupper($request->status), $request->user->info->cotactnumber);
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
        $events->listen('user.webcast.status', 'Estreaming\Events\UserEventHandler@onWebcastStatusChanged');
    }
}