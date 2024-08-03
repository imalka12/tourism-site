@extends('layouts.web-mailable')

@section('contents')
    <h3>Your inquiry request was received</h3>
    <p>Hello {{$sender_salutation}} {{$sender_name}},</p>
    <p>This is to confirm that your inquiry request was received successfully.</p>
    <p>We are processing your request and one of our travel experts will get in touch with you very soon.</p>
    <p>Thank you for taking time to send an inquiry request. We hope to give you the best holiday you spent in the Island of Paradise.</p>
    <p>Yours,<br /><strong>Explore Thaprobana Team</strong></p>
@endsection