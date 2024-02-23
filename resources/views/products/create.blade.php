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
                            <option value="">Selecione uma categoria</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
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
            <div class="alert alert-success">{{ (session('message') }}</div>
        @endif
        <div class="card" style="display: flex; justify-content: space-between;">
            <h4>Ver Productos
            </h4>
        </div>
        <div class="card-body">
            Seus Productos
        </div>
    </div>
</div>

@endsection