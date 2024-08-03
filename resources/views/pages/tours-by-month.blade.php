@extends('layouts.web-secondary')

@section('page-content')
    <div class="container" style="/*padding-top: 50px;*/padding-bottom: 50px;">
        <div class="row" style="padding-bottom: 30px;">
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/jan.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        January</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::JANUARY) }}">Find Out More</a>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/feb.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        February</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::FEBRUARY) }}">Find Out More</a>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/march.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        March</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::MARCH) }}">Find Out More</a>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/april.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        April</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::APRIL) }}">Find Out More</a>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom: 30px;padding-top: 30px;">
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/may.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        May</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::MAY) }}">Find Out More</a>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/jun.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        June</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::JUNE) }}">Find Out More</a>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/jul.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        July</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::JULY) }}">Find Out More</a>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/aug.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        August</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::AUGUST) }}">Find Out More</a>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom: 50px;padding-top: 30px;">
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/sep.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        September</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::SEPTEMBER) }}">Find Out More</a>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/oct.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        October</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::OCTOBER) }}">Find Out More</a>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/nov.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        November</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::NOVEMBER) }}">Find Out More</a>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 10px;padding-left: 10px;">
                <img class="img-fluid" src="assets/img/dec.jpg">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center"
                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                        December</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button"
                        style="font-family: 'Titillium Web', sans-serif;"
                        href="{{ route('site.tours-for-month', $MONTHS::DECEMBER) }}">Find Out More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
