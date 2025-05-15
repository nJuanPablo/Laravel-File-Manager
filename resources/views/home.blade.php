<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Incluir el CDN de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    

<!-- Incluir el CDN de Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            @auth
            @include('layouts.app')
            <!-- Contenido principal -->
            <div class="container">
                <br>
                <h2>Bienvenido {{ auth()->user()->nombre  }}</h2>
                <br>
                @include('layouts.alertas')
                <div class="card">
                    <div class="card-header">Crear carpeta raiz</div>
                        <div class="card-body">
                            <form action="/home" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nombre de la carpeta:</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
        
                                    <label class="form-label">¿Deseas subir archivos a la carpeta?</label>
                                    <select class="form-select" id="upload_files" name="upload_files">
                                        <option value="no" selected>No</option>
                                        <option value="yes">Sí</option>
                                    </select>
                                    
                                    <!-- Campo para colocar los archivos oculto por defecto -->
                                    <div class="mb-3 d-none" id="file_input_container">
                                        <label for="files" class="form-label">Selecciona archivos</label>
                                        <input type="file" class="form-control" id="files" name="files[]" multiple >
                                    </div>
        
                                    <button type="submit" class="btn btn-success mt-2">Crear Subcarpeta</button>
                                </div>
                                <!-- Script para mostrar u ocultar el input file -->
                                <script>
                                    document.getElementById('upload_files').addEventListener('change', function () {
                                        const fileInput = document.getElementById('file_input_container');
                                        const RequireFile = document.getElementById('files');
                                        if (this.value === 'yes') {
                                            fileInput.classList.remove('d-none');
                                            RequireFile.setAttribute('required', 'required');
                                        } else {
                                            RequireFile.removeAttribute('required');
                                            fileInput.classList.add('d-none');
                                        }
                                    });
                                </script>
                            </form>
                        </div>
                    <div class="card-footer text-muted"></div>
                </div>
                <br>
                <div
                    class="table-responsive-sm table-bordered table-striped table-hover"
                    style="width: 100%; height: 300px; overflow-y: scroll"
                    >
                    <h2>📁 Estructura de Carpetas</h2>
                    <p>Haz click en la carpeta para ver su contenido</p>
                        <ul>
                            @foreach ($folders as $folder)
                                @if (auth()->user()->Administrador() || $folder->user_id == auth()->user()->id)
                                    @include('home-options', ['folder' => $folder])
                                @endif
                            @endforeach
                        </ul>
                </div>
            </div>
        @endauth
    
        @guest
            @include('layouts.app')
            @include('layouts.alertas')
            <!-- Contenido principal -->
            <div class="container my-2">
                <h2>Bienvenido al panel de usuario</h2>
                <p>Por favor inicie sesion para continuar</p>
                <a class="btn btn-secondary" href="/login">Login</a>
            </div>
        @endguest   



        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
