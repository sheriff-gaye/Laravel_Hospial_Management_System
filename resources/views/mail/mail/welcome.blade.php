@component('mail::message')
<span><strong>Welcome to RVTH General Hospital</strong></span>
<hr>
Dear  {{ $appointment->name }},<br><br>
{{ $appointment->message }}<br>
@component('mail::button', ['url' => 'https://www.facebook.com'])
SUBSCRIBE
@endcomponent
Your sincerely,<br>
{{ config('app.name') }}.<br><br>

Thank your for booking an appointment, we will get back to you shortly.





