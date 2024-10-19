(function($) {
    "use strict";
    $(document).ready(function () {
            $('#TeamTable').DataTable({
            processing: true,
            serverSide: true,
                ajax: $('#table-url').data("url"),
            columns: [

                {
                    data: 'Name',
                    name: 'Name'
                },
                {
                    data: 'TeamMemberImage',
                    name: 'TeamMemberImage'
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
