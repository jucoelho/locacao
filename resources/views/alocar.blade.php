@extends('layout.master')

@section('title', 'Alocar')

@section('container')
<div>
<h1>Veiculos</h1>
   <form>
  
  
  <fieldset class="form-group">
    <label for="exampleSelect2">Marca</label>
    <select  class="form-control" id="exampleSelect2">
      <option>BMW</option>
      <option>Fiat</option>
      <option>Ford</option>
      
    </select>
  </fieldset>

  <fieldset class="form-group">
    <label for="exampleSelect2">Modelo</label>
    <select  class="form-control" id="exampleSelect2">
      <option>X5</option>
      <option>Punto</option>
      <option>Ecosport</option>
      
    </select>
  </fieldset>

  </fieldset>
   <fieldset class="form-group-inline">
    <label >Data Inicial</label>
    <input type="date" class="form-control,col-xs-3" id="data_inicial" placeholder="00/00/000">
    
  </fieldset>
  </fieldset>
   <fieldset class="form-group-inline">
    <label >Data Final  </label>
    <input type="date" class="form-control,col-xs-3" id="data_final" placeholder="00/00/000">
    
  </fieldset>
  <fieldset class="form-group">
    <label >Observação</label>
    <input type="text" class="form-control" id="Obs" placeholder="Observação">
    <div>
  <button type="submit" class="btn btn-primary">Alocar</button>      
    </div>
  
  
  
</form>
    
</div>

@endsection
