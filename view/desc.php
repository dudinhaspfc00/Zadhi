<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZADHI - Produto</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        
        .produto-detalhe {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 40px;
            margin-top: 180px;
            flex-wrap: wrap;
        }

        .produto-detalhe img {
            max-width: 380px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .produto-info {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
            width: 360px;
        }

        .produto-info h3 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 24px;
            color: #333;
        }

        .produto-info p {
            margin: 8px 0;
            color: #555;
        }

        .produto-info label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #333;
        }

        .produto-info select,
        .produto-info input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        
        .btn-finalizar {
            padding: 14px 28px;
            background-color: #F1E0D6; 
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            color: #5D3A29;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-top: 20px;
            width: 100%;
            font-size: 16px;
        }

        .btn-finalizar:hover {
            background-color: #D3BEB2; 
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    
    <div class="header">ZADHI</div>

    
    <div class="navigation">
        <a href="menu.php">Home</a>
        <a href="produtosfem.php">Feminino</a>
        <a href="produtosmasc.php">Masculino</a>
        <a href="../index.php">Sair</a>
    </div>

    <?php
    require_once('../factory/conexao.php'); 
    $conn = new Caminho();

    $codproduto = isset($_GET['codproduto']) ? $_GET['codproduto'] : null;

    if ($codproduto) {
        $consulta = "SELECT * FROM tbprodutos WHERE codproduto = :codproduto";
        $stmt = $conn->getConn()->prepare($consulta);
        $stmt->bindParam(':codproduto', $codproduto, PDO::PARAM_INT);
        $stmt->execute();

        if ($cont = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="container produto-detalhe">
                
                <div>
                    <img src="../img/<?php echo htmlspecialchars($cont['foto']); ?>" 
                         alt="<?php echo htmlspecialchars($cont['modelo']); ?>" class="fotos">
                </div>

                
                <div class="produto-info">
                    <h3><?php echo htmlspecialchars($cont['produto']); ?></h3>
                    <p><strong>Preço:</strong> <?php echo htmlspecialchars($cont['preco']); ?></p>
                    <p><strong>Descrição:</strong>
                    <p><?php echo htmlspecialchars($cont['modelo'] ); ?></p>

                    <label>Tamanho:</label>
                    <select>
                        <option>P</option>
                        <option>M</option>
                        <option>G</option>
                        <option>GG</option>
                    </select>

                    <label>Quantidade:</label>
                    <input type="number" min="1" value="1">

                    <button class="btn-finalizar">Adicionar ao carrinho</button>
                </div>
            </div>
            <?php
        } else {
            echo "<p style='text-align:center; margin-top:200px; color:red;'>Produto não encontrado.</p>";
        }
    } else {
        echo "<p style='text-align:center; margin-top:200px; color:red;'>Código do produto não informado.</p>";
    }
    ?>
</body>
</html>