"use strict";
$(document).ready(function() {
    // Data table
    $('.datatable-table').DataTable();

    /* -- Form - Input Mask -- */
    $('#inputmask-cari').inputmask('Regex', {regex: "^[0-9]{1,12}"});
});