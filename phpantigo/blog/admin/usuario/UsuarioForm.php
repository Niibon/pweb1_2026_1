<?php
include './php/header.php';
include_once "../database/db.class.php";

$db = new db('usuario');

if(!empty($_POST)){
    $bd->store($_POST);
    $success = "Registrado com Sucesso!"

    redirect('./UsuarioList.php');
    catch (PDOException $e){
        $error = $e->getMessage();
    }
    catch (Exception $e){
        $error = $e->$getMessage();
    }
    
}
?>

<form action="UsuarioForm.php" method="post">
    <div class="col-6">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="col-6">
        <label for="email">E-mail</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div class="col-6">
        <label for="telefone">Telefone</label>
        <input type="number" name="telefone" class="form-control">
    </div>

    <div class="col mt-2">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>

<?php
include './php/footer.php';
?>