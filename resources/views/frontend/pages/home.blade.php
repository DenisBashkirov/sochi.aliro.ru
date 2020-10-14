@extends('frontend.layouts.main')

@section('content')

    @include('frontend.pages.home.title-screen')
    @include('frontend.pages.home.features')
    @include('frontend.pages.home.about')
    @include('frontend.pages.home.rehau')
    @include('frontend.pages.home.we-produce')
    @include('frontend.pages.home.products')
    @include('frontend.pages.home.shipping')
    @include('frontend.pages.home.certificates')
    @include('frontend.pages.home.portfolio')
    @include('frontend.pages.home.form')
    @include('frontend.pages.home.map')
    @include('frontend.sections.footer')

    <div class="modals">

        @component('frontend.components.modal.modal', ['modal_name'=>'calc_window', 'form_name'=>'Рассчитать окно'])
        @endcomponent

        @component('frontend.components.modal.modal', ['modal_name'=>'self-delivery', 'form_name'=>'Самовывоз'])
        @endcomponent
        @component('frontend.components.modal.modal', ['modal_name'=>'delivery', 'form_name'=>'Доставка'])
        @endcomponent
        @component('frontend.components.modal.modal', ['modal_name'=>'delivery-and-mounting', 'form_name'=>'Доставка + монтаж'])
        @endcomponent
        @component('frontend.components.modal.modal', ['modal_name'=>'turn-key', 'form_name'=>'Доставка + монтаж + отделка'])
        @endcomponent

    </div>

    @include('frontend.sources.ymap')

@endsection
