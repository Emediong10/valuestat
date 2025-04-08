@props(['page','preview'])
<x-filament-fabricator.base.base :title="$page->title" :meta_description="$page->meta_description ? $page->meta_description: ($page->description?$page->description:null)" :seo_tags="$page->seo_tags">
    {{-- Header Here --}}

    @php
    \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::registerStyles([
        // '<link href="https://api.fontshare.com/v2/css?f[]=sentient@400,700,201,301,200,501,500,300,2,1,401,701&display=swap" rel="stylesheet">',

        '<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,900&display=swap" rel="stylesheet" type="text/css" />',
'<meta name="viewport" content="width=device-width, initial-scale=1" />',



            asset('assets/css/bootstrap.css'),
            asset('assets/style.css'),
            asset('assets/css/dark.css'),
            asset('assets/css/font-icons.css'),
            asset('assets/css/animate.css'),
            asset('assets/css/magnific-popup.css'),
            asset('assets/demos/landing/landing.css'),
            asset('assets/css/custom.css'),
            asset('assets/demos/landing/css/fonts.css'),
            asset('assets/css/colors.php?color=3D80E4'),


    ]);
@endphp

    @if(isset($preview) && $preview==1)
    <x-filament-fabricator::page-blocks :blocks="$page->preview_blocks" />
    @else
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    @endif



    <script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/plugins.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('assets/js/functions.js') }}"></script>



    @section('scripts')
    <script>
        jQuery(window).on('pluginCarouselReady', function () {
            setTimeout(function () {
                if ($('.owl-stage').length) {
                    $('.owl-stage').after('<div class="owl-stage-outer-bg"></div>');
                }
            }, 1000);
        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/67f2837169da6b190b261604/1io5l2tpf';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
@show



</x-filament-fabricator.base.base>
