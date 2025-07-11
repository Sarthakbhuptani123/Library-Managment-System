<?php
$pageName = 'issuebook';

include('../include/db_conn.php');
include('../student panel/header.php');
 
?>

<!-- MAIN -->
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>issue Book</h1>
				</div>
				
				<p> NOTE: 5 Rupees for one day of late Return and if the return is not done within the last 5 days, The Charge will be as per the Price of the book.</p>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>issue Book</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th><h3>#<h3></th>
								<th><h3>book Name<h3></th>
								<th><h3>issue date<h3></th>
								<th><h3>return date <h3></th>
								<th><h3> fine <h3></th>
							</tr>
						</thead>
						<tbody> 
						<?php
							$query_retrivefac="SELECT *from `issue_request` 
							LEFT JOIN `student` ON `student`.`sId` = `issue_request`.`sId`
							LEFT JOIN `books` ON `books`.`bId` = `issue_request`.`bId`  
                            where `issue_request`.`sId`='$sId' AND `status` = '1'";
							$cmd=mysqli_query($connection,$query_retrivefac);
                            $i=1;
							While($row=mysqli_fetch_array($cmd))
							{
								$id=$i;
								$bookid=$row['title'];
								$issue=date_format(date_create($row['created']) ,"d-m-Y");
								$return=date_format(date_create($row['returndate']) ,"d-m-Y");
								// $NewDate = date_create($row['returndate']);
                                // $diff = date_diff(date_create($return),date_create(date("d-m-Y")));
								$date1=date_create(date('Y-m-d'));
								$date2=date_create($row['returndate']);
								$diff=date_diff($date1,$date2);
								$dif =  $diff->format("%R%a");

								if($dif <1){

									if(abs($dif) > 5){
										$fine = $row['price'];
									}else{
                                    
										$fine =abs($dif) * 5;
									}
								}else{
									$fine =abs($dif).'Days Remaining'; 
								}
                                $i++;
							?>
							<tr>
								<td><p><?php echo $id;?></p></td>
								<td><p><?php echo $bookid;?></p></td>
								<td><p><?php echo $issue;?></p></td>
								<td><p><?php echo $return;?></p></td>
								<td><p><?php echo $fine?></p></td>

								 
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
        <?php
	         include('../student panel/footer.php');?>