<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/tree01.ico" type="image/x-icon">
    <title>Vetores</title>
</head>
<body>
        <nav>
            
        <a href="index.html" target="_blank">Gravity Falls</a>
        <a href="form.php" target="_blank">Formulário</a>
        <a href="vetores.php" target="_self">Vetores</a>
        
        </nav>

       <main>
            <div class="bge"></div>
        <h1>VETORES</h1>    
       
            <section>
                <h2>VETORES EM PHP</h2>
                <p>
                    Um vetor em PHP é uma variável que pode armazenar mais de um valor. Ele é
                    semelhante a um <em>array</em> em outras linguagens de programação. Vetores em PHP podem
                    ser utilizados para armazenar listas de valores. É muito comum quando trabalhamos com banco de dados aonde os dados que estão armazenados no banco ficam armazenados no vetor. Então chamamos cada dado de acordo com a necessidade do sistema.
                </p>
            </section>
            
            <section>
                <h2>EXERCÍCIO</h2>

                <p>Escreva um programa em PHP que gere aleatoriamente 5 números entre 1 e 10, armazene-os em um vetor e exiba os números gerados, separados por vírgula. Além disso, o programa deve calcular e mostrar a soma desses números.</p>

                   
                    <img src="img/nossoarray.jpg" class="imagem2">
                
          
                <h3>Exercício Resolvido:</h3>
            
               <?php  
                $vetor = array();
                $soma = 0;  
                
                for ($i = 0; $i < 5; $i++) {
                    $numero = rand(1, 10);
                    $vetor[] = $numero;
                    $soma += $numero;
                }
                
                echo " <p> Os números gerados foram: " . implode(", ", $vetor) . "</p>";
                echo " <p>  A soma dos números é: " . $soma . ". </p>" ;
                ?>
            
                
                
            </section>
        </main>

        <footer>
            &Delta;
        </footer>

</body>
</html>