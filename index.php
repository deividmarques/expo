
<!DOCTYPE html>

<!--[if lt IE 7]><html class="ie6" lang="pt-br"><![endif]-->
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Expo Mundi</title>
		<meta name="description" content="">
        <meta name="keywords" content="">
        
        <?php include 'inc/init.php'; ?>
		
	</head>	
	<body>
    
   
    		
    	<?php include 'inc/header.php'; ?>
        <div class="content">
            <section class="box-splash inside">
                <div class="bg">
                    <div class="bg-all">
                        <div class="box-social">
                            <div class="social">
                                <h2>CONECTE-SE COM A<b>EXPOMUNDI</b></h2>
                                <div>
                                    <a href="" title="Curta a Expomundi no Facebook" target="_blank" class="fb">agencia.expomundi</a>
                                    <a href="" title="Siga a Expomundi no Twitter" target="_blank" class="tw">@expomundi</a>
                                    <a href="" title="Conheça o Blog da Expomundi" target="_blank" class="blog">Blog<br>Expomundi</a>
                                </div>
                            </div>
                        </div>
                        <div class="nuvem3"></div>
                        <div class="nuvem2"></div>
                        <div class="nuvem1">
                            <h1>REALIZE O INTERCÂMBIO QUE <span>VOCÊ SEMPRE SONHOU COM A <b>EXPOMUNDI</b></span>.</h1>
                        </div>
                        
                        <div class="planet"><span></span></div>
                    </div>
                    <div class="bg2"></div>
                    <div class="bg3">
                    	<form id="form_contato" method="post" action="javascript:void(0);">
                        	<fieldset>
                            	<ul>
                                	<li>
                                    	<label for="fc_nome">Nome*:</label>
                                        <input type="text" class="ipt" name="nome" id="fc_nome">
                                    </li>
                                    <li>
                                    	<label for="fc_email">E-mail*:</label>
                                        <input type="text" class="ipt" name="email" id="fc_email">
                                    </li>
                                    <li>
                                    	<label for="fc_tel">Telefone*:</label>
                                        <input type="text" class="ipt" name="tel" id="fc_tel">
                                    </li>
                                    <li>
                                    	<label for="fc_estado">Estado*:</label>
                                        <select id="fc_estado">
                                        	<option value="0">Selecione</option>
                                            <option>São Paulo</option>
                                            <option>Rio de Janeiro</option>
                                            <option>Brasília</option>
                                        </select>
                                    </li>
                                    <li>
                                    	<label for="fc_cidade">Cidade*:</label>
                                        <input type="text" class="ipt" name="cidade" id="fc_cidade">
                                    </li>
                                </ul>
                                <small>(*) campos obrigatórios</small>
                                <input type="submit" value="" title="Enviar" class="bt-send">
                            </fieldset>
                        </form>
                    </div>
                    <div class="parallax bg-city">
                        <div class="bg1"></div>
                    </div>
                    <a href="javascript:void(0);" title="Faça agora o seu orçamento" class="bt-orcar lk-orcar">Faça agora o seu orçamento</a>
                    <a href="javascript:void(0);" title="Chat Online com o Consultor" class="bt-chat">Chat Online com o Consultor<span class="msn"></span></a>
                </div>
            </section>
            <section class="etapas inside">
                <h2 class="center">Escolha o programa que mais combina com você:</h2>
                <ul class="clearfix">
                    <li>
                        <b>1</b>
                        <h3>Selecione</h3>
                        o(s) programa(s)<br>que deseja<br> visualizar
                    </li>
                    <li>
                        <b>2</b>
                        <h3>Navegue</h3>
                        nas abas de cada quadro para conhecer os países que atendem a cada programa
                    </li>
                    <li>
                        <b>3</b>
                        <h3>Clique</h3>
                        em "Solicitar Orçamento" para enviar sua mensagem aos nossos consultores
                    </li>
                    <li>
                        <b>4</b>
                        <h3>Compartilhe</h3>
                        essa página com amigos e familiares
                    </li>
                </ul>
            </section>
            <section class="listas inside radius">
                <ul class="clearfix">
                    <li>
                        <a href="#curso-idiomas" title="Curso de Idiomas"><span></span>Curso de Idiomas</a>
                    </li>
                    <li>
                        <a href="#combinado" title="Combinado"><span></span>Combinado</a>
                    </li>
                    <li>
                        <a href="#hight" title="Hight School"><span></span>Hight School</a>
                    </li>
                    <li>
                        <a href="#teens" title="Férias Teens"><span></span>Férias Teens</a>
                    </li>
                    <li>
                        <a href="#work" title="Work & Study"><span></span>Work & Study</a>
                    </li>
                    <li>
                        <a href="#profissional" title="Profissionalizante"><span></span>Profissionalizante</a>
                    </li>
                    <li>
                        <a href="#executivo" title="Executivo"><span></span>Executivo</a>
                    </li>
                    <li>
                        <a href="#idade" title="Terceira Idade"><span></span>Terceira Idade</a>
                    </li>
                </ul>
            </section>
        	<section class="share">
            	<div class="inside">
                	botoes de shared
                </div>
            </section>
            	
            <div class="inside">    
                <?php include 'curso-idiomas.php'; ?>
                <?php include 'combinado.php'; ?>
                <?php include 'hight-school.php'; ?>
                <?php include 'ferias-teen.php'; ?>
                <?php include 'work.php'; ?>
                <?php include 'profissional.php'; ?>
                <?php include 'executivo.php'; ?>
                <?php include '3idade.php'; ?>
                
            </div>
            <section class="box-orcar">
                <div class="bg clearfix">
                    <form id="form_orcar" method="post" action="javascript:void(0);">
                        <fieldset>
                            <div class="clearfix">
                                <div class="box-left">
                                    <h2>Sobre você:</h2>
                                    <ul>
                                        <li>
                                            <label for="FO_nome">Nome*:</label>
                                            <input type="text" class="ipt" id="FO_nome">
                                        </li>
                                        <li>
                                            <label for="FO_sobre">Sobrenome*:</label>
                                            <input type="text" class="ipt" id="FO_sobre">
                                        </li>
                                        <li>
                                            <label for="FO_data">Data de Nascimento:</label>
                                            <input type="text" class="ipt" id="FO_data">
                                        </li>
                                        <li>
                                            <label for="FO_email">E-mail*:</label>
                                            <input type="text" class="ipt" id="FO_email">
                                        </li>
                                        <li>
                                            <label for="FO_tel">Telefone*:</label>
                                            <input type="text" class="ipt" id="FO_tel">
                                        </li>
                                        <li>
                                            <label for="FO_estado">Estado*:</label>
                                            <select id="FO_estado">
                                                <option>Selecione</option
                                                ><option>SP</option
                                                ><option>RJ</option
                                                ><option>MG</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label for="FO_cidade">Cidade*:</label>
                                            <select id="FO_cidade">
                                                <option>Selecione</option
                                                ><option>São Paulo</option
                                                ><option>Osasco</option
                                                ><option>Sorocaba</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-center">
                                    <h2>Sobre o intercâmbio:</h2>
                                    <small>(Mantenha o Ctrl pressionado para escolher mais de um programa)</small>
                                    <ul>
                                        <li>
                                            <label>Escolha o seu programa*:</label>
                                            <select class="sel" multiple>
                                                <option>programa 1</option>
                                                <option>programa 2</option>
                                                <option>programa 3</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label for="FO_duracao"><br>Qual a duração do programa?*:</label>
                                            <input type="text" id="FO_duracao" class="ipt">
                                        </li>
                                        <li>
                                            <label for="FO_idioma">Qual o idioma de interesse?*:</label>
                                            <input type="text" id="FO_idioma" class="ipt">
                                        </li>
                                        <li>
                                            <label for="FO_nivel">Qual o seu nível do idioma?*:</label>
                                            <select id="FO_nivel">
                                                <option>Básico</option>
                                                <option>Intermediario</option>
                                                <option>Básico</option>
                                                <option>Intermediario</option>
                                            </select>
                                        </li>
                                    </ul>
                                    <ul class="lastc">
                                        <li>
                                            <label for="FO_destino">Escolha o país de destino*:</label>
                                            <select id="FO_destino" class="sel" multiple>
                                                <option>programa 1</option>
                                                <option>programa 2</option>
                                                <option>programa 3</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label for="FO_preferencia">Possui alguma cidade de preferência?<br>Se sim, qual?</label>
                                            <input type="text" id="FO_preferencia" class="ipt">
                                        </li>
                                        <li>
                                            <label for="FO_viagem">Quando pretende viajar?</label>
                                            <input type="text" id="FO_viagem" class="ipt">
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox">
                                                Desejo me cadastrar na newsletter da Expomundi.
                                            </label>
                                        </li>
                                    </ul>
                                    
                                </div>
                                <div class="box-right">
                                    <ul>
                                        <li>
                                            <label>Observações Gerais:</label>
                                            <textarea></textarea>
                                        </li>
                                        <li>
                                            <label for="">Como você chegou até a Expomundi?</label>
                                            <select class="sel">
                                                <option>XXXX XXX XX</option>
                                                <option>XX XXXXXXXXX</option>
                                                <option>XX XXXXX XXXXXXXX</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="botao">
                                <small>(*) campos obrigatórios!</small>
                                <input type="submit" title="Enviar" value="Enviar" class="bt-send trans">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </section>
            <section class="redes inside clearfix">
            	<div>
                    <a href="" title="" target="_blank" class="face">Facebook Expomundi</a>
                    <a href="" title="" target="_blank" class="twitter">TWitter Expomundi</a>
                    <a href="" title="" target="_blank" class="orkut">Orkut Expomundi</a>
                    <a href="" title="" target="_blank" class="youtube">Youtube Expomundi</a>
                    <a href="" title="" target="_blank" class="formspring">Formspring Expomundi</a>
                    <a href="" title="" target="_blank" class="skype">Skype Expomundi</a>
                    <a href="" title="" target="_blank" class="msn">MSN Expomundi</a>
                    <a href="" title="" target="_blank" class="blog">Blog Expomundi</a> 
                </div>               
            </section>
        </div>
    <?php include 'inc/footer.php'; ?>
</body> 
</html>