//For Dropdown animation
$(document).ready(function(){
    $(".dropdown-toggle").dropdown();
});
$('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});
$('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});


//Slide animation
$('.breadcrumb a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
// On-page links    
if (
  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
  && 
  location.hostname == this.hostname
) {
  // Figure out element to scroll to
  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
  // Does a scroll target exist?
  if (target.length) {
    // Only prevent default if animation is actually gonna happen
    event.preventDefault();
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 900, function() {
      // Callback after animation
      // Must change focus!
      var $target = $(target);
      $target.focus();
      if ($target.is(":focus")) { // Checking if the target was focused
        return false;
      } else {
        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
        $target.focus(); // Set focus again
      };
    });
  }
}
});


//Buat button "go to top"
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#myBtn').fadeIn();
    } else {
        $('#myBtn').fadeOut();
    }
});


// Buat nampilin gambar yang di select di file upload
function preview1(input) {
  if (input.files && input.files[0]) {
    var freader = new FileReader();
    freader.onload = function (e) {
      $("#preview1").show();
      $('#preview1').attr('src', e.target.result);
    }
    freader.readAsDataURL(input.files[0]);
  }
}function preview2(input) {
  if (input.files && input.files[0]) {
    var freader = new FileReader();
    freader.onload = function (e) {
      $("#preview2").show();
      $('#preview2').attr('src', e.target.result);
    }
    freader.readAsDataURL(input.files[0]);
  }
}
function preview3(input) {
  if (input.files && input.files[0]) {
    var freader = new FileReader();
    freader.onload = function (e) {
      $("#preview3").show();
      $('#preview3').attr('src', e.target.result);
    }
    freader.readAsDataURL(input.files[0]);
  }
}
$("#selectedFile1").change(function(){
  preview1(this);
});
$("#selectedFile2").change(function(){
  preview2(this);
});
$("#selectedFile3").change(function(){
  preview3(this);
});


//Buat nampilin nama file pas selected di file upload
function showname1 () {
  var name1 = document.getElementById('selectedFile1'); 
  var infoArea1 = document.getElementById( 'filename-1' );
  infoArea1.textContent = 'Selected file: ' + name1.files.item(0).name;
};
function showname2 () {
  var name2 = document.getElementById('selectedFile2'); 
  var infoArea2 = document.getElementById( 'filename-2' );
  infoArea2.textContent = 'Selected file: ' + name2.files.item(0).name;
};
function showname3 () {
  var name3 = document.getElementById('selectedFile3'); 
  var infoArea3 = document.getElementById( 'filename-3' );
  infoArea3.textContent = 'Selected file: ' + name3.files.item(0).name;
};
function showname4 () {
  var name4 = document.getElementById('selectedFile4'); 
  var infoArea4 = document.getElementById( 'filename-4' );
  infoArea4.textContent = 'Selected file: ' + name4.files.item(0).name;
};

//Biar input cuma bisa number
function isNumberKey(evt){
  var charCode = (evt.which) ? evt.which : evt.keyCode
  return !(charCode > 31 && (charCode < 48 || charCode > 57));
}
function onlynumber(event){
  return  (event.ctrlKey || event.altKey 
    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
    || (95<event.keyCode && event.keyCode<106)
        || (event.keyCode==8) || (event.keyCode==9) 
    || (event.keyCode>34 && event.keyCode<40) 
    || (event.keyCode==46) );
}