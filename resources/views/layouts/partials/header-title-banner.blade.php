<div class="container">
    <div class="top-header-bar">
        <div class="row">
            <div class="col-md-12 col-lg-9 col-xl-9 top-header-left">
                <div class="top-header-area">
                    <span class="top-header-subheading d-block">{{ $pageSubHeading }}</span>
                    <span class="top-header-heading d-block">{{ $pageHeading }}</span>
                </div>
            </div>
            @isset($bannerActions)
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 top-header-right text-right">
                    @if (array_key_exists('print', $bannerActions))
                        <a href="{{ $bannerActions['print']['url'] ?? '#' }}" class="mr-2 transparent-button"
                            title="Click to download a printable document">
                            <img src="{{ asset('assets/img/print.png') }}">
                        </a>
                    @endif
                    @if (array_key_exists('download', $bannerActions))
                        <a href="{{ $bannerActions['download']['url'] ?? '#' }}" class="mr-2 transparent-button">
                            <img src="{{ asset('assets/img/download.png') }}">
                        </a>
                    @endif
                    @if (array_key_exists('share', $bannerActions))
                        <button type="button" class="mr-2 transparent-button">
                            <img src="{{ asset('assets/img/chat.png') }}">
                        </button>
                    @endif
                    @if (array_key_exists('inquiry', $bannerActions))
                        <a href="{{ route('site.contact') }}" class="btn btn-outline-light inquire-button" type="button"
                            data-toggle="" data-target="">
                            {{ $bannerActions['label'] ?? 'INQUIRE NOW' }}
                        </a>
                    @endif
                </div>
            @endisset
        </div>
    </div>
</div>
