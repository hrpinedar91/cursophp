@extends('layouts.base')
@Section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-info" role="alert">Productos</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">description</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Image</th>
                        <th scope="col">weight</th>
                        <th scope="col">release_date</th>
                        <th scope="col">specifications</th>
                        <th scope="col">Actualizar</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->image}}</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->release_date}}</td>
                        <td>{{$product->specifications}}</td>
                        <td><a class="btn btn-primary btn-sm" href="{{route('productos.edit', $product)}}">Update</a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12 mx-3">
            <a href="{{ route('productos.create') }}" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
@endsection