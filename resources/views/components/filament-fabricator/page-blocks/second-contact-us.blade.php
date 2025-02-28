@props(['page',
 'contact_title',
 'contact_description',
 'content_title',
 'content_sub_title',
 'phone',
 'content_title',
 'email',
 'getSocial',
 'name',
 'url',
 'card_image'
  ])

<section id="content">
    <div class="content-wrap pb-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <h2 class="h1 fw-bold mb-4">{{ $content_title }}</h2>
                    <p>{{ $content_sub_title }}</p>

                    <abbr title="Fax"><strong>Phone:</strong></abbr>{{ $phone }}<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> {{ $email }}<br>
                    <div class="mt-4">
                        @foreach($getSocial as $social)
                            <a href="{{ $social['url'] }}" class="social-icon si-small si-colored rounded-0 si-{{ $social['name'] }}" title="{{ ucfirst($social['name']) }}">
                                <i class="icon-{{ $social['name'] }}"></i>
                                {{-- <i class="icon-{{ $social['name'] }}"></i> --}}
                            </a>
                        @endforeach
                    </div>

                </div>

                <div class="col-lg-7 col-md-6 mt-4 mt-md-0">
                    <img src="{{ asset('storage/'.$card_image)}}" alt="image">
                </div>
            </div>
            <div class="clear my-5"></div>

        </div>
        

    </div>
</section>





<section id="content">
    <div class="content-wrap">

        <div class="section bg-color" style="background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 50%, #FFF 50%);">
            <div class="container clearfix">
                <div class="row mx-auto dotted-bg" style="max-width: 740px">
                    <div class="col-md-12">
                        <div class="center dark mb-5">
                            <i class="icon-line-help h1 "></i>
                            <h2 class="fw-bold mb-2">{{ $contact_title }}</h2>
                            <p class="fw-normal mb-2 lead">{{ $contact_description }}</p>
                        </div>

                        <livewire:contact-us-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
