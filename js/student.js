

var uni_name = {};
var dataYear = ['2017','2016','2015','2014'];
var Student = {};

$(document).ready(function(){
  getUniName();
  setYear();
  setDefault();
})

function setDefault(){
  $('#uniName').val("Choose");
  $('#year').val("select");
}
function getStudentInfo() {
  // body...
  var link = "http://localhost/public_html/Final_project/student_"+year+".php";
  $.ajax({
    url: link ,
    method:"GET",
    success:function (data) {
      for (var i = 0; i < data.length; i++) {
        Student[i] = data[i];
      }
    }
  })//end ajax
}
function getUniName(){
  var link = "http://localhost/public_html/Final_project/university_name.php";
  $.ajax({
    url: link ,
    method:"GET",
    success:function (data) {
      for (var i = 0; i < data.length; i++) {
        uni_name[i] = data[i];
      }
      setUniName();
    }
  })//end ajax
}
function setUniName() {
  // body...
  var select = document.getElementById("uniName");
  var len = Object.keys(uni_name).length
  for(var i=0;i<len;i++) {
      select.options[select.options.length] = new Option(uni_name[i],uni_name[i]);
  }
}
function setYear() {
  // body...
  var select = document.getElementById("year");
  for(var i=0;i<dataYear.length;i++) {
      select.options[select.options.length] = new Option(dataYear[i],dataYear[i]);
  }
}