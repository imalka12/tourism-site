@extends('layouts.web-mailable')

@section('contents')
    <h3>New Inquiry Request</h3>
    <p><strong>Name: </strong> {{$sender_salutation}}. {{$sender_name}}</p>
    <p><strong>Email Address: </strong> {{$sender_email}}</p>
    <p><strong>Country: </strong> {{$sender_country}}</p>
    <p><strong>Phone: </strong> {{$sender_phone}}</p>
    <p><strong>Contact By: </strong> {{$contact_by}}</p>
    <p><strong>Message: </strong> {{$sender_message}}</p>
    
    <p><strong>IP Address: </strong>{{user_ip_address()}}</p>
@endsection