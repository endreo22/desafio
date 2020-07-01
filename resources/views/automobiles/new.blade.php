@extends('templates.template')

@section('content')
    <div class="container">
        @include('flash-message')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">@if(isset($auto))Editar Automóvel @else Cadastrar Automóvel @endif</div>
                    <div class="card-body">
                        @if(isset($auto))
                            <form name="formCad" id="formCad" method="post" action="{{url("automobiles/$auto->id")}}">
                                @method('PUT')
                        @else
                            <form name="formCad" id="formCad" method="post" action="{{url('automobiles')}}">
                        @endif
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" value="@if(isset($auto)) {{$auto->name ?? ''}} @else @endif" placeholder="Informe o Nome" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ano">Ano</label>
                                    <input type="number" class="form-control" id="year" name="year" value="@if(isset($auto)) {{$auto->year ?? ''}} @else @endif" placeholder="Informe o Ano" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" class="form-control" id="model" name="model" value="@if(isset($auto)) {{$auto->model ?? ''}} @else @endif" placeholder="Informe o Modelo" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Cor</label>
                                    <input type="text" class="form-control" id="color" name="color" value="@if(isset($auto)) {{$auto->color ?? ''}} @else @endif" placeholder="Informe a Cor" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Número do Chassi</label>
                                    <input type="text" class="form-control" id="numberchassi" name="numberchassi" value="@if(isset($auto)) {{$auto->numberchassi ?? ''}} @else @endif" placeholder="Número do Chassi" required>
                                </div>
                                @if(isset($auto))
                                <div class="form-group col-md-4">
                                    <label for="inputState">Categoria</label>
                                    <select id="category" name="category" class="form-control" required>
                                        <option value="">Escolha a Categoria</option>
                                        <option value="Entrada" @if ($auto->category == 'Entrada') selected @else '' @endif>Entrada</option>
                                        <option value="Hatch Pequeno" @if ($auto->category == 'Hatch Pequeno') selected @else '' @endif>Hatch Pequeno</option>
                                        <option value="Hatch Médio" @if ($auto->category == 'Hatch Médio') selected @else '' @endif>Hatch Médio</option>
                                        <option value="Sedã Médio" @if ($auto->category == 'Sedã Médio') selected @else '' @endif>Sedã Médio</option>
                                        <option value="Sedã Grande" @if ($auto->category == 'Sedã Grande') selected @else '' @endif>Sedã Grande</option>
                                        <option value="SUV" @if ($auto->category == 'SUV') selected @else '' @endif>SUV</option>
                                        <option value="Pick-ups" @if ($auto->category == 'Pick-ups') selected @else '' @endif>Pick-ups</option>
                                    </select>
                                </div>
                                @else
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Categoria</label>
                                        <select id="category" name="category" class="form-control" required>
                                            <option value="">Escolha a Categoria</option>
                                            <option value="Entrada">Entrada</option>
                                            <option value="Hatch Pequeno">Hatch Pequeno</option>
                                            <option value="Hatch Médio">Hatch Médio</option>
                                            <option value="Sedã Médio">Sedã Médio</option>
                                            <option value="Sedã Grande">Sedã Grande</option>
                                            <option value="SUV">SUV</option>
                                            <option value="Pick-ups">Pick-ups</option>
                                        </select>
                                    </div>
                                @endif
                                <div class="form-group col-md-4">
                                    <label for="inputState">Filial</label>
                                    <select id="branch_id" name="branch_id" class="form-control" required>
                                        <option value="@if(isset($auto)) {{$auto->relBranches->id ?? ''}} @else @endif">@if(isset($auto)) {{$auto->relBranches->name ?? 'Selecione'}} @else @endif</option>
                                        @foreach($branch as $branchs)
                                            <option value="{{$branchs->id}}">{{$branchs->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">@if(isset($auto))Editar @else Cadastrar @endif </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
