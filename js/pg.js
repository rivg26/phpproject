$(document).ready(function(){
    /*  Setting Up the radio buttons into False*/
    $(".radiosenior").prop("checked",false);
    $(".radiodisc").prop("checked",false);
    $(".radioemp").prop("checked",false);
    $(".radionum").prop("checked",false);

    /*Declaring Important Variables */
    let price,quantity, discountAmount, discountedAmount, cash, change,x,sum,discount;

    /* Labels and Pictures Displaying Name and Price */

    

    $("#pizza1 ,#picpizza1").click(function(e){
        displayInfo("Pizza al taglio","500",e);
    });
    
    $("#pizza2, #picpizza2").click(function(e){
        displayInfo("Pizzette","600",e);
    });

    $("#pizza3, #picpizza3").click(function(e){
        displayInfo("Sicilian Pizza","700",e);
    });

    $("#pizza4 , #picpizza4").click(function(e){
        displayInfo("Manakish","800",e);
    });

    $("#pizza5, #picpizza5").click(function(e){
        displayInfo("Tarte flambee","900",e);
    });

    $("#pizza6, #picpizza6").click(function(e){
        displayInfo("Primavera","1000",e);
    });

    $("#pizza7, #picpizza7").click(function(e){
        displayInfo("Pizza Romana","1100",e);
    });

    $("#pizza8, #picpizza8").click(function(e){
        displayInfo("Proscuitto","1200",e);
    });

    $("#pizza9, #picpizza9").click(function(e){
        displayInfo("Grizzled Pizza","1300",e);
    });

    $("#pizza10, #picpizza10").click(function(e){
        displayInfo("Pinsa Romana","1400",e);
    });

    $("#pizza11, #picpizza11").click(function(e){
        displayInfo("Pizza Fritta","1500",e);
    });

    $("#pizza12, #picpizza12").click(function(e){
        displayInfo("Padellino","1600",e);
    });

    $("#pizza13, #picpizza13").click(function(e){
        displayInfo("Fugazza","1700",e);
    });

    $("#pizza14, #picpizza14").click(function(e){
        displayInfo("Grandma Pi","1800",e);
    });

    $("#pizza15, #picpizza15").click(function(e){
        displayInfo("Stuffed Pizza","1900",e);
    });

    $("#pizza16, #picpizza16").click(function(e){
        displayInfo("Apizza","2000",e);
    });

    $("#pizza17, #picpizza17").click(function(e){
        displayInfo("Fugazetta","2100",e);
    });

    $("#pizza18, #picpizza18").click(function(e){
        displayInfo("Pizza Rustica","2200",e);
    });

    $("#pizza19, #picpizza19").click(function(e){
        displayInfo("Garlic Fingers","2300",e);
    });

    $("#pizza20, #picpizza20").click(function(e){
        displayInfo("Alla Pala","2400",e);
    });

    /* Radio Buttons Function */

    $(".radiosenior").click(function(){

        if($(this).prop("checked") == true){
            discount = 30;
            totalComputation(discount);
            $(".radiodisc").prop("checked",false);
            $(".radioemp").prop("checked",false);
            $(".radionum").prop("checked",false);
          
        }

    });

    $(".radiodisc").click(function(){

        if($(this).prop("checked") == true){
            discount = 20;
            totalComputation(discount);
            $(".radiosenior").prop("checked",false);
            $(".radioemp").prop("checked",false);
            $(".radionum").prop("checked",false);
        }

    });

    $(".radioemp").click(function(){

        if($(this).prop("checked") == true){
           discount =  15;
           totalComputation(discount);
           $(".radiosenior").prop("checked",false);
           $(".radiodisc").prop("checked",false);
           $(".radionum").prop("checked",false);

        }

    });

    $(".radionum").click(function(){

        if($(this).prop("checked") == true){
            discount = 0;
            totalComputation(discount);
            $(".radiodisc").prop("checked",false);
            $(".radioemp").prop("checked",false);
            $(".radiosenior").prop("checked",false);
        }

    });

    /* Calculate Total Value */

    $("#calculate").click(function(){
  
        cash = parseFloat($(".cashgiven").val());
        change = cash - discountedAmount;
        $(".changeinput").val(change); 

    });

    /* Clear Button Function */

    $("#new").click(function(e){

        clearData(e);

    });

    $("#cancel").click(function(e){

        clearData(e);

    });

    /* All Functions */

    function totalComputation(discount){
 
        price = parseFloat($(".price").val());
        quantity = parseFloat($(".quantity").val());
        sum = price * quantity;
        discountAmount = (discount/100) * sum;
        discountedAmount = sum - discountAmount;

        $(".discountamount").val(discountAmount); 
        $(".discountedamount").val(discountedAmount);
        $(".tq").val(quantity);
        $(".tdg").val(discountAmount);
        $(".tda").val(discountedAmount);

    }

    function displayInfo(name,price,e){

        e.preventDefault();
        $(".itemname").val(name);
        $(".price").val(price);

    }
  
    function clearData(e){

        e.preventDefault();
        $(".itemname").val('');
        $(".price").val('');
        $(".quantity").val('');
        $(".discountamount").val(''); 
        $(".discountedamount").val('');
        $(".tq").val('');
        $(".tdg").val('');
        $(".tda").val('');
        $(".cashgiven").val('');
        $(".changeinput").val('');
        $(".radiosenior").prop("checked",false);
        $(".radiodisc").prop("checked",false);
        $(".radioemp").prop("checked",false);
        $(".radionum").prop("checked",false);

    }

 
    
});