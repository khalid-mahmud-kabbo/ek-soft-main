(function($) {
    "use strict";
    $(document).ready(function () {
            $('#CaseTable').DataTable({
            processing: true,
            serverSide: true,
                ajax: $('#table-url').data("url"),
            columns: [

                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'CaseImage',
                    name: 'CaseImage'
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
