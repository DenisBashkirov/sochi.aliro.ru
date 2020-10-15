<script src="https://api-maps.yandex.ru/2.1/?apikey=4146fe29-065b-4679-9ffb-090942cbc21e&lang=ru_RU"></script>
<script>
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init() {

        let destinations = {
            'Sochi': [43.607494, 39.741163],
            'Krasnodar': [45.042158, 38.941447]
        }

        // Создание карты
        let myMap = new ymaps.Map("ymap", {
            center: destinations.Sochi,
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 16
        }, {
            searchControlProvider: 'yandex#search'
        });

        // Краснодар
        myMap.geoObjects.add(new ymaps.Placemark(destinations.Krasnodar, {
            //balloonContent: 'цвет <strong>красный</strong>',
            //iconCaption: 'Салон окон "Алиро"'
        }, {
            preset: 'islands#redDotIcon'
        }));

        // Сочи
        myMap.geoObjects.add(new ymaps.Placemark(destinations.Sochi, {
            //balloonContent: 'цвет <strong>красный</strong>',
            //iconCaption: 'Салон окон "Алиро"'
        }, {
            preset: 'islands#redDotIcon'
        }));

        myMap.behaviors.disable('scrollZoom');
        myMap.behaviors.disable('drag');
        //ymapProduction.behaviors.disable('drag');

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
            col[i].onclick = clickGoto;
        }

    }
</script>
