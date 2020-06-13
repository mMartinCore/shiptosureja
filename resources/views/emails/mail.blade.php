<div style="background:rgb(245, 245, 245); padding:12px ">

<h2>  Message from Customer to {{ config('app.name') }}</h2>
<h3>Customer's Name : {{ $name}} </h3>
<h3> Customer's Email : {{$from}}</h3>

<p >
    <h3> Customer's Message :  </h3>
    {{$messages}}
</p>

</div>
