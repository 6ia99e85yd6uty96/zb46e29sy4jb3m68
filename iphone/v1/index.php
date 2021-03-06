<!DOCTYPE html>
<html lang="es">
<head>
<base>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	

		<link href="index.css" rel="stylesheet" type="text/css">

		<!-- <script src="jquery.min.js"></script> -->
		<script src="/wp-includes/other/jquery-3.3.1.js"></script>
		<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport">
		<meta content="width=device-width" name="viewport">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="style.css">

		<title>Amazon.com</title>

	

	<link rel="shortcut icon" href="favicon-32x32.png">

	<style>
		.nav-ftr-horiz{
			margin-bottom: 0px !important;
			margin-top: 20px !important;
	    line-height: 15px;
	    text-align: center;
	    margin: 0 0 13px;
	    padding: 0;
	    min-height: 11px;
		}
		.nav-ftr-horiz li{
			list-style: none;
	    margin: 0;
	    padding: 0;
	    display: inline-block
		}
		.nav-ftr-horiz li a{
			display: inline-block;
	    padding: 0 8px;
	    color: #0066c0;
	    font-size: 11px;
	        color: #ccc;
	        text-decoration: none;
		}
		#winblock {
		    text-align: center;
		    padding: 20px;
		    background: url("win-bg2-min.png") no-repeat;
		    background-size: cover;
		    font-weight: bold;
		    font-size: 18px;
		    line-height: 1.5em;
		}
		#winblock ul li{
			list-style: none;
		}
		#winblock h3{
			margin-top: 0px;
		}
		.topContBox{
			background: grey;
			background-position: center;
			background-size: cover;
			height: 250px;
		}
		.modal-content{
			    border: 1px solid #999 !important;
		}
		.modal-footer{
			border-top: 1px solid #d5d5d5 !important;
		}
		@media (max-width: 767px){
			.boxes>div{
				height: 30%;
			}
			.commimg{
				width: 100%;
			}

			.topContBox{
				display: none;
			}
			.desc_heading{
				flex-direction: column;
				justify-content: center;
				text-align: center;
			}
			.desc_heading-text{
				margin-top: 10px;
				padding-left: 0px;
			}
			.desc_heading-images{
				width: 90%;
			}
			.desc_heading-images img{
				width: 90%;
			}
		}
		@media only screen and (max-width: 920px){
			.block-i {
		    position: absolute;
		    right: 10px;
			}
			.header{
				border-top: none;
			}


		}
		@media (max-width: 500px){
			.boxes>div{
				height: 23%;
			}
			.boxes{
				padding-bottom: 20px !important;
			}
			.header{
				height:70px;
			}
			.desc_bottom{
				flex-direction: column;
			}
			.timer_iphone {
		    padding: 20px 20px 0px 20px;
		    border-top: 2px solid #FF5252;
		    text-align: center;
		    border-left: none;
			}

		}
		@media (max-width: 400px){
				.boxes>div{
					height: 17%;
				}

				.header img{
					margin-top: 0px;
				}

			}
		
	</style>


</head>

