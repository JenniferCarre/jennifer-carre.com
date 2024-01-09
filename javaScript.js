// --------------------------------------------------------------------
// Additionnal programm for the bootstrap navbar in responsive :
// --------------------------------------------------------------------

// Get the element
let myMenu = document.getElementById("navbarNav");

// Close the menu when the user clicks on a link
myMenu.addEventListener('click', () => {
  myMenu.classList.remove("show");
});


// ------------------------------------------------------
// Back to top button :
// ------------------------------------------------------

// Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// ------------------------------------------------------
// Verify the contact form :
// ------------------------------------------------------

// regExp to verify the contact form
let regName = new RegExp('^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ \'-]{5,50}$');
let regPhone = new RegExp('^[0-9]{10,20}$');
let regEmail = new RegExp('^[a-z0-9._-]+@{1}[a-z0-9._-]{2,}[.]{1}[a-z]{2,}$');
let regMessage = new RegExp('^(.){4,750}$');

// Get the contact form
let myForm = document.getElementById('myForm');

  // Add the submit event
  myForm.addEventListener('submit', function(e) {
    // Get the elements from the contact form
    let vname = document.getElementById('name').value;
    let vphone = document.getElementById('phone').value;
    let vemail = document.getElementById('email').value;
    let vmessage = document.getElementById('message').value;
    
    // Verify the field name
    if (vname.match(regName)) {
      document.getElementById('error_name').innerHTML = "";
      document.getElementById('name').style.border = '2px solid #31CBB1';
    } else {
      document.getElementById('error_name').innerHTML = "Votre nom doit comporter minimum 5 lettres, pas de chiffre.";
      document.getElementById('name').style.border = '2px solid #ED5E64';
      e.preventDefault();
    }

    // Verify the field phone
    if(vphone.match(regPhone)) {
      document.getElementById('phone').style.border = '2px solid #31CBB1';
      document.getElementById('error_phone').innerHTML = "";
    } else {
      document.getElementById('phone').style.border = '2px solid #ED5E64';
      document.getElementById('error_phone').innerHTML = "Votre téléphone doit comporter minimum 10 chiffres, sans lettre.";
      e.preventDefault();
    }

    // Verify the field email
    if(vemail.match(regEmail)) {
      document.getElementById('email').style.border = '2px solid #31CBB1';
      document.getElementById('error_email').innerHTML = "";
    } else {
      document.getElementById('email').style.border = '2px solid #ED5E64';
      document.getElementById('error_email').innerHTML = "E-mail invalide.";
      e.preventDefault();
    }

    // Verify the field message
    if(vmessage.match(regMessage)) {
      document.getElementById('message').style.border = '2px solid #31CBB1';
      document.getElementById('error_message').innerHTML = "";
    } else {
      document.getElementById('message').style.border = '2px solid #ED5E64';
      document.getElementById('error_message').innerHTML = "Votre message doit comporter minimum 4 caractères.";
      e.preventDefault();
    }


  });
