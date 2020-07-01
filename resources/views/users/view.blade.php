@extends('templates.template')

@section('content')
    @php
        $bancher=$user->find($user->id)->relBranches;
    @endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Adicionar Funcionário</div>
                    <div class="card-body">
                        <form name="formCad" id="formCad" method="post" action="{{url('users')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" readonly>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="nome">Nascimento</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$user->birth_date}}" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ano">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" readonly>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="modelo">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{$user->cpf}}" readonly>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputState">Gênero</label>
                                    <input type="text" class="form-control" id="genre" name="genre" value="{{$user->genre}}" readonly>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="modelo">Endereço</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}" readonly>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="modelo">Número</label>
                                    <input type="text" class="form-control" id="number" name="number" value="{{$user->number}}" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Bairro</label>
                                    <input type="text" class="form-control" id="district" name="district" value="{{$user->district}}" readonly>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="modelo">Cidade</label>
                                    <input type="text" class="form-control" id="city" name="city" value="{{$user->city}}" readonly>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="modelo">Estado</label>
                                    <input type="text" class="form-control" id="state" name="state" value="{{$user->state}}" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Cargo</label>
                                    <input type="text" class="form-control" id="role" name="role" value="{{$user->role}}" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Salário</label>
                                    <input type="number" class="form-control" id="salary" name="salary" value="{{$user->salary}}" readonly>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputState">Status</label>
                                    <input type="text" class="form-control" id="status" name="status" value="{{$user->status}}" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Filial</label>
                                    <input type="text" class="form-control" id="branch_id" name="branch_id" value="{{$bancher->name}}" readonly>
                                </div>
                            </div>
                            <a href="{{url("users")}}" class="btn btn-primary">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
