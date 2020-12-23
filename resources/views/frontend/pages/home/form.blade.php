<section class="xs-sm:mt-20 xl:mt-32 xs-sm:py-16 xl:py-20 bg-grey-20">
    <div class="container">

        @component('frontend.components.h2', ['text'=>'Запишитесь на бесплатный замер'])
        @endcomponent

        <form action="{{ route('thanks') }}" method="post">
            @csrf
            <div class="flex xs-sm:flex-col xl:flex-row xl:flex-end xl:mt-12 xs-sm:sy-6 xl:sx-16">
                <div class="flex xs-sm:flex-col xl:flex-row xs-sm:sy-4 xl:sx-16">
                    <div class="flex flex-col flex-start xl:sy-3">
                        <label class="text-xl op-80" for="name">Имя</label>
                        <input class="h-12 xs-sm:w-full xl:w-88" type="text" name="name" required>
                    </div>
                    <div class="flex flex-col flex-start xl:sy-3">
                        <label class="text-xl op-80" for="phone">Телефон</label>
                        <input class="h-12 xs-sm:w-full xl:w-88" type="text" name="phone" required>
                    </div>
                    <input type="hidden" name="form_name" value="Запись на замер">
                </div>
                <button class="button button_solid-red xl:w-36 h-12" type="submit">Записаться</button>
            </div>
            <label class="flex flex-row flex-center mt-4 text-sm op-80">
                <input type="checkbox" name="agreement" checked required>
                <span class="ml-1 op-80">Согласен на обработку персональных данных в соответствии с <a href="{{ route('personal_data') }}" target="_blank">политикой</a></span>
            </label>
        </form>

    </div>
</section>