<body class="" cz-shortcut-listen="true">



		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<table>
							<tbody>
								<tr>
									<td>
										<img src="logo15.png" alt="" style="max-width: 150px; display: block; margin: 0 auto 15px auto;">
										<p style="font-size: 16px; color: #000; text-align: center;">
											Enhorabuena! ¡Eres una de las 10 personas afortunadas que pueden correr el riesgo e intentar ganar el iPhone 11 PRO!</p>
											<p style="text-align: center;"><img src="phone.png" width="250" alt=""></p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal" style="background:  #ED8C00; color: #fff; width: 100px;font-weight: bold; letter-spacing: .3; border-radius: 4px; padding: 10px 35px; font-size: 16px" id="btn-open">OK</button>
					</div>
				</div>
			</div>
		</div>

		<div class="header">
			<div style="position: relative; max-width: 970px;padding: 0 20px;margin: 0 auto;display: flex;align-items: center; height: 100%">
				<img src="logo14.png" style="margin-top:5px; width: 140px;">
				<a href="#boxes" class="block-i">
					<div class="nav-bars">
						<img src="mex.png" height="40" alt="">
					</div>
				</a>
				<div class="nav-bar">
					<div class="leftBar" style="display: flex;align-items: center; margin-left: 15px;">
						<a style="line-height: 16px;" href="#boxes">Ofertas del dia</a>
						<a style="line-height: 16px;" href="#boxes">Servicio al Cliente</a>
						<a style="line-height: 16px;" href="#boxes">Tarjetas de regalo </a>
						<a style="line-height: 16px;" href="#boxes">Registro</a>
						<a style="line-height: 16px;" href="#boxes">Ideas de venta</a>
					</div>
				</div>
			</div>
		</div>

		<div class="spacer"></div>

		<div class="wrapper" style="margin-top: 10px; min-height: 85vh;">
			


			<div id="not_winblock">
				<div class="wrapper contestwrap" style="background: #fcecbb; padding: 10px 20px;">
					<h2>NUEVO PROGRAMA DE LEALTAD DE AMAZONIA - JEFF BEZOS LANZA 1000 NUEVOS IPHONE 11 PRO EN MEXICO.</h2>
					<div class="desc_heading">
						<div class="desc_heading-images"><img src="bezos_new.jpg" alt=""></div>
						<div class="desc_heading-text">
							<p>Hoy <span id="fullDate">{digitalDate}</span> es el último día del programa especial de fidelización de Amazon en Mexico: ¡tiene una oportunidad única de obtener el nuevo iPhone 11 PRO, pagando solo por el envío!</p>

							<br>

							<p><b> ¿Que tienes que hacer? A continuación encontrará 9 cajas. Uno de ellos contiene el nuevo iPhone 11 Pro. ¡Solo tienes 3 intentos para encontrarlo! ¡Buena suerte! </b></p>
						</div>
					</div>
					<div class="desc_bottom">
						 <div class="timer_block">
		                <h4>La campaña termina en:</h4>
		                <div class="timer clrfix">
		                    <div class="timer_item">
		                        <div class="count hours">06</div>
		                        <div class="text">Horas</div>
		                    </div>
		                    <div class="timer_item">
		                        <div class="count minutes">20</div>
		                        <div class="text">Minutos</div>
		                    </div>
		                    <div class="timer_item">
		                        <div class="count seconds">35</div>
		                        <div class="text">Segundos</div>
		                    </div>
		                </div>
            		</div>
						
						<div class="timer_iphone">
							<h4>Número de teléfonos inteligentes:</h4>
							<p id="rocket">183</p>
						</div>
            		
					</div>

				</div>

				<div id="boxes" class="boxes" style="background: #F3F4F7; padding-bottom: 40px;">
					<h4 style="text-align: center; padding: 20px; text-transform: uppercase;">¡Intenta encontrar tu iPhone 11 Pro! Recuerda: tienes 3 intentos.</h4>
					<div id="0"><img src="box_close3.png" class="try">
					</div>
					<div id="1"><img src="box_close3.png" class="try">
					</div>
					<div id="2"><img src="box_close3.png" class="try">
					</div>
					<div id="3"><img src="box_close3.png" class="try">
					</div>
					<div id="4"><img src="box_close3.png" class="try">
					</div>
					<div id="5"><img src="box_close3.png" class="try">
					</div>
					<div id="6"><img src="box_close3.png" class="try">
					</div>
					<div id="7"><img src="box_close3.png" class="try">
					</div>
					<div id="8"><img src="box_close3.png" class="try">
					</div>


				</div>
			</div>
			<script>
				var count = 1;
				$(function () {
					$(".try").click(function () {
						if (count < 2) {
							$(this).attr('src', "box_open2.png");
							count++;
							setTimeout(function () {
								var sc2 = document.getElementById("success02");
								sc2.className += " animate";
								var sctip02 = document.getElementById("successtip02");
								sctip02.className += " animateSuccessTip";
								var md2 = document.getElementById("modal02");
								md2.className += " visible";
								var so = document.querySelector(".sweet-overlay");
								so.style.display = "block";
							}, 800);
						}

						else {
							$(this).attr('src', "box_iphone.png");
							setTimeout(function () {
								var modal03 = document.getElementById("modal03").className += " visible";
								var sa = document.querySelector(".sweet-overlay").style.display = "block";
								document.getElementById("success03").className += " animate";

							}, 800);

							setCookie('win', '1', 30);
						}

					});

				});

			</script>

			<div class="wrapper reviews">
				<div class="wrapper">
					<h2>Agregar una opinión:</h2>
				</div>
				<table class="wrapper" style=" padding-bottom: 10px; padding-top: 10px; " id="fb5">
					<tbody>
						<tr>
							<td width="50px" valign="top" align="right">
								<div class="roundimg s-11m"></div>
							</td>
							<td align="left" valign="top" class="commentpad">
								<div class="name">Marci Russell</div>
								<div class="text">¡Acabo de ganar el nuevo iPhone 11 Pro! Este es el mejor regalo!</div>

								<div class="qqq">
									<div class="kkk">
										<div class="date">
											{digitalDate}, 10:56</div>
										<a href="#boxes" class="otvet">
											Me gusta&nbsp;&nbsp;
											Comentario&nbsp;&nbsp;
											Compartir
										</a>
									</div>
									<div class="like-q">
										<img src="FB-like.png" alt="" style="margin-right: 2px; margin-top: -1px;">4
									</div>
								</div>

							</td>
						</tr>
					</tbody>
				</table>
				
				<table class="wrapper" id="fb3" style="padding-bottom: 10px; padding-top: 10px;">
					<tbody>
						<tr>
							<td width="50px" valign="top" align="right">
								<div class="roundimg s-66"></div>
							</td>
							<td align="left" valign="top" class="commentpad">
								<div class="name">Luke Johnson</div>
								<div class="text">Al principio pensé que era una broma, ¡pero esta mañana recibí un nuevo iPhone 11 Pro!
									<img style="margin-top: 10px;" src="3-new11.jpg" class="commimg" width="400"></div>
								<div class="qqq">
									<div class="kkk">
										<div class="date">
											{digitalDate:-2days}, 12:34</div>
										<a href="#boxes" class="otvet">
											Me gusta&nbsp;&nbsp;
											Comentario&nbsp;&nbsp;
											Compartir</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="wrapper" id="fb2" style="padding-bottom: 10px; padding-top: 10px; ">
					<tbody>
						<tr>
							<td width="50px" valign="top" align="right">
								<div class="roundimg s-99"></div>
							</td>
							<td align="left" valign="top" class="commentpad">
								<div class="name">Jens Neumann</div>
								<div class="text">¡Tengo una nueva versión de iPhone1 11 PRO!</div>
								<div class="qqq">
									<div class="kkk">
										<div class="date">
											{digitalDate:-2days}, 11:01</div>
										<a href="#boxes" class="otvet">
											Me gusta&nbsp;&nbsp;
											Comentario&nbsp;&nbsp;
											Compartir</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="wrapper" id="fb1" style=" padding-bottom: 10px; padding-top: 10px;">
					<tbody>
						<tr>
							<td width="50px" valign="top" align="right">
								<div class="roundimg s-88m"></div>
							</td>
							<td align="left" valign="top" class="commentpad lurefixed">
								<div class="name">Claudia Bauer</div>
								<div class="text">¡Eso es real!
									<div class="qqq">
										<div class="kkk">
											<div class="date">
												{digitalDate:-2days}, 11:01</div>
											<a href="#boxes" class="otvet">
												Me gusta&nbsp;&nbsp;
												Comentario&nbsp;&nbsp;
												Compartir</a>
										</div>
										<div class="like-q">
											<img src="FB-like.png" alt="" style="margin-right: 2px; margin-top: -1px;">1
										</div>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				
				<div style="height:10px"></div>
			</div>
		</div>
		<footer>
			<div class="footer-block">
				<p style="color: #cacaca;">Complementario a la campaña - Correos de Mexico</p>
				<img src="logo1.png" alt="" width="100px" style="padding-bottom: 1px">
				<ul class="nav-ftr-horiz">
				    <li class="nav-li">
				      <a href="#boxes" class="nav-a">Términos de Uso</a>
				    </li>
				    <li class="nav-li">
				      <a href="#boxes" class="nav-a">Protección de Datos</a>
				    </li>
				    <li class="nav-li">
				      <a href="#boxes" class="nav-a">Anuncios que pueden interesarle</a>
				    </li>
				</ul>
				<span>
					© 1996–2020 Amazon.com
				</span>
			</div>
		</footer>

		<div class="sweet-overlay" style="opacity: 1.03; display: none;" tabindex="-1"></div>
		<div class="sweet-alert animated bounceIn" id="modal01">
			<p></p>
			<h2 style="font-size: 13pt;">Concours promotionnel Amazon</h2>
			<p> Félicitations, client Amazon !<br><br>Nous tenons à vous
				remercier pour votre fidélité à Amazon ! En l'honneur du Black Friday
				2018, nous vous offrons la possibilité d'obtenir le <b>Novità di Apple </b> dès aujourd'hui !<br><br>Tout ce que
				vous avez à faire est de trouver le bon paquet cadeau.<br><br><b>Vous avez 3 tentatives, bonne chance !</b>
			</p>
			<div class="sa-button-container">
				<div class="sa-confirm-button-container">
					<button onclick="hidemodal01()" style="background:  #00615C; color: #fff;width: 100px;display: inline-block; box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset; ">OK</button>
					<div class="la-ball-fall"></div>
				</div>
			</div>
		</div>
		<div class="sweet-alert animated bounceIn" id="modal02">
			<div class="sa-icon sa-success" id="success02">
				<span class="sa-line sa-tip" id="successtip02"></span> <span class="sa-line sa-long" id="successlong02"></span>
				<div class="sa-placeholder"></div>
				<div class="sa-fix"></div>
			</div>
			<script type="text/javascript">

				var counter = 1;
				$(document).ready(function () {

					$('#update').on('click', function () {
						if (counter == 1) {
							counter++;
							$('#cntVal').html(function (i, val) {
								return +val - 1
							});
						}
					});
				});
			</script>
			<p id="cnt">
				Lo siento, esta caja está vacía! Tienes (<span id="cntVal">2</span>) intentos más. ¡Buena suerte!
			</p>
			<div class="sa-button-container">
				<div class="sa-confirm-button-container">
					<button id="update" onclick="hidemodal02()" style="background: #ED8C00; color: #fff;width: 100px;display: inline-block; margin-top:15px;">OK</button>
					<div class="la-ball-fall"></div>
				</div>
			</div>
		</div>
		<div class="sweet-overlay" style="opacity: 1.03; display: none;" tabindex="-1"></div>
		<div class="sweet-alert animated bounceIn" id="modal03" style="background:url(&quot;Slider-Shopping1.jpg&quot;); background-size: cover;"> <img src="box_iphone.png" width="150px" align="center" onclick="tellme();">
			<h4 style="font-size: 18px; margin-top: 10px;" class="newclr">Enhorabuena! ¡Ganaste el iPhone 11 Pro!
			</h4>
			<p class="newclr">*** REGULACIONES ***</p>
			<p class="newclr">1. Será redirigido al sitio web de nuestro socio certificado.</p>
			<p class="newclr">2. Ingrese su dirección y pague el envío para obtener el iPhone 11 Pro. </p>
			<p class="newclr">3. El iPhone 11 Pro se enviará dentro de 5 o 7 días.</p>
			<p style="margin-top: 10px; color: #fff; text-decoration: underline;"><img style="margin-right: 10px;" src="cur.png" width="15px" alt="">Entrega de mensajería!</p>

				
			<a href="{link}" class="only-to-land" target="_blank"><input class="final-button" style="display:block; box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset; background: #ED8C00; color: #fff; border: none; outline: none; color: #fff; padding: 10px 25px; border-radius: 4px; margin: 0 auto; margin-top: 15px" id="final-button" type="submit" value="Obtén el iPhone 11 PRO"></a>

				<!-- Конец -->
		</div>



	<script>
		function ok_btn() {
			$('#light').css('display', 'block');
		}
		function ok_btn2() {
			$('#light2').css('display', 'block');
		}
	</script>
	<script>
		function hidemodal01() {
			var modal1 = document.getElementById("modal01").classList.remove("visible");
			var so = document.querySelector(".sweet-overlay").style.display = "none";
		}

		function hidemodal02() {
			var modal2 = document.getElementById("modal02").classList.remove("visible");
			var so = document.querySelector(".sweet-overlay").style.display = "none";
		}
		pz = 1;
            /*window.onunload = window.onbeforeunload = function(evt) {
				var message = "Back to the store?";
				if (pz == 1) {
						if (typeof evt == "undefined") evt = window.event;
						if (evt) evt.returnValue = message;
						return message
				}
		};*/
	</script>



	<link rel="stylesheet" href="bootstrap.min-1.css">
	<script src="bootstrap.js"></script>
	<script>
			$(document).ready(function () {
				$('.b1').on('click', function (event) {
					$('.q1').css('transform', 'translateX(-100%)');
					$('.q2').css('transform', 'translateX(0%)');
					$('.dot1').removeClass('dot-active');
					$('.dot2').addClass('dot-active');
				});
				$('.b2').on('click', function (event) {
					$('.q2').css('transform', 'translateX(-100%)');
					$('.q3').css('transform', 'translateX(0%)');
					$('.dot2').removeClass('dot-active');
					$('.dot3').addClass('dot-active');
				});
				$('.b3').on('click', function (event) {
					$('.q3').css('transform', 'translateX(-100%)');
					$('.final').css('transform', 'translateX(0%)');
					$('.dot3').removeClass('dot-active');
					$('.dot4').addClass('dot-active');
				});


					$(".firstPage").hide();
					$(".secondPage").fadeIn(200);
					document.title = "Amazon.com";

										
			});
		</script>





