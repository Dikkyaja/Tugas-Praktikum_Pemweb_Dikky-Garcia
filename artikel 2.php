<?php
include 'header.php';
?>

<h1>Welcome To Website Me</h1>
<p>Ini adalah Artikel 2 saya</p>
<div class="container-fluid">
	<div class="row">
        <hr>
		<div class="col-md-12">
			<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
			
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
							Produk
						</th>
						<th>
							Harga
						</th>
						<th>
							Persentase Penjualan
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							Rantai
						</td>
						<td>
							Rp.45.000,00
						</td>
						<td>
							75%
						</td>
					</tr>
					<tr class="table-active">
						<td>
							2
						</td>
						<td>
							Rem
						</td>
						<td>
							<span>Rp55.000,00</span>
						</td>
						<td>
							25%
						</td>
					</tr>
					<tr class="table-success">
						<td>
							3
						</td>
						<td>
							Lampu
						</td>
						<td>
							<span>Rp.25.000,00</span>
						</td>
						<td>
							10%
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							4
						</td>
						<td>
							Ban Luar Dan Belakang
						</td>
						<td>
							<span>Rp.125.000,00</span>
						</td>
						<td>
							35%
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							5
						</td>
						<td>
							Kampas Ganda
						</td>
						<td>
							<span>Rp.35.000,00</span>
						</td>
						<td>
							55%
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