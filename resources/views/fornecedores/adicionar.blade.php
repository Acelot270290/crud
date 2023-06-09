<div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby=""
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Cadastrar Fornecedor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form enctype="multipart/form-data" action="{{route('adicionarFornecedor')}}" method="post">
        <div class="modal-body">

          {!! csrf_field() !!}
          <input type="hidden" name="idProcesso" id="idProcesso">


            <div class="col-md-6 float-left padding-larg">
              <div class="form-group">
                <label for="">Nome</label>
                <input type="text" class="form-control" id="nome"
                  name="nome" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6 float-left padding-larg">
              <div class="form-group">
                <label for="">Documento</label>
                <input type="text" class="form-control" id="documento"
                  name="documento" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email"
                  name="email" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Telefone</label>
                <input type="text" class="form-control" id="telefone"
                  name="telefone" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
                <div class="form-group">
                  <label for="">Cep</label>
                  <input type="text" class="form-control" id="cep"
                    name="cep" autocomplete="off" required>
                </div>
              </div>
              <div class="col-md-4 float-left padding-larg">
                <div class="form-group">
                  <label for="">cidade</label>
                  <input type="text" class="form-control" id="cidade"
                    name="cidade" autocomplete="off" required>
                </div>
              </div>
              <div class="col-md-4 float-left padding-larg">
                <div class="form-group">
                  <label for="">estado</label>
                  <input type="text" class="form-control" id="estado"
                    name="estado" autocomplete="off" required>
                </div>
              </div>
              <div class="col-md-4 float-left padding-larg">
                <div class="form-group">
                  <label for="">pais</label>
                  <input type="text" class="form-control" id="pais"
                    name="pais" autocomplete="off" required>
                </div>
              </div>
              <div class="col-md-12 float-left padding-larg">
                <div class="form-group">
                  <label for="">Dados Bancários</label>
                  <textarea name="dadosBancarios" id="dadosBancarios" class="form-control" required></textarea>
                </div>
              </div>

            <div class="modal-footer">
              <input type="submit" id="cadastrarNegociacaofiliadosForm" class="btn btn-primary" value="Enviar">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>