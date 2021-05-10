$(function () {

    var admin_datatable = $('.admin-datatable').DataTable({
        dom: 'lBfrtip',
        // 'scrollX': true,
        "autoWidth": true,
        searchHighlight: true,
        // columnDefs: [
        //     { width: 200, targets: 0 }
        // ],
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

        ],

    });

    // admin_datatable.on( 'draw', function () {
    //     var body = $( admin_datatable.table().body() );

    //     body.unhighlight();
    //     body.highlight( admin_datatable.search() );
    // });

    // Setup - add a text input to each footer cell
    // $('.admin-datatable tfoot th').each( function () {
    //     var title = $(this).text();
    //     if(title != 'Options'){
    //         $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    //     }
    // } );

     // Apply the search
    // admin_datatable.columns().every( function () {
    //     var that = this;
    //     $( 'input', this.footer() ).on( 'keyup change', function () {
    //         if ( that.search() !== this.value ) {
    //             that
    //                 .search( this.value )
    //                 .draw();
    //         }
    //     } );
    // });

    // -------------------------------------------------------------------------------

        // Task Datatable
        $('.emp-datatable').DataTable();
    });
