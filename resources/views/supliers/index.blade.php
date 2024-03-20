@extends('layouts.app')

@section('content')

<div class="container-fluid px-4 ">
    <div class="row">
        <div class="col-6">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between;">
                    <h4>
                        Lista de Fornecedores
                    </h4>
                    <a href="#" data-toggle="modal" data-target="#categoryModal" class="btn btn-primary btn-sm float-end">Adicionar Fornecedor</a>
                </div>
                <div class="card body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Contacto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suppliers as  $supplier)
                            <tr style="height: 10px;">
                                <td>{{$supplier->id}}</td>
                                <td>{{$supplier->supplier_name}}</td>
                                <td>{{$supplier->contact}}</td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#categoryModal" class="btn btn-success">Editar</a>
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- Page Heading -->
        </div>
    </div>
</div>
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                @if($errors-> any())
                    @foreach($$errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <h5 class="modal-title" id="exampleModalLabel">Adicionar novo Fornecedor</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('home/supliers') }}" method="post">
                    @csrf

                    <div style="margin-bottom: 3px; display: flex; flex-direction: column;">
                        <label for="">Nome</label>
                        <input type="text" name="supplier_name" style="border: 1px solid #ccc;" placeholder="nome">
                        <label for="">Contacto</label>
                        <input type="text" name="contact" style="border: 1px solid #ccc;" placeholder="contacto">
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