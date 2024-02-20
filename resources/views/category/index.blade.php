@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <!-- Begin Page Content -->
    <div class="card">
        <div class="card-header" style="display: flex; justify-content: space-between;">
            <h4>
                Lista de Categoria
            </h4>
            <a href="{{url('home/add-category')}}" class="btn btn-primary btn-sm float-end">Adicionar Categoria</a>
        </div>
        <div class="card body">
            @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CreatetAt</th>
                        <th>UpdatedAt</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)

                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
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

@endsection