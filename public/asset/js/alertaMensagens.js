// Exemplo de variável que será verificada
let myVariable = ''; // Variável vazia

// Função que será executada automaticamente no carregamento da página
window.onload = function() {
    if (!myVariable) {  // Verifica se a variável está vazia
        const alertBox = document.getElementById('alert-box');
        alertBox.style.display = 'block'; // Exibe o alerta
        alertBox.classList.remove('fade-out'); // Remove a classe de fade-out caso tenha sido aplicada

        // Após 6 segundos, começa a ocultar o alerta
        setTimeout(function () {
            alertBox.classList.add('fade-out'); // Aplica o efeito de fade-out

            // Após o efeito de fade-out, remove o alerta da tela
            setTimeout(function () {
                alertBox.style.display = 'none';
            }, 500); // Tempo para o fade-out terminar (0.5s)
        }, 6000); // Tempo que o alerta ficará visível (6s)
    }
};
