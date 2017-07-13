$(document).ready(function() {

    function ExportToExcel(mytblId) {
        var htmltable = document.getElementById(mytblId);
        var html = htmltable.outerHTML;
        window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }

    $('#btn_download_services').click(function() {
        ExportToExcel('table_services')
    })
});