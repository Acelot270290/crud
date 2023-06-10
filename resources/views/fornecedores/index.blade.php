@extends('layouts.app')

@section('content')
<div class="container-mg">
  <div id="loading" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <img src="{{asset('load.gif')}}" alt="Carregando...">
  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Fornecedores') }}</div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Adicionar Fornecedor
                  </button>    
            </div> 
            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Documento</th>
                    <th>Data Registro</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($fornecedores as $forn)

                  <tr>
                    <td>{{$forn->id}}</td>
                    <td>{{$forn->nome}}</td>
                    <td>{{$forn->email}}</td>
                    <td>{{$forn->telefone}}</td>
                    <td>{{$forn->documento}}</td>
                    <td>{{ $forn->created_at->format("d/m/Y H:i:s") }}</td>
                    <td><button data-id={{$forn->id}} type="button" class="btn btn-primary editarfornecedor" data-toggle="modal" data-target="#edicaoFornecedor">
                      Editar
                    </button></td>
                    <td><button type="button" data-id={{$forn->id}} name="{{$forn->nome}}" class="btn btn-danger deletanovo">Excluir</button></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            
        </div>
      
        
        
    </div>

 

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
  
        $('#edit_telefone').mask('(00) 0000-00009').focusout(function(event) {
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
  
        $('#edit_documento').keydown(function(event) {
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
  
        $('#edit_cep').mask('00000-000');
  
        $('#edit_cep').on('blur', function() {
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
  
        $(document).on('click', '.editarfornecedor', function() {
          $('#loading').show();
          let id = $(this).attr('data-id');
          $.ajax({
            url: '/fornecedores/get/' + id,
            type: 'GET'
          }).done(function(data) {
            console.log(data);
            $('#editarForm').attr('action', "/fornecedores/update/" + id);
            $('#edit_nome').val(data[0].nome);
            $('#edit_documento').val(data[0].documento);
            $('#edit_documento').val(data[0].documento);
            $('#edit_email').val(data[0].email);
            $('#edit_telefone').val(data[0].telefone);
            $('#edit_cep').val(data[0].cep);
            $('#edit_cidade').val(data[0].cidade);
            $('#edit_estado').val(data[0].estado);
            $('#edit_pais').val(data[0].pais);
            $('#edit_dadosBancarios').val(data[0].dados_bancarios);
            $('#loading').hide();
          });
        });
  
        $(".deletanovo").click(function(e) {
          e.preventDefault();
          let id_fornecedor = $(this).attr('data-id');
          let titulo_fornecedor = $(this).attr('name');
  
          var botao = $(this);
  
          Swal.fire({
            title: 'Tem certeza?',
            text: 'Deseja deletar o fornecedor ' + titulo_fornecedor+ '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
          }).then((result) => {
            if (result.isConfirmed) {
              $('#loader').removeClass('hidden');
              $.ajax({
                url: 'fornecedores/delete/' + id_fornecedor,
                type: 'POST',
                headers: {
                  'X-CSRF-TOKEN': $('input[name=_token]').val()
                }
              }).done(function(data) {
                $('#loader').addClass('hidden');
                if (data.status == 'success') {
                  Swal.fire('Sucesso!', data.msg, 'success');
                  botao.parent().parent().remove();
                } else {
                  Swal.fire('Erro!', data.msg, 'error');
                }
              });
            }
          });
        });
      });
    </script>
    
@include('fornecedores.adicionar');
@include('fornecedores.editar');   
@include('sweetalert::alert')

@endsection
