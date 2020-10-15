<footer class="footer bg-grey-20">
    <div class="container flex xs-sm:flex-col xl:flex-row xl:justify-between xs-sm:py-8 xl:py-16 xs-sm:sy-6">

        <div class="xs-sm:sy-2 xl:sy-4">

            <p class="xs-sm:text-xl xl:text-2xl font-bold">Офисы продаж</p>

            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p class="js-goto" data-goto="Sochi">г. Сочи, ул. Транспортная, 5, оф. 212</p>
                <a href="tel:{{ $company_contacts['phone_href']['sochi'] }}" class="no-underline">{{ $company_contacts['phone']['sochi'] }}</a>
            </div>

            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p class="cursor-pointer color-red-100 hover-color-red-90 js-goto" data-goto="Krasnodar">г. Краснодар, ул. Калинина, 258</p>
            </div>

        </div>

        <div class="xs-sm:sy-2 xl:sy-4">
            <p class="xs-sm:text-xl xl:text-2xl font-bold">Производство</p>
            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p>п. Яблоновский, Шапсугское ш., 3/15</p>
            </div>
        </div>

    </div>
</footer>
