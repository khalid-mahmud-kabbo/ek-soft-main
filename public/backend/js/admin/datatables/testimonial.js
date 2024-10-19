(function($) {
    "use strict";
    $(document).ready(function () {
        $('#TestimonialTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'client_name',
                    name: 'client_name'
                },
                {
                    data: 'ClientImage',
                    name: 'ClientImage'
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
