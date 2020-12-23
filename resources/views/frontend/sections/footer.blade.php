<footer class="footer bg-grey-20 xs-sm:py-8 xl:py-16 xs-sm:sy-8 xl:sy-16">

    <div class="container flex xs-sm:flex-col xl:flex-row xl:justify-between xs-sm:sy-6">

        <div class="xs-sm:sy-2 xl:sy-4">
            <h2 class="xs-sm:text-xl xl:text-2xl font-bold">Офисы продаж</h2>
            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p class="js-goto" data-goto="Krasnodar">{{ $company_contacts['address']['office']['krasnodar'] }}</p>
                <a href="tel:{{ $company_contacts['phone']['office']['krasnodar'] }}" class="no-underline">{{ $company_contacts['phone']['office']['krasnodar'] }}</a>
            </div>
            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p class="" data-goto="Sochi">{{ $company_contacts['address']['office']['novoros'] }}</p>
            </div>
            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p class="" data-goto="Sochi">{{ $company_contacts['address']['office']['sochi'] }}</p>
            </div>
        </div>

        <div class="xs-sm:sy-2 xl:sy-4">
            <h2 class="xs-sm:text-xl xl:text-2xl font-bold">Производство</h2>
            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p>{{ $company_contacts['address']['production'] }}</p>
            </div>
        </div>

    </div>

    <div class="container xs-sm:sy-2 xl:sy-4 op-80">

        <div class="xs-sm:sy-1 xl:sy-2">
            <h2 class="xs-sm:text-lg xl:text-xl font-bold lh-125">Завод окон ALIRO - ООО "Индустрия Окон"</h2>
            <p>ИНН: 2310130892, КПП: 231101001</p>
            <p>ОГРН: 1082310008340</p>
            <p>Фактический адрес: 385140, Республика Адыгея, Тахтамукайский муниципальный район, Старобжегокайское сельское поселение, х. Хомуты, Шапсугское шоссе, здание 75А</p>
        </div>

        <div class="xs-sm:sy-1 xl:sy-2">
            <h2 class="xs-sm:text-lg xl:text-xl font-bold lh-125">Дилерский офис - ИП Завьялов Н. Ю.<br>(официальный представитель завода)</h2>
            <p>ИНН: 010604391610</p>
            <p>Фактический адрес: 385140, Республика Адыгея, Тахтамукайский муниципальный район, Старобжегокайское сельское поселение, х. Хомуты, Шапсугское шоссе, здание 75А</p>
        </div>

    </div>

</footer>
