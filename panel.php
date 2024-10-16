<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Cadastro de Itens</title>
    <link rel="stylesheet" href="./css/index.css">

</head>
<body>
    <h1>Cadastro de Itens</h1>
    <div class="card">
        <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" />
        <form id="itemForm" enctype="multipart/form-data" action="upload.php" method="POST">
            <label for="images" class="imgs">Imagens - Selecione no Máximo 5 Arquivos:</label>
            <input type="file" name="images[]" id="images" accept="image/*" multiple required><br>
            <div id="imagePreview" class="image-preview"></div>
        
            <label for="name">Nome do Item:</label>
            <input type="text" name="name" id="name" required><br>
        
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" rows="5" required></textarea><br>
        
            <label for="price">Preço (R$):</label>
            <input type="text" name="price" id="price" required><br>
            <br>
            <button class="envT" type="submit">Enviar</button>
        </form>
    </div>

    <h2>Itens Cadastrados</h2>
    <table  id="itemsTable">
        <thead>
            <tr>
                <th>Nome do Item</th>
                <th>Token</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Excluir</th> <!-- Coluna para exclusão -->
            </tr>
        </thead>
        <tbody>
        <?php

            session_start();
            if(!isset($_SESSION['token'])){
                $_SESSION['token'] = md5(uniqid());
            }else{
                unset($_SESSION['token']);
                $_SESSION['token'] = md5(uniqid());
            }
            // Caminho do arquivo JSON de itens
            $itemsFile = 'items.json';

            // Lê os itens do arquivo
            $items = [];
            if (file_exists($itemsFile)) {
                $items = json_decode(file_get_contents($itemsFile), true);
            }

            // Verifica se existem itens para exibir
            if (empty($items)) {
                echo '<tr><td colspan="4">Nenhum item cadastrado.</td></tr>';
            } else {
                // Exibe cada item como uma linha da tabela
                foreach ($items as $item) {
                    echo '<tr>';
                    echo '<td>' . (isset($item['name']) ? htmlspecialchars($item['name']) : 'N/A') . '</td>';
                    echo '<td>' . (isset($item['token']) ? htmlspecialchars($item['token']) : 'N/A') . '</td>';
                    echo '<td>' . (isset($item['description']) ? htmlspecialchars($item['description']) : 'N/A') . '</td>';
                    echo '<td>R$ ' . (isset($item['price']) ? number_format($item['price'], 2, ',', '.') : '0,00') . '</td>';
                    echo '<td>';
                    echo '<form method="POST" action="delete.php" style="display:inline;">';
                    echo '<input type="hidden" name="item_name" value="' . (isset($item['name']) ? htmlspecialchars($item['name']) : '') . '">';
                    echo '<button type="submit" onclick="return confirm(\'Tem certeza que deseja excluir este item?\');">Excluir</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
                
            }
        ?>
        </tbody>
    </table>

    <script src="./js/script.js"></script>
</body>
</html>
