<div class="swiper-container">
    <div class="text-center mb-4">
        <button type="button" class="btn btn-primary" wire:click="onShuffle">
            Click to shuffle
        </button>
    </div>

    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($items as $item)
            <div class="swiper-slide" wire:key="id-{{$item}}">
                <img src="https://picsum.photos/id/{{$item * 10}}/520">
            </div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>

