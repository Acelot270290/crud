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
<script>
    $(document).ready(function() {
      $('#telefone').mask('(00) 0000-00009').focusout(function(event) {
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();
        if (phone.length > 10) {
          element.mask('(00) 00000-0009');
        } else {
          element.mask('(00) 0000-00009');
        }
      });

      $('#documento').keydown(function(event) {
        var target = event.currentTarget;
        var element = $(target);
        var documento = element.val().replace(/\D/g, '');
        var length = documento.length;
    
        element.unmask();
    
        if (length <= 11) {
          element.mask('000.000.000-00');
        } else if (length > 11 && length <= 14) {
          element.mask('00.000.000/0000-00');
        }
      });
    
      $('#cep').mask('00000-000');
    
    
      $('#cep').on('blur', function() {
        var cep = $(this).val().replace(/\D/g, '');
    
        if (cep.length === 8) {
          $.ajax({
            url: 'https://viacep.com.br/ws/' + cep + '/json/',
            dataType: 'json',
            success: function(data) {
              if (!data.erro) {
                $('#cidade').val(data.localidade);
                $('#estado').val(data.uf);
                $('#pais').val('Brasil');
              }
            }
          });
        }
      });
    });
    </script>
    
    
@include('sweetalert::alert')
@endsection
