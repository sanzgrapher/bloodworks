// responsive navbar
$(document).ready(function () {
if ($(window).width() > 991){
$('.navbar-light .d-menu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
    });
    }
});

// searchable content table 
const dataTable = new simpleDatatables.DataTable("#datatable", {
	searchable: true,
	fixedHeight: true,
 
})

// form switch toogle 
function toggleValue() {
     
    var checkbox = document.getElementById("availability");
    var value = checkbox.checked ? "on" : "off";

 }
