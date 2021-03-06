

    <!-- modal sacola de produtos -->
      <div class="modal fade" id="modalFinaliza" tabindex="-1" role="dialog" aria-labelledby="labelCompra" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="labelCompra">Finalizar compra</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="tabela_pedidos_modal">
              <?php include('tabela_pedidos.php'); ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar janela</button>
              <?php 
                if(!isset($_SESSION['perfil'])) {
                    $msg =  'Você não está logado, por favor inicie uma sessão.';
                  ?>
                    <a class="btn btn-primary" href="login.php?tipo=finaliza&msg=<?= $msg ?>">Finalizar compra</a>
                  <?php
                    } else if(isset($_SESSION['perfil'])) {
                  ?>
                  <a class="btn btn-primary" href="finaliza_compra.php">Finalizar compra</a>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    <!-- /modal sacola de produtos -->