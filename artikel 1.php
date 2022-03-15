<?php
include 'header.php';
?>

<h1>Welcome To Website Me</h1>
<p>Ini adalah Artikel 1 saya</p>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
                    <h3>
				Form Penjualan
			</h3>
						<th>
							No
						</th>
						<th>
							Product
						</th>
						<th>
							Harga
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							Baju Bulutangkis
						</td>
						<td>
							Rp.35.000,00
						</td>
						<td>
							Terjual
						</td>
					</tr>
					<tr class="table-active">
						<td>
							2
						</td>
						<td>
							Kemeja Pria
						</td>
						<td>
							Rp.55.000,00
						</td>
						<td>
							Belum Terjual
						</td>
					</tr>
					<tr class="table-success">
						<td>
							3
						</td>
						<td>
							Celana Pria
						</td>
						<td>
							Rp.45.000,00
						</td>
						<td>
							Terjual
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							4
						</td>
						<td>
							Kemeja Wanita
						</td>
						<td>
							Rp.65.000,00
						</td>
						<td>
							Belum Terjual
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							5
						</td>
						<td>
							Celana Wanita
						</td>
						<td>
							Rp.75.000,00
						</td>
						<td>
							Terjual
						</td>
					</tr>
				</tbody>
			</table>
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputFile">
						File input
					</label>
					<input type="file" class="form-control-file" id="exampleInputFile" />
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox" /> Check me out
					</label>
				</div> 
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
        <?php
include 'footer.php';
?>