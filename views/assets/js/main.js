// Aqui ele espera o HTML carregar completamente
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formTarefa");
    const tituloInput = document.getElementById("titulo");

    if (form) {
        form.addEventListener("submit", function(event) {
            // Remoção dos espaços em branco do início e no fim
            const tituloTexto = tituloInput.value.trim();

            if (tituloTexto === "") {
                event.preventDefault(); // Faz uma verificação para impedir o envio do formulário caso este campo esteja vazio
                alert("Por favor, preencha o campo de título com um texto válido!");
                tituloInput.focus();
            }
        });
    }
});