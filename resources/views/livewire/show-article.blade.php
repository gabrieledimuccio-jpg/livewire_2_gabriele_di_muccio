<div>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh; padding-top: 80px;">
        <div class="article-card shadow">
            <img src="{{ Str::contains($article->img, 'media/') ? asset($article->img) : Storage::url($article->img) }}" class="card-img-top" alt="img articolo">
            
            <div class="card-body">
                <h5 class="card-title fs-3">{{ $article->title }}</h5>
                <p class="card-text">{{ $article->review }}</p>
                
                <div class="mb-2">
                    @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $article->rating)
                    <i class="bi bi-star-fill text-warning"></i> 
                    @else
                    <i class="bi bi-star text-white-50"></i> 
                    @endif
                    @endfor
                </div>
                <hr class="w-75 mt-3 mx-auto">
                <h5 class="fs-5 mb-0 text-warning text-center">{{ $article->name }}</h5>
            </div>
            <div class="card-footer">
                <div class="d-flex gap-2 justify-content-end p-3" >
                    
                    <a href="{{ route('edit', $article) }}" class="btn btn-edit-custom">✏️ Modifica</a>
                    
                    <form action="{{ route('destroy', $article) }}" method="POST" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questa destinazione?')">🗑️ Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
