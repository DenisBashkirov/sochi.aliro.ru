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

</section>
