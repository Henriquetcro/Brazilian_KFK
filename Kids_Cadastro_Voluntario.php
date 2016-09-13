<!DOCTYPE html>
<!--
Henrique Teixeira de Oliveira
Pontifícia Universidade Católica do Rio de Janeiro
University of Southern California
E-mail: henriquetcro@gmail.com
+55(21)981430609
Rio de Janeiro, Brazil 
-->

<html lang="en-US">
	<head>
		<title>Kicks for Kids - RJ</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS_Kids_Cadastro.css">
        <link rel="stylesheet" type="text/css" href="All_pages.css">
	</head>
    <body>
       
<!-- ------------------------------------------------PHP - START------------------------------------------------------- -->
    <?php
        // define variables and set to empty values
        $name = $last = $id =$email = $birthday = $gender = $major = $state = "";
        $name_error = $last_error = $id_error = $email_error = $birthday_error = $gender_error = $major_error = $state_error = "";
        //
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            if (empty($_POST["name"])) {
                $name_error = "Por favor, digite o nome";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $name_error = "Only letters and white space allowed"; 
                }
            }
            
            if (empty($_POST["last"])) {
            $last_error = "Por favor, digite o sobrenome";
            } else {
                $last = test_input($_POST["last"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
                    $last_error = "Only letters and white space allowed"; 
                }
            }
            
            if (empty($_POST["id"])) {
                $id_error = "Por favor, digite a sua matrícula";
            } else {
                $id = test_input($_POST["id"]);
                // check if name only contains letters and whitespace
                if (preg_match("/[^0-9]/",$id)) {
                $id_error = "Por favor, digite os sete dígitos da matrícula"; 
                }
            }
            
            if (empty($_POST["email"])) {
                $email_error = "Por favor, digite o seu e-mail";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $email_error = "O formato do e-mail não é válido"; 
                }
            }
            
            if (empty($_POST["birthday"])) {
                $birthday_error = "Por favor, digite a sua matrícula";
            } else {
                $birthday = test_input($_POST["birthday"]);
                $date = explode("/",$birthday);
                if (count($date) !=3) {
                    $birthday_error = "Por favor, digite a data de nascimento no formato acima indicado";
                }
                else {
                    if (!checkdate($date[1],$date[0],$date[2])) {
                        $birthday_error = "Data inválida";
                    }
                }
            }
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "kfk_v";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO kfk_data (ordem, nome, sobrenome, matricula, email, aniversario, genero, curso, estado)
            VALUES (DEFAULT, '$name', '$last', '$id', '$email', '$birthday', 'Homem', 'a', 'a')";

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                
            }

            mysqli_close($conn);
        }
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        return $data;
        } 
      ?>
        
