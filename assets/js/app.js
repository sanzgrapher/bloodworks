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


//Modal Popup for Donorlist
// Get the modal
const modal = document.getElementById("myModal");
// All page modals
var modals = document.querySelectorAll('.modal');

const modalBtn = document.querySelectorAll('.modal-btn');
// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];
// Listen 	for OPEN Click
modalBtn.forEach(function(e) {
  e.addEventListener('click', openModal);
  })
  // Listen for CLOSE Click
  span.addEventListener('click', closeModal);
  // Listen for OUTSIDE Click
  window.addEventListener('click', outsideClick);
  
  // Function to OPEN modal
  function openModal() {
    modal.style.display = "block";
  }
  
  // Function to CLOSE modal
  function closeModal() {
    modal.style.display = "none";
  }
  // Function to CLOSE modal
  function outsideClick(e) {
    if(e.target == modal) {
      modal.style.display = "none";
    }
  }

//Fetch data of the donir row to modal popup
$(document).ready(function(){
  $('.edit-btn').on('click', function(){

      $tr = $(this).closest('tr');

      var data =$tr.children("td").map(function() {
          return $(this).text();
      }).get();

      console.log(data);

      $('#fullname').val(data[0]); 
      $('#bloodgroup').val(data[1]);
      $('#address').val(data[2]);
      $('#contact').val(data[3]);
  });
});