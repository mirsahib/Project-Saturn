
var Student={};

$(document).ready(function(){

  $.ajax({
    url: "http://localhost/public_html/Final_project/student_2017.php",
    method:"GET",
    success:function (data) {
      for (var i = 0; i < data.length; i++) {
        Student[i] = data[i];
      }
    }
  })//end ajax

  //set default value to combobox
  setDefault();


})

function setDefault(){
  $('#uniName').val("Choose");
  $('#year').val("select");
}


function showData() {
  // body...
  //selecting text    var uName = $('#uniName :selected').text();
  var uName = $('#uniName').val();
  var year = $('#year').val();

  console.log(uName +' '+year);
}
//console.log(JSON.parse(Student));


/*
function showData() {
  $.ajax({
    url: "http://localhost/public_html/Final_project/student_2017.php",
    method:"GET",
    success:function(data){
      //console.log(result);
      

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
     // console.log(name);
     // console.log(student);

      var charData = {
        labels:name,
        datasets:[
          {
            label:'No of Student',
            data: student,
            backgroundColor: '#ff6384',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
          }
        ]
      }
      var ctx = $("#studentChart");
      var chart = new Chart(ctx,{
        type: 'bar',
        data: charData,
      })

      console.log(Student);

    }//end success
  })//end ajax
}
*/


