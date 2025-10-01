<?php
session_start(); 
require_once('../factory/conexao.php'); 

if (isset($_POST['Cadastrar'])) {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($email) || empty($senha)) {
        $_SESSION['mensagem_erro'] = "Por favor, preencha todos os campos.";
        header('Location: ../view/cadadm.php');
        exit();
    }

    $conn = new Caminho();
    $pdo = $conn->getConn();

    $stmt_check_email = $pdo->prepare("SELECT COUNT(*) FROM tbadm WHERE email = :email");
    $stmt_check_email->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt_check_email->execute();
    $email_existente = $stmt_check_email->fetchColumn();

    if ($email_existente > 0) {
        $_SESSION['mensagem_erro'] = "Este email já está cadastrado. Por favor, use outro email ou faça login.";
        header('Location: ../view/cadadm.php');
        exit();
    }

    $query = "INSERT INTO tbadm (senha, email) VALUES (SHA1(:senha), :email)";
    $cadastrar = $pdo->prepare($query);

    $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
    $cadastrar->bindParam(':senha', $senha, PDO::PARAM_STR);

    if ($cadastrar->execute()) {
        $_SESSION['mensagem_sucesso'] = "Você foi cadastrado com sucesso! Faça login para continuar.";
        header('Location: ../logadm.php');
        exit();
    } else {
        $_SESSION['mensagem_erro'] = "Erro ao cadastrar. Tente novamente.";
        header('Location: ../view/cadadm.php');
        exit();
    }
} else {
    header('Location: ../view/cadadm.php');
    exit();
}
?>
