@extends('layouts.app')

@section('content')
<div class="container">
    @include('includes.alerts')

    <div class="row">
        <div class="col-md-8">
        
            @if(isset($user))
                <h2>Alterar Utilizador:  - {{$user->name}}</h2>
            @else
                <h3>{{ __('Nova Utilizador') }}</h3>
            @endif 
                <br>
                @isset($user->logo)
                    <div class="d-flex justify-content-center">
                        <img style="width: 120px; height: 120px;" class="img-profile rounded-circle" class="card-img-top" src="{{asset('/images/uploads/users/'.$user->avatar)}}" alt="avatar">
                    </div>
                    <br>
                @endisset
                <div class="card-body">
                    @if(isset($user))
                        <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                    @else
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @endif
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Utilizador') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name ?? old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email ?? old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Must remove after -->
                        <input type="text" name="pharmacy_id" value="1" hidden>

                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
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
                        </div>

                        @if(!isset($user))
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        @endif

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Photo</label>

                            <div class="col-md-6">
                                <input type="file" name="avatar" class="form-control" id="inputAvatar" placeholder="Insira uma imagem">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if(isset($user))
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
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection
