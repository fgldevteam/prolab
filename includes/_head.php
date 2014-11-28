    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type='text/javascript' src='/prolab/js/jquery.hoverIntent.minified.js'></script>
	<script type='text/javascript' src='/prolab/js/jquery.dcmegamenu.1.3.2.js'></script>
	<script type='text/javascript' src='/prolab/js/jquery.dcmegamenu.1.3.2.js'></script>
	<script type="text/javascript" src="/prolab/js/bootstrap-tooltip.js"></script>		
	<script type="text/javascript" src="/prolab/js/bootstrap-popover.js"></script>	
	

	<link href="/prolab/css/bootstrap.css" rel="stylesheet">
	<link href="/prolab/css/style.css" rel="stylesheet">	
	<link href="/prolab/css/menu.css" rel="stylesheet">

	<!--[if IE 6]>
	<style>
	body {behavior: url("css/csshover3.htc");}
	#menu li .drop {background:url("images/drop.gif") no-repeat right 8px; 
	</style>
	<![endif]-->

    <style type="text/css">
      body {
        padding-top: 60px;
        background: #fff url('/prolab/images/bg.png') top left repeat !important;
       }
    </style>
	<script>
		$(document).ready(function($){
			$('.nav').dcMegaMenu({
				rowItems: '4',
				speed: 'fast',
				effect: 'fade'
			});
			
			$("a[rel=popover]").popover({
			//	offset: 100
			})

		    
			
		});	
		

	</script>

</head>