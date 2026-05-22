<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pet</title>
</head>
<body>
<h1>Cadastro de Pet</h1>    

<form action="salvar_curso.php" method="GET">
        Nome do Pet: <br>
        <input type="text" name="nome_pet"> <br>
        
        Especie: <br>
        <input type="text" name="especie"> <br>
        
        Peso: <br>
        <input type="text" name="peso"> <br>
        
        <input type="date" value="data_nascimento">

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>