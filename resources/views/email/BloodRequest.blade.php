@component('mail::message')
# Introduction

<h1>Hi, We Need {{ $info['blood_group']??'N/A' }} Blood in {{ $info['location']??'N/A' }}.</h1>
<h3>phone no {{ $info['phone']??'N/A' }}</h3>

@component('mail::button', ['url' => $info['url']??'N/A'])
Want To Donate
@endcomponent

<a href="{{ $info['url'] }}">{{ $info['url'] }}</a><br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
