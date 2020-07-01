@extends('templates.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Listagem de Filiais</div>
                    <div class="text-right mt-2 mr-4">
                        <a href="" class="btn btn-success">Cadastrar</a>
                    </div>
                    <div class="card-body">
                        <table class="table text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Filial</th>
                                <th scope="col">IE</th>
                                <th scope="col">CNPJ</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fili as $filis)
                                <tr>
                                    <th scope="row">{{$filis->id}}</th>
                                    <td>{{$filis->name}}</td>
                                    <td>{{$filis->sr}}</td>
                                    <td>{{$filis->cnpj}}</td>
                                    <td>{{$filis->address}}, {{$filis->number}} - <br>{{$filis->district}} {{$filis->city}} / {{$filis->state}}</td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-dark">Ver</button>
                                        </a>
                                        <a href="">
                                            <button class="btn btn-primary">Editar</button>
                                        </a>
                                        <a href="">
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
