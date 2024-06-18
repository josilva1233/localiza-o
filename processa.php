<!DOCTYPE html>
<html>
<head>
    <title>Processamento da Localização</title>
</head>
<body>
    <h2>Dados de Localização Recebidos:</h2>
    <?php
    // Verifica se os dados de latitude, longitude e imagem foram enviados
    if(isset($_POST['latitude']) && isset($_POST['longitude']) && isset($_POST['photoData'])&& isset($_POST['dateTime'])) {
        // Obtém os valores de latitude e longitude
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $photoData = $_POST['photoData'];
        $dateTime = $_POST['dateTime'];
        
        // Imprime os valores na tela
        echo "<p>Latitude: $latitude</p>";
        echo "<p>Longitude: $longitude</p>";
        echo "<p>Data e Hora: $dateTime</p>";
        // Exibe a imagem
        echo "<img src='$photoData' alt='Imagem Recebida'>";
        
        // Aqui você pode fazer qualquer operação adicional com os dados, como salvá-los em um banco de dados
    } else {
        // Se os dados não foram enviados, exibe uma mensagem de erro
        echo "<p>Erro: Dados de localização ou imagem não recebidos.</p>";
    }
    ?>
</body>
</html>

