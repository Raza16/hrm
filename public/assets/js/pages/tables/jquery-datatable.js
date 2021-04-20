$(function () {


// ------------------------------------------------------------------------------

// Setup - add a text input to each footer cell
$('.admin-datatable tfoot th').each( function () {
    var title = $(this).text();
    $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
} );

// User Database
var admin_datatable = $('.admin-datatable').DataTable({
    dom: 'lBfrtip',
    buttons: [
        {
            extend: 'csv',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'excel',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'pdf',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'colvis',
            // collectionLayout: 'fixed two-column'
        },

    ]
});

 // Apply the search
admin_datatable.columns().every( function () {
    var that = this;
    $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
            that
                .search( this.value )
                .draw();
        }
    } );
});

// -------------------------------------------------------------------------------

    // Task Datatable
    $('.emp-datatable').DataTable();
});
