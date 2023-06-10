<div class="modal fade" id="edicaoFornecedor" tabindex="-1" role="dialog" aria-labelledby=""
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar Fornecedor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form enctype="multipart/form-data" id="editarForm" action="" method="post">
        <div class="modal-body">

          {!! csrf_field() !!}


            <div class="col-md-6 float-left padding-larg">
              <div class="form-group">
                <label for="">Nome</label>
                <input type="text" class="form-control" id="edit_nome"
                  name="edit_nome" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6 float-left padding-larg">
              <div class="form-group">
                <label for="">Documento</label>
                <input type="text" class="form-control" id="edit_documento"
                  name="edit_documento" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="edit_email"
                  name="edit_email" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Telefone</label>
                <input type="text" class="form-control" id="edit_telefone"
                  name="edit_telefone" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
                <div class="form-group">
                  <label for="">Cep</label>
                  <input type="text" class="form-control" id="edit_cep"
                    name="edit_cep" autocomplete="off">
                </div>
              </div>
              <div class="col-md-4 float-left padding-larg">
                <div class="form-group">
                  <label for="">cidade</label>
                  <input type="text" class="form-control" id="edit_cidade"
                    name="edit_cidade" autocomplete="off">
                </div>
              </div>
              <div class="col-md-4 float-left padding-larg">
                <div class="form-group">
                  <label for="">estado</label>
                  <input type="text" class="form-control" id="edit_estado"
                    name="edit_estado" autocomplete="off">
                </div>
              </div>
              <div class="col-md-4 float-left padding-larg">
                <div class="form-group">
                  <label for="">pais</label>
                  <input type="text" class="form-control" id="edit_pais"
                    name="edit_pais" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12 float-left padding-larg">
                <div class="form-group">
                  <label for="">Dados Bancários</label>
                  <textarea name="edit_dadosBancarios" id="edit_dadosBancarios" class="form-control"></textarea>
                </div>
              </div>

            <div class="modal-footer">
              <input type="submit" id="cadastrarVitrineForm" class="btn btn-primary" value="Enviar">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>