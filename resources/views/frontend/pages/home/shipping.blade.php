<section class="xs-sm:mt-20 xl:mt-32">

    <div class="container">
        @component('frontend.components.h2', ['text'=>'Выберите подходящий вариант'])
        @endcomponent
    </div>

    <div class="xs-sm:container-fluid xl:container">
        <div class="swiper-container shipping-swiper">

            <div class="swiper-wrapper">

                @component('frontend.components.shipping-item.shipping-item', ['icon'=>'self-delivery', 'shipments'=>['Самовывоз'], 'modal_name'=>'self-delivery'])
                @endcomponent

                @component('frontend.components.shipping-item.shipping-item', ['icon'=>'delivery', 'shipments'=>['Доставка'], 'modal_name'=>'delivery'])
                @endcomponent

                @component('frontend.components.shipping-item.shipping-item', ['icon'=>'window', 'shipments'=>['Доставка', 'Монтаж'], 'modal_name'=>'delivery-and-mounting'])
                @endcomponent

                @component('frontend.components.shipping-item.shipping-item', ['icon'=>'turn-key', 'shipments'=>['Доставка', 'Монтаж', 'Отделка'], 'modal_name'=>'turn-key'])
                @endcomponent

            </div>

            @component('frontend.components.swiper.swiper-pagination')
                shipping-swiper-pagination
            @endcomponent

        </div>
    </div>

</section>
