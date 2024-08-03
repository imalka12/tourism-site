@extends('layouts.web-mailable')

@section('contents')
    <h3>We received your contact request</h3>
    <p>Hello {{$sender_name}},</p>
    <p>This is to confirm that we received your contact request successfully.</p>
    <p>One of our travel experts will get in touch with you very soon.</p>
    <p>Thank you for taking time to contact us.</p>
    <p>Yours,<br /><strong>Explore Thaprobana Team</strong></p>
@endsection