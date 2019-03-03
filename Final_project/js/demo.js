
var person = [];
var personAge = [];




function getData(){
    $.ajax({
        url: "http://localhost/public_html/Final_project/student_2017.php",
        method: "GET",
        success: function (result){
                person = [];
                personAge = [];

                for (var i = 0 ; i < result.length ; i++) {
                    person.push(result[i]["name"]);
                    console.log("pushed " + result[i]["name"] );
                    personAge.push(result[i]["age"]);
                    console.log("pushed " + result[i]["age"] );
                    }
                showChart();
}
})
}

function showChart(){
    var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: person,
        datasets: [{
            label: '',
            data: personAge,
            backgroundColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
        display: false
    },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
}

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


    },//end success
  });//end ajax
});
function click() {
  // body...
  var temp = getData();
}