<!-- ------------------------------------------------PHP - END------------------------------------------------------- -->
        
        <ul class="topnav" id="myTopnav">
            <li><a class="active" href="Kids.php">KICKS FOR KIDS - PUC-RJ</a></li>
            <li><a href="Kids_Eventos.php">Eventos</a></li>
            <li><a href="Kids_Cadastro_Jogador.php">Cadastro do Jogador</a></li> 
            <li><a href="Kids_Cadastro_Voluntario.php">Seja um Voluntário</a></li>
            <li><a href="#contato">Contato</a></li>
            
            <li class="doacao"><a href="#doacao">SUPORTE NOSSA CAUSA!</a></li>
            <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="navIcon()">☰</a></li>
        </ul>
        
        <h1>Venha fazer parte da nossa equipe de voluntários!</h1>
        
        <h2>O seu cadastro é importante para que possamos fazer um número maior de sorrisos durante as nossas atividades. Você não precisa saber absolutamente NADA sobre futebol, pedimos apenas que traga sua felicidade e alegria para que nossos eventos sejam TUDO no dia de nossos amiguinhos.</h2>
        
        <div class=cadastrar>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              
                <label for="nome">Nome</label> 
                <span class="error">* <?php echo $name_error;?> </span>
                    <input type="text" name="name" maxlength="15">

                <label for="sobrenome">Sobrenome</label> 
                <span class="error">* <?php echo $last_error;?> </span>
                    <input type="text" name="last" maxlength="30">
              
                <label for="matricula">Matrícula</label> 
                <span class="error">* <?php echo $id_error;?> </span>
                    <input type="text" name="id" maxlength="7">
              
                <label for="email">E-mail</label> 
                <span class="error">* <?php echo $email_error;?> </span>
                    <input type="text" name="email" maxlength="20">
              
                <label for="confirma-email">Confirmação do E-mail</label>
                <!-- <span class="error">* <?php// echo $conf_email_error;?> </span> -->
                    <input type="text" name="e-mail-2" maxlength="20">
              
                <label for="aniversario">Data de Nascimento (dia/mês/ano)</label> 
                <span class="error">* <?php echo $birthday_error;?> </span>               
                    <input type="text" name="birthday" maxlength="10">
              
                <label for="genero">Sexo*<br></label>
                    <div class=sexo>
                        <input type="radio" name="gender" value="mulher">Mulher
                        <input type="radio" name="gender" value="homem">Homem
                    </div>
              
                <label for="curso">Curso</label>
                    <select name="curso_in">
                    <option value="curso_default"></option>
                    <option value="adminatracao">Administração</option>
                    <option value="arq_urbanismo">Arquitetura e Urbanismo</option>
                    <option value="artes_cenicas">Artes Cênicas</option>
                    <option value="ciencias_cumputacao">Ciência da Computação</option>
                    <option value="ciencias_biologicas">Ciências Biológicas</option>
                    <option value="ciencias_economicas">Ciências Econômicas (Economia)</option>
                    <option value="ciencias_sociais">Ciências Sociais (Sociologia)</option>
                    <option value="cinema">Comunicação Social (Cinema)</option>
                    <option value="jornalismo">Comunicação Social (Jornalismo)</option>
                    <option value="publicidade_produto">Comunicação Social (Publicidade de Produto)</option>
                    <option value="comunicacao_visual">Design (Comunicação Visual)</option>
                    <option value="midia_digital">Design (Midia Digital)</option>
                    <option value="moda">Design (Moda)</option>
                    <option value="projeto_produto">Design (Projeto de Produto)</option>
                    <option value="direito">Direito</option>
                    <option value="engenharia_ambiental">Engenharia Ambiental</option>
                    <option value="engenharia_civil">Engenharia Civil</option>
                    <option value="engenharia_computacao">Engenharia da Computação</option>
                    <option value="engenharia_controle_automacao">Engenharia de Controle e Automação</option>
                    <option value="eletrica">Engenharia Elétrica</option>
                    <option value="engenharia_materiais_nanotecnologia">Engenharia de Materiais e Nanotecnologia</option>
                    <option value="engenharia_mecanica">Engenharia Mecânica</option>
                    <option value="engenharia_petroleo">Engenharia de Petróleo</option>
                    <option value="engenharia_producao">Engenharia de Produçao</option>
                    <option value="engenharia_quimica">Engenharia Química</option>
                    <option value="filosofia">Filosofia</option>
                    <option value="fisica">Física</option>
                    <option value="geografia">Geografia</option>
                    <option value="historia">História</option>
                    <option value="letras">Letras</option>
                    <option value="matematica">Matemática</option>
                    <option value="pedagogia">Pedagogia</option>
                    <option value="gestao_midias">Produção e gestão de mídias em educação</option>
                    <option value="psicologia">Psicologia</option>
                    <option value="quimica">Química</option>
                    <option value="relacoes_internacionais">Relações Internacionais</option>
                    <option value="servico_social">Serviço Social</option>
                    <option value="sistemas_informacao">Sistemas de Informação</option>
                    <option value="teologia">Teologia</option>       
                </select>
              
                <label for="estado">Estado</label>
                    <select name="estado_in">
                    <option value="estado_defalt"></option>
                    <option value="acre">Acre(AC)</option>
                    <option value="alagoas">Alagoas(AL)</option>
                    <option value="amapa">Amapá(AP)</option>
                    <option value="amazonas">Amazonas(AM)</option>
                    <option value="bahia">Bahia(BA)</option>
                    <option value="ceara">Ceará(CE)</option>
                    <option value="distrito_federal">Distrito Federal(DF)</option>
                    <option value="espirito_santo">Espírito Santo(ES)</option>
                    <option value="goias">Goiás(GO)</option>
                    <option value="maranhao">Maranhão(MA)</option>
                    <option value="mato_grosso">Mato Grosso(MT)</option>
                    <option value="mato_grosso_do_sul">Mato Grosso do Sul(MS)</option>
                    <option value="minas_gerais">Minas Gerais(MG)</option>
                    <option value="para">Pará(PA)</option>
                    <option value="paraiba">Paraíba(PB)</option>
                    <option value="parana">Paraná(PR)</option>
                    <option value="pernambuco">Pernambuco(PE)</option>
                    <option value="piaui">Piauí(PI)</option>
                    <option value="rio_de_janeiro">Rio de Janeiro(RJ)</option>
                    <option value="rio_grande_do_norte">Rio Grande do Norte(RN)</option>   
                    <option value="rio_grande_do_sul">Rio Grande do Sul(RS)</option>
                    <option value="rondonia">Rondonia(RO)</option>
                    <option value="roraima">Roraima(RR)</option>
                    <option value="santa_catarina">Santa Catarina (SC)</option>
                    <option value="sao_paulo">São Paulo(SP)</option>
                    <option value="sergipe">Sergipe(SE)</option>
                    <option value="tocantis">Tocantins(TO)</option>
                </select>
              
                <input type="submit" name="cadastrar" value="Cadastrar">
            </form>
            <p id=aviso>* Todos os dados informados serão apenas utilizados para identificação dos candidatos durante os eventos e envio de e-mails referentes as atividades.<p>
        </div>
        
        <div>
            <!--
            <img src="/Pictures/Kicks_for_Kids-1.jpg" alt="Mountain View" style="width:304px;height:228px;">
            <img src="/Pictures/Kicks_for_Kids-2.jpg" alt="Mountain View" style="width:304px;height:228px;">
            <img src="/Pictures/Kicks_for_Kids-3.jpg" alt="Mountain View" style="width:304px;height:228px;">
            <img src="/Pictures/Kicks_for_Kids-4.jpg" alt="Mountain View" style="width:304px;height:228px;">
            -->
        </div>
            
        <div class="footer">
            <p class=p-footer>
               Kicks for Kids - P**-RJ<br>
               Faça a diferença hoje, não deixe para amanhã!<br>
               Telefone: (21)98143-0609<br>
               E-mail: kfk-rio@gmail.com<br><br>
               Siga, curta e compartilhe a nossa página no Facebook!</p>
        </div>
        <div class=facebook> 
            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FUSCkicksforkids&width=450&layout=standard&action=like&size=large&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
        
    </body>
    <script src="JS_Kids.js"></script>
</html>