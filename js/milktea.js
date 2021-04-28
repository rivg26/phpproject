$(document).ready(function(){
    //Declaration Variables
    let name , quantity, discountAmount,sum , discountedAmount, totalBills = 0, totalQuantity = 0, cashGiven, change, orderSummary;

    //Setting the Radiobutton into false
    $(".coffeeclass").prop("checked",false);
    $(".bundlea").prop("checked",false);
    $(".bundleb").prop("checked",false);

    //This are the Checkbuttons
    $(".bundlea").click(function(){

        if($(this).prop("checked") == true){
            $(".bundlea").prop("checked",true);
            $(".bundleb").prop("checked",false);
            $("#orderinfo").text("Coffee Bundle A");
            $("#price").val("1300.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }
       
    });

    $(".bundleb").click(function(){

        if($(this).prop("checked") == true){
            $(".bundleb").prop("checked",true);
            $(".bundlea").prop("checked",false);
            $("#orderinfo").text("Coffee Bundle B");
            $("#price").val("1500.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }
        
    });

    $("#coffee1").click(function(){

        if($(this).prop("checked") == true){
            $("#orderinfo").text("Espresso");
            $("#price").val("110");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee2").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Cortado");
            $("#price").val("120.70");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee3").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Macchiato");
            $("#price").val("130.70");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee4").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Lungo");
            $("#price").val("150.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee5").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Cappuccino");
            $("#price").val("180.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee6").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Doppio");
            $("#price").val("250");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee7").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Ristretto");
            $("#price").val("230.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });
    
    $("#coffee8").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Chai Latte");
            $("#price").val("250.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee9").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Caffe Shakerato");
            $("#price").val("280.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee10").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Black Eye");
            $("#price").val("270.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee11").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Latte Macchiato");
            $("#price").val("170.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee12").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Mocha");
            $("#price").val("190.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee13").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Café Corretto");
            $("#price").val("290.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee14").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Frappe");
            $("#price").val("210.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee15").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Bicerin");
            $("#price").val("200.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee16").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Irish Coffee");
            $("#price").val("200.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee17").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Espresso Romano");
            $("#price").val("230.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee18").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Turkish Coffee");
            $("#price").val("240.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee19").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Mazagran");
            $("#price").val("140.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });

    $("#coffee20").click(function(){
        
        if($(this).prop("checked") == true){
            $("#orderinfo").text("Caffe Medici");
            $("#price").val("160.50");
        }
        else{
            $("#orderinfo").text("");
            $("#price").val("");
        }

    });
    
    //This are the buttons to calculate
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

    $("#changebtn").click(function(e){

        e.preventDefault();
        cashGiven = parseFloat($("#cashgiven").val());
        change = cashGiven - discountedAmount;
        $("#change").val(change);

    });

    $("#new").click(function(e){

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

    });













});