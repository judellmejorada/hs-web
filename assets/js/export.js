$(document).ready(function() {
  $('#products-datatable').DataTable( {
      dom: 'Bfrtip',
      "searching": true,
      "paging": true,
      "order": [[0, "asc"]],
      "ordering": true,
      "columnDefs": [{
        "targets": [3],
        "orderable": false
      }],
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  } );
} );