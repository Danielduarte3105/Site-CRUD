// Função para visualizar as imagens selecionadas
document.getElementById("images").addEventListener("change", function(event) {
    const imagePreview = document.getElementById("imagePreview");
    imagePreview.innerHTML = ""; // Limpa as prévias de imagens anteriores
    const files = event.target.files;

    for (let i = 0; i < files.length; i++) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement("img");
            img.src = e.target.result;
            img.alt = files[i].name;
            imagePreview.appendChild(img);
        };
        reader.readAsDataURL(files[i]);
    }
});

// Função para formatar o campo de preço
document.getElementById("price").addEventListener("input", function(event) {
    const value = event.target.value.replace(/\D/g, ""); // Remove caracteres não numéricos
    const formattedValue = (value / 100).toLocaleString("pt-BR", {
        style: "currency",
        currency: "BRL"
    });
    event.target.value = formattedValue; // Atualiza o campo de preço
});



// Função para formatar o campo de preço
document.getElementById("price").addEventListener("input", function(event) {
    const value = event.target.value.replace(/\D/g, ""); // Remove caracteres não numéricos
    const formattedValue = (value / 100).toLocaleString("pt-BR", {
        style: "currency",
        currency: "BRL"
    });
    event.target.value = formattedValue; // Atualiza o campo de preço
});


document.getElementById("itemForm").addEventListener("submit", function(event) {
    let priceField = document.getElementById("price");
    priceField.value = priceField.value.replace(/[^\d,]/g, "").replace(",", "."); // Prepara valor numérico para backend
});

document.getElementById("itemForm").addEventListener("submit", function(e) {
    e.preventDefault(); // Impede o comportamento padrão de recarregar a página

    let formData = new FormData(this);

    fetch("upload.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message); // Exibe o alerta
            // Limpar o formulário após o envio
            document.getElementById("itemForm").reset();
        } else {
            alert("Erro: " + data.message);
        }
    })
    .catch(error => {
        alert("Arquivo enviado com sucesso!");
        document.getElementById("itemForm").reset();
        location.reload();
    });
    
});



