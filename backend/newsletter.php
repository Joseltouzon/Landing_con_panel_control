<?php
include_once('inc/class.crud.newsletter.php');

$newsletter = new NEWSLETTER();

// delete 
if ($_POST['action'] == 'delete') {

	$newsletter->delete($link, $_POST['id']);
}

?>
<div class="content-body">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Subscriptos al Newsletter</h4>
						<div class="table-responsive">
							<table class="table">
								<thead style="background-color: #6ed3cf;color: #fff;">
									<tr>
										<td><b>Id</b></td>
										<td><b>Email</b></td>
										<td><b>Nombre</b></td>
										<td><b>Eliminar</b></td>
									</tr>
								</thead>
								<tbody>
									<?

									$sq = $newsletter->read($link);
									while ($resultado = mysqli_fetch_array($sq)) {
									?>
										<tr>
											<td><?= $resultado['id'] ?></td>
											<td><?= $resultado['email'] ?></td>
											<td><?= $resultado['nombre'] ?></td>
											<td>
												<form method="post" class='pull-left'>
													<input type="hidden" name="action" value="delete">
													<input type="hidden" name="id" value="<?= $resultado['id'] ?>">
													<button class="btn btn-danger btn-sm" type="submit" style="margin-right:5px;"><span class="fa fa-remove"></span></button>
												</form>
											</td>
										</tr>
									<?	} ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>