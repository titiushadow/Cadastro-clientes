<?php
    // Conexão
    include_once 'php_action/db_connect.php';
    // Header
    include_once './includes/header.php';
    // Message
    include_once 'includes/message.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Lista de Clientes </h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    if(mysqli_num_rows($resultado) > 0):
                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><a href="../Crud/editar.php?id=<?php echo $dados['ID']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

                    <td><a href="#modal<?php echo $dados['ID']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                    
                    <div id="modal<?php echo $dados['ID']; ?>" class="modal">
                        <div class="modal-content">
                            <h4>Confirmação de Exclusão</h4>
                            <p>Atenção! Você está prestes a excluir um cliente. Esta ação é irreversível e todas as informações associadas a este cliente serão perdidas. <br> Tem certeza de que deseja prosseguir com a exclusão?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="./php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['ID']; ?> ">
                                <button type="submit" name="btn-deletar" class="btn red"> Sim, quero excluir</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </tr>
                <?php endwhile;
                else: ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <?php
                    endif; 
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php
    // Footer
    include_once 'includes/footer.php';
?>