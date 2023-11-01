</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function() {

		// $('#tampilkan').load('main/viewdata');

		// console.log('hello')

		setInterval(function() {
			$('#informasi').load('main/viewdata')
		}, 3000);

		setInterval(function() {
			$('#panggung').load('panggung/viewdata')
		}, 3000);
	});


	// time script
	function startTime() {
		const today = new Date();
		let h = today.getHours();
		let m = today.getMinutes();
		let s = today.getSeconds();
		m = checkTime(m);
		s = checkTime(s);
		document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
		setTimeout(startTime, 1000);
	}

	function checkTime(i) {
		if (i < 10) {
			i = "0" + i
		}; // add zero in front of numbers < 10
		return i;
	}
</script>

</body>

</html>