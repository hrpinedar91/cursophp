@extends('layouts.base')
@section('title', 'Create a new Product')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Create a new Producto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('productos.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    <form class="container row shadow m-3 p-3" method="post" action="{{route('productos.store')}}">
        @csrf
        <div class="col-md-6 mt-2">
            <label for="product_name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre Producto">
        </div>
        <div class="col-md-6 mt-2">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion">
        </div>
        <div class="col-md-6 mt-2">
            <label for="price" class="form-label">price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Precio">
        </div>
        <div class="col-md-6 mt-2">
            <label for="stock" class="form-label">stock</label>
            <textarea type="number" class="form-control" id="stock" name="stock" placeholder="Stock"></textarea>
        </div>

        <div class="col-md-6 mt-2">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Image" />
        </div>
        <label for="task_description" class="form-label">weight</label>
        <input type="number" class="form-control" id="weight" name="weight" placeholder="Peso" />
        <div class="col-md-6 mt-2">
            <label for="task_description" class="form-label">release_date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" placeholder="relaase" />
        </div>
        <div class="col-md-6 mt-2">
            <label for="specifications" class="form-label">specifications</label>
            <input type="text" class="form-control" id="specifications" name="specifications" placeholder="specifications" />
        </div>
        <div class="col-12 mt-2">
            <button type="submit" class="btn btn-primary">Crear productos</button>
        </div>
</div>
</form>
</div>
@endsection