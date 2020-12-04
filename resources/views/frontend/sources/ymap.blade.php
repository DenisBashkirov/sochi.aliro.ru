<script src="https://api-maps.yandex.ru/2.1/?apikey=4146fe29-065b-4679-9ffb-090942cbc21e&lang=ru_RU"></script>
<script>
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init() {

        let destinations = {
            Krasnodar: {
                'coords': [45.042158, 38.941447],
                'content': 'г. Краснодар, ул. Калинина, 258'
            },
            Novoros: {
                'coords': [44.685370, 37.781308],
                'content': 'г. Новороссийск, ул. Героев-Десантников, 2'
            },
            Sochi: {
                'coords': [43.607494, 39.741163],
                'content': 'г. Сочи, ул. Транспортная, 5'
            }
        }

        // Создание карты
        let myMap = new ymaps.Map("ymap", {
            center: [44.564794, 38.706112],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 8
        }, {
            searchControlProvider: 'yandex#search'
        });

        // Краснодар
        myMap.geoObjects.add(new ymaps.Placemark(destinations.Krasnodar.coords, {
            //balloonContent: 'цвет <strong>красный</strong>',
            //iconCaption: 'Салон окон "Алиро"'
        }, {
            balloonContent: destinations.Krasnodar.content,
            preset: 'islands#redDotIcon',
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'https://okna.aliro.ru/img/logo_map.png',
            // Размеры метки.
            iconImageSize: [31, 46],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-16, -46],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
        }));

        // Сочи
        myMap.geoObjects.add(new ymaps.Placemark(destinations.Sochi.coords, {
            //balloonContent: 'цвет <strong>красный</strong>',
            //iconCaption: 'Салон окон "Алиро"'
        }, {
            hintContent: destinations.Sochi.content,
            preset: 'islands#redDotIcon',
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'https://okna.aliro.ru/img/logo_map.png',
            // Размеры метки.
            iconImageSize: [31, 46],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-16, -46],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
        }));

        // Новороссийск
        myMap.geoObjects.add(new ymaps.Placemark(destinations.Novoros.coords, {
            //balloonContent: 'цвет <strong>красный</strong>',
            //iconCaption: 'Салон окон "Алиро"'
        }, {
            balloonContent: destinations.Novoros.content,
            preset: 'islands#redDotIcon',
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'https://okna.aliro.ru/img/logo_map.png',
            // Размеры метки.
            iconImageSize: [31, 46],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-16, -46],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
        }));

        myMap.behaviors.disable('scrollZoom');
        myMap.behaviors.disable('drag');
        //ymapProduction.behaviors.disable('drag');

        let GeoObjectMain = new ymaps.GeoObject({
            // Описываем геометрию геообъекта.
            geometry: {
                // Тип геометрии - "Многоугольник".
                type: "Polygon",
                // Указываем координаты вершин многоугольника.
                coordinates: [
                    // Координаты вершин внешнего контура.
                    [
                        [45.670268, 38.877333],
                        [45.483293, 39.531912],
                        [45.188397, 39.762670],
                        [44.543105, 39.215027], // Горячий ключ
                        [44.523567, 37.981012], // Геленджик
                        [44.617401, 37.570681],
                        [44.698250, 37.315514],
                        [44.981263, 37.184171],
                        [44.993504, 37.979326],
                        [45.301785, 38.068774]
                    ],
                    [
                        [43.933698, 39.190734], // Лазаревское
                        [43.906175, 39.365355],
                        [43.711211, 39.869959],
                        [43.698831, 40.218089],
                        [43.606879, 40.280968], // Красня Поляна
                        [43.598458, 40.063649],
                        [43.598458, 40.063649],
                        [43.598458, 40.063649],
                        [43.552552, 40.026106],
                        [43.456284, 39.990269],
                        [43.412758, 40.004774],
                        [43.370147, 39.892448],
                        [43.401257, 39.808828],
                        [43.487037, 39.771284],
                        [43.547258, 39.622817],
                        [43.609278, 39.598926],
                        [43.609278, 39.598926],
                        [43.648938, 39.513600]
                    ]

                ],
                // Задаем правило заливки внутренних контуров по алгоритму "nonZero".
                fillRule: "nonZero"
            },
            // Описываем свойства геообъекта.
            properties:{
                // Содержимое балуна.
                hintContent: "Зона бесплатного выезда на замер"
            }
        }, {
            // Описываем опции геообъекта.
            // Цвет заливки.
            fillColor: '#E70D1D',
            // Цвет обводки.
            strokeColor: '#E70D1D',
            // Общая прозрачность (как для заливки, так и для обводки).
            opacity: 0.25,
            // Ширина обводки.
            strokeWidth: 2,
            // Стиль обводки.
            strokeStyle: 'shortdash'
        });



        // Добавляем многоугольник на карту.
        myMap.geoObjects.add(GeoObjectMain);

        // обработка переключения карты
        function clickGoto() {

            // город
            let pos = this.getAttribute('data-goto'); // или this.getAttribute('title')

            // переходим по координатам
            myMap.panTo(destinations[pos], {
                flying: 1
            });

            let col = document.getElementsByClassName('js-goto');

            if (this.classList.contains('color-red-100')) {
                for (let i = 0, n = col.length; i < n; ++i) {
                    col[i].classList.toggle('color-red-100');
                    col[i].classList.toggle('hover-color-red-90');
                    col[i].classList.toggle('cursor-pointer');
                }
            }

        }

        // навешиваем обработчики
        let col = document.getElementsByClassName('js-goto');
        for (let i = 0, n = col.length; i < n; ++i) {
            //col[i].onclick = clickGoto;
        }

    }
</script>
