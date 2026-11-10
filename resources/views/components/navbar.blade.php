<nav class="navbar navbar-expand-lg fixed-top navbar-custom">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <span><i class="bi bi-joystick icon fs-1 me-2"></i></span>
            <div class="d-flex flex-column lh-1">
                <a class="navbar-brand fs-3 text-custom" href="#">GLITCH MAGAZINE</a>
            </div>
        </a>
        
        <button class="navbar-toggler border-white-50" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon icon-white"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0 align-items-center">
                <li class="nav-item px-2">
                    <a class="nav-link fs-6 link-shadow target-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link fs-6 link-shadow target-link" href="{{ route('index') }}">Recensioni</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link fs-6 link-shadow target-link" href="{{ route('create') }}">Scrivi la tua recensione</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
