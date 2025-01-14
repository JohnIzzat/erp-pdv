<?php
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST
    ["senha"])))){
        print "<script>location.href='index.php';</script>";
    }

    include('config.php');

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios
    WHERE usuario = '{$usuario}'
    AND senha = '".md5($senha)."'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if($qtd > 0) {
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["tipo"] = $row->tipo;
    print "<script>location.href='dashboard.php';</script>";
} else {
    print "<script>alert('Usuário e/ou senha incorreto(s)')</script>";
    print "<script>location.href='index.php';</script>";
}

// QUERY para recuperar os eventos
$query_events = "SELECT id, title, color, start, end FROM events";

// Prepara a QUERY
$result_events = $conn->prepare($query_events);

// Executar a QUERY
$result_events->execute();

// Criar o array que recebe os eventos
$eventos = [];

// Percorrer a lista de registros retornado do banco de dados
while($row_events = $result_events->fetch(PDO::FETCH_ASSOC)){

    // Extrair o array
    extract($row_events);

    $eventos[] = [
        'id' => $id,
        'title' => $title,
        'color' => $color,
        'start' => $start,
        'end' => $end,
    ];
}