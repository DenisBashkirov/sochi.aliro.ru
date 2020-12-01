<footer class="footer bg-grey-20">
    <div class="container flex xs-sm:flex-col xl:flex-row xl:justify-between xs-sm:py-8 xl:py-16 xs-sm:sy-6">

        <div class="xs-sm:sy-2 xl:sy-4">
            <p class="xs-sm:text-xl xl:text-2xl font-bold">Офисы продаж</p>
            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p>{{ $company_contacts['address']['office']['sochi'] }}</p>
                <a href="tel:{{ $company_contacts['phone']['office']['sochi'] }}" class="no-underline">{{ $company_contacts['phone']['office']['sochi'] }}</a>
            </div>
            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p class="" data-goto="Sochi">{{ $company_contacts['address']['office']['krasnodar'] }}</p>
            </div>
            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p class="" data-goto="Sochi">{{ $company_contacts['address']['office']['novoros'] }}</p>
            </div>
        </div>

        <div class="xs-sm:sy-2 xl:sy-4">
            <p class="xs-sm:text-xl xl:text-2xl font-bold">Производство</p>
            <div class="flex flex-col xs-sm:sy-1 xl:sy-2 xl:text-xl">
                <p>{{ $company_contacts['address']['production'] }}</p>
            </div>
        </div>

    </div>
</footer>
