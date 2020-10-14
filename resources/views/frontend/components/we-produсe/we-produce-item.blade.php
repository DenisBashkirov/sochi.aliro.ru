<div class="we-produce-item xs-sm:w-80vw {{ isset($col_span) ? $col_span : '' }} {{ isset($row_span) ? $row_span : '' }} overflow-hidden swiper-slide" data-aos="fade-up">

    <div class="we-produce-item__img">

        <picture>

            <source data-srcset="{{ asset('img/we-produce/' . \Illuminate\Support\Str::slug($slot)) . '.webp'}}" media="(min-width: 768px)" type="image/webp">
            <source srcset="{{ asset('img/we-produce/' . \Illuminate\Support\Str::slug($slot)) . '.jpg'}}" media="(min-width: 768px)">

            <source data-srcset="{{ asset('img/we-produce/' . \Illuminate\Support\Str::slug($slot)) . '_small.webp'}}" type="image/webp">
            <img class="lazyload" data-srcset="{{ asset('img/we-produce/' . \Illuminate\Support\Str::slug($slot)) . '_small.jpg'}}" alt="{{ $slot }}">

        </picture>

    </div>
    <div class="we-produce__headline-wrapper xl:absolute bottom-0 w-full flex flex-center justify-center xs-sm:h-12 xl:h-16 xl:text-2xl color-white bg-red-100">
        <h3 class="">{{ $slot }}</h3>
    </div>

</div>
