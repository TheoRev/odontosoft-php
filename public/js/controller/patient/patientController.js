$(document).ready(function() {
  // alert("Loading...")
  var url_1 = "http://192.168.1.33/odontosoft-php/api/patient_api.php";
  var url_2 = "http://localhost/odontosoft-php/api/patient_api.php";
  var url_3 = "http://localhost:3030/api/patients/";
  $(function() {
    $.ajax({
      type: "GET",
      url: url_2,
      data: {
        opt: "all"
      },
      dataType: "json",
      success: success,
      error: error
    });

    function success(response) {
      console.log(response);
    }

    function error(response) {
      console.log(response);
    }
  });
});
