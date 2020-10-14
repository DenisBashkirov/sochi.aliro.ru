<div class="product-item__head flex flex-col {{ isset($col_start) ? $col_start : '' }} text-center">

    <picture>
        <source data-srcset="{{ asset('img/products/' . $img_name .'.webp') }}" type="image/webp">
        <img class="lazyload" data-srcset="{{ asset('img/products/' . $img_name .'.jpg') }}" alt="{{ $img_alt }}">
    </picture>

    <span class="xs-sm:mt-1 xl:mt-4 xs-sm:text-sm uppercase lh-115 color-red-100 font-black">{{ $text }}</span>
</div>
