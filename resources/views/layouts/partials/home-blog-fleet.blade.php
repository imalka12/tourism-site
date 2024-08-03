<div class="container" style="margin-bottom: 50px;margin-top: 50px;">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col home-package-area" style="padding-bottom: 15px;"><span
                        class="home-packages-subheading">Travel Blog<br></span><span class="home-packages-heading-half">By
                        Explore Thaprobana</span></div>
            </div>

            <div>
                <div class="carousel slide carousel-fade" data-ride="carousel" id="home-blog-carousel">
                    <div class="carousel-inner" role="listbox">
                        @php
                            $isFirst = true;
                        @endphp
                        @foreach ($blogPosts as $post)
                            <div class="carousel-item {{ $isFirst ? 'active' : '' }}">
                                {{-- <img class="w-100 d-block lazyload"
                                    data-src="{{ imageUrl($post->image, ['w' => '595', 'h' => '502', 'fit' => 'crop']) }}"
                                    alt="Slide Image"> --}}
                                <img class="w-100 d-block lazyload"
                                    data-src="{{ imageUrl($post->image, ['w' => '595', 'h' => '524', 'fit' => 'crop']) }}"
                                    alt="Slide Image">
                                {{-- ['w' => 595, 'h' => 415, 'fit' => 'crop'] --}}
                                <h1 class="text-center home-blog-heading">{{ $post->title }}</h1>
                                <p class="home-blog-text">{{ $post->meta_description }}</p>
                                <div class="text-center">
                                    <a class="btn btn-lg text-uppercase text-center findmore-button" role="button"
                                        href="{{ route('site.blog-post', $post->slug) }}">Find Out More</a>
                                </div>
                            </div>
                            @php
                                $isFirst = false;
                            @endphp
                        @endforeach
                    </div>
                    <div class="d-none">
                        <a class="carousel-control-prev" href="#home-blog-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#home-blog-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < count($blogPosts); $i++)
                            <li data-target="#home-blog-carousel" data-slide-to="{{ $i }}"
                                {{ $i === 0 ? 'class="active"' : '' }}></li>
                        @endfor
                    </ol>
                </div>
            </div>
        </div> <!-- end:blog carousel -->

        <!-- transportation options carousel -->
        <div class="col">
            <div class="row">
                <div class="col home-package-area" style="padding-bottom: 15px;">
                    <span class="home-packages-subheading">Transportation Options</span><br />
                    <span class="home-packages-heading-half">In Sri Lanka</span>
                </div>
            </div>
            <div>
                <ul class="nav nav-tabs" id="home-transportation-nav">
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link active" data-target="#home-transportation-carousel"
                            data-slide-to="0">
                            <img class="img-fluid lazyload" data-src="{{ asset('assets/img/bus.jpg') }}">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link" data-target="#home-transportation-carousel"
                            data-slide-to="1">
                            <img class="img-fluid lazyload" data-src="{{ asset('assets/img/4by4.jpg') }}">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link" data-target="#home-transportation-carousel"
                            data-slide-to="2">
                            <img class="img-fluid lazyload" data-src="{{ asset('assets/img/car.jpg') }}">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link active" data-target="#home-transportation-carousel"
                            data-slide-to="3">
                            <img class="img-fluid lazyload" data-src="{{ asset('assets/img/domestic-plane.jpg') }}">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link" data-target="#home-transportation-carousel"
                            data-slide-to="4">
                            <img class="img-fluid lazyload" data-src="{{ asset('assets/img/suv.jpg') }}">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link" data-target="#home-transportation-carousel"
                            data-slide-to="5">
                            <img class="img-fluid lazyload" data-src="{{ asset('assets/img/train.jpg') }}">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link" data-target="#home-transportation-carousel"
                            data-slide-to="6">
                            <img class="img-fluid lazyload" data-src="{{ asset('assets/img/van.jpg') }}">
                        </a>
                    </li>
                </ul>

                <div id="home-transportation-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        @php
                            $isFirst = true;
                        @endphp
                        @foreach ($transportOptions as $transport)
                            <div class="carousel-item {{ $isFirst ? 'active' : '' }}">
                                <img class="lazyload"
                                    data-src="{{ imageUrl($transport->image, ['w' => 595, 'h' => 415, 'fit' => 'crop']) }}"
                                    class="d-block w-100" alt="Image for {{ $transport->title }}">
                                <h1 class="text-center home-blog-heading">{{ $transport->title }}</h1>
                                <p class="home-blog-text">{{ nl2br($transport->description) }}</p>
                                <div class="text-center">
                                    <a class="btn btn-lg text-uppercase text-center findmore-button" role="button"
                                        href="{{ route('site.transport-options') }}">Find Out More</a>
                                </div>
                            </div>
                            @php
                                $isFirst = false;
                            @endphp
                        @endforeach
                    </div>
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < count($transportOptions); $i++)
                            <li data-target="#home-transportation-carousel" data-slide-to="{{ $i }}"
                                {{ $i === 0 ? 'class="active"' : '' }}></li>
                        @endfor
                    </ol>
                </div>

                {{--                <div class="carousel slide" data-ride="carousel" id="carousel-5"> --}}
                {{--                    <div class="carousel-inner" role="listbox"> --}}
                {{--                        <div class="carousel-item active"> --}}
                {{--                            <div> --}}
                {{--                                <ul class="nav nav-tabs"> --}}
                {{--                                    <li class="nav-item" data-slide-to="0"><a class="nav-link" role="tab" --}}
                {{--                                                                              data-toggle="tab" href="#tab-1" --}}
                {{--                                                                              style="padding-right: 0;padding-left: 0;padding-top: 0px;padding-bottom: 0px;"> --}}
                {{--                                            <img class="img-fluid lazyload" --}}
                {{--                                                 data-src="assets/img/domestic-plane.jpg"></a></li> --}}
                {{--                                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" --}}
                {{--                                                            href="#tab-2" --}}
                {{--                                                            style="padding-right: 0;padding-left: 0;padding-top: 0px;padding-bottom: 0px;"><img --}}
                {{--                                                class="img-fluid lazyload" data-src="assets/img/train.jpg"></a></li> --}}
                {{--                                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" --}}
                {{--                                                            href="#tab-3" --}}
                {{--                                                            style="padding-right: 0;padding-left: 0;padding-top: 0px;padding-bottom: 0px;"><img --}}
                {{--                                                class="img-fluid lazyload" data-src="assets/img/bus.jpg"></a></li> --}}
                {{--                                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" --}}
                {{--                                                            href="#tab-4" --}}
                {{--                                                            style="padding-right: 0;padding-left: 0;padding-top: 0px;padding-bottom: 0px;"><img --}}
                {{--                                                class="img-fluid lazyload" data-src="assets/img/van.jpg"></a></li> --}}
                {{--                                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" --}}
                {{--                                                            href="#tab-5" --}}
                {{--                                                            style="padding-right: 0;padding-left: 0;padding-top: 0px;padding-bottom: 0px;"><img --}}
                {{--                                                class="img-fluid lazyload" data-src="assets/img/car.jpg"></a></li> --}}
                {{--                                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" --}}
                {{--                                                            href="#tab-6" --}}
                {{--                                                            style="padding-right: 0;padding-left: 0;padding-top: 0px;padding-bottom: 0px;"><img --}}
                {{--                                                class="img-fluid lazyload" data-src="assets/img/suv.jpg"></a></li> --}}
                {{--                                    <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" --}}
                {{--                                                            href="#tab-7" --}}
                {{--                                                            style="padding-right: 0;padding-left: 0;padding-top: 0px;padding-bottom: 0px;"><img --}}
                {{--                                                class="img-fluid lazyload" data-src="assets/img/4by4.jpg"></a></li> --}}
                {{--                                </ul> --}}
                {{--                                <div class="tab-content"> --}}
                {{--                                    <div class="tab-pane" role="tabpanel" id="tab-1"><img --}}
                {{--                                            data-src="assets/img/domestic-plane-banner.jpg" class="lazyload"> --}}
                {{--                                        <h1 class="text-center home-blog-heading">Sri Lanka ranked number one must --}}
                {{--                                            visit&nbsp;destination for 2019 by Lonely Planet’s&nbsp;Best in Travel --}}
                {{--                                            guide </h1> --}}
                {{--                                        <p class="home-blog-text">The UK’s top-tier Guardian newspaper hails Lonely --}}
                {{--                                            Planet as ranking Sri Lanka as the number one must-visit tourist --}}
                {{--                                            destination for 2019.<br>Says Lonely Planet author Ethan --}}
                {{--                                            Gelber:&nbsp;“Already notable to intrepid --}}
                {{--                                            travellers for its mix of religions and cultures, its timeless temples, --}}
                {{--                                            its rich and accessible wildlife, its growing surf scene and its people --}}
                {{--                                            who defy all odds by their welcome and friendliness.”</p> --}}
                {{--                                        <div class="text-center"><a --}}
                {{--                                                class="btn btn-lg text-uppercase text-center findmore-button" --}}
                {{--                                                role="button" href="#">Find Out More</a></div> --}}
                {{--                                    </div> --}}
                {{--                                    <div class="tab-pane" role="tabpanel" id="tab-2"><img --}}
                {{--                                            data-src="assets/img/train-tp.jpg" class="lazyload"> --}}
                {{--                                        <h1 class="text-center home-blog-heading">Sri Lanka ranked number one must --}}
                {{--                                            visit&nbsp;destination for 2019 by Lonely Planet’s&nbsp;Best in Travel --}}
                {{--                                            guide </h1> --}}
                {{--                                        <p class="home-blog-text">The UK’s top-tier Guardian newspaper hails Lonely --}}
                {{--                                            Planet as ranking Sri Lanka as the number one must-visit tourist --}}
                {{--                                            destination for 2019.<br>Says Lonely Planet author Ethan --}}
                {{--                                            Gelber:&nbsp;“Already notable to intrepid --}}
                {{--                                            travellers for its mix of religions and cultures, its timeless temples, --}}
                {{--                                            its rich and accessible wildlife, its growing surf scene and its people --}}
                {{--                                            who defy all odds by their welcome and friendliness.”</p> --}}
                {{--                                        <div class="text-center"><a --}}
                {{--                                                class="btn btn-lg text-uppercase text-center findmore-button" --}}
                {{--                                                role="button" href="#">Find Out More</a></div> --}}
                {{--                                    </div> --}}
                {{--                                    <div class="tab-pane" role="tabpanel" id="tab-3"><img --}}
                {{--                                            data-src="assets/img/bus-tp.jpg" class="lazyload"> --}}
                {{--                                        <h1 class="text-center home-blog-heading">Sri Lanka ranked number one must --}}
                {{--                                            visit&nbsp;destination for 2019 by Lonely Planet’s&nbsp;Best in Travel --}}
                {{--                                            guide </h1> --}}
                {{--                                        <p class="home-blog-text">The UK’s top-tier Guardian newspaper hails Lonely --}}
                {{--                                            Planet as ranking Sri Lanka as the number one must-visit tourist --}}
                {{--                                            destination for 2019.<br>Says Lonely Planet author Ethan --}}
                {{--                                            Gelber:&nbsp;“Already notable to intrepid --}}
                {{--                                            travellers for its mix of religions and cultures, its timeless temples, --}}
                {{--                                            its rich and accessible wildlife, its growing surf scene and its people --}}
                {{--                                            who defy all odds by their welcome and friendliness.”</p> --}}
                {{--                                        <div class="text-center"><a --}}
                {{--                                                class="btn btn-lg text-uppercase text-center findmore-button" --}}
                {{--                                                role="button" href="#">Find Out More</a></div> --}}
                {{--                                    </div> --}}
                {{--                                    <div class="tab-pane" role="tabpanel" id="tab-4"><img --}}
                {{--                                            data-src="assets/img/van-tp.jpg" class="lazyload"> --}}
                {{--                                        <h1 class="text-center home-blog-heading">Sri Lanka ranked number one must --}}
                {{--                                            visit&nbsp;destination for 2019 by Lonely Planet’s&nbsp;Best in Travel --}}
                {{--                                            guide </h1> --}}
                {{--                                        <p class="home-blog-text">The UK’s top-tier Guardian newspaper hails Lonely --}}
                {{--                                            Planet as ranking Sri Lanka as the number one must-visit tourist --}}
                {{--                                            destination for 2019.<br>Says Lonely Planet author Ethan --}}
                {{--                                            Gelber:&nbsp;“Already notable to intrepid --}}
                {{--                                            travellers for its mix of religions and cultures, its timeless temples, --}}
                {{--                                            its rich and accessible wildlife, its growing surf scene and its people --}}
                {{--                                            who defy all odds by their welcome and friendliness.”</p> --}}
                {{--                                        <div class="text-center"><a --}}
                {{--                                                class="btn btn-lg text-uppercase text-center findmore-button" --}}
                {{--                                                role="button" href="#">Find Out More</a></div> --}}
                {{--                                    </div> --}}
                {{--                                    <div class="tab-pane" role="tabpanel" id="tab-5"><img class="img-fluid" --}}
                {{--                                                                                          data-src="assets/img/car-tp.jpg" --}}
                {{--                                                                                          class="lazyload"> --}}
                {{--                                        <h1 class="text-center home-blog-heading">Sri Lanka ranked number one must --}}
                {{--                                            visit&nbsp;destination for 2019 by Lonely Planet’s&nbsp;Best in Travel --}}
                {{--                                            guide </h1> --}}
                {{--                                        <p class="home-blog-text">The UK’s top-tier Guardian newspaper hails Lonely --}}
                {{--                                            Planet as ranking Sri Lanka as the number one must-visit tourist --}}
                {{--                                            destination for 2019.<br>Says Lonely Planet author Ethan --}}
                {{--                                            Gelber:&nbsp;“Already notable to intrepid --}}
                {{--                                            travellers for its mix of religions and cultures, its timeless temples, --}}
                {{--                                            its rich and accessible wildlife, its growing surf scene and its people --}}
                {{--                                            who defy all odds by their welcome and friendliness.”</p> --}}
                {{--                                        <div class="text-center"><a --}}
                {{--                                                class="btn btn-lg text-uppercase text-center findmore-button" --}}
                {{--                                                role="button" href="#">Find Out More</a></div> --}}
                {{--                                    </div> --}}
                {{--                                    <div class="tab-pane" role="tabpanel" id="tab-6"><img --}}
                {{--                                            data-src="assets/img/suv-tp.jpg" class="lazyload"> --}}
                {{--                                        <h1 class="text-center home-blog-heading">Sri Lanka ranked number one must --}}
                {{--                                            visit&nbsp;destination for 2019 by Lonely Planet’s&nbsp;Best in Travel --}}
                {{--                                            guide </h1> --}}
                {{--                                        <p class="home-blog-text">The UK’s top-tier Guardian newspaper hails Lonely --}}
                {{--                                            Planet as ranking Sri Lanka as the number one must-visit tourist --}}
                {{--                                            destination for 2019.<br>Says Lonely Planet author Ethan --}}
                {{--                                            Gelber:&nbsp;“Already notable to intrepid --}}
                {{--                                            travellers for its mix of religions and cultures, its timeless temples, --}}
                {{--                                            its rich and accessible wildlife, its growing surf scene and its people --}}
                {{--                                            who defy all odds by their welcome and friendliness.”</p> --}}
                {{--                                        <div class="text-center"><a --}}
                {{--                                                class="btn btn-lg text-uppercase text-center findmore-button" --}}
                {{--                                                role="button" href="#">Find Out More</a></div> --}}
                {{--                                    </div> --}}
                {{--                                    <div class="tab-pane active" role="tabpanel" id="tab-7"><img --}}
                {{--                                            data-src="assets/img/jeep-tp.jpg" class="lazyload"> --}}
                {{--                                        <h1 class="text-center home-blog-heading">Sri Lanka ranked number one must --}}
                {{--                                            visit&nbsp;destination for 2019 by Lonely Planet’s&nbsp;Best in Travel --}}
                {{--                                            guide </h1> --}}
                {{--                                        <p class="home-blog-text">The UK’s top-tier Guardian newspaper hails Lonely --}}
                {{--                                            Planet as ranking Sri Lanka as the number one must-visit tourist --}}
                {{--                                            destination for 2019.<br>Says Lonely Planet author Ethan --}}
                {{--                                            Gelber:&nbsp;“Already notable to intrepid --}}
                {{--                                            travellers for its mix of religions and cultures, its timeless temples, --}}
                {{--                                            its rich and accessible wildlife, its growing surf scene and its people --}}
                {{--                                            who defy all odds by their welcome and friendliness.”</p> --}}
                {{--                                        <div class="text-center"><a --}}
                {{--                                                class="btn btn-lg text-uppercase text-center findmore-button" --}}
                {{--                                                role="button" href="#">Find Out More</a></div> --}}
                {{--                                    </div> --}}
                {{--                                </div> --}}
                {{--                            </div> --}}
                {{--                        </div> --}}
                {{--                    </div> --}}
                {{--                    <div class="d-none"><a class="carousel-control-prev" href="#carousel-5" role="button" --}}
                {{--                                           data-slide="prev"><span class="carousel-control-prev-icon"></span><span --}}
                {{--                                class="sr-only">Previous</span></a><a class="carousel-control-next" --}}
                {{--                                                                      href="#carousel-5" role="button" --}}
                {{--                                                                      data-slide="next"><span --}}
                {{--                                class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a> --}}
                {{--                    </div> --}}
                {{--                    <ol class="carousel-indicators"> --}}
                {{--                        <li data-target="#carousel-5" data-slide-to="0" class="active"></li> --}}
                {{--                        <li data-target="#carousel-5" data-slide-to="1"></li> --}}
                {{--                        <li data-target="#carousel-5" data-slide-to="2"></li> --}}
                {{--                    </ol> --}}
                {{--                </div> <!-- end:vehicles carousel --> --}}
            </div>
        </div>
    </div>
</div>
