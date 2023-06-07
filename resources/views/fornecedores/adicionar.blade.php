<div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby=""
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="tituloComissaoAfiliados">Cadastrar Novo Processo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form enctype="multipart/form-data" action="" method="post">
        <div class="modal-body">

          {!! csrf_field() !!}
          <input type="hidden" name="idProcesso" id="idProcesso">


          <div class="col-md-12">
            <div class="col-md-12 float-left padding-larg">
              <div class="form-group">
                <label for="">Andamento Processual</label>
                <select class="form-control" id="andamentoProcessual" name="andamentoProcessual">
                  <option value="1">Ativo</option>
                  <option value="2">Extinto</option>
                  <option value="3">Vencido</option>
                  <option value="4">Perda</option>
                </select>

              </div>
            </div>

            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Data Recebida Citação</label>
                <input type="date" class="form-control" id="dataRecebidaCitacao"
                  name="dataRecebidaCitacao" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Data Propositura Ação</label>
                <input type="date" class="form-control" id="dataPropositura"
                  name="dataPropositura" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Tipo de Ação</label>
                <input type="text" class="form-control" id="tipoAcao"
                  name="tipoAcao" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Autor</label>
                <input type="text" class="form-control" id="autor"
                  name="autor" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Id Pedido</label>
                <input type="text" class="form-control" id="id_pedido"
                  name="id_pedido" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Data Audiência</label>
                <input type="date" class="form-control" id="dataAudiencia"
                  name="dataAudiencia" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Número de Processo</label>
                <input type="text" class="form-control" id="numeroProcesso"
                  name="numeroProcesso" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Valor Causa</label>
                <input type="text" class="form-control" id="valorCausa"
                  name="valorCausa" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Vara</label>
                <input type="text" class="form-control" id="vara"
                  name="vara" autocomplete="off">
              </div>
            </div>
            <div class="col-md-3 float-left padding-larg">
              <div class="form-group">
                <label for="">Foro</label>
                <input type="text" class="form-control" id="foro"
                  name="foro" autocomplete="off">
              </div>
            </div>
            <div class="col-md-3 float-left padding-larg">
              <div class="form-group">
                <label for="">Data Envio para ADV</label>
                <input type="date" class="form-control" id="dataEnvioAdv"
                  name="dataEnvioAdv" autocomplete="off">
              </div>
            </div>
            <div class="col-md-3 float-left padding-larg">
              <div class="form-group">
                <label for="">Id Produto</label>
                <input type="text" class="form-control" id="id_produto"
                  name="id_produto" autocomplete="off">
              </div>
            </div>
            <div class="col-md-3 float-left padding-larg">
              <div class="form-group">
                <label for="">Valor Venda</label>
                <input type="text" class="form-control" id="valorVenda"
                  name="valorVenda" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Valor Danos Morais</label>
                <input type="text" class="form-control" id="valorDanosMorais"
                  name="valorDanosMorais" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Valor Honorários</label>
                <input type="text" class="form-control" id="valorHonorarios"
                  name="valorHonorarios" autocomplete="off">
              </div>
            </div>
            <div class="col-md-4 float-left padding-larg">
              <div class="form-group">
                <label for="">Valor Custas</label>
                <input type="text" class="form-control" id="valorCustas"
                  name="valorCustas" autocomplete="off">
              </div>
            </div>
          
            <div class="col-md-12 float-left padding-larg">
              <div class="form-group">
                <label for="">Reclamação</label>
                <textarea class="form-control" name="reclamacoes" id="reclamacoes" style="min-height: 100px;"></textarea>
              </div>
            </div>
            <div class="col-md-12 float-left padding-larg">
              <div class="form-group">
                <label for="">Solução Sugerida</label>
                <textarea class="form-control" name="solucao" id="solucao" style="min-height: 100px;"></textarea>
              </div>
            </div>
            <div class="col-md-6 float-left padding-larg">
              <div class="form-group">
                <label for="">Ultima Decisão</label>
                <input type="text" class="form-control" id="ultimaDecisao"
                  name="ultimaDecisao" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6 float-left padding-larg">
              <div class="form-group">
                <label for="">Anexo</label>
                <input type="file" class="form-control" id="anexoProcesso"
                  name="anexoProcesso[]" multiple autocomplete="off">
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