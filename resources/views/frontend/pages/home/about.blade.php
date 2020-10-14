<section class="container xs-sm:mt-20 xl:mt-32">

    @component('frontend.components.h2', ['text'=>'О нас в цифрах'])
    @endcomponent

    <div class="flex xs-sm:flex-col-reverse xl:flex xl:flex-row">

        <div class="xl:w-cols-7 xs-sm:mt-6" data-aos="fade-up">
            <ul class="grid xs-sm:row-gap-5 xl:row-gap-4 font-medium">

                @component('frontend.components.about-list-item', [
                    'icon'=>'product-units',
                    'text'=>'Более 14 000 единиц продукции в месяц'
                ])
                @endcomponent
                    @component('frontend.components.about-list-item', [
                        'icon'=>'factory',
                        'text'=>'4 500 м<sup>2</sup> производственных площадей'
                    ])
                @endcomponent

                @component('frontend.components.about-list-item', [
                'icon'=>'facility',
                'text'=>'48 единиц заводского оборудования'
                ])
                @endcomponent

            </ul>
        </div>

        <div class="xl:w-cols-5" data-aos="fade-up">
            <img class="lazyload" data-srcset="{{ asset('img/about-us.jpg') }}" alt="Завод окон ALIRO - фото завода">
        </div>

    </div>

</section>
