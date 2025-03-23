@aware(['page'])
@props(['title', 'description'])
<section id="slider" class="py-5 slider-element dark min-vh-25 min-vh-md-50 include-header"  style="padding: 100px 0; background-color:rgb(61,128,228);">
    <div class="slider-inner">

        <div class="text-center vertical-middle">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-6 col-md-6">
                        <h2 class="mb-2 text-white display-3 fw-bold">{{ $title }}</h2>
                        <p class="mb-0 lead fw-normal">{{ $description }}</p>
                    </div>

                </div>
            </div>
        </div>

    </div>


</section>
