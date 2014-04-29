<div class="row">
	<table class="table table-hover col-xs-12 col-sm-6">
		<tr>
			<th id="id">id</th>
			<th id="name">name</th>
			<th id="price">price</th>
			<th id="sku">SKU</th>
			<th id="tools">tools</th>
		</tr>
		<?php
			try{
                $stmt = $base->prepare('SELECT * FROM products');
                //$stmt = $base->prepare('SELECT title FROM products WHERE id = :id'); 
                //$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT); 
                //$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
                $stmt->execute();
                $posts = $stmt->fetchAll();
                if(count($posts)){
                    foreach ($posts as $post){
                    	echo '
							<tr>
								<td>'.$post['id'].'</td>
								<td>'.$post['title'].'</td>
								<td>'.$post['price'].'</td>
								<td>'.$post['sku'].'</td>
								<td>
									<ul>
										<li><a href="?action=edit&id='.$post['id'].'" class="glyphicon glyphicon-pencil"></a></li>
										<li><a href="?action=delete&id='.$post['id'].'" class="glyphicon glyphicon-remove"></a></li>
									</ul>
								</td>
							</tr>
                    	';
                    }
                }

            } catch(PDOEException $e){
                echo 'ERROR: '.$e->getMessage();
            }
		?>
	</table>
</div>