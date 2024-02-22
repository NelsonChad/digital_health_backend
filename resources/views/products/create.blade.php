@extends('layouts.app')

@section('content')

<div class="container-fluid px-4 d-flex align-items-center justify-content-center">
    <div class="card mt-4 " style="width: 50%;">
        <div class="card-header" style="display: flex; justify-content: space-between;">
            <h4>Adicionar Productos
            </h4>
            <a href="{{url('/add-products')}}" class="btn btn-primary float-end">Adicionar Produtos</a>
        </div>
        <div class="card-body">
            <form action="{{ url('/add-products') }}" method="post">
                @csrf
                <div class="row d-flex px-4" style="gap: 12px;">
                    <div class="mb-3" style="width: 45%;">
                        <label for="categoria">Categoria</label>
                        <select name="categoria" class="form-control" id="categoria">
                            <option value="">Selecione uma categoria</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 w-50">
                        <label for="">Nome do Produto</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                </div>

                <div class="ml-2 mb-3 ">
                    <label for="">Imagem</label>
                    <input type="file" name="image" class="form-control" />
                </div>
                <div class="ml-2 mb-3">
                    <label for="">Código</label>
                    <input type="text" name="code" class="form-control" />
                </div>
                <div class="ml-2 mb-3 ">
                    <label for="">Preço</label>
                    <input type="number" name="price" class="form-control" />
                </div>
                <div class="ml-2 mb-3">
                    <label for="">Descrição</label>
                    <textarea type="text" name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="ml-2 row">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection