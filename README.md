# 📁 Laravel File Manager con Carpetas Jerárquicas y Autenticación

Este proyecto es una aplicación web desarrollada en **Laravel** que permite a los usuarios autenticados gestionar archivos y carpetas de forma jerárquica ilimitada. La autenticación está implementada usando **Laravel Sanctum**.

---

## 🔐 Autenticación

La autenticación de usuarios se gestiona mediante **Laravel Sanctum**. Los usuarios pueden:

- Registrarse
- Iniciar sesión
- Cerrar sesión

Las vistas relacionadas están ubicadas en la carpeta `views/auth`.

---

## 🖼️ Estructura de Vistas

Las vistas se encuentran en `resources/views/` y están organizadas de la siguiente manera:

- `auth/`
  - `login.blade.php`: Formulario de inicio de sesión
  - `register.blade.php`: Formulario de registro

- `layouts/`
  - `app.blade.php`: Plantilla principal que envuelve las vistas
  - `alerts.blade.php`: Vista parcial para mostrar mensajes de alerta

- `home.blade.php`: Página principal donde se muestra la estructura de carpetas y se pueden crear carpetas raíz.

- `home-options.blade.php`: Llamada desde `home`, contiene la lógica **recursiva** para imprimir toda la jerarquía de carpetas.

- `folder.blade.php`: Permite agregar subcarpetas, editar o eliminar carpetas hijas.

- `editar.blade.php`: Vista específica para editar el nombre de una carpeta.

---

## 🧠 Controladores

Los controladores principales se encuentran en `app/Http/Controllers/`:

- `HomeController`: Carga la vista principal y estructura de carpetas.
- `FolderController`: Gestiona la creación, edición, y eliminación de carpetas/subcarpetas.
- `RegistroController`: Controla el registro de usuarios.
- `LoginController`: Maneja el inicio de sesión.
- `LogoutController`: Maneja el cierre de sesión.
- `EditController`: Se encarga específicamente de la lógica de edición de carpetas.

---

## 🛠 Funcionalidades

- ✅ Registro e inicio de sesión (con Laravel Sanctum)
- ✅ Crear carpetas raíz
- ✅ Crear subcarpetas ilimitadas junto con archivos (estructura jerárquica recursiva)
- ✅ Editar nombre de carpetas
- ✅ Eliminar carpetas
- ✅ Vista jerárquica generada recursivamente

---

## ⚙️ Requisitos

- PHP >= 8.1
- Laravel 10+
- Composer
- MySQL

---

## 🚀 Instalación
1. Clona el repositorio:
```bash
git clone https://github.com/nJuanPablo/Laravel-File-Manager.git
```
2. Instala las dependencias:
```bash
composer install
npm install
```
3. Cree el archivo de entorno:
```bash
cp .env.example .env
php artisan key:generate
```
4. Configura la base de datos en .env.
5. Ejecuta las migraciones:
```bash
php artisan migrate:fresh --seed
```
6. Inicia el servidor:
```bash
php artisan serve
```

## 📂 Estructura de Carpetas (Ejemplo Visual)

Carpeta Raíz A
   * Subcarpeta A1
        * Archivos
          * Archivo.pdf
     * Subcarpeta A1.1
   * Subcarpeta A2

Carpeta Raíz B

## ✍️ Usuarios de prueba 
* Cedula: 6314334573 - password: ba2E46C7wn6K (admin)
* Cedula: 8311937671 - password: Y3Fu6J1KNI4E
* Cedula: 5964361473 - password: YLP92Ia5M7uH

## ✍️ Autor
Juan Pablo Navarro Cabiativa

## 📄 Licencia

Copyright (c) 2025 Juan Pablo Navarro Cabiativa

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights  
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell      
copies of the Software, and to permit persons to whom the Software is         
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in     
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR     
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,      
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE   
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER        
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING       
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS  
IN THE SOFTWARE.
