setInterval("nextPic()", 8000);

// Set picture number counter variable
var picnumber = 1;

// Changes the picture on the main page
function nextPic() {
  // Increment pic counter or reset to 1
  if (picnumber < 5) {
    picnumber += 1;
  } else {
    picnumber = 1;
  }

  // Save img location and change HTML
  var newPic = "assets/home"+picnumber+".jpg";
  document.getElementById("pizza").src = newPic;
}
