@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
           
            <div class="card">

                @if (isset($pharmacy))
                    <div class="card-header">
                        @if (isset($pharmacy))
                        <div class="row justify-content-center">
                            <img width="100" height="100" class="img-profile rounded-circle" src="{{asset('/images/uploads/pharmacys/'. $pharmacy->avatar)}}">
                        </div>
                    @endif
                        <b>Alterar Farmacia: - {{ $pharmacy->name }}</b>
                    </div>
                @else
                    <div class="card-header"><b>{{ __('Nova Farmacia') }}</b></div>
                @endif
                <br>
                @isset($pharmacy->logo)
                    <div class="d-flex justify-content-center">
                        <img style="width: 120px; height: 120px;" class="img-profile rounded-circle" class="card-img-top"
                            src="{{ asset('uploads/pharmacies/' . $pharmacy->logo) }}" alt="logo">
                    </div>
                    <br>
                @endisset
                <div class="card-body">
                    @if (isset($pharmacy))
                        <form method="POST" action="{{ route('admin.pharmacies.update', $pharmacy->id) }}"
                            enctype="multipart/form-data">
                        @else
                            <form method="POST" action="{{ route('admin.pharmacies.store') }}" enctype="multipart/form-data">
                    @endif
                    @csrf

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="name">{{ __('Nome da Farmacia') }}</label>
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ $pharmacy->name ?? old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="address">{{ __('Endereço') }}</label>
                            <input id="address" type="address"
                                class="form-control @error('address') is-invalid @enderror" name="address"
                                value="{{ $pharmacy->address ?? old('address') }}" required autocomplete="Endereço">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!--Must remove after -->
                        <input type="text" name="pharmacy_id" value="1" hidden>

                        <div class="form-group col-md-6">
                            <label for="province">{{ __('Província') }}</label>

                            <select class="form-control js-example-basic-single" name="province_id" id="province" autofocus>
                                <option value="1" selected>Maputo</option>
                            </select>

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Photo</label>
                            <input type="file" name="logo" class="form-control" id="inputLogo"
                                placeholder="Insira uma imagem">
                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="open_time">{{ __('Hora de Abertura') }}</label>
                            <input id="open_time" type="time"
                                class="form-control @error('open_time') is-invalid @enderror" name="open_time"
                                value="{{ $pharmacy->open_time ?? old('open_time') }}" required autocomplete="open time" autofocus>

                            @error('open_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cloese_time">{{ __('Hora de fechamento') }}</label>
                            <input id="cloese_time" type="time"
                                class="form-control @error('cloese_time') is-invalid @enderror" name="close_time"
                                value="{{ $pharmacy->cloese_time ?? old('cloese_time') }}" required autocomplete="open time" autofocus>

                            @error('cloese_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="latitude">{{ __('latitude') }}</label>
                            <input id="latitude" type="text"
                                class="form-control @error('latitude') is-invalid @enderror" name="latitude"
                                value="{{ $pharmacy->latitude ?? old('latitude') }}" required autocomplete="latitude" autofocus>

                            @error('latitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="longitude">{{ __('longitude') }}</label>
                            <input id="longitude" type="text"
                                class="form-control @error('longitude') is-invalid @enderror" name="longitude"
                                value="{{ $pharmacy->longitude ?? old('longitude') }}" required autocomplete="longitude" autofocus>

                            @error('longitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if (isset($pharmacy))
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
    @isset($pharmacies)
            @if (count($pharmacies) > 0)
            <h5>Lista de Farmacias </h5>
                <div class="table">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Farmacia</th>
                                <th>Endereço</th>
                                <th>Open time</th>
                                <th>Close Time</th>
                                <th class="text-center" colspan="3" style="width:15%">Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pharmacies as $pharmacy)
                                <tr>
                                    <td>{{ $pharmacy->id }}</td>
                                    <td><img width="50" height="50" class="img-profile rounded-circle" src="{{asset('uploads/pharmacies/default.png'. $pharmacy->logo)}}"></td>
                                    <td>{{ $pharmacy->name }}</td>
                                    <td>{{ $pharmacy->address }}</td>
                                    <td>{{ $pharmacy->open_time }}</td>
                                    <td>{{ $pharmacy->close_time }}</td>
                                    
                                        <td class="text-center"> 
                                            <a class="btn btn-info btn-sm"  href="#" data-toggle="tooltip" title="Mais info"><i class="fa fa-eye"></i></a>
                                        </td>
                                        <td class="text-center">
                                        <a class="btn btn-success btn-sm" href="{{ route('admin.pharmacies.edit', $pharmacy->id) }}" data-toggle="tooltip" title="Alterar Dados"><i class="fa fa-pen"></i></a>
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