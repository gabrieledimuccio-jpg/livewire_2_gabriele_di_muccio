<x-layout>
    
    <div class="container-fluid img-custom p-0 m-0 container-custom">
        <div class="row g-0 h-100">
            <div class="col-11 d-flex flex-column justify-content-center h-75">
               <h1><a class="navbar-brand ms-5 text-custom" href="#">GLITCH MAGAZINE</a></h1>
                <div class="col-5 ms-5 h-25">
                    <p class="fs-5">Recensioni senza filtri, scritte da gamer e alimentate a codice puro. Il punto di salvataggio definitivo per la tua sete di gaming.</p>
                    <div class="display-inline mt-5 pt-3">
                        <a href="#"><button type="button" class="btn btn-custom w-25 p-2 rounded-5">HOME</button></a>
                        <a href="{{ route('index') }}"><button type="button" class="btn btn-custom w-25 p-2 rounded-5 mx-4">RECENSIONI</button></a>
                        <a href="{{ route('create') }}"><button type="button" class="btn btn-custom w-25 p-2 rounded-5">DICCI LA TUA</button></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</x-layout>
