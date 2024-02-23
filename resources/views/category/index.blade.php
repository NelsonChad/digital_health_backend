@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <!-- Begin Page Content -->
    <h3 class="text-gray-600">Configuracoes de Categoria e Marca</h3>
    <br>
    @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between;">
                    <h4>
                        Lista de Categoria
                    </h4>
                    <a href="#" data-toggle="modal" data-target="#categoryModal" class="btn btn-primary btn-sm float-end">Adicionar Categoria</a>
                </div>
                <div class="card body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)

                            <tr style="height: 10px;">
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="" class="btn btn-success">Editar</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- Page Heading -->
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between;">
                    <h4>
                        Lista de Marcas
                    </h4>
                    <a href="#" data-toggle="modal" data-target="#brandModal" class="btn btn-primary btn-sm float-end">Adicionar Marca</a>
                </div>
                <div class="card body">
                      <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)

                            <tr style="height: 10px;">
                                <td>{{$brand->id}}</td>
                                <td>{{$brand->name}}</td>
                                <td>
                                    <a href="" class="btn btn-success">Editar</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar nova categoria</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ url('home/add-category') }}" method="post">
                @csrf
    
               <div style="margin-bottom: 3px; display: flex; flex-direction: column;">
                <label for="">Nome da categora</label>
                <input type="text" name="name" style="border: 1px solid #ccc;" placeholder="categoria">
               </div>
               <div>
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
               </div>
            </form>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="brandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar nova Marca</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('brand.store') }}" method="post">
                @csrf
    
               <div style="margin-bottom: 3px; display: flex; flex-direction: column;">
                <label for="">Nome da Marca</label>
                <input type="text" name="name" style="border: 1px solid #ccc;" placeholder="categoria">
               </div>
               <div>
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
               </div>
            </form>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>

@endsection