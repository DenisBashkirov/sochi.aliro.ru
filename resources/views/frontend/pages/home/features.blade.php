<section class="container xs-sm:mt-12 xl:mt-32">

    <div class="features-section xs-sm:grid xl:grid xs-sm:row-gap-8 xl:grid-flow-col xl:col-gap-def">

        @component('frontend.components.feature-item',
            ['icon'=>'credit', 'text'=>'Рассрочка 0%']
        )
        @endcomponent

        @component('frontend.components.feature-item',
            ['icon'=>'deal', 'text'=>'Договор на замере']
        )
        @endcomponent

        @component('frontend.components.feature-item',
            ['icon'=>'window', 'text'=>'Монтаж по ГОСТ']
        )
        @endcomponent

        @component('frontend.components.feature-item',
            ['icon'=>'delivery', 'text'=>'Доставка бесплатно']
        )
        @endcomponent

    </div>

    <p class="xs-sm:mt-10 xl:mt-12 mx-auto font-motserrat font-medium text-center lh-180">
        Доставка окон производится в удобное для Вас время, с соблюдением сроков в договоре!<br>
        Бесплатно доставим заказы от завода по г. Краснодар, пригородным населённым пунктам и в г-к Сочи!
    </p>

</section>
