<div class="shipping-item xs-sm:w-75vw xs-sm:h-min-64 xl:h-min-64 flex flex-col flex-center justify-between py-6 px-4 bg-grey-20 shadow-sm swiper-slide" data-aos="fade-in">

    <div class="shipping-item__icon icon-{{ $icon }} xs-sm:text-6xl xl:text-7xl color-red-100"></div>

    <div class="shipping-item__shipments xs-sm:sy-2 xl:sy-2 text-center">
        @foreach($shipments as $text)
            <div class="shipping-item__shipments-text xs-sm:text-xl">{{ $text }}</div>
        @endforeach
    </div>

    <div class="shipping-item__button button button_solid-red text-xl js-modal-open" data-modal="{{ $modal_name }}">Выбрать</div>

</div>
