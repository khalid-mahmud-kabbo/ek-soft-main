(function($) {
    "use strict";
    $(document).ready(function () {
            $('#ServiceTable').DataTable({
            processing: true,
            serverSide: true,
                ajax: $('#table-url').data("url"),
            columns: [

                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'ServiceImage',
                    name: 'ServiceImage'
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
