<div class="container testimonial-section">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col home-testimonial-heading-area">
                    <span class="home-packages-subheading">Client<br></span>
                    <span class="home-packages-heading">Feedbacks</span>
                </div>
            </div>
            <div class="row">
                <div class="col testimonial-left-area">
                    <div class="row">
                        <div class="col testimonial-left-content-area">
                            <p class="tesimonial-name" style="padding-top: 10px;">{{$tripAdvisorReview->user_name}} {{'@' . __($tripAdvisorReview->user_handle)}}</p>
                            <h3 class="testimonial-heading">{{$tripAdvisorReview->title}}</h3>
                            {!! str_replace('<p>', '<p class="testimonial-content">', $tripAdvisorReview->content) !!}
                            <p class="testimonial-content">Date of experience: {{ date('F Y', strtotime($tripAdvisorReview->visited_on)) }}<br></p>
                            <hr class="testimonial-hr-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col testimonial-left-content-area">
                            <p class="tesimonial-name" style="padding-top: 1px;">{{$lametayelReview->user_name}}</p>
                            <h3 class="testimonial-heading">{{$lametayelReview->title}}</h3>
                            {!! str_replace('<p>', '<p class="testimonial-content">', $lametayelReview->content) !!}
                            <p class="testimonial-content">Date of experience: {{ date('F Y', strtotime($lametayelReview->visited_on)) }}<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-xl-3">
            <div class="row">
                <div class="col">
                    <p class="home-followus-heading">Follow Us On :-</p>
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding-right: 0px;padding-left: 0px;">
                    <a href="{{setting('social.facebook')}}" target="_blank">
                        <img class="img-fluid lazyload" data-src="assets/img/testi-fb.jpg" style="padding: 0px;width: 100%;height: 100%;">
                    </a>
                </div>
                <div class="col" style="padding-right: 15px;padding-left: 0px;">
                    <a href="{{setting('social.instagram')}}" target="_blank">
                        <img class="img-fluid lazyload" data-src="assets/img/instagram.jpg" style="width: 100%;height: 100%;">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding-right: 0px;padding-left: 0px;">
                    <a href="{{setting('social.pinterest')}}" target="_blank">
                        <img class="img-fluid lazyload" data-src="assets/img/pinterest.jpg" style="padding: 0px;width: 100%;height: 100%;">
                    </a>
                </div>
                <div class="col" style="padding-right: 15px;padding-left: 0px;">
                    <a href="{{setting('social.twitter')}}" target="_blank">
                        <img class="img-fluid lazyload" data-src="assets/img/twitter.jpg" style="width: 100%;height: 100%;">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding: 0;padding-right: 15px;">
                    <a href="{{setting('social.google')}}" target="_blank">
                        <img class="img-fluid lazyload" data-src="assets/img/testi-google2.jpg" style="width: 100%;height: 100%;">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding: 0;padding-right: 15px;">
                    <a href="{{setting('social.google')}}" target="_blank">
                        <img class="img-fluid lazyload" data-src="assets/img/testi-trustpilot.jpg" style="width: 100%;height: 100%;">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding: 0;padding-right: 15px;">
                    <a href="{{setting('social.youtube')}}" target="_blank">
                        <img class="img-fluid lazyload" data-src="assets/img/testi-youtube-2.jpg" style="width: 100%;height: 100%;">
                    </a>
                </div>
            </div>
        </div> -->
    </div>
</div>
