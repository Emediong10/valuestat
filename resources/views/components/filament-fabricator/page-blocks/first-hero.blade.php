
@aware(['page'])

@props([
    'title',
    'background_image',
'display_text_size',
'sub_title',
'apple_store_link',
'apple_store',
'play_store_link',
'play_store',
'image1',
'image2',

])

<section id="slider" class="slider-element dark min-vh-100 include-header" style="background-image: url('storage/{{ $background_image }}');">
    <div class="slider-inner flex-column">

        <div class="vertical-middle">
            <div class="container">
                <div class="row align-items-lg-center g-0">

                    <div class="col-lg-6 col-md-6">
                        <h2 class="text-white display-{{ $display_text_size }} fw-bold">{{ $title }} </h2>
                        <p class="mb-4 lead fw-normal">{{ $sub_title }} </p>
                        <div>
                            <a href="{{ isset($apple_store_link) ? (str_starts_with($apple_store_link, 'http://') || str_starts_with($apple_store_link, 'https://') ? $apple_store_link : 'https://' . $apple_store_link) : '#' }}"            class="px-4 py-3 mt-2 bg-white shadow-sm btn text-dark rounded-3 nott ls0"><i class="icon-apple1 me-2"></i>{{$apple_store}}</a>

                            
                            <a href="{{ isset($play_store_link) ? (str_starts_with($play_store_link, 'http://') || str_starts_with($play_store_link, 'https://') ? $play_store_link : 'https://' . $play_store_link) : '#' }}" class="px-4 py-3 mt-2 bg-white shadow-sm ms-0 ms-lg-2 btn text-dark rounded-3 nott ls0"><i class="icon-google-play me-2"></i> {{ $play_store }} </a>
                        </div>
                        {{-- <p class="mt-2 text-white-50 text-uppercase ls1 fw-medium"><small>Sign up &amp; Get 30 Days Free trail</small></p> --}}
                    </div>

                    <div class="col-lg-1 d-md-none d-lg-block"></div>

                    <div class="col-lg-5 col-md-6 align-self-lg-end">
                        <div class="slide-imgs">
                            <img src="{{ asset('storage/'.$image1)}}" alt="Image" class="card-img">
                            <img src="{{ asset('storage/'.$image2)}} " alt="Image" class="iphone-img">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


{{-- </div> --}}

