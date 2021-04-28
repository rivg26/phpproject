// function calc(){
//     var a = parseInt(document.querySelector("#value1").value);
//     var b = parseInt(document.querySelector("#value2").value);
//     var op = document.querySelector("#operator").value;
//     var calculate;
 
//     if(op == "add"){
//         calculate = a + b;
//     }
//     else if(op == "min"){
//         calculate = a - b;
//     }
//     else if(op == "div"){
//         calculate = a / b;
//     }
//     else if(op == "mul"){
//         calculate = a * b;
//     }

//     document.querySelector("#result").innerHTML = calculate;
// }


$(document).ready(function(){
    $("#trial").click(function(){
        var x = $("#trial").val();
        console.log(x);
    });
});
