
$(document).ready(function(){$(".dataex-basic-initialisation").DataTable({scrollY:300,scrollX:!0,scrollCollapse:!0,paging:!1,fixedColumns:!0});var tableTndex=($(".dataex-lr-fixedcolumns").DataTable({scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!1,fixedColumns:{leftColumns:1,rightColumns:1}}),$(".dataex-multiple-fixed").DataTable({scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!1,fixedColumns:{leftColumns:2}}),$(".dataex-right-column").DataTable({scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!1,fixedColumns:{leftColumns:0,rightColumns:1}}),$(".dataex-column-visibility").DataTable({dom:"Bfrtip",scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!1,buttons:["colvis"],fixedColumns:{leftColumns:2}}),$(".dataex-css-row").DataTable({scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!1,fixedColumns:{heightMatch:"none"}}),$(".dataex-column-width").removeAttr("width").DataTable({scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!1,columnDefs:[{width:200,targets:0}],fixedColumns:!0}),$(".dataex-index-column").DataTable({scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!1,columnDefs:[{sortable:!1,"class":"index",targets:0}],order:[[1,"asc"]],fixedColumns:!0}));tableTndex.on("order.dt search.dt",function(){tableTndex.column(0,{search:"applied",order:"applied"}).nodes().each(function(cell,i){cell.innerHTML=i+1})}).draw(),$(".dataex-Select-row").DataTable({scrollY:300,scrollX:!0,scrollCollapse:!0,paging:!1,fixedColumns:!0,select:!0}),$(".dataex-checkboxes").DataTable({scrollY:300,scrollX:!0,scrollCollapse:!0,paging:!1,fixedColumns:!0,columnDefs:[{orderable:!1,className:"select-checkbox",targets:0}],select:{style:"os",selector:"td:first-child"},order:[[1,"asc"]]});$(".dataex-complex-headers").DataTable({scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!1,fixedColumns:!0});$(".dataex-individual-filtering tfoot th").each(function(i){var title=$(".dataex-individual-filtering thead th").eq($(this).index()).text();$(this).html('<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />')});var tableIndividualFiltering=$(".dataex-individual-filtering").DataTable({scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!1,fixedColumns:!0});$(tableIndividualFiltering.table().container()).on("keyup","tfoot input",function(){tableIndividualFiltering.column($(this).data("index")).search(this.value).draw()}),$(".DTFC_RightBodyLiner").css("overflow-y","hidden")});