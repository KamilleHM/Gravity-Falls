<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/tree01.ico" type="image/x-icon">
    <title>Formulário</title>
    <style>      
        input[type=text], input[type=email], input[type=date], input[type=file], input[type=password], input[type=number], input[type=time], select{
            background: linear-gradient(to bottom, #FFF, #e0dede);
            border: #e3dac9 1px solid;
            border-radius: 3px;
            color: #62162f;
            padding: 2px;
            padding-left: 5px;
            margin-bottom: 5px;
        }
        textarea{
            background: linear-gradient(to bottom, #FFF, #e0dede);
            border: #e3dac9 1px solid;
            border-radius: 3px;
            color: #62162f;
            padding: 2px;
            padding-left: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
        <nav>
            
        <a href="index.html" target="_blank">Gravity Falls</a>
        <a href="form.php" target="_self">Formulário</a>
        <a href="vetores.php" target="_blank">Vetores</a>
        
        </nav>
        <main>
        <!-- <div class="bgrd"></div> -->

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  //Para deixar no método POST - Dados sensiveis não aparece na URL
        //Se o formulário foi enviado
        echo "<header>
                <h1>Formulário Enviado</h1>
              </header>
              <section>";

        // Iterar sobre os campos do formulário e exibir
        foreach ($_POST as $campo => $valor) {
            $campoFormatado = ucwords(str_replace('_', ' ', $campo));
            $valorFormatado = utf8_encode($valor);
            echo "<p><strong>" . htmlspecialchars($campoFormatado) . ":</strong> " . htmlspecialchars($valorFormatado) . "</p>";
        }

        echo "</section>
              <footer>
                 &Delta; 
              </footer>";
    } else {
        // Se o formulário não foi enviado, exibir o formulário
    ?>
    <header>
        <div class="backg"></div>
        <h1>FORMULÁRIO</h1>
        <hr>
    </header>  
<main>
    <div class="tds">
    <section>     
            <h2 class="fm">Cadastro: </h2>
            
        <form action="form.php" method="post"> 
            <div>
                <label for="texto">Nome:</label>
                <input type="text" id="texto" placeholder="Nome Completo" name="Nome" required>
            </div>

            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="exemplo@exemplo.com" name="E-mail" required>
            </div>

            <div>
                <label for="email">Confirme seu E-mail:</label>
                <input type="email" id="email" placeholder="exemplo@exemplo.com" name="E-mail" required>
            </div>

            <div>
                <label for="senha">Senha: </label>
                <input type="password" id="senha" name="Senha" required>
            </div>

            <div>
                <label for="senha">Confirme sua senha: </label>
                <input type="password" id="senha" name="Senha" required>
            </div>
            
            <div>
                <label for="data">Data de Nascimento: </label>
                <input type="date" id="data" name="Data" required>
            </div>

            <div>
                <label for="tel">Telefone: </label>
                <input type="number" id="tel" name="Telefone" placeholder="(00) 0 0000-0000" required>
            </div>

            <div>
                <label for="cpf">CPF: </label>
                <input type="number" id="cpf" name="CPF" size="14" placeholder="000.000.000-00" required>
            </div>

            <div>
                <label for="cep">CEP: </label>
                <input type="number" id="cep" name="Cep" size="9" placeholder="00000-000" required>
            </div>
            
            <div>
                <label for="select">Gênero: </label>
                <select id="select" name="Selecionado" required>
                    <option value=" " disabled selected>Selecione uma das opções...</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                    <option value="naodito">Prefiro não dizer</option>
                </select>
            </div>
    </section></div>

   <div class="tds"> 
    <section><br>
        
            <h2 class="fm">Gravity Falls: </h2>
        <div>
            <label for="hora">Hora: </label>
            <input type="time" id="hora" name="Hora">
		</div>

        <div>
            <label for="cor">Escolha uma cor: </label>
            <input type="color" id="cor" name="Cor Escolhida">
        </div>

        <div>
            <label for="numero">Episódio Favorito: </label>
            <input type="number" id="numero" placeholder="Exemplo: 4" name="Episódio">
        </div>

        <div>
            <label for="numero">Temporada Favorita: </label>
            <input type="number" id="numero" placeholder="Exemplo: 7" name="Temporada">
        </div>

        <!-- <div>
			<label for="file">Arquivo: </label>
            <input type="file" id="file" name="Arquivo">
        </div> -->
        <!-- <div>
			<label for="url">URL: </label>
            <input type="url" id="url" name="URL">
        </div> -->
        <!-- <div>
            <label for="radio">Selecione apenas uma opção: </label>
            <input type="radio" id="radio" name="Opção escolhida: ">
        </div> -->
        <!-- <div>
            <label for="caixa">Selecione mais de uma opção: </label>
            <input type="checkbox" id="caixa" name="Opções escolhidas: ">
        </div> -->

        

        <div>
            <label for="personagem">Personagem Favorito:</label>
            <select id="personagem" name="Personagem">
                <option value="" disabled selected>Escolha um: </option>
                <option value="mabel">Mabel</option>
                <option value="dipper">Dipper</option>
                <option value="stan">Stan</option>
                <option value="ford">Ford</option>
                <option value="wendy">Wendy</option>
                <option value="soos">Soos</option>
                <option value="billcipher">Bill Cipher</option>
                <option value="mcgucket">Mcgucket </option>
                <option value="pacifica">Pacifica </option>
            </select>
        </div>

        <div>
            <label for="bio">Opnião Geral: </label>
            <textarea id="bio" name="Opnião" cols="30" rows="10"></textarea>
        </div>

        </div>
        <!-- <div>
            <input type="reset" id="resetar" name="Reset" value="Limpar">
        </div> -->

        <div class="bt">
            <!-- <input type="submit" id="submit" name="submit"> -->
            <button type="submit" class="botao">Enviar</button>
            <input type="reset" id="resetar" name="Reset" value="Limpar" class="botao" >
        </div>
        
    </form>
    </section>
</main>
    <footer>
        &Delta;
    </footer>
	<?php
	}
	?>
</body>
</html>