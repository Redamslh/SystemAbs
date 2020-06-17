/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
// set a event handler to the button
  $("#btn_login").click(function() {
    // retrieve form data
    var uname = $("#user").val();
    var pass = $("#pswd").val();

    // send form data to the server side php script.
    $.ajax({
        type: "POST",
        url: "checkPassword.php",
        data: { uname:user, pass:pswd }
    }).done(function( data ) {

        // Now the output from PHP is set to 'data'.
        // Check if the 'data' contains 'OK' or 'NG'
        if (data.indexOf("OK") >= 0){

            // you can do something here
            alert("Login Successed.");
            location.href = "ok.html";

        }else if(data.indexOf("NG") >= 0){

            // you can do something here
            alert("Login Faild.");
            location.href = "ng.html";
        }
    });
  });
});