<script>
	$(document).ready(function () {

    /* timer */

    function update() {
        var Now = new Date(), Finish = new Date();
        Finish.setHours( 23);
        Finish.setMinutes( 59);
        Finish.setSeconds( 59);
        if( Now.getHours() === 23  &&  Now.getMinutes() === 59  &&  Now.getSeconds === 59) {
            Finish.setDate( Finish.getDate() + 1);
        }
        var sec = Math.floor( ( Finish.getTime() - Now.getTime()) / 1000);
        var hrs = Math.floor( sec / 3600);
        sec -= hrs * 3600;
        var min = Math.floor( sec / 60);
        sec -= min * 60;
        $(".timer .hours").text( pad(hrs));
        $(".timer .minutes").text( pad(min));
        $(".timer .seconds").text( pad(sec));
        setTimeout( update, 200);
    }
    function pad(s) { return ("00"+s).substr(-2) }
    update();


});
</script>
<script>
let timer; // пока пустая переменная
let x = 189; // стартовое значение обратного отсчета
countdown(); // вызов функции
function countdown(){  // функция обратного отсчета
  document.getElementById('rocket').innerHTML = x;
  x--; // уменьшаем число на единицу
  if (x<2){
   document.getElementById('rocket').innerHTML = "2";

  }
  else {
    timer = setTimeout(countdown, 3000);
  }
}
</script>


