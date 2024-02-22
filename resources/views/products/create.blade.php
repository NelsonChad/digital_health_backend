@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header" style="display: flex; justify-content: space-between;">
            <h4>Adicionar Productos
            </h4>
            <a href="{{url('/add-products')}}" class="btn btn-primary float-end">Adicionar Produtos</a>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="">Categoria</label>
                    <select name="" class="form-control">
                        <option value=""></option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Nome do Produto</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Imagem</label>
                    <input type="file" name="image" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Código</label>
                    <input type="text" name="code" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Preço</label>
                    <input type="text" name="price" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Descrição</label>
                    <textarea type="text" name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="row">
                    <div class="mb-3 ml-3">
                        <button type="submit" class="btn btn-primary float-end">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection