
var Student={};
var uni_name = ["Ahsanullah University of Science and Technology",
                "American International University Bangladesh",
                "Brac University",
                "Independent University Bangladesh",
                "North South University"];
var department_name = ["Arts","Sociology","Education",
                      "Science","Business","Law", 
                      "Pharmacy","Agriculture","Engineering and Technical",
                       "Economics"];
var Department={};

$(document).ready(function(){

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
  //load data
  var yearflag=0;
  if(year=='2017' || year=='2016' || year=='2015'){
    getStudentDataByYear(year);
    getDepartmentDataByYear(year);
    yearflag=1;
  }
  var index=10;

  for(var i=0;i<uni_name.length;i++){
    if(uName == uni_name[i]){//you should edit this
      index=i;
    }
  }
  if(index==10 || yearflag==0){
    alert("Choose University name or Select year");
  }else{
    showMaleVsFemale(index);
    showGradvsUnderGrad(index);
    showStudentByDepartment(index);
    index=10;
    yearflag=0;
  }
  
}
function getStudentDataByYear(year){
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

function showMaleVsFemale(index){
  var data1 = {
    labels: ['Male','Female'],
    datasets: [{
      label:"",
      data:[(Student[index].student - Student[index].female),Student[index].female],
      backgroundColor:[
        "#e0263e",
        "#5922d8",
      ],
      borderColor:[
        "#CDA776",
        "#989898",
      ]
    }]
  };//end data1
  //option
  var options = {
    responsive: true,
    title: {
      display: true,
      position: "top",
      text: "Male vs Female",
      fontSize: 18,
      fontColor: "#111"
    },
    legend: {
      display: true,
      position: "bottom",
      labels: {
        fontColor: "#333",
        fontSize: 16
      }
    }
  };//end option
  var ctx = $("#maleVsFemale");
  var chart = new Chart(ctx,{
    type:'pie',
    data:data1,
    options:options
  })
}

function showGradvsUnderGrad(index){
    var data1 = {
    labels: ['Graduate','Undergraduate'],
    datasets: [{
      label:"",
      data:[Student[index].grad,Student[index].undergrad],
      backgroundColor:[
        "#15c418",
        "#167c7b",
      ],
      borderColor:[
        "#CDA776",
        "#989898",
      ]
    }]
  };//end data1
  //option
  var options = {
    responsive: true,
    title: {
      display: true,
      position: "top",
      text: "Graduate Vs Undergraduate",
      fontSize: 18,
      fontColor: "#111"
    },
    legend: {
      display: true,
      position: "bottom",
      labels: {
        fontColor: "#333",
        fontSize: 16
      }
    }
  };//end option
  var ctx = $("#gradVsundergrad");
  var chart = new Chart(ctx,{
    type:'pie',
    data:data1,
    options:options
  })

}//end showGradvsUnderGrad

// department
function getDepartmentDataByYear(year){
  var link = "http://localhost/public_html/Final_project/department_"+year+".php";
  $.ajax({
    url: link ,
    method:"GET",
    success:function (data) {
      for (var i = 0; i < data.length; i++) {
        Department[i] = data[i];
      }
    }
  })//end ajax

}
function showStudentByDepartment(index){  
  var dep_wise_data = [];
  var len = Object.keys(Department).length;
  for(var i=0;i<len;i++){
    dep_wise_data.push(Department[index].Arts);
    dep_wise_data.push(Department[index].Sociology);
    dep_wise_data.push(Department[index].Education);
    dep_wise_data.push(Department[index].Science);
    dep_wise_data.push(Department[index].Business);
    dep_wise_data.push(Department[index].Law);
    dep_wise_data.push(Department[index].Pharmacy);
    dep_wise_data.push(Department[index].Agriculture);
    dep_wise_data.push(Department[index].Engineering_and_Technical);
    dep_wise_data.push(Department[index].Economics);
  }

  var data1 = {
    labels: department_name,
    datasets: [{
      label:"",
      data: dep_wise_data,// insert data
      backgroundColor:[
        "#ef3326",
        "#f7a19b",
        "#cc8580",
        "#a8a870",
        "#eded34",
        "#52ed23",
        "#61a54c",
        "#29d8cf",
        "#657cb2",
        "#711dad"
      ],
      borderColor:[
        "#CDA776",
        "#989898",
      ]
    }]
  };//end data1
  //option
  var options = {
    responsive: true,
    title: {
      display: true,
      position: "top",
      text: "School wise Student",
      fontSize: 18,
      fontColor: "#111"
    },
    legend: {
      display: true,
      position: "bottom",
      labels: {
        fontColor: "#333",
        fontSize: 16
      }
    }
  };//end option
  var ctx = $("#studentByDepartment");
  var chart = new Chart(ctx,{
    type:'bar',
    data:data1,
    options:options
  })
}
