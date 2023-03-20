$(document).ready(function () {
    $.post('funcoes/listaDados.php', function (retorna) {
        const eu = JSON.parse(retorna)

           for(i=0; i<=eu.length; i++){
        var corpoTabela = document.querySelector('tbody');

        var tr = document.createElement('tr');
        var tdNome = document.createElement('td');
        var tdUser = document.createElement('td');

        tdNome.textContent = eu[i].nome;
        tdUser.textContent = eu[i].user;

        tr.appendChild(tdNome);
        tr.appendChild(tdUser);
        corpoTabela.appendChild(tr);
        }
    });
});

function enviar() {
    
    const valor1 = document.getElementById('nome').value;
    const valor2 = document.getElementById('user').value;
if(valor1 !="" && valor2 !=""){
    $.ajax({
        method: "POST",
        url: "http://localhost/testephp/funcoes/setdados.php",
        data: { nome: valor1, user: valor2 }
    });
    window.location.href = "index.html";
}else{
    document.getElementById('nome').value = ''
    document.getElementById('user').value = ''
    alert('Campos inválidos')
}
}


