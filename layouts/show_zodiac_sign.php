<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra seu signo</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <?php 
        // Captura a data de nascimento enviada pelo formulário
        $data_nascimento = $_POST['data_nascimento'];

        // Carrega o arquivo XML com os signos
        $signos = simplexml_load_file("signos.xml");

        // Converte a data de nascimento para um formato que possa ser comparado
        $data_nascimento_formatada = DateTime::createFromFormat('Y-m-d', $data_nascimento)->format('d/m');

        // Função para verificar se a data de nascimento está entre as datas de início e fim do signo
        function verificar_signo($data_nascimento_formatada, $dataInicio, $dataFim) {
            $dataInicio = DateTime::createFromFormat('d/m', $dataInicio);
            $dataFim = DateTime::createFromFormat('d/m', $dataFim);
            $dataNasc = DateTime::createFromFormat('d/m', $data_nascimento_formatada);
            
            // Se o signo começa antes do ano novo e termina depois do ano novo
            if ($dataInicio > $dataFim) {
                return ($dataNasc >= $dataInicio || $dataNasc <= $dataFim);
            } else {
                return ($dataNasc >= $dataInicio && $dataNasc <= $dataFim);
            }
        }

        // Itera sobre cada signo no XML e exibe o signo correspondente
        $signo_encontrado = false;
        foreach ($signos->signo as $signo) {
            if (verificar_signo($data_nascimento_formatada, $signo->dataInicio, $signo->dataFim)) {
                $signoNome = htmlspecialchars($signo->signoNome);
                $descricao = htmlspecialchars($signo->descricao);
                
                echo "<h2 class='text-center'>Seu signo é: $signoNome</h2>";
                echo "<p class='text-center'>$descricao</p>";
                
                echo "<p class='text-center'><a href='../index.php' class='btn btn-secondary mt-3'>Voltar à Página Inicial</a></p>";
                $signo_encontrado = true;
                break;
            }
        }
        ?>
    </div>
</body>
</html>
