@aware(['page'])
@props([

    'testimonials',
    'image',
   ' content',
   'name'

])
<section id="content">
    <div class="content-wrap pb-0">
        <div style="padding: 20px 0; background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 80%, #FFF 80%);">
            <div class="section m-0 bg-color" >
            <div class="container dark dotted-bg bottommargin-lg">
                <div class="fslider testimonial testimonial-full center bg-transparent border-0 shadow-none p-0" data-animation="fade" data-pagi="false">
                    <div class="flexslider">
                        <div class="slider-wrap d-flex align-items-center">
                            @foreach($testimonials as $testimonial)
                                <div class="slide">
                                    <img src="{{ asset('storage/' . $testimonial['image']) }}" alt="Customer Testimonials">
                                    <div class="testi-content">
                                        <p>{{ $testimonial['content'] }}</p>
                                        <div class="testi-meta mt-4">
                                            {{ $testimonial['name'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
</section>

