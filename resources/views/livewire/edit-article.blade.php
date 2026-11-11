<div>
    <div>
        <form class="form-custom" wire:submit="store">
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <h4>DICCI LA TUA</h4>
            <div class="mb-2">
                <label for="name" class="form-label text-white">Nome dell'utente</label>
                <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="name" required>
            </div>
            
            <div class="mb-2">
                <label for="title" class="form-label text-white">Nome del videogame</label>
                <input wire:model="title" type="text" class="form-control" id="title" aria-describedby="title" required>
            </div>
            
            <div class="mb-2">
                <label for="img" class="form-label text-white">Inserisci immagine</label>
                <input wire:model="img" type="file" class="form-control d-flex me-3" id="img">
            </div>
            
            <div class="mb-2">
                <label for="review" class="form-label text-white">Recensione</label>
                <textarea wire:model="review" type="text" class="form-control" id="review" required></textarea>
            </div>
            
            <div class="mb-5 d-flex align-items-center">
                <div class="row">
                    <div class="col-12 d-flex align-items-center mb-2">
                        
                        <label class="form-label d-block text-white fs-5">La tua valutazione</label>
                        <input type="hidden" id="ratingValue" value="0">
                        
                        <div wire:ignore class="rating-group d-inline-flex gap-1 mb-2 ms-3" id="ratingContainer" required>
                            <span class="star-item" data-value="1" title="1 stella"><i class="bi bi-star"></i></span>
                            <span class="star-item" data-value="2" title="2 stelle"><i class="bi bi-star"></i></span>
                            <span class="star-item" data-value="3" title="3 stelle"><i class="bi bi-star"></i></span>
                            <span class="star-item" data-value="4" title="4 stelle"><i class="bi bi-star"></i></span>
                            <span class="star-item" data-value="5" title="5 stelle"><i class="bi bi-star"></i></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-primary btn-custom-2 w-100 p-2">Crea recensione</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
    
</div>
