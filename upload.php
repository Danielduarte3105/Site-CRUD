<?php

session_start();
if(!isset($_SESSION['token'])){
    $_SESSION['token'] = md5(uniqid());
}else{
    unset($_SESSION['token']);
    $_SESSION['token'] = md5(uniqid());
}
// Diretório para armazenar as imagens
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$images = [];

// Loop para processar cada arquivo de imagem
for ($i = 0; $i < count($_FILES["images"]["name"]); $i++) {
    $imageFileType = strtolower(pathinfo($_FILES["images"]["name"][$i], PATHINFO_EXTENSION));
    $target_file = $target_dir . basename($_FILES["images"]["name"][$i]);

    // Verifica se o arquivo é uma imagem
    $check = getimagesize($_FILES["images"]["tmp_name"][$i]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["images"]["tmp_name"][$i], $target_file)) {
            $images[] = $target_file; // Salva o caminho da imagem
        } else {
            die("Erro ao fazer o upload da imagem.");
        }
    } else {
        die("O arquivo não é uma imagem.");
    }
}

// Recebe as informações do formulário
$item = [
    'name' => $_POST['name'],
    'token' => $_POST['token'],
    'description' => $_POST['description'],
    'price' => floatval($_POST['price']), // Certifica que o valor seja numérico
    'images' => $images // Armazena os caminhos das imagens
];

// Caminho do arquivo JSON de itens
$jsonFile = 'items.json';

// Lê o conteúdo do arquivo JSON existente
$items = [];
if (file_exists($jsonFile)) {
    $items = json_decode(file_get_contents($jsonFile), true);
}

// Adiciona o novo item
$items[] = $item;

// Salva os itens atualizados no arquivo JSON
file_put_contents($jsonFile, json_encode($items, JSON_PRETTY_PRINT));

// Registro de log
$logFile = 'logs.json';
$logs = [];

// Lê os logs existentes
if (file_exists($logFile)) {
    $logs = json_decode(file_get_contents($logFile), true);
}

// Cria o log da ação de adição
$log = [
    'action' => 'Adição',
    'item' => $_POST['name'],
    'token' => $_POST['token'],
    'description' => $_POST['description'],
    'price' => floatval($_POST['price']),
    'date' => date('Y-m-d H:i:s')
];

// Adiciona o novo log
$logs[] = $log;

// Salva o log no arquivo JSON de logs
file_put_contents($logFile, json_encode($logs, JSON_PRETTY_PRINT));

// Retorna uma resposta para o frontend (JavaScript pode mostrar um alerta aqui)
echo "<script>alert('Item cadastrado com sucesso!');</script>";
?>
