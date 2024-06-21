<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Data Barang</title>
		<style>
			body {
			font-family: Arial, sans-serif;
			background-color: #202020;
			}
			h2 {
			text-align: center;
			margin-bottom: 20px;
			color: white;
			}
			table {
			width: 100%;
			border-collapse: collapse;
			margin: 0 auto;
			background-color: #2e2e2e;
			color: white;
			}
			th,
			td {
			border: 1px solid #ddd;
			padding: 12px;
			text-align: left;
			}
			th {
			background-color: #202020;
			}
			tr:nth-child(even) {
			background-color: #4d4d4d;
			}
			tr:hover {
			background-color: #202020;
			}
			input[type="text"] {
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			width: 250px;
			}
			button {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-left: 10px;
			}
			button:hover {
			background-color: #45a049;
			}
			.button-container {
			text-align: center;
			margin-bottom: 20px;
			}
		</style>
	</head>
	<body>
		<h2>Data Barang</h2>
		<div class="button-container">
			<form action="<?php echo site_url('barang/search_barang'); ?>"
			method="post">
				<button onclick="window.location.href='<?php echo base_url('barang'); ?>'" type="button" style="
					background-color: #ed4c4c; margin-right: 10px;">
				Kembali</button>
				<input type="text" name="keyword" placeholder="Cari Nama Barang">
				<button type="submit">Cari</button>
				<button onclick="window.location.href='<?php echo base_url('barang/data_barang'); ?>'" type="button">
				Reset</button>
			</form>
		</div>
		<table>
			<tr>
				<th>ID</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Kategori Barang</th>
				<th>Deskripsi Barang</th>
				<th>Harga Beli</th>
				<th>Harga Jual</th>
				<th>Stok Barang</th>
				<th>Supplier Barang</th>
				<th>Tanggal Masuk</th>
			</tr>
			<?php if ($barang) { ?>
				<?php foreach ($barang as $brg) { ?>
				<tr>
					<td><?php echo $brg['ID Barang']; ?></td>
					<td><?php echo $brg['Kode Barang']; ?></td>
					<td><?php echo $brg['Nama Barang']; ?></td>
					<td><?php echo $brg['Kategori Barang']; ?></td>
					<td><?php echo $brg['Deskripsi Barang']; ?></td>
					<td><?php echo $brg['Harga Beli']; ?></td>
					<td><?php echo $brg['Harga Jual']; ?></td>
					<td><?php echo $brg['Stok Barang']; ?></td>
					<td><?php echo $brg['Supplier Barang']; ?></td>
					<td><?php echo $brg['Tanggal Masuk']; ?></td>
				</tr>
				<?php } ?>
			<?php } else { ?>
				<h2>Data tidak ditemukan</h2>
			<?php } ?>
		</table>
	</body>
</html>