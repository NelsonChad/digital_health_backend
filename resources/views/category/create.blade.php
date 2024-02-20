@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Begin Page Content -->
    <div>

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Adicionar Categoria</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
        </div>

        <form action="{{ url('home/add-category') }}" method="post">
            @csrf

           <div style="margin-bottom: 3px; display: flex; flex-direction: column;">
            <label for="">Nome</label>
            <input type="text" name="name" style=" width: 50%; border: 1px solid #ccc;">
           </div>
           <div>
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
           </div>
        </form>
    </div>
</div>

@endsection