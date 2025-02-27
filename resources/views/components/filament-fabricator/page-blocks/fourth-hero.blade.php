@aware(['page'])

@props([
    'gallery_image',
    'title',
    'sub_title',
    'collection'

])

        <div class="section m-0" style="padding: 100px 0; background-color: rgba(61,128,228,0.05)">

            <div class="container clearfix">

                <div class="heading-block mx-auto center" style="max-width: 500px">
                    {{-- <h5 class="text-uppercase ls1 text-muted mb-2">Gallery</h5> --}}
                    <h2 class="nott mb-3">{{ $title }}</h2>
                    <p class="h6 fw-normal text-black-50">{{ $sub_title }}</p>
                </div>

            </div>

            <div class="masonry-thumbs grid-container grid-4" data-big="4" data-lightbox="gallery">
                @foreach ($collection as $item)
                <a class="grid-item" href="{{ url('storage', $item['gallery_image']) }}" data-lightbox="gallery-item"><img src="{{ url('storage', $item['gallery_image']) }}" alt="Gallery Thumb 1"></a>

                @endforeach

            </div>


        </div>






