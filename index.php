<?php
session_start();
require_once("factory/conexao.php");

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($email) || empty($senha)) {
        $erro = "Por favor, preencha todos os campos.";
    } else {
        $conn = new Caminho();
        $pdo = $conn->getConn();

        $sql = "SELECT nome, senha FROM tbclientes WHERE email = :email AND senha = SHA1(:senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            header("Location: view/menu.php");
            exit();
        } else {
            $erro = "Email ou senha incorretos.";
        }
    }
}

if (isset($_SESSION['mensagem_sucesso'])) {
    $sucesso = $_SESSION['mensagem_sucesso'];
    unset($_SESSION['mensagem_sucesso']); 
}
if (isset($_SESSION['mensagem_erro'])) {
    $erro = $_SESSION['mensagem_erro'];
    unset($_SESSION['mensagem_erro']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - ZADHI</title>
    <link rel="stylesheet" href="css/estilo.css"> 
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (!empty($sucesso)): ?>
            <div class="alert success"><?php echo $sucesso; ?></div>
        <?php endif; ?>
        <?php if (!empty($erro)): ?>
            <div class="alert error"><?php echo $erro; ?></div>
        <?php endif; ?>
        <form method="POST">
            Email: <input type="text" name="email" required><br>
            Senha: <input type="password" name="senha" required><br>
            <input type="submit" value="Entrar">
        </form>
        <p>Não tem uma conta? <a href="view/cadastro.php">Cadastre-se aqui</a></p>
        <p>Entre como <a href="logadm.php">Administrador</a></p>
    </div>
</body>
</html>
