(function($) {
    "use strict";
    $(document).ready(function () {
            $('#CareerTable').DataTable({
            processing: true,
            serverSide: true,
                ajax: $('#table-url').data("url"),
            columns: [

                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'CareerImage',
                    name: 'CareerImage'
                },
                {
                    data: 'Status',
                    name: 'Status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ]
        });
    });
})(jQuery)
