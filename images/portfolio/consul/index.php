<!DOCTYPE html>
<!--[if lte IE 7]><html class="no-js lt-ie9 lt-ie8 lte-ie7"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Cadastro - Consul</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="img/favicon.ico?v=2" />
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/extra.css">
<link rel="stylesheet" href="css/contador.css">
<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/gatc_IP_padrao_Consul.js"></script>

</head>
<body class="index">
<div class="wrapper">
  <div class="header"></div>
  
  <!-- .container -->
  <div class="container">
    <div class="container-wrap">
      
      <div class="logo">
        <h1 class="ir">Consul</h1>
      </div>
      <div class="ilustracao"> <img class="img-bf" src="img/produtos.jpg" alt=""/>
        <div class="over">
          <p>Preço baixo direto de fábrica? <strong>É pra já!</strong></p>
        </div>
        <div class="descricao">
          <ul>
            <li>Frete grátis*</li>
            <li>Até 12x sem juros</li>
            <li>Garantia estendida</li>
            <li>Direto da fábrica</li>
          </ul>
          <small>* Exceto regiões Norte e Centro Oeste.</small> </div>
      </div>
      
      <!-- .conteudo -->
      <div class="conteudo">
        <p class="chamada"> <strong>Cadastre-se e<br>
          receba as ofertas<br>
          um dia antes!</strong> </p>
        <form action="admin/register.php" class="form-cadastro cf" method="post">
          <div class="success">Cadastro efetuado com sucesso!</div>
          <div class="fields">
            <label for="txt-nome" class="label-inputs">
              <input type="text" id="txt-nome" name="fullname" placeholder="Nome completo" class="validate[required]">
            </label>
            <label for="txt-email" class="label-inputs">
              <input type="email" id="txt-email" name="email" placeholder="E-mail" class="validate[required, custom[email]">
            </label>
            <label for="txt-data-nasc" class="label-inputs">
              <input type="text" id="txt-data-nasc" name="birth" placeholder="Data de nascimento" class="validate[required]">
            </label>
            <div class="cf duas-col">
              <label for="txt-cpf" class="label-inputs">
                <input type="text" id="txt-cpf" name="document" placeholder="CPF" class="validate[required]">
              </label>
              <label for="txt-tel" class="label-inputs">
                <input type="text" id="txt-tel" name="phone" placeholder="Telefone" class="validate[required]">
              </label>
            </div>
          </div>
          <span class="hr"></span>
          <div class="categorias">
            <p class="titulo">Quais categorias você gostaria de receber ofertas?</p>
            
            <!-- .container-checks -->
            <div class="container-checks">
              <label for="gel" class="lb152">
                <input type="checkbox" id="gel" name="categories[]" value="Geladeiras/Freezer">
                Geladeiras/Freezer </label>
              <label for="fog" class="lb128">
                <input type="checkbox" id="fog" name="categories[]" value="Fogão/Cooktop">
                Fogões/Cooktop</label>
              <label for="lav" class="lb152">
                <input type="checkbox" id="lav" name="categories[]" value="Lavadoras">
                Lavadoras</label>
              <label for="out" class="lb128">
                <input type="checkbox" id="out" name="categories[]" value="Outros">
                Outros</label>
            </div>
            <!-- </ .container-checks --> 
            
          </div>
          <span class="hr"></span>
          <input type="hidden" name="page" value="consul">
          <div class="action">
            <label for="" class="lbl-aceito">
              <input type="checkbox" id="rules" name="rules" value="yes" class="validate[required]">
              li e aceito os <a id="termos" href="#ov-termos">termos</a></label>
            <input type="submit" class="enviar" name="submit" value="Enviar">
          </div>
        </form>
      </div>
      <!-- </ .conteudo -->
      
      <div class="clear"></div>
      <div id="countdownDisplay">
        <div id="defaultCountdown"></div>
      </div>
    </div>
  </div>
  <!-- </ .container -->
  
  <div class="footer-push"></div>
  
  <!-- .container-overlay -->
  <div class="container-overlay"> 
    <!-- #ov-termos -->
    <div id="ov-termos">
      <p>Atenção: ao optar por receber informações, seus dados pessoais serão armazenados no nosso banco de dados, e tratados de acordo com as disposições éticas e legais referentes à privacidade. Você estará, ainda, nos autorizando a transferir seus dados pessoais a terceiros, que mantenham políticas similares de proteção à privacidade.</p>
    </div>
    <!-- </ #ov-termos -->
    
    <div id="ov-registered">
      <p>Não foi possível efetuar o cadastro! <br />
        Já existe um participante com este endereço de e-mail.</p>
    </div>
    <div id="ov-date">
      <p>Data de nascimento inválida.</p>
    </div>
    <div id="ov-cpf">
      <p>CPF inválido!</p>
    </div>
  </div>
  <!-- </ .container-overlay --> 
  
</div>
<div class="footer"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script src="js/jquery.countdown.js"></script> 
<script type="text/javascript" src="js/jquery.validationEngine.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script> 
<script>
$(function () {
	$('input[type="text"], input[type="email"], textarea').on('focus', function () {
		if ($(this).val().length > 0) {
			$(this).siblings('span').css('color', '#736c6b');
		} else {
			$(this).siblings('span').css('color', '#fff');
		}
	});

	$('input, textarea').placeholder();

	var end = Date.parse('November 23, 2012');
	var newYear = false;

	$('#countdown').countdown({
		timestamp: end
	});

	$('#txt-tel').mask('(99) 9999-9999?9').blur(function(event) {
		var target, phone, element;
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;

		phone = target ? target.value.replace(/\D/g, '') : '';
		element = $(target);

		element.unmask();
		if(phone.length > 10) {
			element.mask('(99) 99999-999?9');
		} else {
			element.mask('(99) 9999-9999?9');
		}
	});

	$('#txt-cpf').mask('999.999.999-99');
	$('#txt-data-nasc').mask('99/99/9999');

	$('.form-cadastro').validationEngine('attach', {scroll: false});

	$('.form-cadastro').on('submit', function(e){
		e.preventDefault();

		if($(this).validationEngine('validate')) {
			$.post($(this).attr('action'), $(this).serialize(), function(res){
				console.log(res, Number(res), isNaN(res));
          if (res == 'registered') {
            $.fancybox({
              href: '#ov-registered'
            });
          } else if(res == 'date_min' || res == 'date_max'){
            $.fancybox({
              href: '#ov-date',
              afterClose: function(){
                $('#txt-data-nasc').focus();
              }
            });
          } else if(res == 'cpf'){
            $.fancybox({
              href: '#ov-cpf',
              afterClose: function(){
                $('#txt-cpf').focus();
              }
            });
          } else {
            var arr = res.split(',');            
            var email = arr[0];
            var id = arr[1];
            

            //BEGIN GOOGLE ANALYTICS
             _gaq.push(['_trackPageview','/Consul_BF/Conclusao_Cadastro']);
            $('.success').fadeIn('fast').delay(3000).fadeOut('fast');
            $('input[type="text"], input[type="email"], textarea').val('');
            $('input[type="checkbox"]').removeAttr('checked');
            //END GOOGLE ANALYTICS
          }
			});
		}
	});

	$('#termos').fancybox();
});
</script> 
<script type="text/javascript" src="js/contador.js"></script> 
<script type="text/javascript">

$(function () {
  var austDay = new Date(2014, 11, -1);
	$('#defaultCountdown').countdown({until: austDay, format: 'dHM'});
		 
});
</script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 980493561;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>

</body>
</html>
