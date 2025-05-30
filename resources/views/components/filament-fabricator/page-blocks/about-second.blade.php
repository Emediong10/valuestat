@aware(['page'])

@props(['main_heading', 'sub_heading', 'features', 'feature', 'image', 'title', 'description'])

<div class="py-0 my-0 bg-transparent section">
    <div class="container-fluid">
        <div class="container">
            <div class="mx-auto mt-4 text-center bottommargin heading-block" style="max-width: 640px;">
                <h2 class="mb-4 nott">{{ $main_heading }}</h2>
                <p class="mb-5 lead fw-normal font-primary">
                    {{ $sub_heading }}
                </p>
            </div>
        </div>

        <div class="clear"></div>

        @foreach ($features as $index => $feature)
            <div class="row align-items-md-center {{ $index % 2 !== 0 ? 'flex-md-row-reverse' : '' }}">
                <div class="col-12 col-md-6 px-0 d-flex align-items-stretch"
                    style="min-height: 250px; min-height: 50vh !important; background: url('{{ asset('storage/' . $feature['image']) }}') no-repeat center center; background-size: cover;">
                </div>
                <div class="p-5 col-12 col-md-6 p-lg-6">
                    <h3 class="h3 bottommargin fw-medium px-lg-5">{{ $index + 1 }}. {{ $feature['title'] }}</h3>

                    <div class="m-0 px-lg-5">
                        {!! Str::markdown($feature['description']) !!}
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        @endforeach

    </div>
</div>
