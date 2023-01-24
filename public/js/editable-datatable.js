(function($) {
'use strict';
	$(document).ready(function()
    {
        var dTable = $('#myAdvancedTablexx').DataTable({

            order: [],
    columns: [
            {
                target: 0,
                visible: false,
                searchable: false,
            },
             {
                target: 1,
            },
             {
                target: 2,
            },
              {
                target: 3,
            }
],
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            responsive: true,
            scroller: {
                loadingIndicator: false
            },
            pagingType: "full_numbers",
            dom: "<'row'<'col-sm-2'l><'col-sm-7 text-center'B><'col-sm-3'f>>tipr",
            buttons: [
                {
                    extend: 'copy',
                    className: 'btn-sm btn-info', 
                    title: 'Permissions',
                    header: false,
                    footer: true,
                    exportOptions: {
                        // columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    className: 'btn-sm btn-success',
                    title: 'Permissions',
                    header: false,
                    footer: true,
                    exportOptions: {
                        // columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn-sm btn-warning',
                    title: 'Permissions',
                    header: false,
                    footer: true,
                    exportOptions: {
                        // columns: ':visible',
                    }
                },
                {
                    extend: 'pdf',
                    className: 'btn-sm btn-primary',
                    title: 'Permissions',
                    pageSize: 'A2',
                    header: false,
                    footer: true,
                    exportOptions: {
                        // columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn-sm btn-default',
                    title: 'Permissions',
                    // orientation:'landscape',
                    pageSize: 'A2',
                    header: true,
                    footer: false,
                    orientation: 'landscape',
                    exportOptions: {
                        // columns: ':visible',
                        stripHtml: false
                    }
                }
            ],
        
        });


        // datatable inline cell edit
        dTable.MakeCellsEditable({
            "onUpdate": myCallbackFunction,
            "inputCss":'form-control isjdjksjk',
            "columns": [3,4],
            "allowNulls": {
                "columns": [3,4],
                "errorClass": 'error'
            },
            "confirmationButton": { // could also be true
                "confirmCss": 'btn-sm btn-success',
                "cancelCss": 'btn-sm btn-danger'
            },
            "inputTypes": [
                {
                    "column": 1,
                    "type": "text",
                    "options": null
                },
                {
                    "column":2, 
                    "type": "list",
                    "options":[
                        { "value": "1", "display": "English" },
                        { "value": "2", "display": "Arabic" },
                    ]
                },
                {
                    "column": 3,
                    "type": "textarea", 
                    "options": null
                }
                
                 // Nothing specified for column 3 so it will default to text
                
            ]
        });

    });
    // datatable inline cell edit callback function
    function myCallbackFunction (updatedCell, updatedRow, oldValue) {

         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        var formData = {
            id: updatedRow.data(),
        };
        var type = "POST";
        var ajaxurl = '/admin/savegenral/';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {

location.reload()
    
            },
            error: function (data) {
                console.log(data);
            }
        });
  

        console.log("The new value for the cell is: " +updatedCell.data() );
        console.log("The old value for that cell was: " + oldValue);
        console.log("The values for each cell in that row are: " +updatedRow.index() );

    }

    function destroyTable() {
        if ($.fn.DataTable.isDataTable('#myAdvancedTablexx')) {
            table.destroy();
            table.MakeCellsEditable("destroy");
        }
    }
})(jQuery);