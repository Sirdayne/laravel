<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>Window Fashion - Виды штор</title>
	<meta name="description" content="">
	
	<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/assets/css/fonts.css">
	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/media.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/slick.css">

    <link rel="stylesheet" href="/css/laravel.css">
   
    <link rel="stylesheet" href="/assets/css/lightbox.css">
    
    <script src="/assets/js/lightbox-plus-jquery.js"></script>
    
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.fullPage.css" />
	
	<script type="text/javascript" src="vendors/jquery.slimscroll.min.js"></script>

	<script type="text/javascript" src="/assets/js/jquery.fullPage.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['curtain-1', 'curtain-2', 'curtain-3', 'curtain-4', 'curtain-5', 'curtain-6'],
                //menu: '#menu',
                scrollingSpeed: 600,
                continuousVertical: true,
                
                'onLeave': function(index, nextIndex, direction){
                    if (index > 0){
                            $('.types-info').hide();
                            $('.types-info').fadeIn(1100);
                        
                    $('.portfolio-part').removeClass('pf-active');
                    $('.types-section').removeClass('pf-active');
                    }
                }
			});
		});
	</script>
   
</head>
<body class="types-body">    
     
@include('partials.modal')

<div class="navigation navigation-fullpage">
        @include('partials.navigation')
</div>

@yield('content')

      <footer class="footer footer-fullpage">

                <div class="wrap footer-center">

                    <div class="footer-part footer-mob-none">
                        <div class="footer-logo">
                            <img src="/assets/img/logo-footer.png" alt="">
                        </div>
                    </div>
                
                    <div class="footer-part">
                        <div class="f-contacts">КАЗАХСТАН. Г.АСТАНА,</div>
                        <div class="f-contacts">УЛ. КУНАЕВА, Д. 35/1, КВ. 3,</div>
                        <div class="f-contacts">ТЕЛ: +7 (7172) 516 520</div>
                    </div>
                    
                    <div class="footer-part footer-mob-none">
                        <div class="f-btn-short"><button class="btn-white-short jk">ВЫЗВАТЬ ДИЗАЙНЕРА</button></div>
                    </div>

                    <div class="footer-part footer-mob-none">
                        <div class="f-contacts">ПРИСОЕДИНЯЙТЕСЬ</div>
                        <div class="f-contacts">
                            <div class="f-1"></div>
                            <div class="f-2"></div>
                            <div class="f-3"></div>
                        </div>
                    </div>

                </div>
        </footer>
        
<script src="/assets/js/window.js"></script>
 
<script src="/assets/js/maskedinput.js"></script>
<script type="text/javascript">	
    jQuery(function($){$("#client-tel-for-consult").mask("+7(999)999-99-99");});
    jQuery(function($){$("#client-tel-for-consult-2").mask("+7(999)999-99-99");});
</script>
   
<!--<script src="/assets/js/script.js"></script>-->

</body>
</html>

