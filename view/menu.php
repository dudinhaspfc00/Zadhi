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

        $consulta = "select * from tbprodutos where produto='Vestido Azul'";

        $resultado = $conn->getConn()->prepare($consulta);
        $resultado->execute();

        while ($cont = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="category">';

            echo '<img src="../img/' . $cont['foto'] . '" alt="' . $cont['modelo'] . '" class="fotos"><br>';
            echo $cont['produto'];
            echo "<hr/>";
            echo '<button class="view-more"> <a href="produtosfem.php">Ver mais</a></button>';
            echo "<hr/>";
            echo '</div>';
        }
        ?>
        <?php
        $consulta = "select * from tbprodutos where produto='Vestido Rosa'";
        $resultado = $conn->getConn()->prepare($consulta);
        $resultado->execute();
        while ($cont = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="category">';
            echo '<img src="../img/' . $cont['foto'] . '" alt="' . $cont['modelo'] . '" class="fotos"><br>';
            echo $cont['produto'];
            echo "<hr/>";
            echo '<button class="view-more"> <a href="produtosfem.php">Ver mais</a></button>';
            echo "<hr/>";
            echo '</div>';
        }
        ?>
        <?php
        $consulta = "select * from tbprodutos where produto='Vestido Vermelho'";
        $resultado = $conn->getConn()->prepare($consulta);
        $resultado->execute();
        while ($cont = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="category">';
            echo '<img src="../img/' . $cont['foto'] . '" alt="' . $cont['modelo'] . '" class="fotos"><br>';
            echo $cont['produto'];
            echo "<hr/>";
            echo '<button class="view-more"> <a href="produtosfem.php">Ver mais</a></button>';
            echo "<hr/>";
            echo '</div>';
        }
        ?>
        <?php
        $consulta = "select * from tbprodutos where produto='Camiseta Cinza'";
        $resultado = $conn->getConn()->prepare($consulta);
        $resultado->execute();
        while ($cont = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="category">';
            echo '<img src="../img/' . $cont['foto'] . '" alt="' . $cont['modelo'] . '" class="fotos"><br>';
            echo $cont['produto'];
            echo "<hr/>";
            echo '<button class="view-more"> <a href="produtosmasc.php">Ver mais</a></button>';
            echo "<hr/>";
            echo '</div>';
        }
        ?>
        <?php
        $consulta = "select * from tbprodutos where produto='Blazer Preta'";
        $resultado = $conn->getConn()->prepare($consulta);
        $resultado->execute();
        while ($cont = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="category">';
            echo '<img src="../img/' . $cont['foto'] . '" alt="' . $cont['modelo'] . '" class="fotos"><br>';
            echo $cont['produto'];
            echo "<hr/>";
            echo '<button class="view-more"> <a href="produtosmasc.php">Ver mais</a></button>';
            echo "<hr/>";
            echo '</div>';
        }
        ?>
        <?php
        $consulta = "select * from tbprodutos where produto='Calça Preta'";
        $resultado = $conn->getConn()->prepare($consulta);
        $resultado->execute();
        while ($cont = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="category">';
            echo '<img src="../img/' . $cont['foto'] . '" alt="' . $cont['modelo'] . '" class="fotos"><br>';
            echo $cont['produto'];
            echo "<hr/>";
            echo '<button class="view-more"> <a href="produtosmasc.php">Ver mais</a></button>';
            echo "<hr/>";
            echo '</div>';
        }
        ?>
    </div>

</body>

</html>