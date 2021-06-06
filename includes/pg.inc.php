<?php
    require_once 'functions.inc.php';
    $NameOfAnItem = '';
    $Quantity = null;
    $Price = null;
    $DiscountAmount = null;
    $DiscountedAmount = null;
    $TotalQuantity = null;
    $TotalDiscountGiven = null;
    $TotalDiscountedAmount = null;
    $RadButton = null;
    $condition = '';
    $CashGiven = null;
    $ChangeInput = null;
    $OriginalPayment = null;
    $radSenior = null;
    $radWithDisc = null;
    $radEmp = null;
    $radNoDisc = null;

    if(isset($_POST["calculate"])){

        $NameOfAnItem = $_POST['nameofanitem'];
        $RadButton = $_POST['radbutton'];
        $Price = $_POST['price'];
        $Quantity = $_POST['quantity'];
        $OriginalPayment = calculateSum($Quantity,$Price);

        if($RadButton == "seniorcitizen"){
            $condition = "seniorcitizen";
            $DiscountAmount = discountAmount($OriginalPayment,$condition);
            $DiscountedAmount = discountedAmount($OriginalPayment,$DiscountAmount);
            $TotalQuantity = $Quantity;
            $TotalDiscountGiven = discountAmount($OriginalPayment,$condition);
            $TotalDiscountedAmount = discountedAmount($OriginalPayment,$DiscountAmount);
            $radsenior = "checked";
        }
        if($RadButton == "withdisccard"){
            $condition = "withdisccard";
            $DiscountAmount = discountAmount($OriginalPayment,$condition);
            $DiscountedAmount = discountedAmount($OriginalPayment,$DiscountAmount);
            $TotalQuantity = $Quantity;
            $TotalDiscountGiven = discountAmount($OriginalPayment,$condition);
            $TotalDiscountedAmount = discountedAmount($OriginalPayment,$DiscountAmount);
            $radwithdisc = "checked";
        
        }
        if($RadButton == "employeedisc"){
            $condition = "employeedisc";
            $DiscountAmount = discountAmount($OriginalPayment,$condition);
            $DiscountedAmount = discountedAmount($OriginalPayment,$DiscountAmount);
            $TotalQuantity = $Quantity;
            $TotalDiscountGiven = discountAmount($OriginalPayment,$condition);
            $TotalDiscountedAmount = discountedAmount($OriginalPayment,$DiscountAmount);
            $rademp = "checked";
        }
        if($RadButton == "nodisc"){
            $condition = "nodisc";
            $DiscountAmount = discountAmount($OriginalPayment,$condition);
            $DiscountedAmount = discountedAmount($OriginalPayment,$DiscountAmount);
            $TotalQuantity = $Quantity;
            $TotalDiscountGiven = discountAmount($OriginalPayment,$condition);
            $TotalDiscountedAmount = discountedAmount($OriginalPayment,$DiscountAmount);
            $radnodisc = "checked";
        }
    }
    
    if(isset($_POST['change'])){
        $NameOfAnItem = $_POST['nameofanitem'];
        $Quantity = $_POST['quantity'];
        $Price = $_POST['price'];
        $DiscountAmount = $_POST['discountamount'];
        $DiscountedAmount = $_POST['discountedamount'];
        $TotalQuantity = $_POST['totalquantity'];
        $TotalDiscountGiven = $_POST['totaldiscountgiven'];
        $TotalDiscountedAmount = $_POST['totaldiscountedamount'];
        $CashGiven = $_POST['cashgiven'];
        $DiscoutTotal = $_POST['discountedamount'];
        $ChangeInput = $CashGiven - $DiscoutTotal;
    }
    if(isset($_POST['new'])){
        $NameOfAnItem = '';
        $Quantity = null;
        $Price = null;
        $DiscountAmount = null;
        $DiscountedAmount = null;
        $TotalQuantity = null;
        $TotalDiscountGiven = null;
        $TotalDiscountedAmount = null;
        $RadButton = null;
        $condition = '';
        $CashGiven = null;
        $ChangeInput = null;
        $OriginalPayment = null;
        $radSenior = null;
        $radWithDisc = null;
        $radEmp = null;
        $radNoDisc = null;
    }