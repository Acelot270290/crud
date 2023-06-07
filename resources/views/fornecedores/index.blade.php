@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Fornecedores') }}</div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Adicionar Fornecedor
                  </button>    
            </div> 
            
        </div>
        
    </div>

 
@include('fornecedores.adicionar');
@endsection
