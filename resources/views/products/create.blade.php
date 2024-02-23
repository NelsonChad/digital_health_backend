@extends('layouts.app')

@section('content')

<div class="container-fluid px-4 ">
    <div class="card mt-4 ">
        <div class="card-header" style="display: flex; justify-content: space-between;">
            <h4>Adicionar Productos
            </h4>
        </div>
        <div class="card-body">

            @if ($errors-> any())
            <div class="alert alert-danger">
                @foreach( $errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
            </div>

            @endif
            <form action="{{ url('home/add-products') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row d-flex px-4" style="gap: 12px; justify-content: center;">
                    <div class="mb-3" style="width: 20%;">
                        <label for="categoria">Categoria</label>
                        <select name="categoria" class="form-control" id="categoria">
                            <option value="">Selecione uma categoria</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3" style="width: 30%;">
                        <label for="categoria">Marcas</label>
                        <select name="categoria" class="form-control" id="categoria">
                            <option value="">Selecione a Marca</option>
                            @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3" style="width: 40%;">
                        <label for="">Nome do Produto</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                </div>

                <div class="row d-flex px-4" style="gap: 15px; justify-content: center;">
                    <div class=" mb-3 " style="width: 20%;">
                        <label for="">Imagem</label>
                        <input type="file" name="image" class="form-control" />
                    </div>
                    <div class=" mb-3" style="width: 30%;">
                        <label for="">Código</label>
                        <input type="text" name="code" class="form-control" />
                    </div>
                    <div class=" mb-3" style="width: 40%;">
                        <label for="">Preço</label>
                        <input type="number" name="price" class="form-control" />
                    </div>
                </div>


                <div class="ml-5" style="width: 91%; justify-content: center; align-items: center;">
                    <div class="ml-2 mb-3">
                        <label for="">Descrição</label>
                        <textarea type="text" name="description" class="form-control" rows="4"></textarea>
                    </div>

                </div>
                <div class="ml-5">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="px-4">
    <div class="mt-4">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="" style="display: flex; justify-content: space-between;">
            <h4>Ver Productos
            </h4>
        </div>
        <div class="card-body">
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
    </div>
</div>

@endsection