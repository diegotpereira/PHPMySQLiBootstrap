<!DOCTYPE html>
<html>
<head>
     <title>PHP/MtSqli operações CRUD usando Bootstrap</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesshet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
     <div style="height:5opx;"></div>
     <div class="well" style="margin:auto; padding:auto; width:80%;">
        <span style="font-size: 25px; color:blue"><center><strong>Cadastro com PHP</strong></center></span>
          <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Novo</a></span>
          <div style="height:50px;"></div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Endereço</th>
                    <th>Ação</th>
                </thead>
                <tbody>
                <?php
                    include('conn.php');
                    $query=mysqli_query($conn,"select * from `usuario ` ");
                    while($row = mysqli_fetch_array($query)){
                        # code...
                        ?>
                        <tr>
                            <td><?php echo ucwords($row['nome']); ?></td>
                            <td><?php echo ucwords($row['sobrenome']); ?></td>
                            <td><?php echo $row($row['endereco']); ?></td>
                            <td>
                                <a href="#edit<?php echo $row['usuarioid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon-edit"></span> Editar</a> ||
                                <a href="#del<?php echo $row['usuarioid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon-trash"></span> Editar</a> ||
                                <?php include ('button.php'); ?>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
     <?php include('add_modal.php'); ?>
</div>
</body>
</html>