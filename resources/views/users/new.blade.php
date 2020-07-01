@extends('templates.template')

@section('content')
    <div class="container">
        @include('flash-message')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">@if(isset($user))Editar Funcionário @else Cadastrar Funcionário @endif</div>
                    <div class="card-body">
                        @if(isset($user))
                            <form name="formEdit" id="formEdit" method="post" action="{{url("users/$user->id")}}">
                                @method('PUT')
                        @else
                            <form name="formCad" id="formCad" method="post" action="{{url('users')}}">
                        @endif
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" value="@if(isset($user)) {{$user->name ?? ''}} @else @endif" placeholder="Informe o Nome" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nome">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="@if(isset($user)) {{$user->birth_date ?? ''}} @else @endif" placeholder="Data de Nascimento" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ano">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" value="@if(isset($user)) {{$user->email ?? ''}} @else @endif" placeholder="E-mail" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="modelo">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value="@if(isset($user)) {{$user->cpf ?? ''}} @else @endif" placeholder="CPF" required>
                                </div>
                                @if(isset($user))
                                    <div class="form-group col-md-1">
                                        <label for="inputState">Gênero</label>
                                        <select id="category" name="genre" class="form-control" required>
                                            <option value="">-- Selecione --</option>
                                            <option value="Feminino" @if ($user->genre == 'Feminino') selected @else '' @endif>Feminino</option>
                                            <option value="Masculino" @if ($user->genre == 'Masculino') selected @else '' @endif>Masculino</option>
                                        </select>
                                    </div>
                                @else
                                    <div class="form-group col-md-1">
                                        <label for="inputState">Gênero</label>
                                        <select id="category" name="genre" class="form-control" required>
                                            <option value="">-- Selecione --</option>
                                            <option value="Feminino">Feminino</option>
                                            <option value="Masculino">Masculino</option>
                                        </select>
                                    </div>
                                @endif


                                <div class="form-group col-md-5">
                                    <label for="modelo">Endereço</label>
                                    <input type="text" class="form-control" id="address" name="address" value="@if(isset($user)) {{$user->address ?? ''}} @else @endif" placeholder="Endereço" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="modelo">Número</label>
                                    <input type="text" class="form-control" id="number" name="number" value="@if(isset($user)) {{$user->number ?? ''}} @else @endif" placeholder="Número" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Bairro</label>
                                    <input type="text" class="form-control" id="district" name="district" value="@if(isset($user)) {{$user->district ?? ''}} @else @endif" placeholder="Bairro" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="modelo">Cidade</label>
                                    <input type="text" class="form-control" id="city" name="city" value="@if(isset($user)) {{$user->city ?? ''}} @else @endif" placeholder="Cidade" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="modelo">Estado</label>
                                    <input type="text" class="form-control" id="state" name="state" value="@if(isset($user)) {{$user->state ?? ''}} @else @endif" placeholder="Estado" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Cargo</label>
                                    <input type="text" class="form-control" id="role" name="role" value="@if(isset($user)) {{$user->role ?? ''}} @else @endif" placeholder="Cargo Desempenhado" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Salário</label>
                                    <input type="number" class="form-control" id="salary" name="salary" value="@if(isset($user)) {{$user->salary ?? ''}} @else @endif" placeholder="Salário" required>
                                </div>
                                @if(isset($user))
                                    <div class="form-group col-md-2">
                                        <label for="inputState">Status</label>
                                        <select id="category" name="status" class="form-control" required>
                                            <option value="Ativo" @if ($user->status == 'Ativo') selected @else '' @endif>Ativo</option>
                                            <option value="Inativo" @if ($user->status == 'Inativo') selected @else '' @endif>Inativo</option>
                                        </select>
                                    </div>
                                @else
                                    <div class="form-group col-md-2">
                                        <label for="inputState">Status</label>
                                        <select id="category" name="status" class="form-control" required>
                                            <option value="Ativo">Ativo</option>
                                            <option value="Inativo">Inativo</option>
                                        </select>
                                    </div>
                                @endif

                                <div class="form-group col-md-4">
                                    <label for="inputState">Filial</label>
                                    <select id="branch_id" name="branch_id" class="form-control" required>
                                        <option value="{{$user->relBranches->id ?? ''}}">{{$user->relBranches->name ?? 'Selecione'}}</option>
                                        @foreach($branch as $branchs)
                                            <option value="{{$branchs->id}}">{{$branchs->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Senha</label>
                                    <input type="password" minlength="8" class="form-control" id="password" name="password" placeholder="Informe a Senha" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">@if(isset($user))Editar @else Cadastrar @endif</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
