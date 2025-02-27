@aware(['page'])

@props([
     'title',
     'items',
     'sub_title',
     'main_title',
     'sub_main_title',
     'image'
  ])

<div class="px-4 py-4 md:py-8">
    <div class="mx-auto max-w-7xl">
        <div class="clearfix m-0 section" style="background-color: #eef2f5;">
            <div class="container clearfix">

                <div class="mx-auto heading-block center border-bottom-0 bottommargin topmargin-sm" style="max-width: 640px">
                    {{-- <h3 class="nott font-secondary fw-normal" style="font-size: 36px;">About ALIVE</h3> --}}
                   <h2>{{ $main_title }}</h2>
                        <span>{{ $sub_main_title }}</span>
                </div>

                <div class="clearfix row">
                    <!-- Features colomns
                    ============================================= -->
                    <div class="clearfix row">
                    @foreach ($items as $item)
                    <div class="col-lg-3 col-md-6 bottommargin-sm">
                            <div class="feature-box media-box fbox-bg">
                                <div class="fbox-media">
                                   <img style="height:200px" width="500px" src="{{ url('storage', $item['image']) }}" alt="Featured Box Image">
                                </div>
                                <div class="border-0 fbox-content">
                                    <h3 class="nott ls0 fw-semibold"> {{ $item['title']}}<span class="subtitle fw-light ls0"> {{ $item['sub_title']}}</span></h3>

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
