<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Animación De Scroll</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
		  integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  	<link rel="shortcut icon" href="http://ejemplocodigo.com/wp-content/uploads/2014/09/jquery-e1417606719180-150x150.png">
  	<link rel="stylesheet" href="../css/formato.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">
</head>

<style>
	#img_flecha{
		position: fixed;
		bottom: 0;
		right: 0;
		width: 50px;
		opacity: 0.7;
	}
</style>

<body>
	<div class="container-fluid colorAcentuado" id="fondoPag">
		<div class="container bg-white">
			<div class="jumbotron bg-transparent">
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Animación De Scroll</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12 border border-dark text-justify margenInternos" id="div_contenido">
							<h3 class="text-center fuenteTuneada colorPrincipal font-weight-bold">Lorem Ipsum</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur iure quasi praesentium laboriosam obcaecati fuga, aperiam repellendus exercitationem? Voluptatibus maxime facilis, soluta mollitia impedit alias ducimus aperiam odit dolore!</p>
							<p>Fugit fugiat nemo est aspernatur cum non libero quam minima, quo, reprehenderit inventore vero assumenda beatae asperiores dicta minus possimus aliquid alias nesciunt atque voluptates numquam quas repellat nobis! Minus.</p>
							<p id="parraf_3">Cum omnis culpa consequuntur voluptas sed sequi amet, dolore vitae non illo quos aliquam, ea mollitia quo repellendus velit ad corrupti maxime adipisci consequatur ex optio, obcaecati eos. Ipsam, mollitia?</p>
							<p>Numquam tenetur, dolores, sit officia qui fugiat impedit labore eaque, aliquam harum aspernatur voluptates blanditiis ut dicta magnam quis inventore possimus! Culpa, fugiat, nostrum! Odio quos possimus distinctio repellat beatae!</p>
							<p>Odio, ratione quos laboriosam? Sequi mollitia vel in natus illum, illo, recusandae dignissimos praesentium iure repudiandae consectetur soluta doloremque deleniti fugiat eius quos molestiae magni omnis itaque saepe. Totam, consectetur.</p>
							<p>Quo accusantium repellendus consectetur at, cum sapiente culpa, omnis quae voluptatum, deleniti ad totam impedit ea praesentium ex illo nemo. Aut corporis odit tenetur soluta, culpa, magni ratione expedita a.</p>
							<p>Sit est omnis consectetur unde, recusandae, exercitationem aperiam a cumque minus excepturi, repellendus velit. Laudantium quas, est voluptatem perspiciatis eligendi temporibus cum illum, sed possimus et, velit, eveniet mollitia eius!</p>
							<p>Quos quod qui non asperiores, repudiandae, necessitatibus veniam inventore ea laboriosam excepturi nihil vitae molestiae? Voluptatum recusandae, molestiae ullam assumenda iure quae fuga. Sequi aspernatur illum suscipit, expedita, porro dignissimos.</p>
							<p>Itaque ducimus eos illo, natus commodi, doloribus voluptatum dolores deleniti error quod obcaecati, aperiam nihil dolorem nostrum tempora ea ratione explicabo, sed. Ex autem, ipsum quam, quisquam illum id ratione.</p>
							<p>Iste impedit quidem, omnis reprehenderit laboriosam ducimus quia vel unde mollitia provident neque itaque fuga ipsa, asperiores reiciendis odio amet inventore est voluptatum voluptatem officiis ex culpa sed cumque. Laudantium!</p>
							<p>Necessitatibus veritatis, ea magnam illo corrupti nemo quasi excepturi numquam repellendus saepe harum at quidem illum quas, ipsam animi eligendi eaque voluptatem. Autem asperiores, voluptatibus eum dolorum odit consequuntur iure.</p>
							<p>Natus, quod. Praesentium fugiat ipsum officia, veritatis expedita obcaecati quasi tempora magnam excepturi repudiandae, aliquid porro, nulla, nobis aspernatur! Error accusamus quod soluta vel consequuntur totam explicabo molestiae impedit, aliquam.</p>
							<p>Quo harum molestiae ex reprehenderit accusantium commodi exercitationem voluptates! Tempora maxime quibusdam id? Dolorem ducimus laboriosam recusandae sit corrupti voluptates. Facilis adipisci cupiditate, amet laudantium voluptate aut harum quasi, in.</p>
							<p>Molestias obcaecati, tenetur! Veritatis impedit officiis odit delectus. Amet officia obcaecati, mollitia! Fugiat dolorum aliquam saepe libero, eligendi sit unde animi, praesentium, vero ducimus nobis sed, numquam minima nulla iure.</p>
							<p>Modi distinctio magnam ipsum, perferendis provident rerum, alias optio, iste impedit officiis accusantium eum omnis totam nihil. Placeat hic, veritatis, omnis sint, iusto, nihil soluta voluptatibus quisquam adipisci deleniti eos.</p>
						</div>						
					</div>
				</div>
			</div>


			<div class="fuenteTuneada text-right colorPrincipal">
				<i class="fa fa-usb" aria-hidden="true"></i> Searito Aprende
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" 
	integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" 
	integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<script src="../js/estilos.js"></script>

	<script>
		$(document).ready(function() {
			$("#titulo_rebote").addClass('animated bounceInDown');

			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});


			$("#img_flecha").hide();


			$(window).scroll(function() {
				if ($(this).scrollTop() > 150) {
					$("#img_flecha").show();
				}else{
					$("#img_flecha").hide();
				}
			});


			$("#img_flecha").click(function() {
				//$("html, body").animate({scrollTop: 0}, 2000);

				$("html, body").animate({scrollTop: $("#parraf_3").offset().top}, 2000);
			});
		});
	</script>

	<img src="http://cdn.onlinewebfonts.com/svg/img_401809.png" id="img_flecha" title="Volver Arriba" class="img-responsive">
</body>
</html>