<div>
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
                            
                            <div class="swiper-slide py-3">
                                @php
                                $bgImage = $article->img ? asset('storage/' . $article->img) : 'https://placehold.co';
                                @endphp
                                
                                <div class="card card-review h-100 shadow mx-2 text-white border-0" 
                                style="background-image: linear-gradient(to top, rgba(0,0,0,0.95) 5%, rgba(0,0,0,0.3) 100%), url('{{ $bgImage }}');">
                                
                                <div class="card-body d-flex flex-column justify-content-end p-4">
                                    
                                    
                                    
                                    <h6 class="card-title fw-bold fs-4 mb-1">{{ $article->title }}</h6>
                                    
                                    <div class="mb-2">
                                        @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $article->rating)
                                        <i class="bi bi-star-fill text-warning"></i> 
                                        @else
                                        <i class="bi bi-star text-white-50"></i> 
                                        @endif
                                        @endfor
                                    </div>
                                    
                                    <p class="card-text small text-light mb-3">
                                        {{ Str::limit($article->review, 120) }}
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        
                                        <h5 class=" fs-5 mb-1">{{ $article->name }}</h5>
                                        
                                    </div>
                                    
                                    <a href="{{ route('show', compact('article')) }}" class="btn btn-warning btn-sm fw-bold mt-auto w-100">Leggi tutto</a>
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
</div>
