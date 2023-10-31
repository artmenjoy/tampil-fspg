<div class="row">
	<div class="col-lg">

		<h2 class="mt-4">Jadwal Tampil</h2>
		<h3 class="mt-2">LOMBA VG SERI B</h3>
		<table class="table table-hover">
			<tr>
				<th>Coming Soon 1</th>
				<th>Coming Soon 2</th>
				<th>Coming Soon 3</th>
				<th>PERSIAPAN 1</th>
				<th>PERSIAPAN 2</th>
				<th>VERIFIKASI</th>
				<th>MEDITASI</th>
				<th>SEDANG TAMPIL</th>
			</tr>

			<tr>
				<td><?= $data->cs_1; ?> | <a href="<?= base_url(); ?>main/setting_delete" onclick="return confirm('Hapus?')"><i class="badge-danger badge">hapus</i></a></td>
				<td><?= $data->cs_2; ?></td>
				<td><?= $data->cs_3; ?></td>
				<td><?= $data->persiapan_1; ?></td>
				<td><?= $data->persiapan_2; ?></td>
				<td><?= $data->verifikasi; ?></td>
				<td><?= $data->meditasi; ?></td>
				<td><?= $data->tampil; ?></td>

			</tr>

		</table>


		<div class="input-group input-group-lg">

			<form action="<?= base_url(); ?>main/setting_update" method="POST">
				<h2 class="mt-4">Input Peserta</h2>
				<input name="baru" type="text" autofocus autocomplete="off" class="input">
				<button class="btn badge-primary" type="submit">Input</button>

			</form>
		</div>


	</div>
</div>