@extends('templates.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Listagem de Funcionários</div>
                    <div class="text-right mt-2 mr-4">
                        <a href="{{"users/create"}}" class="btn btn-success">Cadastrar</a>
                    </div>
                    <div class="card-body">
                        <table class="table text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Filial</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Salário</th>
                                <th scope="col">Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $users)
                                @php
                                    $us=$users->find($users->id)->relBranches;
                                @endphp
                                <tr>
                                    <th scope="row">{{$users->id}}</th>
                                    <td>{{$users->name}}</td>
                                    <td>{{$us->name}}</td>
                                    <td>{{$users->role}}</td>
                                    <td>{{$users->salary}}</td>
                                    <td>
                                        <a href="{{url("users/$users->id")}}">
                                            <button class="btn btn-dark">Ver</button>
                                        </a>
                                        <a href="{{url("users/$users->id/edit")}}">
                                            <button class="btn btn-primary">Editar</button>
                                        </a>
                                        <a href="{{url("users/$users->id")}}" class="js-del-fun">
                                            <button class="btn btn-danger">Deletar</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
