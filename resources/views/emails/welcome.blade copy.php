 

@component('mail::message')
# Welcome to Ship To Sure Ja

 <p>Hi Marvin,</p>
<p> Thank you for signing up for a Ship to Sure Couriers account. You may access our website at any time at <a href="http://127.0.0.1:8000/">{{ config('app.name') }}</a></p>


# Your US Air Freight Shipping Address is: <h3 style="color:green">{{ config('app.name') }}101</h3>
Marvin Martin, <br>
# Shipping address
 101{{ config('app.name') }}
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}
Thanks,<br>
<a href="http://127.0.0.1:8000/">{{ config('app.name') }}</a>
@endcomponent
