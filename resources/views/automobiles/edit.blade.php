@extends('templates.template')

@section('content')
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
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Informe o Nome" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ano">Ano</label>
                                    <input type="number" class="form-control" id="year" name="year" placeholder="Ano" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" class="form-control" id="model" name="model" placeholder="Modelo" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Cor</label>
                                    <input type="text" class="form-control" id="color" name="color" placeholder="Cor" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Número do Chassi</label>
                                    <input type="text" class="form-control" id="chassi" name="chassi" placeholder="Número do Chassi" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Categoria</label>
                                    <select id="category" name="category" class="form-control" readonly>
                                        <option selected>Escolha a Categoria</option>
                                        <option value="Entrada">Entrada</option>
                                        <option value="Hatch Pequeno">Hatch Pequeno</option>
                                        <option value="Hatch Médio">Hatch Médio</option>
                                        <option value="Sedã Médio">Sedã Médio</option>
                                        <option value="Sedã Grande">Sedã Grande</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Pick-ups">Pick-ups</option>
                                    </select>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary" disabled>Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
