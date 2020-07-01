@extends('templates.template')

@section('content')
    @php
        $bancher=$auto->find($auto->id)->relBranches;
    @endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Visualizar Automóvel</div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$auto->name}}" placeholder="Informe o Nome" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ano">Ano</label>
                                    <input type="number" class="form-control" id="year" name="year" value="{{$auto->year}}" placeholder="Ano" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" class="form-control" id="model" name="model" value="{{$auto->model}}" placeholder="Modelo" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Cor</label>
                                    <input type="text" class="form-control" id="color" name="color" value="{{$auto->color}}" placeholder="Cor" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Número do Chassi</label>
                                    <input type="text" class="form-control" id="chassi" name="chassi" value="{{$auto->numberchassi}}" placeholder="Número do Chassi" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Categoria</label>
                                    <input type="text" class="form-control" id="category" name="category" value="{{$auto->category}}" placeholder="Categoria" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="modelo">Filial</label>
                                    <input type="text" class="form-control" id="branch" name="branch" value="{{$bancher->name}}" placeholder="Número do Chassi" readonly>
                                </div>
                            </div>
                            <a href="{{url("automobiles")}}" class="btn btn-primary">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
