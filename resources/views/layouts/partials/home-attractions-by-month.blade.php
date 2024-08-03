<div class="container popular-activity-section">
    <div class="row">
        <div class="col home-package-area" style="padding-bottom: 15px;">
            <span class="home-packages-subheading">Most Popular Activities<br></span>
        </div>
    </div>
    <div>
        <div class="carousel slide" data-ride="carousel" id="carousel-3">
            <div class="carousel-inner" role="listbox">
                @php
                    $months = [
                        'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'
                    ];
                    $num = 1;
                    $isFirst = true;
                    $dots = 0;
                @endphp

                @foreach ($months as $month)
                    @if (\array_key_exists($month, $activitiesByMonth))
                        @php
                            $_macs = $activitiesByMonth[$month];
                            $cityActivity = $_macs->random(1)[0];
                        @endphp

                        @if (!empty($cityActivity))
                            @if ($num == 1)
                                <div class="carousel-item {{$isFirst? 'active' : ''}}"><div class="row">
                            @endif
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="padding-right: 5px;padding-left: 5px;">
                                <img class="img-fluid lazyload" data-src="{{imageUrl($cityActivity->image, ['w' => 595, 'h' => 604, 'fit' => 'crop'])}}">
                                <div class="text-center home-monthly-package-text-area" style="color: #ffffff;">
                                    <h1 class="text-center home-popular-activities-heading">{{$cityActivity->activity->title}}</h1>
                                    <p class="text-center home-popular-activities-subheading">
                                        <strong>{{ucwords($month)}} </strong> - {{$cityActivity->title}}
                                    </p>
                                    <p class="home-popular-activities-text">{{$cityActivity->meta_description}}</p>
                                    <a class="btn btn-lg text-uppercase findmore-white" role="button" 
                                    style="font-family: 'Titillium Web', sans-serif;" 
                                    href="{{route('site.city-activity', $cityActivity->slug)}}">Find Out More</a>
                                </div>
                            </div>
                            @if ($num == 2)
                                </div></div>
                                @php
                                    $num = 1;
                                    $dots++;
                                @endphp
                            @else 
                                @php
                                    $num++;
                                @endphp
                            @endif
                            @php
                                $isFirst = false;
                            @endphp
                        @endif
                    @endif
                @endforeach
            </div>
            <div>
                <a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev"></a>
                <a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next"></a>
            </div>
            <ol class="carousel-indicators">
                @for ($i = 0; $i < $dots; $i++)
                <li data-target="#carousel-3" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active' : ''}} ba packages-indicators"></li>
                @endfor
            </ol>
        </div>
    </div>
</div>