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
        e.preventDefault();
        $(".itemname").val("Pizza al taglio");
        $(".price").val("500");
    });
    
    $("#pizza2, #picpizza2").click(function(e){
        e.preventDefault();
        $(".itemname").val("Pizzette");
        $(".price").val("600");
    });

    $("#pizza3, #picpizza3").click(function(e){
        e.preventDefault();
        $(".itemname").val("Sicilian Pizza");
        $(".price").val("700");
    });

    $("#pizza4 , #picpizza4").click(function(e){
        e.preventDefault();
        $(".itemname").val("Manakish");
        $(".price").val("800");
    });

    $("#pizza5, #picpizza5").click(function(e){
        e.preventDefault();
        $(".itemname").val("Tarte flambee");
        $(".price").val("900");
    });

    $("#pizza6, #picpizza6").click(function(e){
        e.preventDefault();
        $(".itemname").val("Primavera");
        $(".price").val("1000");
    });

    $("#pizza7, #picpizza7").click(function(e){
        e.preventDefault();
        $(".itemname").val("Pizza Romana");
        $(".price").val("1100");
    });

    $("#pizza8, #picpizza8").click(function(e){
        e.preventDefault();
        $(".itemname").val("Proscuitto");
        $(".price").val("1200");
    });

    $("#pizza9, #picpizza9").click(function(e){
        e.preventDefault();
        $(".itemname").val("Grizzled Pizza");
        $(".price").val("1300");
    });

    $("#pizza10, #picpizza10").click(function(e){
        e.preventDefault();
        $(".itemname").val("Pinsa Romana");
        $(".price").val("1400");
    });

    $("#pizza11, #picpizza11").click(function(e){
        e.preventDefault();
        $(".itemname").val("Pizza Fritta");
        $(".price").val("1500");
    });

    $("#pizza12, #picpizza12").click(function(e){
        e.preventDefault();
        $(".itemname").val("Padellino");
        $(".price").val("1600");
    });

    $("#pizza13, #picpizza13").click(function(e){
        e.preventDefault();
        $(".itemname").val("Fugazza");
        $(".price").val("1700");
    });

    $("#pizza14, #picpizza14").click(function(e){
        e.preventDefault();
        $(".itemname").val("Grandma Pi");
        $(".price").val("1800");
    });

    $("#pizza15, #picpizza15").click(function(e){
        e.preventDefault();
        $(".itemname").val("Stuffed Pizza");
        $(".price").val("1900");
    });

    $("#pizza16, #picpizza16").click(function(e){
        e.preventDefault();
        $(".itemname").val("Apizza");
        $(".price").val("2000");
    });

    $("#pizza17, #picpizza17").click(function(e){
        e.preventDefault();
        $(".itemname").val("Fugazetta");
        $(".price").val("2100");
    });

    $("#pizza18, #picpizza18").click(function(e){
        e.preventDefault();
        $(".itemname").val("Pizza Rustica");
        $(".price").val("2200");
    });

    $("#pizza19, #picpizza19").click(function(e){
        e.preventDefault();
        $(".itemname").val("Garlic Fingers");
        $(".price").val("2300");
    });

    $("#pizza20, #picpizza20").click(function(e){
        e.preventDefault();
        $(".itemname").val("Alla Pala");
        $(".price").val("2400");
    });

    /* Radio Buttons Function */

    $(".radiosenior").click(function(){

        if($(this).prop("checked") == true){
            discount = 30;

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

            $(".radiodisc").prop("checked",false);
            $(".radioemp").prop("checked",false);
            $(".radionum").prop("checked",false);
          
        }
    });

    $(".radiodisc").click(function(){

        if($(this).prop("checked") == true){
            discount = 20;
            
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

            $(".radiosenior").prop("checked",false);
            $(".radioemp").prop("checked",false);
            $(".radionum").prop("checked",false);
 

        }
    });

    $(".radioemp").click(function(){

        if($(this).prop("checked") == true){
           discount =  15;

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

           $(".radiosenior").prop("checked",false);
           $(".radiodisc").prop("checked",false);
           $(".radionum").prop("checked",false);

        }
    });

    $(".radionum").click(function(){

        if($(this).prop("checked") == true){
            discount = 0;

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
        
    });

    $("#cancel").click(function(e){

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

    });

  
 
    
});