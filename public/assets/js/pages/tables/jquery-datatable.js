$(function () {

      // Setup - add a text input to each footer cell
        $('#user_datatable tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );


    //Employee Datatable
    $('.employee-datatable').DataTable({
        dom: 'lBfrtip',
        buttons: [
            'csv', 'excel', 'pdf',
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            }
        ]
    });

    // Client Datatable
    $('.client-datatable').DataTable({
        dom: 'lBfrtip',
        buttons: [
            'csv', 'excel', 'pdf',
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            }
        ]
    });

    $('.client-invoice-datatable').DataTable({
        dom: 'lBfrtip',
        buttons: [
            'csv', 'excel', 'pdf',
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            }
        ]
    });

    // Project Datatable
    $('.project-datatable').DataTable({
        dom: 'lBfrtip',
        buttons: [
            'csv', 'excel', 'pdf',
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            }
        ]
    });
    // Task Datatable
    $('.task-datatable').DataTable({
        dom: 'lBfrtip',
        buttons: [
            'csv', 'excel', 'pdf',
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            }
        ]
    });

    // Leave Database
    $('.leave-datatable').DataTable({
        dom: 'lBfrtip',
        buttons: [
            'csv', 'excel', 'pdf',
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            }
        ]
    });

    // Leave Database
    $('.payslip-datatable').DataTable({
        dom: 'lBfrtip',
        buttons: [
            'csv', 'excel', 'pdf',
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            }
        ]
    });

    // Department Database
    $('.department-datatable').DataTable({
        colReorder: true,
        dom: 'lBfrtip',
        buttons: [
            'csv', 'excel', 'pdf',
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            }
        ]
    });

    // User Database
    var user_table = $('.user-datatable').DataTable({
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
    user_table.columns().every( function () {
        var that = this;
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

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
