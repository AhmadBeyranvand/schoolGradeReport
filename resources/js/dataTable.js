import DataTable from 'datatables.net-dt';
import languageFA from 'datatables.net-plugins/i18n/fa.mjs';
 
let table = new DataTable('#dtTable', {
    pageLength:50,
    autoWidth:true,
    language:languageFA,
    responsive: true
});