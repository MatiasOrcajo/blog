@extends('app')
<style>
    .blog-entry {
        border: 1px solid black;
        padding: 20px;
        margin-bottom: 20px;
        position: relative; /* Para que la posición sea relativa para los elementos absolutos internos */
        height: 28rem;
        box-shadow: black 10px 10px 0px 0px;
    }
    .blog-entry-image {
        position: absolute; /* Para posicionar la imagen de fondo absolutamente dentro del contenedor */
        top: 0; /* La imagen estará en la parte superior del contenedor */
        left: 0; /* La imagen estará en la parte izquierda del contenedor */
        right: 0; /* La imagen estará en la parte derecha del contenedor */
        height: 50%; /* La imagen cubrirá el 33% superior del contenedor */
        background-size: cover;
        background-position: center;
    }
    .category {
        font-size: 12px;
        background-color: #28a745;
        color: #fff;
        padding: 2px 4px;
        display: inline-block;
        margin-bottom: 10px;
    }
    .blog-box-content{
        position: absolute;
        bottom: 2%;
    }
    .blog-entry h3{
        font-size: 22px;
    }
    .blog-entry p{
        font-size: 14px;
    }
</style>
@section('content')
@include('components/navbar')

<div class="container mt-5">
    <div class="row">
        <!-- Primera fila -->
        <div class="col-md-4">
            <div class="blog-entry">
                <div class="blog-entry-image" style="background-image: url('https://via.placeholder.com/300x200');"></div>
                <div class="blog-box-content">
                    <div class="category">Categoría 1</div>
                    <h3>Título del Post 1</h3>
                    <p>Descripción del Post 1... Descripción del Post 1... Descripción del Post 1... Descripción del Post 1... Descripción del Post 1... Descripción del Post 1... Descripción del Post 1...</p>
                    <p>Fecha de Creación: 01 de Mayo de 2024</p>
                </div>
            </div>
        </div>

        <!-- Primera fila -->
        <div class="col-md-4">
            <div class="blog-entry">
                <div class="blog-entry-image" style="background-image: url('https://via.placeholder.com/300x200');"></div>
                <div class="blog-box-content">
                    <div class="category">Categoría 1</div>
                    <h3>Título del Post 1</h3>
                    <p>Descripción del Post 1...</p>
                    <p>Fecha de Creación: 01 de Mayo de 2024</p>
                </div>
            </div>
        </div>

        <!-- Primera fila -->
        <div class="col-md-4">
            <div class="blog-entry">
                <div class="blog-entry-image" style="background-image: url('https://via.placeholder.com/300x200');"></div>
                <div class="blog-box-content">
                    <div class="category">Categoría 1</div>
                    <h3>Título del Post 1</h3>
                    <p>Descripción del Post 1...</p>
                    <p>Fecha de Creación: 01 de Mayo de 2024</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Otras filas... -->
</div>
@endsection
