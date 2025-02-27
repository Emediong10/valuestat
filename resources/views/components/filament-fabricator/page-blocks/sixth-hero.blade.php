@aware(['page'])

@props([

'heading',
'subheading',
'icon',
'title',
'features',
'description',
'image',
'video'
])


<section id="content">
    <div class="content-wrap pb-0">
        <div class="section m-0 bg-transparent pb-0" style="padding-top: 100px;">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <h2 class="fw-bold h2 mb-4">{{ $heading }}</h2>
                        <p class="fw-normal mb-2 h6 text-muted">{{ $subheading }}</p>

                        <div class="row my-5">
                            @foreach ($features as $feature)
                                <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="{{ $feature['icon'] }}"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>{{ $feature['title'] }}</h3>
                                            <p>{{ $feature['description'] }}</p>
                                        </div>
                                    </div>
                                    @if (!$loop->last)
                                        <div class="line line-sm"></div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-5 d-flex align-items-end">
                        <div class="device-video-wrap">
                            <img src="{{ asset('storage/' . $image) }}" alt="Image">
                            <video poster="images/videos/deskwork.jpg" preload="auto" loop autoplay muted>
                                <source src="{{ asset('storage/' . $video) }}" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

