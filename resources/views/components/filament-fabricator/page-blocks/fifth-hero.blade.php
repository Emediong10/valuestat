@aware(['page'])
{{-- <section id="content">
    <div class="pb-0 content-wrap"> --}}
@props([
'title',
'sub_title',
'first_card_title',
'first_title',
'first_card_sub_title',
'first_card_collection',
'second_title',
'first_card_link',
'second_card_title',
'second_card_sub_title',
'second_card_collection',
'faq_main_title',
'faq_collection',
'title',
'content',
'first_card_button_title',

'second_card_button_title',
'first_card_button_title',
'second_card_link',

])




        <div class="m-0 section parallax" style="padding: 100px 0; background-color:rgb(61,128,228);" data-0-top="background-color:rgb(61,128,228);" data-center-bottom="background-color:rgb(0,0,0);">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-6 dark dotted-bg">
                        <div class="heading-block border-bottom-0 bottommargin-sm">
                            <i class="icon-credit h1"></i>
                            <h2 class="nott" style="font-size: 36px;">{{ $title }}</h2>
                        </div>
                        <div class="fw-normal lead">{{ $sub_title }}</div>

                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="row">
                            <div class="col-lg-6 pricing-table">
                                <div class="shadow card" style="background-image: url('demos/landing/images/section/pricing-bg-light.svg'); background-position: 0 100%; background-size: 100% 290px;">
                                    {{-- <h5 class="mb-2 text-uppercase ls1">{{ $first_card_title }}</h5> --}}
                                    <h2 class="mb-3 ls0 fw-bold">{{ $first_card_title }}</h2>
                                    <p class="mb-5 text-black-50"> {{ $first_card_sub_title }}</p>
                                    <ul class="iconlist">

                                        @foreach ($first_card_collection as $first_card_item)

                                        <li><i class="icon-check-circle color"></i>{{ $first_card_item['first_title'] }}</li>
                                        @endforeach

                                    </ul>
                                    <a href="{{ $first_card_link }}" class="p-3 text-white btn w-100 bg-color rounded-3 fw-semibold text-uppercase">{{ \Stevebauman\Location\Facades\Location::get()->countryCode == 'NG' ? 'N40,000' : '$40' }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center dark topmargin">
                    <div class="col-md-7">
                        <h2 class="mt-4 mb-5 text-center text-white fw-semibold">{{ $faq_main_title }}</h2>
                        <div class="toggle-wrap">

                                @foreach ($faq_collection as $faq_item)
                            <div class="toggle">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-angle-right1"></i>
                                        <i class="toggle-open icon-angle-down1"></i>
                                    </div>
                                    <div class="toggle-title">
                                        {{ $faq_item['title']}}
                                    </div>
                                </div>
                                <div class="toggle-content">{{ $faq_item['content'] }}</div>
                            </div>
                                @endforeach





                        </div>
                        {{-- <h5 class="mt-4 mb-0 text-center fw-normal text-white-50">Didn't find what you were after? <a href="#" class="text-white"><u>Visit the FAQ Page</u></a></h5> --}}
                    </div>
                </div>
            </div>
        </div>

{{-- </div>
 </section> --}}
