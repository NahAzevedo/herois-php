<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Document</title>
</head>
<body>

    <div id="menu">
            <form action="form.php" method="post">      
                <h1> Bem-vindo!</h1>
                <h2>Selecione o Universo: </h2>
                <h2><input type="radio" name=universo value="Marvel">Marvel<br>
                    <input type="radio" name=universo value="DC">DC<br></h2>           
                 <h2>Digite o nome do herói:</h2>
                <input type="text" name="heroi">
                <button type="submit">Enviar</button>        
            </form>
    </div>
</body>
</html>