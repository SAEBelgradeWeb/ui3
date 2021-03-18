@component('mail::message')
# This is a new offer

Hello {{ $doctor->name }}. Please report for surgery immediatelly!

@component('mail::button', ['url' => 'https://ui3.test/buy'])
Buy Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
