<div class="product-item__feature-row grid xs-sm:grid-cols-3 xl:grid-cols-4 col-gap-3 xs-sm:row-gap-2 xs-sm:pb-4 xs-sm:mb-4 xl:py-6 xl:text-xl text-center">
    <p class="product-item__feature-headline xs-sm:grid-col-span-3 xs:text-sm sm:text-base xs-sm:font-bold text-left">{{ $headline }}</p>
    @foreach($values as $value)
        <p class="product-item__feature-value xs:text-xs sm:text-base op-85">{{ $value }}</p>
    @endforeach
</div>
