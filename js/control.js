
	var myid;
	$(".delete").click(function(){
		 myid = $(this).attr("id_data");
		const swalWithBootstrapButtons = Swal.mixin({
		  customClass: {
		    confirmButton: 'btn btn-success',
		    cancelButton: 'btn btn-danger'
		  },
		  buttonsStyling: false
		})

		swalWithBootstrapButtons.fire({
		  title: 'Etes-vous sur?',
		  text: "Voulez vous vraiment supprimer ce profil?",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonText: 'Oui, supprimer!',
		  cancelButtonText: 'Non, annuler!',
		  reverseButtons: true
		}).then((result) => {
		  if (result.isConfirmed) {
		  	window.location = "delete.php?id="+myid;
		  } else if (
		    /* Read more about handling dismissals below */
		    result.dismiss === Swal.DismissReason.cancel
		  ) {
		    swalWithBootstrapButtons.fire(
		      'Annulation',
		      "Le profil n'a pas été supprimé",
		      'error'
		    )
		  }
		})
	});
