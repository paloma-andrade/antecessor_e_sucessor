<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" class="css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <main>
        <?php 
        $num = $_REQUEST["num"] ?? 0;
        $ant = $num - 1;
        $suc = $num + 1;

        echo "O número escolhido foi <strong>$num</strong>";
        echo "<br> O seu antecessor é $ant";
        echo "<br> O seu sucessor é $suc";
        
        
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>