@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card-header" style="display: flex; justify-content: space-between;">
            <h4>Ver Productos
            </h4>
            <a href="{{url('/add-products')}}" class="btn btn-primary float-end">Adicionar Produtos</a>
        </div>

        @if(count($products) > 0)
            <div class="card-body">
                Seus Productos
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagem</th>
                            <th>Producto</th>
                            <th>Código</th>
                            <th>Preço</th>
                            <th>Marca</th>
                            <th>Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img width="50" height="50" class="img-profile rounded-circle" src="{{asset('/uploads/products/'. $product->image )}}"></td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->brand }}</td>
                            <td>{{ $product->category }}</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
        <p class="alert alert-warning text-center">{{$message}}</p>
        @endif
    </div>

</div>

@endsection