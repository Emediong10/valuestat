@aware(['page', 'executives', 'url_prefix'])

<section id="content">
    <div class="content-wrap pb-0">
        <div class="container mb-5">
            <div class="heading-block text-center">
                <h3 class="nott mb-3 fw-semibold ls0">Our Leadership</h3>
            </div>
            <div class="row col-mb-50 mb-0">
                @foreach($executives as $member)
                    <div class="col-lg-3 col-md-6">
                        <div class="team shadow-lg rounded overflow-hidden">
                            <div class="team-image position-relative">
                                <img src="{{ Storage::url(is_array($member['image']) ? $member['image'][0] : $member['image']) }}"
                                     alt="{{ $member['name'] }}"
                                     class="img-fluid w-100">
                            </div>
                            <div class="team-desc text-center p-3">
                                <div class="team-title">
                                    <a href="/about/{{ $member->slug }}" class="text-dark">
                                        <h4 class="mb-1">{{ $member['name'] }}</h4>
                                    </a>

                                    <h5 class="fw-medium text-muted mb-3"><b>{{ $member['position'] }}</b></h5>
                                </div>
                                <div class="d-flex justify-content-center gap-2">
                                    @foreach($member->social_media as $handle)
                                        <a href="{{ $handle['link'] }}"
                                           class="social-icon si-small si-light si-{{ $handle['platform'] }}">
                                            <i class="icon-{{ $handle['platform'] }}"></i>
                                            <i class="icon-{{ $handle['platform'] }}"></i>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
