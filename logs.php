<?php
// Caminho do arquivo JSON
$jsonFile = 'logs.json';

// Lê o conteúdo do arquivo JSON existente
$items = [];
if (file_exists($jsonFile)) {
    $items = json_decode(file_get_contents($jsonFile), true);
}

// Exibe os logs
if (!empty($items)) {
    echo '<table border="1" cellpadding="10" cellspacing="0">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Nome do Item</th>';
    echo '<th>Descrição</th>';
    echo '<th>Preço</th>';
    echo '<th>Imagens</th>';
    echo '<th>Ação</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Exibe cada item do JSON
    foreach ($items as $item) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($item['name']) . '</td>';
        echo '<td>' . htmlspecialchars($item['description']) . '</td>';
        echo '<td>R$ ' . number_format($item['price'], 2, ',', '.') . '</td>';
        echo '<td>';
        foreach ($item['images'] as $image) {
            echo '<img src="' . htmlspecialchars($image) . '" width="50" height="50" alt="imagem do item">';
        }
        echo '</td>';
        echo '<td>Ação não especificada</td>'; // Adicionar a lógica para ação aqui no futuro
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p>Nenhum log registrado até o momento.</p>';
}
?>
