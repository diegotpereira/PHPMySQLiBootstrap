<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Novo</h4></center>
            </div>
            <div class="modal-body">
            <div class="conatiner-fluid">
            <form method="POST" action="addnovo.php">
                <div class="row">
                    <div class="col-lg-2">
                        <label class="control-label" style="position:relative; top:7px;">Nome</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="nome">
                    </div>
                    </div>
                <div style="height:10px;"></div>                    
                <div class="row">
                    <div class="col-lg-2">
                        <label class="control-label" style="position: relative; top:9px">Sobrenome</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="sobrenome">
                    </div>
                </div>
                <div style="height:10px;"></div>
                <div class="row">
                    <div class="col-lg-2">
                        <label class="control-label" style="position: relative; top:7px">Endereço</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="endereco">
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Salvar</button>
            </form>
            </div>
        </div>
    </div>
</div>