<script src="{{ asset('backend/assets/vendor/sweetalert2.min.js') }}"></script>
<script>
    $('.confirm_delete').on('click', function (e) {
    e.preventDefault();
    var link = $(this).attr("href");
    const swalWithBootstrapButtons = swal.mixin({
      confirmButtonClass: 'btn btn-success btn-rounded',
      cancelButtonClass: 'btn btn-danger btn-rounded mr-3',
      buttonsStyling: false,
    })

    swalWithBootstrapButtons({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true,
      padding: '2em'
    }).then(function(result) {
      if (result.value) {
      window.location.href = link;
        swalWithBootstrapButtons(
          'Deleted!',
          'Data has been permanently deleted.',
          'success'
        )
      } else if (
        // Read more about handling dismissals
        result.dismiss === swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons(
          'Cancelled',
          'Data has been safe :)',
          'error'
        )
      }
    })
  });
</script>