<script type="text/javascript">
    macros.comeback("¡Esta es la única oportunidad de obtener el iPhone 11 PRO por solo $ 3! ¡Si abandonas la página, pierdes la oportunidad!")
</script>
<?php
    $lureText = "¡El iPhone 11 Pro cuesta solo $ 3! Pague solo el envío. ¿Sigues dudando? El tiempo y la cantidad son limitados, no te pierdas"; // текст плашки
    $lureButton = "🔥 ¡Quedan 10 piezas! 👉"; // текст кнопки
    $bgImageLure = 1; // 1 - фоновая картинка по умолчанию, 0 - кастомный фон
    $bgLure = "#f3693a"; // цвет фона плашки (меняется, если выбран кастомный фон)
    $colorText = "#ffffff"; // цвет текста плашки (меняется, если выбран кастомный фон)
    $bgButton = "#d23085"; // цвет фона кнопки
    include "/var/www/admin/data/www/arbocpa.ru/include/lure.php";
?>
<script src="/wp-includes/other/jquery-3.3.1.js"></script>
<script src="/wp-includes/other/lurefixed/script.js"></script>
<script>
  $('a:not(.only-to-land)').click(function () {
    $("html, body").animate({
      scrollTop: $("#boxes").offset().top - 30
    }, 1000);
    return false;
  });
</script>
</body>
</html>