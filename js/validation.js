function validatePhone(fld) {    
  var filter = /^([7-9][0-9]{9})+$/;
  if (fld.value == "") {
    return false;
  } 
  else if (!(filter.test(fld))) {
    return false ;
  } 
  else if (!(fld.length == 10)) {
    return false;
  }
  else {
    return true ;
  }
}
function validateEmail(fld) {
  var tfld = trim(fld);                        // value of field with whitespace trimmed off
  var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
  if (!emailFilter.test(tfld)) {              //test email for illegal characters
    return false;
  } 
  else {
    return true;
  }
}
function send_resume(){
  $("#sendResume").attr('disabled','disabled');
  var name = $("#name").val();
  var email = $("#email").val();
  var mobile = $("#mobile2").val();
  var resume = document.getElementById('resume');
  if(resume.files.length === 0){
    alert("Please upload your resume");
    $("#sendResume").removeAttr('disabled');
  }
  else if (resume.files['0'].size > 2015000) {
    alert("File size is too large");
    $("#sendResume").removeAttr('disabled');
  }
  else if (!validateFirstname(name)){
    alert("Please enter valid name");
    $("#sendResume").removeAttr('disabled');
  }
  else if (!validateEmail(email)){
    alert("Please enter valid email");
    $("#sendResume").removeAttr('disabled');
  }
  else if (!validatePhone(mobile)){
    alert("Please enter valid mobile number");
    $("#sendResume").removeAttr('disabled');
  }
  else {
    var data = new FormData();
    data.append('file', resume.files[0]);
    var request = new XMLHttpRequest();
    var responceTx = "";
    request.onreadystatechange = function(){
      if(request.readyState == 4){
        responceTx = request.response;
        alert(responceTx);
      }
    };
    request.open('POST', 'upload_file.php?name='+name+'&email='+email+'&mobile='+mobile);
    request.send(data);
    $("#sendResume").removeAttr('disabled');
    location.reload();
  }
}
function nospaces(t){
  if(t.value.match(/\s/g)){
    alert('Sorry, you are not allowed to enter any spaces');
    t.value=t.value.replace(/\s/g,'');
  }
}
function trim(s){
  return s.replace(/^\s+|\s+$/, '');
}
function validateFirstname(fld) {
  var illegalChars = /\W/; // allow letters, numbers, and underscores
  if (fld.value == "") {
    return false ;
  }  
  else if (fld.length < 3) {
    return false ;
  }  
  else if (illegalChars.test(fld.value)) {
    return false ;
  } 
  else {
    return true ;
  }
}