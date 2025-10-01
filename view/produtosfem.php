<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>ZADHI</title>
</head>

<body>

    <div class="header">ZADHI</div>

    <div class="navigation">
        <a href="menu.php">Home</a>
        <a href="produtosfem.php">Feminino</a>
        <a href="produtosmasc.php">Masculino</a>
        <a href="../index.php">Sair</a>
    </div>

    <div class="container">
        <?php
        require_once('../factory/conexao.php');
        $conn = new Caminho();
        $consulta = "select *from tbprodutos where genero='Fem'";
        $resultado = $conn->getConn()->prepare($consulta);
        $resultado->execute();
        while ($cont = $resultado->fetch(mode: PDO::FETCH_ASSOC)) {
            echo '<div class="category">';
            $_GET['codproduto'] = $cont['codproduto'];
            echo '<a href="desc.php?codproduto=' . $cont['codproduto'] . '"><img src="../img/' . $cont['foto'] . '" alt="' . $cont['modelo'] . '" class="fotos"></a><br>';
            echo $cont['produto'];

            echo "<hr/>";
            echo '</div>';
        }

        ?>
    </div>

</body>

</html>