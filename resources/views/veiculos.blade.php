@extends('layout.master')

@section('title', 'Veículos')

@section('container')
<div>
<h1>Veiculos</h1>
   <table class="table">
            <thead>
                <tr>
                <th>Marca</th>
                <th>Ano</th>
                <th>Modelo</th>
                
                </tr>
            </thead>
            <tbody>
            @foreach( $veiculos as $veiculo ) 
                <tr>
                    <td>
                        <a href="{{route('veiculo.show', $veiculo->id)}}"> {{$veiculo->marca}}</a>
                    </td>
                    <td>
                        {{$veiculo->ano}}
                    </td>
                    <td>
                        {{$veiculo->getModeloName()}}
                    </td>
                </tr>
            @endforeach
            
            </tbody>
    </table>
    {!! $veiculos->render() !!}
    
</div>

@endsection
