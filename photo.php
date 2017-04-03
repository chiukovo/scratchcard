<?php
    include('php/mysql_connect.php');
    $user = array();
    $sql = "SELECT name, content, image FROM user order by id desc;";
    $result=$mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
        $user[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chiuko & Quni</title>
        <meta name="description" content="Gamma Gallery - A Responsive Image Gallery Experiment"/>
        <meta name="keywords" content="html5, responsive, image gallery, masonry, picture, images, sizes, fluid, history api, visibility api"/>
        <link rel="stylesheet" type="text/css" href="full_css/style.css"/>
		<script src="full_js/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="full_css/noJS.css"/></noscript>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			.masonry-brick .gamma-description > div{
				display: none;
			}
			.content {
				color: #9a9a9a;
			    width: 50%;
			    margin: auto;
			}
		</style>
    </head>
    <body>
        <div class="container">

			<div class="main">

				<div class="gamma-container gamma-loading" id="gamma-container">

					<ul class="gamma-gallery">
						<?php foreach ($user as $infor) {?>
						<li>
							<div data-alt="<?php echo $infor['name'];?>" data-description="<h3><?php echo $infor['name'];?></h3><div class=content><?php echo $infor['content'];?></div>" data-max-width="1800" data-max-height="1350">
								<div data-src="uploads/<?php echo $infor['image'];?>" data-min-width="1300"></div>
								<div data-src="uploads/<?php echo $infor['image'];?>" data-min-width="1000"></div>
								<div data-src="uploads/<?php echo $infor['image'];?>" data-min-width="700"></div>
								<div data-src="uploads/<?php echo $infor['image'];?>" data-min-width="300"></div>
								<div data-src="uploads/<?php echo $infor['image'];?>" data-min-width="200"></div>
								<div data-src="uploads/<?php echo $infor['image'];?>" data-min-width="140"></div>
								<div data-src="uploads/<?php echo $infor['image'];?>"></div>
								<noscript>
									<img src="uploads/<?php echo $infor['image'];?>" alt="<?php echo $infor['name'];?>"/>
								</noscript>
							</div>
						</li>
						<?php } ?>
					</ul>

					<div class="gamma-overlay"></div>
				</div>

			</div><!--/main-->
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="full_js/jquery.masonry.min.js"></script>
		<script src="full_js/jquery.history.js"></script>
		<script src="full_js/js-url.min.js"></script>
		<script src="full_js/jquerypp.custom.js"></script>
		<script src="full_js/gamma.js"></script>
		<script type="text/javascript">

			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, {
							width : 320,
							columns : 2
						}, {
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {
						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {

							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

			});

		</script>
	</body>
</html>
