@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.alerts')
        <div class="row">
            <div class="col">
               
                <div class="card">

                    @if (isset($user))
                        <div class="card-header">
                            @if (isset($user))
                            <div class="row justify-content-center">
                                <img width="100" height="100" class="img-profile rounded-circle" src="{{asset('/images/uploads/users/'. $user->avatar)}}">
                            </div>
                        @endif
                            <b>Alterar Utilizador: - {{ $user->name }}</b>
                        </div>
                    @else
                        <div class="card-header"><b>{{ __('Novo Utilizador') }}</b></div>
                    @endif
                    <br>
                    @isset($user->logo)
                        <div class="d-flex justify-content-center">
                            <img style="width: 120px; height: 120px;" class="img-profile rounded-circle" class="card-img-top"
                                src="{{ asset('/images/uploads/users/' . $user->avatar) }}" alt="avatar">
                        </div>
                        <br>
                    @endisset
                    <div class="card-body">
                        @if (isset($user))
                            <form method="POST" action="{{ route('admin.user.update', $user->id) }}"
                                enctype="multipart/form-data">
                            @else
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @endif
                        @csrf

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="name">{{ __('Nome do Utilizador') }}</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $user->name ?? old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $user->email ?? old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!--Must remove after -->
                            <input type="text" name="pharmacy_id" value="1" hidden>

                            <div class="form-group col-md-6">
                                <label for="role">{{ __('Role') }}</label>

                                <select class="form-control js-example-basic-single" name="role" id="role" autofocus>
                                    <option value="0" selected>Farmacia</option>
                                    <option value="1">Administrador</option>
                                </select>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Photo</label>
                                <input type="file" name="avatar" class="form-control" id="inputAvatar"
                                    placeholder="Insira uma imagem">
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            @if (!isset($user))
                                <div class="form-group col-md-6">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            @endif


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    @if (isset($user))
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Actualizar') }}
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrar') }}
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        @if(@isset($users))   
            @if (count($users) > 0)
            <h5>Lista de Utilizadores </h5>
                <div class="table">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Role</th>
                                <th class="text-center" colspan="3" style="width:15%">Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><img width="50" height="50" class="img-profile rounded-circle" src="{{asset('/images/uploads/users/'. $user->avatar)}}"></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        {{ $user->role }}
                                    </td>
                                    
                                        <td class="text-center"> 
                                            <a class="btn btn-info btn-sm"  href="{{ route('admin.user.show', $user->id) }}" data-toggle="tooltip" title="Mais info"><i class="fa fa-eye"></i></a>
                                        </td>
                                        <td class="text-center">
                                        <a class="btn btn-success btn-sm" href="{{ route('admin.user.edit', $user->id) }}" data-toggle="tooltip" title="Alterar Dados"><i class="fa fa-pen"></i></a>
                                        </td>
                                    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="alert alert-warning text-center">{{ $message }}</p>
            @endif
        @endisset
    </div>
@endsection
