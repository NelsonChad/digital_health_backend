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
        <div class="card-body">
            Seus Productos
        </div>
    </div>
</div>

@endsection