<div class="row">
	<div class="col-lg">

		<h2 class="mt-4">Jadwal Tampil</h2>
		<h3 class="mt-2">LOMBA VG SERI B</h3>
		<table class="table table-hover">




			<tr>
				<th>Bersiap Panggung 2</th>
				<th>Bersiap Panggung 1</th>
				<th>Sedang Naik Panggung</th>
			</tr>

			<tr>
				<td><?= $data->cs_1; ?> | <a href="<?= base_url(); ?>panggung/setting_delete" onclick="return confirm('Hapus?')"><i class="badge-danger badge">hapus</i></a></td>
				<td><?= $data->cs_2; ?></td>
				<td><?= $data->cs_3; ?></td>

			</tr>


		</table>


		<div class="input-group input-group-lg">

			<form action="<?= base_url(); ?>panggung/setting_update" method="POST">
				<h2 class="mt-4">Input Peserta</h2>
				<input name="baru" type="text" autofocus autocomplete="off" class="input">
				<button class="btn badge-primary" type="submit">Input</button>

			</form>
		</div>


	</div>
</div>