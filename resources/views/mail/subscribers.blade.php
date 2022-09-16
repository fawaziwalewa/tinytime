@component('mail::message')
# NEW SUBSCRIBER

You've got a new subscriber. Click on the button below to check subscribers list:

@component('mail::button', ['url' => 'https://tinyti.me/adhsfaldhflasdjajjYGSKllsaalksk'])
CHECK LIST
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
