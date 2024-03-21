@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <div class="card-header" style="display: flex; justify-content: space-between;">
        <h4>Ver Farmácias
        </h4>
        <a data-toggle="modal" data-target="#pharmacyModal" href="{{url('home/add-pharmacies')}}" class="btn btn-primary float-end">Adicionar Produtos</a>
    </div>
    <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Logo</th>
                        <th>Endereço</th>
                        <th>0pen</th>
                        <th>Close</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
</div>
<div class="modal fade" id="pharmacyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                @if($errors-> any())
                @foreach($$errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif
                <h5 class="modal-title" id="exampleModalLabel">Adicionar nova Farmácia</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('home/pharmacies') }}" method="post">
                    @csrf

                    <div style="margin-bottom: 3px; display: flex; flex-direction: column;">
                        <label for="">Nome</label>
                        <input type="text" name="" style="border: 1px solid #ccc; width: 100%; " placeholder="nome">
                        <label class="mt-3" for="">Logo</label>
                        <input type="file" name="logo" class="form-control" />
                        <label class="mt-3" for="">Endereço</label>
                        <input type="text" name="address" style="border: 1px solid #ccc; width: 100%; " placeholder="endereço">
                        <label class="mt-3" for="">Slogan</label>
                        <textarea type="text" name="" style="border: 1px solid #ccc; width: 100%;"></textarea>
                    </div>
                    <div style="margin-bottom: 3px;">
                        <div class="form-row mt-3">
                            <div class="form-group col-6">
                                <label for="">Latitude</label>
                                <input type="number" name="latitude" class="form-control" />
                            </div>
                            <div class="form-group col-6">
                                <label for="">Longitude</label>
                                <input type="number" name="lonitude" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom: 3px;">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="appt1">Open</label>
                                <input type="time" id="appt1" name="open_time" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="appt2">Close</label>
                                <input type="time" id="appt2" name="close_time" class="form-control">
                            </div>
                        </div>
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

<script>
    var firstOpen = true;
    var time;
    $('#timePicker').datetimepicker({
        useCurrent: false,
        format: "hh:mm A"
    }).on('dp.show', function() {
        if (firstOpen) {
            time = moment().startOf('day');
            firstOpen = false;
        } else {
            time = "01:00 PM"
        }
        $(this).data('DateTimePicker').date(time);
    });
</script>

@endsection