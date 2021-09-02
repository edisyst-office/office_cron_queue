@component('mail::message')
# Welcome

Benvenuto nel mio sito.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
