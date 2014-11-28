<?php include 'mod/getvideos.php'; ?>
<?php include 'includes/head.php'; ?>

	<title>FGL Sports PRO Lab</title>
	
<?php include 'includes/_head.php'; ?>  

<body>

<?php include 'includes/nav.php'; ?> 


<div class="container main">
	<h1>Featured Video</h1>

	<div class="row">
		<? getvideos("featured","",1); ?>
	</div>
	
	<h2>Latest</h2>
	<ul class="media-grid">
		<? getvideos("latest","",4); ?>			
	</ul>
	
	<h2>Highest Rated</h2>
	<ul class="media-grid">
		<li><a href="#"><img class="thumbnail" src="http://lorempixel.com/180/110/sports/9" alt="">
			<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
			</a></li>
		<li><a href="#"><img class="thumbnail" src="http://lorempixel.com/180/110/sports/10" alt="">
			<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
			</a></li>		
		<li><a href="#"><img class="thumbnail" src="http://lorempixel.com/180/110/sports/1" alt="">
			<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
			</a></li>
		<li><a href="#"><img class="thumbnail" src="http://lorempixel.com/180/110/sports/2" alt="">
			<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
			</a></li>					
	</ul>	

	<h2>Most Viewed</h2>
	<ul class="media-grid">
		<li><a href="#"><img class="thumbnail" src="http://lorempixel.com/180/110/sports/3" alt="">
			<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
			</a></li>
		<li><a href="#"><img class="thumbnail" src="http://lorempixel.com/180/110/sports/4" alt="">
			<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
			</a></li>		
		<li><a href="#"><img class="thumbnail" src="http://lorempixel.com/180/110/sports/5" alt="">
			<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
			</a></li>
		<li><a href="#"><img class="thumbnail" src="http://lorempixel.com/180/110/sports/6" alt="">
			<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
			</a></li>					
	</ul>	
	<br />
	<br />	
</div>

	<!-- sample modal content -->
<div id="my-modal" class="modal hide fade">
  <div class="modal-header">
    <a href="#" class="close">&times;</a>
    <h3>Add Tags</h3>
  </div>
  <div class="modal-body">
	<textarea style="width: 98%; height: 50px;"></textarea>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn primary">OK</a>
    <a href="#" class="btn secondary">Cancel</a>
  </div>
</div>

<?php include 'includes/_html.php'; ?>