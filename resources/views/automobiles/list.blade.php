@extends('templates.template')

@section('content')
    <div class="container">
        @include('flash-message')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Listagem de Automóveis</div>
                    <div class="text-right mt-2 mr-4">
                        <a href="{{"automobiles/create"}}" class="btn btn-success">Cadastrar</a>
                    </div>
                    <div class="card-body">
                        @csrf
                        <table class="table text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Filial</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Cor</th>
                                <th scope="col">Chassi</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($auto as $autos)
                                @php
                                    $bancher=$autos->find($autos->id)->relBranches;
                                @endphp
                                <tr>
                                    <th scope="row">{{$autos->id}}</th>
                                    <td>{{$bancher->name}}</td>
                                    <td>{{$autos->name}}</td>
                                    <td>{{$autos->year}}</td>
                                    <td>{{$autos->model}}</td>
                                    <td>{{$autos->color}}</td>
                                    <td>{{$autos->numberchassi}}</td>
                                    <td>{{$autos->category}}</td>
                                    <td>
                                        <a href="{{url("automobiles/$autos->id")}}">
                                            <button class="btn btn-dark">Ver</button>
                                        </a>
                                        <a href="{{"automobiles/$autos->id/edit"}}">
                                            <button class="btn btn-primary">Editar</button>
                                        </a>
                                        <a href="{{"automobiles/$autos->id"}}" class="js-del-aut">
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
