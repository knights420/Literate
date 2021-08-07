@component('mail::message')
# Hello {{$name}}

Your Request for Literate app has been approved please login with following creds

Email: {{$email}}
<br>
Password: {{$password}}
@component('mail::button', ['url' => env('APP_URL').'/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
