<!-- Modal Usuário não encontrado-->
<div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:15%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">


                <h4 class="modal-title" id="myModalLabel">Usuário Não Logado</h4>

            </div>
            <div class="modal-body">

                <div class="col-md-12 text-center">
                    <img src="img/loading.svg">
                </div>
                <div class="col-md-12 text-center">
                    O usuário <?php echo $_POST['login']; ?> não existe
                </div>
                <meta http-equiv="refresh" content="2;index.php">
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>