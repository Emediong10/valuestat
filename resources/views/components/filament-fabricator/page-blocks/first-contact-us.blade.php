@aware(['page'])
@props(['heading', 'subheading', 'background_image'])


<section id="page-title" class="page-title-parallax page-title-dark page-title-center" style="background-image: url('storage/{{ $background_image }}'); background-size: cover; padding: 170px 0 100px;" data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">

    <div class="container clearfix">
        <h1>{{ $heading }}</h1>
        <span>{{ $subheading }}</span>
        {{-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol> --}}
    </div>

</section>


