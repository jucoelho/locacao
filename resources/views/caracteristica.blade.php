@extends('layout.master')

@section('title', 'Veículos')

@section('container')
<div>
<h1>Veiculos</h1>
    <table class="table">
            <thead>
                <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Km Rodados</th>
                <th> Qtd. Portas </th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td>
                        Bmw
                    </td>
                    <td>
                       X5
                    </td>
                    <td>
                       2012
                    </td>
                    <td>
                        120.000
                    </td>
                    <td>
                     4
                    </td>
                </tr>
            <tr>
                    

            
            </tbody>
    </table>
    
</div>

@endsection
