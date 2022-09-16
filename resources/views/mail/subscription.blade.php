@component('mail::message')
# TinyTime SUBSCRIPTION

You're receiving this email because you recently subscribed to TinyTime. 
Click on the button below to unsubscribe, if you didn't do this.

@component('mail::button', ['url' => $url])
UNSUBSCRIBE
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
