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
        
        <div id="menu">
            <ul class="topnav" id="myTopnav">
                <li id="menu_left"><a class="active" href="Kids.php">KICKS FOR KIDS - PUC-RJ</a></li>
                <li><a href="Kids_Eventos.php">Eventos</a></li>
                <li><a href="Kids_Cadastro_Jogador.php">Cadastro do Jogador</a></li> 
                <li><a href="Kids_Cadastro_Voluntario.php">Seja um Voluntário</a></li>
                <li><a href="#contato">Contato</a></li>
                <li class="doacao"><a href="#doacao">SUPORTE NOSSA CAUSA!</a></li>
                <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="navIcon()">☰</a></li>
            </ul>
        </div>
        
        <div id="interface">
        <h1>Venha fazer parte do time da PUC-RJ</h1>
        
        <h2>Nosso programa visa integrar crianças com necessidades especias com a sociadade. Tenha certeza que seu dia de domingo será muito melhor após conhecer e passar uma manhã de domingo ao nosso lado!</h2>
        
        <div class=cadastrar>
            <form action="action_page.php">
            <label for="nome">Nome</label>
            <input type="text" id="nome_input" name="nome_in">

            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome_input" name="sobrenome_in">
                
            <label for="idade">Idade</label>
            <input type="text" id="idade_input" name="idade_in">

            <label for="matricula">Nome do Responsável</label>
            <input type="text" id="matricula_input" name="matricula_in">
                
            <label for="relacao">Relação Jogador-Resposável</label>
            <select id="relacao_input" name="relacao_in">
                <option value="estado_defalt"></option>
                <option value="Pais">Mãe/Pai</option>
                <option value="Avos">Avó/Avô</option>
                <option value="Tios">Tia/Tio</option>
                <option value="primos">Prima/Primo</option>
                <option value="primos">Amigo</option>
            </select>
                
            <label for="email">E-mail</label>
            <input type="text" id="email_input" name="email_in">
                
            <label for="confirma-email">Confirmação do E-mail</label>
            <input type="text" id="confirma_input" name="confirma_in">
                
            <label for="telefone">Telefone de Contato</label>
            <input type="text" id="telefone_input" name="felefone_in">
                
            <label for="estado">Estado</label>
            <select id="estado_input" name="estado_in">
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
                
  
            <input type="cadastrar" value="Cadastrar">
            </form>
            <p id=aviso>* Todos os dados informados serão apenas utilizados para identificação dos candidatos durante os eventos e envio de e-mails referentes as atividades.<p>
        </div>
        
        <div class="footer">
            <p class=p-footer>
               Kicks for Kids - P**-RJ<br>
               Faça a diferença hoje, não deixe para amanhã!<br>
               Telefone: (21)98143-0609<br>
               E-mail: kfk-rio@gmail.com</p>
        </div>
    </div>
    </body>
    <script src="JS_Kids.js"></script>
</html>