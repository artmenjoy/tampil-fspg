<div class="row">
	<div class="col-lg">

		<h2 class="mt-4">Jadwal Tampil</h2>
		<h3 class="mt-2">LOMBA VG SERI B</h3>
		<table class="table table-hover">
			<tr>
				<th>BERSIAP</th>
				<th>PERSIAPAN 1</th>
				<th>PERSIAPAN 2</th>
				<th>VERIFIKASI</th>
				<!-- <th>MEDITASI</th> -->
				<th>SEDANG TAMPIL</th>
			</tr>

			<tr>
				<td><?= $data->bersiap; ?> | <a href="<?= base_url(); ?>main/setting_delete" onclick="return confirm('Hapus?')"><i class="fas fa-times-circle fa-xs" style="color: #ff0000;">undo</i></a></td>
				<td><?= $data->persiapan_1; ?></td>
				<td><?= $data->persiapan_2; ?></td>
				<td><?= $data->verifikasi; ?></td>
				<td><?= $data->tampil; ?></td>

			</tr>

		</table>


		<div class="input-group input-group-lg">

			<form action="<?= base_url(); ?>main/setting_update" method="POST">
				<h2 class="mt-4">INPUT JEMAAT</h2>
				<input name="baru" type="text" autofocus autocomplete="off" class="input">
				<button class="btn" type="submit">NEXT</button>

			</form>
		</div>


	</div>
</div>