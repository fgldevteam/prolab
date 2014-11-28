<?php 
include 'mod/database.php';

if($_REQUEST['id']){
	$id = $_REQUEST['id'];
} else {
	$id = 14;
}
	$result = mysql_query("select * from assets where id=".$id." AND filetype=1"); 
		while($row = mysql_fetch_array($result)){
			$title = $row['title'];
			$desc = $row['description'];		
			$file = $row['file'];
		}
?>

<?php include 'includes/head.php'; ?>

	<title>FGL Sports PRO Lab :: <?=$title?></title>
		
<?php include 'includes/_head.php'; ?>  

<body>

<?php include 'includes/nav.php'; ?>


<div class="container main">
	
	<div class="row">
		<div class="span10">
			
			<h2><?=$title?></h2>
				    
				<video class="sublime" width="640" height="360" poster="assets/video/<?=$file?>.jpg" preload="none">
				  <source src="assets/video/<?=$file?>" />
				</video>
			
			<div id="videotools" class="clear">
				<a class="btn" href="#"><i class="icon-thumbs-up"></i> Like</a>
				<a class="btn" href="#"><i class="icon-thumbs-down"></i> Dislike</a>
			</div>	

			<!-- sample modal content -->
          <div id="my-modal" class="modal hide fade">
            <div class="modal-header">
              <a href="#" class="close">&times;</a>
              <h3>Add Tags</h3>
            </div>
            <div class="modal-body">
              <p>This is where then form will go to add the tags</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn primary">OK</a>
              <a href="#" class="btn secondary">Cancel</a>
            </div>
          </div>
			
			<h3><?=$title?></h3>
			<p><?=$desc?></p>
			<span class="label"><i class="icon-tag"></i> Outerwear</span> 
			<span class="label"><i class="icon-tag"></i> Running</span> 
			<span class="label"><i class="icon-tag"></i> The North Face</span>
			
		</div>
		
		<div class="span4 offset2">
			<h2>Suggestions</h2>
			<ul class="media-grid">
				<li><a href="#"><img class="thumbnail" src="assets/video/<?=$file?>.jpg" height="110" width="180" alt="">
					<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
					</a></li>
				<li><a href="#"><img class="thumbnail" src="assets/video/<?=$file?>.jpg" height="110" width="180" alt="">
					<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
					</a></li>		
				<li><a href="#"><img class="thumbnail" src="assets/video/<?=$file?>.jpg" height="110" width="180" alt="">
					<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
					</a></li>
				<li><a href="#"><img class="thumbnail" src="assets/video/<?=$file?>.jpg" height="110" width="180" alt="">
					<p><strong>Video Title</strong><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
					</a></li>	
			</ul>
		</div>
		 
		
	</div>
</div>

<?php include 'includes/_html.php'; ?>

