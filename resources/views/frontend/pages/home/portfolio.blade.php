<section class="xs-sm:mt-20 xl:mt-32">

    <div class="container">
        @component('frontend.components.h2', ['text'=>'Наши работы'])
        @endcomponent
    </div>

    <div class="xs-sm:container-fluid xl:container">

        <div class="portfolio-swiper swiper-container">

            <div class="swiper-wrapper">

                @for($i = 1; $i <= 6; $i++)
                    @component('frontend.components.portfolio-item.portfolio-item')
                        <img class="lazyload" data-srcset="{{ asset('img/portfolio/portfolio-item-' . $i . '.jpg') }}" alt="Завод окон ALIRO - наши работы">
                    @endcomponent
                @endfor

            </div>

            @component('frontend.components.swiper.swiper-pagination')
                portfolio-swiper-pagination
            @endcomponent

        </div>

        @component('frontend.components.swiper.swiper-navigation')
            portfolio-swiper-navigation
        @endcomponent

    </div>

</section>
