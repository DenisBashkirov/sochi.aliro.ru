<section class="products container xs-sm:mt-12 xl:mt-32">

    @component('frontend.components.h2', ['text'=>'Комплектация на ваш выбор'])
    @endcomponent

    <div class="xs-sm:w-68 flex xs-sm:flex-col xs-sm:mx-auto b-radius-3 xl:text-lg js-product-switcher">
        <div class="button button_solid-red xl:w-72 b-radius-0 js-show-product js-active" data-product="pvc">Металлопластиковые</div>
        <div class="button button_ghost-red xl:w-72 b-radius-0 js-show-product" data-product="alum">Алюминиевые</div>
    </div>

    <div class="product-type-item xs-sm:mt-6 xl:mt-16" data-product-name="pvc">
        <div class="xs-sm:sticky top-10 grid xs-sm:grid-cols-3 xl:grid-cols-4 col-gap-3 xs-sm:py-6 bg-white z-2">

            {{--
            @component('frontend.components.product-item.product-item__head', ['text'=>'ALIRO 58', 'col_start'=>'xl:col-start-2', 'img_name'=>'aliro', 'img_alt'=>'Металлопластиковый профиль ALIRO'])
            @endcomponent
            --}}

            @component('frontend.components.product-item.product-item__head', ['text'=>'REHAU BLITZ', 'col_start'=>'xl:col-start-2', 'img_name'=>'blitz', 'img_alt'=>'Металлопластиковый профиль REHAU BLITZ'])
            @endcomponent

            @component('frontend.components.product-item.product-item__head', ['text'=>'REHAU GRAZIO', 'img_name'=>'grazio', 'img_alt'=>'Металлопластиковый профиль REHAU GRAZIO'])
            @endcomponent

            @component('frontend.components.product-item.product-item__head', ['text'=>'REHAU DELIGHT', 'img_name'=>'delight', 'img_alt'=>'Металлопластиковый профиль REHAU DELIGHT'])
            @endcomponent

        </div>

        <div class="xl:mt-8">

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Количество камер',
                'values'=>['3', '5', '5']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Ширина профиля',
                'values'=>['60 мм', '70 мм', '70 мм']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Армирование',
                'values'=>['1,5 мм', '1,5 мм', '1,5 мм']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Остекление',
                'values'=>['стеклопакет 24 мм', 'стеклопакет 32 мм', 'стеклопакет 32 мм']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Цвет уплотнителя',
                'values'=>['серый', 'серый', 'серый']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Штапик',
                'values'=>['круглый', 'круглый/скошенный', 'закруглённый/фигурный']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Фурнитура',
                'values'=>['Maco', 'Maco', 'Maco']
            ])
            @endcomponent

        </div>
    </div>

    <div class="product-type-item hidden xs-sm:mt-6 xl:mt-16" data-product-name="alum">
        <div class="xs-sm:sticky top-10 grid xs-sm:grid-cols-3 xl:grid-cols-4 col-gap-3 xs-sm:py-6 bg-white z-2">

            @component('frontend.components.product-item.product-item__head', ['text'=>'ALUTECH ALT 100', 'col_start'=>'xl:col-start-2', 'img_name'=>'alt-100', 'img_alt'=>'Алюминиевый профиль ALUTECH ALT 100'])
            @endcomponent

            @component('frontend.components.product-item.product-item__head', ['text'=>'ALUTECH W62', 'img_name'=>'w-62', 'img_alt'=>'Алюминиевый профиль ALUTECH W62'])
            @endcomponent

            @component('frontend.components.product-item.product-item__head', ['text'=>'ALUTECH W72', 'img_name'=>'w-72', 'img_alt'=>'Алюминиевый профиль ALUTECH W72'])
            @endcomponent

        </div>

        <div class="xl:mt-8">

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Тип профиля',
                'values'=>['холодный', 'тёплый', 'тёплый']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Ширина профиля',
                'values'=>['60 мм', '62 мм', '72 мм']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Открывание',
                'values'=>['раздвижное', 'распашное', 'распашное']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Остекление',
                'values'=>['стекло 4/6 мм', 'стеклопакет до 40 мм', 'стеклопакет до 50 мм']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Звукоизоляция',
                'values'=>['-', 'До 33 дБ', 'До 43 дБ']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Водонепроницаемость',
                'values'=>['-', 'класс А', 'класс А']
            ])
            @endcomponent

            @component('frontend.components.product-item.product-item__feature-row', [
                'headline'=>'Воздухопроницаемость',
                'values'=>['класс А', 'класс А', 'класс А']
            ])
            @endcomponent

        </div>
    </div>

</section>
