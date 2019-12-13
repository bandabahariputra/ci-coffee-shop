$('#bayar').on('click', function(e) {
	e.preventDefault();
	const href = $('#bayar').attr('href');
	
	Swal.fire({
	  title: 'Bayar sekarang?',
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya',
	  cancelButtonText: 'Nanti'
	}).then((result) => {
	  if (result.value) {	
	    let timerInterval;
			Swal.fire({
			  title: 'Silahkan bayar ke kasir!',
			  html: 'Terima kasih sudah mampir ke tempat kami.',
			  timer: 4000,
			  timerProgressBar: true,
			  onBeforeOpen: () => {
			    Swal.showLoading()
			  },
			  onClose: () => {
			    clearInterval(timerInterval)
			  }
			}).then((result) => {
			  if (
			    /* Read more about handling dismissals below */
			    result.dismiss === Swal.DismissReason.timer
			  ) {
			    // console.log('I was closed by the timer') // eslint-disable-line
			  }
			})

			window.location.href = href;
	  }
	})
})