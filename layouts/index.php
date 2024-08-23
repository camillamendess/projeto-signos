<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra seu signo</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Descubra seu signo</h2>
        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>
    </div>
</body>
</html>


/* 

Container Bootstrap: Usei a classe container mt-5 para centralizar o conteúdo com um espaçamento no topo.
Título: Um título centralizado foi adicionado usando h2 com a classe text-center.
Formulário:
O formulário é do tipo POST e tem action="pagina_destino.php", onde pagina_destino.php é o arquivo que processará o formulário.
O campo de data de nascimento (input type="date") usa a classe form-control para uma estilização Bootstrap.
O botão de envio (button type="submit") usa a classe btn btn-primary mt-3 para aplicar o estilo de botão padrão do Bootstrap e adicionar um espaçamento superior. 

*/


