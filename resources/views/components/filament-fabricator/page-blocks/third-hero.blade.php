@aware(['page'])

@props([
'background_image',
'title',
'collection',
'sub_title',
'image_position',
'text_position',
])



          <div class="row align-items-stretch align-content-stretch g-0 topmargin">

            <div class="{{ $image_position }}"
            style="background: url('{{ asset('storage/' . $background_image) }}') center center no-repeat;
                 background-size: 100% auto;
             background-color: #f8f9fa;
             min-height: 700px;">
       </div>

            <div class="{{ $text_position }}">
                <div class="section-features">

                @foreach ($collection as $item)
                <h2 class="mb-3 h4 fw-semibold">{{ $item['title'] }}</h2>
                <p class="lead fw-normal text-white-500">{{ $item['sub_title'] }}</p>

                @endforeach
                </div>
            </div>
        </div>

