<header class="header w-full fixed t-0 z-5 xs-sm:h-12 xl:h-16 top-0 bg-white shadow">
    <div class="container h-full flex flex-row flex-center justify-between">

        <div class="header__logo">
            <a href="{{ route('home') }}">
                <img class="xs-sm:h-6 xl:h-10" src="{{ asset('logo/default.svg') }}" alt="логотип Завод окон ALIRO">
            </a>
        </div>

        <div class="flex flex-row flex-center">

            <div class="xs-sm:hidden header__schedule sx-4 op-70">
                <span>пн-пт: 8<sup>30</sup>-20<sup>00</sup></span>
                <span>сб-вс: 9<sup>00</sup>-18<sup>00</sup></span>
            </div>

            <div class="header__phone">
                <a class="xl:text-3xl xl:ml-16 font-black no-underline" href="tel:{{ $company_contacts['phone_href']['mobile'] }}">{{ $company_contacts['phone']['mobile'] }}</a>
            </div>

            <div class="header__callback xs-sm:hidden">
                <div class="button button_solid-red xl:ml-10" onclick="jivo_api.open({start : 'call'});">Заказать звонок</div>
            </div>

        </div>

    </div>
</header>
