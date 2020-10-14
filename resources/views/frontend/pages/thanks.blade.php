@extends('frontend.layouts.main')

@section('content')

    <div class="flex-grow-1 h-screen flex flex-center text-white bg-gradient-dark">
        <div class="container flex flex-col justify-center flex-center xs-sm:h-screen md-xl:h-full text-center">

            <div>
                <h1 class="font-bold xs-sm:text-3xl md:text-5xl lg-xl:text-4xl xs-md:text-center">Спасибо!</h1>
                <p class="xs-sm:mt-4 md-xl:mt-6 xs-sm:text-2xl md-xl:text-3xl">Ваша заявка получена</p>
            </div>

            <a class="button button_ghost-red w-40 mt-20" href="{{ url()->previous() }}">Назад</a>

        </div>
    </div>

@endsection
