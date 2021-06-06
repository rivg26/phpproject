$(document).ready(function(){

    /*Declaring Important Variables */
    let name , quantity, discountAmount,sum , discountedAmount, totalBills = 0, totalQuantity = 0, cashGiven, change, orderSummary;

     /*  Setting Up the radio buttons and checkboxes into False*/
    $(".coffeeclass").prop("checked",false);
    $(".bundlea").prop("checked",false);
    $(".bundleb").prop("checked",false);

    /* Labels and Pictures Displaying Name and Price (Food Packages) */
    $(".bundlea").click(function(){
        radioCheck(".bundlea");
       
    });
    $(".bundleb").click(function(){
        radioCheck(".bundleb");
        
    });
    /* Labels Displaying Name and Price */
    
    $("#coffee1").click(function(){
        displayText("#coffee1","Espresso","219.50");
    });

    $("#coffee2").click(function(){
        displayText("#coffee2","Cortado","120.70");
    });

    $("#coffee3").click(function(){
        displayText("#coffee3","Macchiato","130.70");
    });

    $("#coffee4").click(function(){
        displayText("#coffee4","Lungo","150.50");
    });

    $("#coffee5").click(function(){
        displayText("#coffee5","Cappuccino","180.50");
    });

    $("#coffee6").click(function(){
        displayText("#coffee6","Doppio","250");
    });

    $("#coffee7").click(function(){
        displayText("#coffee7","Ristretto","230.50");
    });
    
    $("#coffee8").click(function(){
        displayText("#coffee8","Chai Latte","250.50");
    });

    $("#coffee9").click(function(){
        displayText("#coffee9","Caffe Shakerato","280.50");
    });

    $("#coffee10").click(function(){
        displayText("#coffee10","Black Eye","270.50");
    });

    $("#coffee11").click(function(){
        displayText("#coffee11","Latte Macchiato","170.50");
    });

    $("#coffee12").click(function(){
        displayText("#coffee12","Mocha","190.50");
    });

    $("#coffee13").click(function(){
        displayText("#coffee13","Café Corretto","290.50");
    });

    $("#coffee14").click(function(){
        displayText("#coffee14","Frappe","210.50");
    });

    $("#coffee15").click(function(){
        displayText("#coffee15","Bicerin","200.50");
    });

    $("#coffee16").click(function(){
        displayText("#coffee16","Irish Coffee","210.50");
    });

    $("#coffee17").click(function(){
        displayText("#coffee17","Espresso Romano","230.50");
    });

    $("#coffee18").click(function(){
        displayText("#coffee18","Turkish Coffee","240.50");
    });

    $("#coffee19").click(function(){
        displayText("#coffee19","Mazagran","140.50");
    });

    $("#coffee20").click(function(){
        displayText("#coffee20","Caffe Medici","160.50");
    });

    /* Calculate Total Value */
    $("#calculate").click(function(e){

        e.preventDefault();
        price = parseFloat($("#price").val());
        quantity = parseFloat($("#quantity").val());
        sum = price * quantity;
        discountAmount = sum * .25;
        discountedAmount = sum - discountAmount;
        totalBills += discountedAmount;
        totalQuantity += quantity;
        $("#discountamount").val(discountAmount);
        $("#discountedamount").val(discountedAmount);
        $("#totalbills").val(totalBills);
        $("#totalquantity").val(totalQuantity);

    });

    /* Change Total Value */
    $("#changebtn").click(function(e){

        e.preventDefault();
        cashGiven = parseFloat($("#cashgiven").val());
        change = cashGiven - discountedAmount;
        $("#change").val(change);

    });

     /* Clear Button Function */
    $("#new").click(function(e){
        clearForm(e);
    });

    /* All Functions */
    function displayText(tag,name,price){

        if($(tag).prop("checked") == true){
            $("#orderinfo").text(name);
            $("#price").val(price);
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    }

    function clearForm(e){

        e.preventDefault();
        $(".coffeeclass").prop("checked",false);
        $("#orderinfo").text("");
        $("#price").val("");
        $("#quantity").val("");
        $("#discountamount").val("");
        $("#discountedamount").val("");
        $("#cashgiven").val("");
        $("#change").val("");
        $(".bundlea").prop("checked",false);
        $(".bundleb").prop("checked",false);
        $("#displayImage").remove();

    }


    function radioCheck(tag){

        if(tag === ".bundlea"){
            if($(tag).prop("checked") == true){
                $(".bundlea").prop("checked",true);
                $(".bundleb").prop("checked",false);
                $("#orderinfo").text("(Coffee Bundle A) Espresso Short, Cortado Tall, Lungo Grande , Cappuccino Venti , Doppio Venti");
                $("#price").val("1300.50");
                $("#displayPicture").html('<img src="pictures/coffeeBundleA.jpg" class = "img-fluid" id ="displayImage"/>');
            }
            else{
                $("#orderinfo").text("");
                $("#price").val("");
            }
        }

        if(tag === ".bundleb"){
            if($(tag).prop("checked") == true){
                $(".bundleb").prop("checked",true);
                $(".bundlea").prop("checked",false);
                $("#orderinfo").text("(Coffee Bundle B) Mocha Grande, Bicerin Venti, Mazagran Tall, Chai Latte Tall, Lunggo");
                $("#price").val("1500.50");
                $("#displayPicture").html('<img src="pictures/coffeeBundleB.jpg" class = "img-fluid" id ="displayImage"/>');
            }
            else{
                $("#orderinfo").text("");
                $("#price").val("");
            }
        }

    }

});