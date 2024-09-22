@extends('layouts.web-secondary')

@section('page-content')
<div class="container">
    <div class="row" style="/*padding-top: 50px;*/padding-bottom: 50px;">
        <div class="col-md-4 col-lg-4 col-xl-7"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7911.4945839340235!2d80.35143184593632!3d7.493129370076364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae33a0ea110d8a7%3A0x648eb720413d7743!2s575%20Kurunegala%20-%20Puttalam%20Rd%2C%20Kurunegala%2060000!5e0!3m2!1sen!2slk!4v1725991333933!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="col-md-4 col-lg-4 col-xl-5">
            <div class="row">
                <div class="col inner-other-package-area" style="/*padding-bottom: 15px;*/"><span class="inner-other-packages-subheading">Explore Thaprobana (Pvt) Ltd<br></span><span class="inner-other-packages-heading">Get In Touch With Us</span></div>
            </div>
            <div class="contact-details-area">
                <p class="contact-text" style="padding-left: 15px;font-size: 16px;margin-bottom: 10px;">569/A, Puttalam Road,Kurunegala,&nbsp;Sri lanka.<br></p>
                <p class="contact-text" style="padding-left: 15px;font-size: 16px;margin-bottom: 10px;">Mobile: +94
                    770238632<br></p>
                <p class="contact-text" style="padding-left: 15px;font-size: 16px;margin-bottom: 10px;">Email:
                    info@explorethaprobana.com<br></p>
                <p class="contact-text" style="padding-left: 15px;font-size: 16px;margin-bottom: 10px;">Skype:
                    explorethaprobana<br></p>
                <p class="contact-text" style="padding-left: 15px;font-size: 16px;margin-bottom: 10px;">WhatsApp /
                    Viber: +94 770238632<br></p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card card-body mx-5" style="font-family: 'Titillium Web', sans-serif;">
        <h3 class="text-center" style="padding-bottom: 25px;">
            <strong>Drop in your inquiry to us, we will get back to you soon with a response.</strong>
        </h3>
        <form method="post" action="{{ route('site.contact-submit') }}">
            @csrf

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <input class="form-control" type="text" name="contact_name" placeholder="Name" autocomplete="name" required value="{{ old('contact_name') }}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="contact_email" placeholder="Email" autocomplete="email" required value="{{ old('contact_email') }}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="contact_telephone" placeholder="Telephone" autocomplete="tel" value="{{ old('contact_telephone') }}">
                    </div>
                    <div class="form-group">
                        <select name="contact_country" id="contact_country" class="form-control" required>
                            @foreach (country_list() as $country)
                            <option value="{{ $country }}" {{ old('contact_name', '') == $country ? 'selected' : '' }}>{{ $country }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <textarea class="form-control" name="contact_message" rows="8" required placeholder="Enter your message here..">{{ old('contact_message') }}</textarea>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
            </div> -->
            <div class="form-group text-center">
                <button class="btn btn-outline-success btn-lg" type="submit"><i class="fas fa-paper-plane"></i> Send
                    Message</button>
            </div>
        </form>
    </div>
</div>
<style>
    .Correspondents_Block_head {
        margin-top: 30px;

    }

    .Correspondents_Block {
        background-color: #fbfbfb;
        margin-top: 30px;
        padding: 30px;
        font-family: 'Titillium Web', sans-serif;
        border-right: 1px solid #d0cece;
    }

    .Correspondents_Block:last-child {
        border-right: 0px solid #d0cece;

    }

    .Correspondents_Block:nth-last-child(3) {
        border-right: 0px solid #d0cece;
    }
</style>
<!-- <div class="container Correspondents_Block_head">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col inner-other-package-area">
                        <span class="inner-other-packages-subheading">Our Correspondents </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 Correspondents_Block">
                <h3>Sample Name </h3>
                <p>109/6, Muththettuwa Road, Mirihana,Sri Jayawardenapura Kotte, 11000</p>
                <p>sample@emailaddress.com</p>
                <p>+94 71 6821 573 | +94 76 4621 573</p>
            </div>
            <div class="col-md-4 Correspondents_Block">
                <h3>Sample Name </h3>
                <p>109/6, Muththettuwa Road, Mirihana,Sri Jayawardenapura Kotte, 11000</p>
                <p>sample@emailaddress.com</p>
                <p>+94 71 6821 573 | +94 76 4621 573</p>
            </div>
            <div class="col-md-4 Correspondents_Block">
                <h3>Sample Name </h3>
                <p>109/6, Muththettuwa Road, Mirihana,Sri Jayawardenapura Kotte, 11000</p>
                <p>sample@emailaddress.com</p>
                <p>+94 71 6821 573 | +94 76 4621 573</p>
            </div>
        </div>
    </div> -->
@include('layouts.partials.holiday-packages-carousel')
@include('layouts.partials.footer-quick-links')
@endsection

@push('custom-css')
@endpush