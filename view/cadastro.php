<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Faça seu cadastro - ZADHI</title>
    <link rel="stylesheet" href="../css/estilo.css"> 
</head>
<body>
   
    <div class="cadastro-container"> 
        <h1>Cadastrar Usuário</h1> 
        
        <?php if (isset($_SESSION['mensagem_sucesso'])): ?>
            <div class="alert success"><?php echo $_SESSION['mensagem_sucesso']; unset($_SESSION['mensagem_sucesso']); ?></div> 
            
        <?php endif; ?>
        
        <?php if (isset($_SESSION['mensagem_erro'])): ?>
            <div class="alert error"><?php echo $_SESSION['mensagem_erro']; unset($_SESSION['mensagem_erro']); ?></div>
        <?php endif; ?>
        
        <form action="../model/inserircadastro.php" method="POST" enctype="multipart/form-data" name="cadastro">
            
            <label for="nome">Nome:</label> 
            <input type="text" id="nome" name="nome" required><br> 
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            
            <br><br>
            
            <input type="submit" id="bmitBtn" name="Cadastrar" value="Cadastrar">
        </form>
        
        <p>Já tem uma conta? <a href="../index.php">Faça login aqui</a></p>
       
    </div>
</body>
</html>
