<?php 
$pageName = 'Books';

include('../include/db_conn.php');
include('../student panel/header.php');


?>



		<!-- MAIN -->		<main>
			<div class="head-title">
				<div class="left">
					<h1>Books</h1>
					
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All  Books</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table id="bookTable">
						<thead>
							<tr>
								<th><h3>Id<h3></th>
								<th><h3>Title<h3></th>
								<th><h3>author<h3></th>
								<th><h3>Price<h3></th>
								<th><h3>stock<h3></th>

								<th><h3>Issue Book<h3></th>
							</tr>
						</thead>
						<tbody> 
						<?php
							$query_retrivefac="SELECT *from books";
							$cmd=mysqli_query($connection,$query_retrivefac);
							While($row=mysqli_fetch_array($cmd))
							{
								$bId=$row['bId']; 
								$title=$row['title']; 
								$author=$row['author'];
								$price=$row['price'];
								$stock=$row['stock'];

							?>
							<tr>
								<td><p><?php echo $bId;?></p></td>
		 						<td><p><?php echo $title;?></p></td>
								<td><?php echo $author;?></td>
								<td><?php echo $price;?></td>
								<td><?php echo $stock;?></td>
								<?php if($stock>0){?>
								<td><a class="logg"  href="../student panel/issue.php?bId=<?php echo $bId;?>&sId=<?php echo $student['sId']?>">
										<i class='bx bxs-log-out-circle' ></i>
										<span class="text">Request</span>
										</a></td>
										<?php }else{ ?>
											<td>										
											<span class="text"> out of stock</span>
										</td>
										<?php } ?>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<?php 
		include('../student panel/footer.php');
	?>
	<script>

			$(document).ready(function () {
				$('#bookTable').DataTable({
					processing: true,
				});
			});

		<?php if(isset($_GET['message'])){ ?>

		Swal.fire(
			'Opps!',
			'<?php echo $_GET['message']; ?>',
			'success'
		);

		<?php 	} ?>
	</script>
