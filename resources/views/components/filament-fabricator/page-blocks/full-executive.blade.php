@aware(['page'])
@props(['executive'])
<section id="content" class="block-portfolio-single">
    <div class="content-wrap py-5">
        <div class="container">
            <div class="row gutter-50 align-items-start">

                <!-- Executive Image Gallery -->
                <div class="col-lg-7 portfolio-single-image" data-lightbox="gallery">
                    <div class="row col-mb-30">
                        @if(is_array($executive->image))
                            @foreach($executive->image as $image)
                                <a href="{{ asset('storage/' . $image) }}" class="col-lg-12 col-md-6" data-lightbox="gallery-item">
                                    <img class="img-fluid rounded shadow" src="{{ asset('storage/' . $image) }}" alt="Executive Image">
                                </a>
                            @endforeach
                        @else
                            <a href="{{ asset('storage/' . $executive->image) }}" class="col-lg-12 col-md-6" data-lightbox="gallery-item">
                                <img class="img-fluid rounded shadow" src="{{ asset('storage/' . $executive->image) }}" alt="Executive Image">
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Executive Details -->
                <div class="col-lg-5 portfolio-single-content content-sticky">
                  <h2 class="fw-bold text-primary">Name: {{ $executive->name }}</h2>
                    <h2 class="fw-bold text-primary">Position: {{ $executive->position }}</h2>
                    <p class="text-muted">{!! $executive->biography !!}</p>
                    <div class="line my-4"></div>

                    <!-- Social Media Links -->
                    <div class="d-flex align-items-center gap-3">
                        <span class="fw-semibold">Follow {{ $executive->name }} @:</span>
                        <div class="d-flex gap-2">
                            @foreach($executive->social_media as $handle)
                                <a href="{{ $handle['link'] }}" class="social-icon si-small si-light si-{{ $handle['platform'] }}">
                                    <i class="icon-{{ $handle['platform'] }}"></i>
                                    <i class="icon-{{ $handle['platform'] }}"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Styling -->
    <style>
        .portfolio-single-content h2 {
            font-size: 2rem;
            color: #343a40;
        }
        .portfolio-single-content p {
            font-size: 1rem;
            line-height: 1.6;
        }
        .portfolio-single-image img {
            max-height: 600px;
            object-fit: cover;
        }
        @media (min-width: 992px) {
            .content-sticky {
                position: sticky;
                top: 80px;
            }
        }
    </style>
</section>
