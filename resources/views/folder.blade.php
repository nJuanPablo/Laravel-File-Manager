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
                <h2>📂 Carpeta: {{ $folder->name }}</h2>
                <ul>
                    @foreach ($folder->files as $file)
                        <li>📄 {{ $file->name }}</li>
                    @endforeach
                </ul>
            
                <hr>
            
                <h4>Crear Subcarpeta en "{{ $folder->name }}"</h4>
                
                    <form action="/folder/{{ $folder->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="parent_id" value="{{ $folder->id }}">
                            <label for="name">Nombre de la subcarpeta:</label>
                            <input type="text" name="name" id="name" class="form-control" required>

                            <label class="form-label">¿Deseas subir archivos a la subcarpeta?</label>
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
                    <div class="d-flex gap-2 my-2">
                        <a href="/home" class="btn btn-secondary">Volver</a>
                        <form action="/folder/{{ $folder->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Eliminar
                            </button>
                        </form>
                        <a href="{{ url('/editar/'.$folder->id) }}" class="btn btn-primary">Editar</a>
                    </div>
                <hr>
            
                <h4>Subcarpetas:</h4>
                <ul>
                    @if (empty($folder->children))
                        <li>No hay subcarpetas en esta carpeta.</li>
                    @else
                        @foreach ($folder->children as $subfolder)
                            <strong><li>📂 <a href="{{ url('/folder/' . $subfolder->id) }}">{{ $subfolder->name }}</a></li></strong>
                        @endforeach
                    @endif
                </ul>
            </div>
        @endauth
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
