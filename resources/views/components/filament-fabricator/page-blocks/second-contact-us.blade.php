@props(['page', 'contact_title', 'contact_description','content_title','content_sub_title',  ])

<section id="content">
    <div class="content-wrap pb-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <h2 class="h1 fw-bold mb-4">{{ $content_title }}</h2>
                    <p>{{ $content_sub_title }}</p>

                    <abbr title="Fax"><strong>Phone:</strong></abbr>{{ $phone_number }}<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> {{ $email }}<br>
                    <div class="mt-4">
                        <a href="" class="social-icon si-small si-colored rounded-0 si-facebook" title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-colored rounded-0 si-instagram" title="instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-colored rounded-0 si-google" title="google">
                            <i class="icon-google"></i>
                            <i class="icon-google"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 mt-4 mt-md-0">
                    <img src="demos/store/images/contact/1.jpg" alt="image">
                </div>
            </div>
            <div class="clear my-5"></div>

        </div>
        <div class="clear"></div>



        <div class="section bg-transparent py-3">
            <div class="container-fluid">
                <div class="row justify-content-center m-auto" style="max-width: 1000px;">
                    <div class="col-md-7">
                        <p class="h6 mb-0 text-muted">{{ $email_description }} <a href="mailto:{{ $email }}"><u>{{ $email }}</u></a> </p>
                    </div>
                    <div class="col-md-5 mt-3 mt-md-0">
                        <h2 class="h1 fw-bold ls--1 color"><a href="tel:{{ $phone_number }}">{{ $phone_number }}</a></h2>
                    </div>
                </div>
            </div>
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
