<section>

    <div class="container">
        @component('frontend.components.h2', ['text'=>'Мы делаем'])
        @endcomponent
    </div>

    <div class="xs-sm:container-fluid xl:container">

        <div class="xs-sm:hidden">
            <div class="xl:grid xl:grid-cols-6 xl:grid-rows-3 xl:grid-gap-def">

                @include('frontend.components.we-produсe.we-produce-list')

            </div>
        </div>

        <div class="swiper-container we-produce-swiper xl:hidden">

            <div class="swiper-wrapper xl:grid xl:grid-cols-6 xl:grid-rows-3 xl:grid-gap-def">

                @include('frontend.components.we-produсe.we-produce-list')

            </div>

            @component('frontend.components.swiper.swiper-pagination')
                we-produce-swiper-pagination
            @endcomponent

        </div>

    </div>

</section>
