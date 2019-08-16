function validateForm() {
  var email = document.getElementById('email').value;
  var name = document.getElementById('name').value;
  var city = document.getElementById('city').value;
  
  if (email == "" || name == "" || city == "" || email.indexOf("@") == -1 ) {
    alert("Yep, that's an error");
    return false;
  }
  return true;
}