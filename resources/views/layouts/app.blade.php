<!-- Barra superior con fondo gris claro -->
<div class="container-fluid bg-light py-3">
    <div class="container">
        <div class="row">
            <!-- Columna 1 -->
            <div class="col-4"></div>

            <!-- Columna 2 -->
            <div class="col-4 d-flex justify-content-center align-items-center">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{ asset('img\Logo22.png') }}" alt="Logotipo" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            @auth
                <!-- Columna 3 -->
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-secondary" href="/logout">Logout</a>
                </div>
            @endauth
            
        </div>
    </div>    
</div>