<?php
$jsonFile = 'items.json';

if (file_exists($jsonFile)) {
    $items = json_decode(file_get_contents($jsonFile), true);
} else {
    $items = [];
}
?>

<link rel="stylesheet" href="./css/style.css">

<h1>Itens à Venda</h1>

<div class="item-grid">
    <?php if (count($items) > 0): ?>
        <?php foreach ($items as $item): ?>
            <div class="card">
                <div class="image-gallery">
                    <button class="carousel-btn carousel-prev">❮</button>
                    <?php foreach ($item['images'] as $index => $image): ?>
                        <img src="<?php echo $image; ?>" alt="Imagem do <?php echo $item['name']; ?>" style="<?php echo $index === 0 ? 'display: block;' : 'display: none;'; ?>">
                    <?php endforeach; ?>
                    <button class="carousel-btn carousel-next">❯</button>
                </div>
                <h2><?php echo $item['name']; ?></h2>
                <p><?php echo $item['description']; ?></p>
                <p>Preço: R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></p>
                <button onclick="window.location.href='mailto:contato@exemplo.com?subject=Interesse%20em%20<?php echo urlencode($item['name']); ?>'">Contate-nos</button>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum item cadastrado.</p>
    <?php endif; ?>
</div>
<br><br>

<script>
document.querySelectorAll('.image-gallery').forEach(gallery => {
    let currentImageIndex = 0;
    const images = gallery.querySelectorAll('img');
    const totalImages = images.length;

    // Função para mostrar a imagem atual
    function showImage(index) {
        images.forEach((img, i) => img.style.display = i === index ? 'block' : 'none');
    }

    // Evento para botão "próximo"
    gallery.querySelector('.carousel-next').addEventListener('click', () => {
        currentImageIndex = (currentImageIndex + 1) % totalImages;
        showImage(currentImageIndex);
    });

    // Evento para botão "anterior"
    gallery.querySelector('.carousel-prev').addEventListener('click', () => {
        currentImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;
        showImage(currentImageIndex);
    });

    // Mostrar a primeira imagem
    showImage(currentImageIndex);
});
</script>
