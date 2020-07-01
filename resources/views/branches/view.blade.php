@extends('templates.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Visualizar Filiais</div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$fili->name}}" placeholder="Informe o Nome" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ano">IE</label>
                                    <input type="number" class="form-control" id="sr" name="sr" value="{{$fili->sr}}" placeholder="IE" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">CNPJ</label>
                                    <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$fili->cnpj}}" placeholder="CNPJ" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="modelo">Endereço</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$fili->address}}" placeholder="Endereço" readonly>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="modelo">Número</label>
                                    <input type="text" class="form-control" id="number" name="number" value="{{$fili->number}}" placeholder="Número" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Bairro</label>
                                    <input type="text" class="form-control" id="district" name="district" value="{{$fili->district}}" placeholder="Bairro" readonly>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="modelo">Cidade</label>
                                    <input type="text" class="form-control" id="city" name="city" value="{{$fili->city}}" placeholder="Cidade" readonly>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="modelo">Estado</label>
                                    <input type="text" class="form-control" id="state" name="state" value="{{$fili->state}}" placeholder="Estado" readonly>
                                </div>
                            </div>
                            <a href="{{url("branches")}}" class="btn btn-primary">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
