<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Explore Thaprobana (Pvt) Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;font-family:'Helvetica Neue LT', 'Helvetica Neue', Helvetica, Arial,
      sans-serif;font-size:16px;font-weight:400;line-height:24px;">
    <div id="wrapper"
        style="width:640px;margin-top:15px;margin-bottom:20px;margin-right:auto;margin-left:auto;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;border-width:1px;border-style:solid;border-color:#efeeee;background-color:#fffbef;">
        <header style="text-align:center;padding-top:15px;padding-bottom:0px;padding-right:10px;padding-left:10px;">
            <a href="{{route('site.home')}}" target="_blank">
                <img src="{{ url('assets/img/TTL_H_logo.png') }}" alt="" class="logo-image">
            </a>
        </header>
        <div id="content" style="padding-top:15px;padding-bottom:15px;padding-right:50px;padding-left:50px;text-align:justify;">
            @yield('contents')
        </div>
        <footer style="text-align:center;font-size:12px;background-color:#eeeeee;padding-top:35px;padding-bottom:35px;padding-right:0px;padding-left:0px;border-width:1px;border-style:solid;border-color:#efeeee;">
            <div id="tripadv" style="margin-bottom:10px;">
                <a href="https://www.tripadvisor.com/Attraction_Review-g293962-d8853955-Reviews-The_Travel_Lanka_Leisure-Colombo_Western_Province.html"
                    target="_blank">
                    <img src="{{ url('assets/img/email_assets/Tripadvisor_certificate200.png') }}" alt="">
                </a>
            </div>
            <p id="company_name"
                style="margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;font-weight:bold;font-size:14px;">
                Explore Thaprobana (Pvt) Ltd</p>
            <p style="margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;">569/A, Puttalam Road,
                Kurunegala, Sri lanka.</p>
            <p style="margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;"><strong>Mobile: </strong>
                +94 770 238 632 | <strong>Tel:</strong> +94 xxx xxx xxx | <strong>Email: </strong>info@explorethaprobana.com</p>
            <p style="margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;"><strong>Skype:
                </strong>explorethaprobana | <strong>WhatsApp / Viber: </strong>+94 722 377 377</p>
            <div id="social-media" style="margin-top:10px;margin-bottom:0px;margin-right:0px;margin-left:0px;">
                <a href="https://www.facebook.com/thetravellanka/" class="facebook"
                    style="text-decoration:none;color:inherit;">
                    <img src="{{ url('assets/img/email_assets/Facebook_logo-32.png') }}"
                        alt="Travel Lanka Leisure on Facebook" width="32" height="32">
                </a>
                <a href="https://www.instagram.com/thetravellanka/" class="instagram" target="_blank"
                    style="text-decoration:none;color:inherit;">
                    <img src="{{ url('assets/img/email_assets/instgram_logo-32.png') }}"
                        alt="Travel Lanka Leisure on Instagram" width="32" height="32">
                </a>
                <a href="https://twitter.com/TheTravelLanka2" class="twitter" target="_blank"
                    style="text-decoration:none;color:inherit;">
                    <img src="{{ url('assets/img/email_assets/twiter_logo-32.png') }}"
                        alt="Travel Lanka Leisure on Twitter" width="32" height="32">
                </a>
                <a href="https://www.linkedin.com/company/the-travel-lanka-leisure-pvt-ltd/about/" class="linkedin"
                    target="_blank" style="text-decoration:none;color:inherit;">
                    <img src="{{ url('assets/img/email_assets/linkdin_logo-32.png') }}"
                        alt="Travel Lanka Leisure on LinkedIn" width="32" height="32">
                </a>
            </div>
            <p class="disclaimer"
                style="margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;font-size:0.8em;line-height:1em;text-align:center;">
                You received this email because you sent an inquiry request from our website. <br />We care
                about your privacy and never misuse your information. Please read our <a href="{{route('site.privacy-policy')}}"
                    style="text-decoration:none;color:inherit;font-weight:bold;">privacy policy</a> for more
                information.</p>
        </footer>
    </div>
</body>

</html>