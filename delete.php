<?php


// Verifica se o nome do item foi enviado
if (isset($_POST['item_name'])) {
    $itemNameToDelete = $_POST['item_name'];

    // Caminho do arquivo JSON de itens
    $jsonFile = 'items.json';

    // Lê o conteúdo do arquivo JSON existente
    $items = json_decode(file_get_contents($jsonFile), true);

    // Filtra os itens para remover o item a ser excluído
    $filteredItems = array_filter($items, function($item) use ($itemNameToDelete) {
        return $item['name'] !== $itemNameToDelete;
    });

    // Verifica se o item foi encontrado e excluído
    if (count($filteredItems) < count($items)) {
        // Atualiza o arquivo JSON com os itens restantes
        file_put_contents($jsonFile, json_encode(array_values($filteredItems), JSON_PRETTY_PRINT));

        // Registro de log da exclusão
        $logFile = 'logs.json';
        $logs = [];

        // Lê os logs existentes
        if (file_exists($logFile)) {
            $logs = json_decode(file_get_contents($logFile), true);
        }

        
        // $log = [
        //     'action' => 'Exclusão',
        //     'item' => $itemNameToDelete,
        //     'date' => date('Y-m-d H:i:s')
        // ];

        
        // $logs[] = $log;

        // file_put_contents($logFile, json_encode($logs, JSON_PRETTY_PRINT));

        echo "<script>alert('Item excluído com sucesso!'); window.location.href = 'panel.php';</script>";
    } else {
        echo "<script>alert('Item não encontrado.'); window.location.href = 'panel.php';</script>";
    }
} else {
    echo "<script>alert('Nenhum item especificado para exclusão.'); window.location.href = 'panel.php';</script>";
}
?>
