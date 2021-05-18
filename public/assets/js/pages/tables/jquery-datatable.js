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

    // -------------------------------------------------------------------------------

        // Task Datatable
        $('.emp-datatable').DataTable();
    });
