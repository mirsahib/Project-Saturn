$(document).ready(function(){
	feather.replace();
  $.ajax({
    url: "http://localhost/public_html/Final_project/student_2017.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var name = [];
      var student = [];
      var female_student = [];
      var undergrad = [];
      var grad = [];
      var foreign_student = [];
      var foreign_female = [];
      var scholarship = []

      for(var i in data) {
        name.push(data[i].Uni_name);
        student.push(data[i].student);
        female_student.push(data[i].female);
        undergrad.push(data[i].undergrad);
        grad.push(data[i].grad);
        foreign_student.push(data[i].foreign_student);
        foreign_female.push(data[i].foreign_female_student);
        scholarship.push(data[i].scholarship);
      }
      return [name,student];


    },//end success
  });//end ajax
});
function click() {
  // body...
  var temp = getData();
}

//test branch