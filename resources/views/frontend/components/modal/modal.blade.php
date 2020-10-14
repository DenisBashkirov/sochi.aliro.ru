<div class="modal hidden fixed top-0 w-screen h-screen z-4" data-modal-name="{{ $modal_name }}">

    <div class="overlay bg-white op-90"></div>

    <div class="flex flex-center h-min-screen">
        <div class="modal__container container flex justify-center flex-center">

            <div class="modal__wrapper inline-block xs-sm:py-10 xs-sm:px-4 xl:py-10 xl:px-12 bg-white shadow-md b-radius-3">

                <div class="modal__head text-center">
                    <p class="xs-sm:text-xl xl:text-3xl font-bold">Оставьте свой телефон</p>
                    <p class="mt-3 xs-sm:text-base xl:text-xl">Мы свяжемся с Вами в течение 10 минут</p>
                </div>

                <div class="modal__body flex justify-center">

                    @component('frontend.components.modal.modal__form', ['form_name'=>$form_name])
                    @endcomponent

                </div>

                <div class="modal__close-btn icon-close absolute top-4 right-4 cursor-pointer js-modal-close"></div>

            </div>

        </div>
    </div>

</div>
