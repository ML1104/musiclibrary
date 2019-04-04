@component('mail::message')
# Welcome to the platform

## Good to see you!

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis deleniti dicta error fugit, odio rem totam!
Dolore ex facilis ipsum magni minus, porro reprehenderit unde voluptate. Blanditiis consectetur, in.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
