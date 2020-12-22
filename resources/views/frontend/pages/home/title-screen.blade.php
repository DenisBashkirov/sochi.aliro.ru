<div class="title-screen webp xs-sm:h-min-70vh xl:h-156 flex flex-center xs-sm:mt-12 xl:mt-16">

    <div class="hidden overlay bg-white xs-sm:op-70 xl:op-50"></div>

    <div class="container title-screen__container">

        <div class="title-screen__content flex flex-col justify-between xs-sm:flex-center xl:flex-start xl:h-132 xs-sm:mt-2 xs-sm:text-center">
            <div class=" z-1">
                <h1 class="flex flex-end flex-wrap xs-sm:justify-center xl:w-148 xs-sm:text-4xl xl:text-6xl xs-sm:font-bold xl:font-black">Окна<img class="xs-sm:w-48" src="{{ asset('img/rehau-logo_cropped.png') }}" alt="Окна Rehau"><span class="xl:mb-2 color-red-90">от&nbsp; {{ number_format('1925', 0, '.', ' ') }} руб/м<sup>2</sup></span></h1>
                <p class="xs:text-xl sm:text-2xl xl:text-4xl mt-4 op-80">Собственное производство</p>
            </div>
            <div class="container-screen md-xl:hidden xs-sm:mt--10">
                <picture>
                    <source srcset="{{ asset('img/title-screen_sm.webp') }}" media="(min-width: 375px)" type="image/webp">
                    <source srcset="{{ asset('img/title-screen_sm.jpg') }}" media="(min-width: 375px)">

                    <source srcset="{{ asset('img/title-screen_xs.webp') }}" type="image/webp">
                    <img src="{{ asset('img/title-screen_xs.jpg') }}" alt="Завод окон ALIRO">
                </picture>
            </div>
            <div class="button button_solid-red text-2xl xs-sm:mt-2 js-modal-open" data-modal="calc_window">Рассчитать окно</div>
        </div>

    </div>

</div>
