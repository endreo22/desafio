@extends('templates.template')

@section('content')
    <div class="container">
        @include('flash-message')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editar Filial</div>
                    <div class="card-body">
                        <form name="formCad" id="formCad" method="post" action="{{url('branches')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Informe o Nome">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ano">IE</label>
                                    <input type="number" class="form-control" id="sr" name="sr" placeholder="IE">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">CNPJ</label>
                                    <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="modelo">Endereço</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Endereço">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="modelo">Número</label>
                                    <input type="text" class="form-control" id="number" name="number" placeholder="Número">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Bairro</label>
                                    <input type="text" class="form-control" id="district" name="district" placeholder="Bairro">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="modelo">Cidade</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Cidade">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="modelo">Estado</label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="Estado">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
