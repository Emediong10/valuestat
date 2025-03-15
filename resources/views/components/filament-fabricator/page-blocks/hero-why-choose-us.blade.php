@aware(['page'])

@props(['title','features', 'description', 'subtitle', 'content_description', 'content_title','icon', 'color'])
<div class="container">
    <div class="mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">
        <h5 class="text-uppercase ls1 text-muted mb-3">{{ $subtitle }}</h5>
        <h2 class="nott mb-4">{{ $title }}</h2>
        <p class="lead fw-normal font-primary mb-5">{{ $description }}</p>
    </div>

    <div class="features-items mx-auto" style="max-width: 1000px;">
        <div class="row justify-content-around">
            @foreach ($features as $feature)
                <div class="col-md-5 bottommargin-lg">
                    <div class="feature-box media-box">
                        <div class="fbox-icon">
                            <i class="{{ $feature['icon'] }} text-{{ $feature['color'] }}"></i>
                        </div>
                        <div class="fbox-content">
                            <h2 class="h4 fw-bold mb-4">{{ $feature['content_title'] }}</h2>
                            <div class="lead fw-normal text-black-50">{{ $feature['content_description'] }}</div>
                        </div>
                    </div>
                </div>
                @if($loop->iteration % 2 == 0)
                    </div><div class="row justify-content-around">
                @endif
            @endforeach
        </div>
    </div>
</div>
