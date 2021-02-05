<!-- Deletar -->
    <div class="modal fade" id="del<?php echo $row['usuarioid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Deletar</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"SELECT * FROM usuario where usuarioid='".$row['usuarioid']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Você tem certeza que quer deletar <strong><?php echo ucwords($drow['nome'].' '.$row['sobrenome']); ?></strong> da lista? Este método não pode ser desfeito.</center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a href="delete.php?id=<?php echo $row['usuarioid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Deletar</a>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Editar -->
    <div class="modal fade" id="edit<?php echo $row['usuarioid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"SELECT * FROM usuario WHERE usuarioid='".$row['usuarioid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['usuarioid']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Nome:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="nome" class="form-control" value="<?php echo $erow['nome']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">sobrenome:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="sobrenome" class="form-control" value="<?php echo $erow['sobrenome']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Endereco:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="endereco" class="form-control" value="<?php echo $erow['endereco']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Salvar</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->