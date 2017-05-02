function validateForm() {
    var x = document.forms["loginform"]["userid"].value;
    var z = document.forms["loginform"]["password"].value;
    if (x == "" && z == "") {
        alert("Enter your data please");
        return false;
    } else if (x == "") {
      alert("Type your ID please");
      return false;
    } else if (z == "") {
      alert('Type your password please');
      return false;
    }else {
      return true;
    }
}
