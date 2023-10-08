// responsive navbar
$(document).ready(function () {
  if ($(window).width() > 991) {
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
modalBtn.forEach(function (e) {
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
  if (e.target == modal) {
    modal.style.display = "none";
  }
}

const buttons = document.querySelectorAll('#myBtn');
buttons.forEach(button => {
  button.addEventListener('click', () => {
    const dataId = button.getAttribute('data-id');
    document.querySelector('#donorid').value = dataId;

  });
});

const emailCookie = document.cookie.split(';').find(cookie => cookie.trim().startsWith('email='));
if (emailCookie !== undefined) {
  const emailValue = decodeURIComponent(emailCookie.split('=')[1]);
  const toast = document.getElementById('liveToast');
  const toastBody = toast.querySelector('.toast-body');
  toastBody.textContent = emailValue;
  const toastInstance = new bootstrap.Toast(toast);
  toastInstance.show();
  document.cookie = 'email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
}




