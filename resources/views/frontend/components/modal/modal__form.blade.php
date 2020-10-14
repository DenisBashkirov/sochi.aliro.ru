<form class="modal__form flex flex-col xs-sm:w-full xl:w-88 xs-sm:mt-6 xl:mt-12 xs-sm:sy-6 xl:sy-6" action="{{ route('thanks') }}" method="post">
    @csrf

    <div class="modal__form-body flex flex-col xs-sm:sy-4 xs-sm:sy-6 xl:sy-6">

        <div class="flex flex-col flex-start xs-sm:sy-2 xl:sy-3">
            <span class="text-xl op-80">Имя</span>
            <input class="w-full h-12 xs-sm:w-full" type="text" name="name" required>
        </div>

        <div class="flex flex-col flex-start xs-sm:sy-2 xl:sy-3">
            <span class="text-xl op-80">Телефон</span>
            <input class="w-full h-12 xs-sm:w-full" type="text" name="phone" required>
        </div>

        <input type="hidden" name="form_name" value="{{ $form_name }}">

    </div>

    <label class="flex flex-row flex-start text-sm">
        <input type="checkbox" name="agreement" checked required>
        <span class="ml-1 op-80">Согласен на обработку персональных данных в соответствии с <a href="{{ route('personal_data') }}" target="_blank">правилами</a></span>
    </label>

    <button class="button button_solid-red xl:w h-12" type="submit">Готово</button>

</form>
