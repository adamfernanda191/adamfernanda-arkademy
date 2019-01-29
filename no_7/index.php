<?php include 'header.php' ?>
<?php include 'connect_db.php' ?>
<div class="zzz">
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 post_tab">
			<div class="table-responsive">
				<table class="table table-hover table-bordered table-striped">
					<tr >
						<th class="success">Id Person</th>
						<th class="warning">Name</th>
						<th class="warning">hobbies</th>
					</tr>
					<?php 
					$query = "SELECT
									person.id_person,
								    person.name,
								    GROUP_CONCAT(hobbies.hobbies) AS hobbies
								FROM
									person,
								    hobbies
								WHERE 
									person.id_person=hobbies.id_person
								GROUP BY id_person
							  ";
					$exeQuery = mysqli_query($db, $query);
					while($row = mysqli_fetch_array($exeQuery)) {
					?>
					<tr>
						<th><?= $row['id_person'] ?></th>
						<th><?= $row['name'] ?></th>
						<th><?= $row['hobbies'] ?></th>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<?php include 'footer.php' ?>