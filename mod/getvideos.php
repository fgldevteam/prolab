<?
include 'app/connection.php';
include 'app/utils.php';

function getvideos( $t, $param, $limit=4 ){
	
	MySQLConnction("open");
	
	switch($t){
		case "featured":
			$q = "SELECT * FROM assets WHERE filetype=1 AND featured=1";
			$result = mysql_query($q);
			while($row = mysql_fetch_array($result)){
			?>
			<div class="span6">
				<ul class="media-grid">
				<li>
					<a href="watch.php?id=<?=$row['id']?>" rel="tooltip" title="<?=$row['title']?>">
						<img class="thumbnail" src="assets/video/<?=$row['file']?>.jpg" alt="<?=$row['title']?>" width="320" height="230">
					</a>
				</li>
				</ul>
			</div>
			<div class="span9">
				<h3><?=neat_trim($row['title'], 100)?></h3>
				<p><?=neat_trim($row['description'], 500)?></p>

				<span class="label"><i class="icon-tag"></i> Outerwear</span> 
				<span class="label"><i class="icon-tag"></i> Running</span> 
				<span class="label"><i class="icon-tag"></i> The North Face</span>
	
			</div>	
			<?
			}						
			break;	
			
				
		case "viewed":
			$q = "SELECT * FROM assets WHERE filetype=1 AND";
			break;
			
		case "rated":
			$q = "SELECT * FROM assets WHERE filetype=1 AND";
			break;
		
		case "suggested":
			$q = "SELECT * FROM assets WHERE filetype=1 AND";
			break;			
			
		case "latest";
			$q = "SELECT * FROM assets WHERE filetype=1 ORDER BY date_created DESC LIMIT 0,".$limit;
			$result = mysql_query($q);
			while($row = mysql_fetch_array($result)){
			?>
				<li>
					<a href="watch.php?id=<?=$row['id']?>" rel="popover" data-original-title="<?=$row['title']?>" data-content="<?=neat_trim($row['description'], 200)?> <br /><br /><span class='label inverse'><i class='icon-tag'></i> Outerwear</span> <span class='label inverse'><i class='icon-tag'></i> Running</span> <span class='label inverse'><i class='icon-tag'></i> The North Face</span>">
					<img class="thumbnail" src="assets/video/<?=$row['file']?>.jpg" height="110" width="180" alt="">
					<p><strong><?=neat_trim($row['title'], 40)?></strong></p>
					</a>
				</li>	
			<?
			}
			break;
			
			
		case"related";
			$q = "SELECT * FROM assets WHERE filetype=1";
	}
	
	//execute the query
	
	MySQLConnction("close");
	
//	return $result;
}


?>