<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="pen-title text-center mt-5 pt-5">
                    RECENSIONI
                </h2>
                <div class="container my-5 position-relative">
                    <div class="swiper mySwiper px-4">
                        <div class="swiper-wrapper">
                            
                            @foreach($articles as $article)
                            <!-- Singola Card -->
                            <div class="swiper-slide py-3">
                                <div class="card h-100 shadow-sm mx-2">
                                    <img src="{{ $article->image_url ?? 'https://placeholder.com' }}" class="card-img-top" alt="{{ $article->name }}">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $article->name }}</h5>
                                        <p class="card-text flex-grow-1">{{ Str::limit($article->review, 100) }}</p>
                                        <a href="#" class="btn btn-primary mt-auto">Visualizza</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="swiper-button-prev text-dark"></div>
                    <div class="swiper-button-next text-dark"></div>
                </div>
                
            </div>
        </div>
    </div>
</x-layout>