<?php
include '../header.php';
include '../database/db.class.php';

$db = new db('aluno');

 if (!empty($_POST)) {
   //var_dump($_GET);
   //exit;
   //$db->store($_POST);
    $dados = $db->all();
   }
 ?>

<div class="row">
    <div class="row">
        <div class="col">
            <a href="./UsuarioForm.php" class="btn btn-success"> Novo </a>
        </div>
    </div>
</div>

 <div class="row">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($dados as $item){
                    echo "
                    <th scope='row'>$item->id</th>
                    <td>$item->nome</td>
                    <td>$item->telefone</td>
                    <td>$item->email</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
 </div>



<?php
include './php/footer.php';
?>