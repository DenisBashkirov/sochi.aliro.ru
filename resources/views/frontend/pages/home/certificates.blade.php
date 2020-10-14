<section class="xs-sm:mt-20 xl:mt-32">

    <div class="container">
        @component('frontend.components.h2', ['text'=>'Сертификаты'])
        @endcomponent
    </div>

    <div class="xs-sm:container-fluid xl:container flex justify-center">

        <div class="certificates-swiper swiper-container">

            <div class="swiper-wrapper xs-sm:h-90vw flex flex-center">

                @for($i = 1; $i <=12; $i++)
                    @component('frontend.components.certificate-item.certificate-item')

                        <a href="{{ asset('img/certificates/certificate_' . $i . '.jpg') }}" data-fancybox="certificate">
                            <picture>
                                <source data-srcset="{{ asset('img/certificates/certificate_' . $i . '.webp') }}" type="image/webp">
                                <img class="lazyload" data-srcset="{{ asset('img/certificates/certificate_' . $i . '.jpg') }}" alt="Завод окон ALIRO - сертификат соответствия">
                            </picture>
                        </a>

                    @endcomponent
                @endfor

            </div>

            @component('frontend.components.swiper.swiper-pagination')
                certificates-swiper-pagination
            @endcomponent

        </div>

        @component('frontend.components.swiper.swiper-navigation')
            certificates-swiper-navigation
        @endcomponent

    </div>

</section>
