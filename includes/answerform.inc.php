<?php

    require_once "functions.inc.php";
 
    $BpRateHour = null;
    $BpNohCutoff = null;
    $BpIpCutoff = null;
    $HRateHour = null;
    $HNohCutoff  = null;
    $HHPay = null;
    $OIRateHour = null;
    $OInohcutoff = null;
    $OITotalIncome = null;
    $GrossIncome = null;
    $NetIncome = null;
    $SSS = null;
    $Philhealth = null;
    $PagIbig = 100;
    $ITR = null;
    $OSSSLoan = null;
    $OPagIbigLoan = null;
    $OFSD = null;
    $OFSL = null;
    $OSL = null;
    $OO = null;
    $DSRH = null;
    $FEN = null;
    $FQDS = null;
    $FName = null;
    $FMName = null;
    $FSName = null;
    $FCivilStatus = null;
    $FDesign = null;
    $FPayDate = null;
    $FEmloyeeStatus = null;
    $FDepartment = null;

    if(isset($_POST['calculategi'])){
        $FName = $_POST['fname'];
        $FMName = $_POST['fmname'];
        $FSName = $_POST['fsname'];
        $FCivilStatus = $_POST['fcivilstatus'];
        $FDesign= $_POST['fdesign'];
        $FPayDate = $_POST['fpaydate'];;
        $FEmloyeeStatus = $_POST['femployeestatus'];
        $FDepartment = $_POST['fdepartment']; 
        $FQDS = $_POST['fqds'];
        $FEN = $_POST['fen'];
        $BpRateHour = $_POST['bpratehour'];
        $BpNohCutoff = $_POST['bpnohcutoff'];
        $HRateHour = $_POST['hratehour'];
        $HNohCutoff  = $_POST['hnohcutoff'];
        $OIRateHour = $_POST['oiratehour'];
        $OInohcutoff = $_POST['oinohcutoff'];
        $BpIpCutoff = computation($BpRateHour,$BpNohCutoff);
        $HHPay = computation($HRateHour,$HNohCutoff);
        $OITotalIncome = computation($OIRateHour,$OInohcutoff);
        $GrossIncome = grossIncome($BpIpCutoff,$HHPay,$OITotalIncome);
        $SSS = sssTable($GrossIncome);
        $Philhealth = phhealthTable($GrossIncome);
        $ITR = itrTable($GrossIncome);

    }

    if(isset($_POST['calculateni'])){
        $FName = $_POST['fname'];
        $FMName = $_POST['fmname'];
        $FSName = $_POST['fsname'];
        $FCivilStatus = $_POST['fcivilstatus'];
        $FDesign= $_POST['fdesign'];
        $FPayDate = $_POST['fpaydate'];;
        $FEmloyeeStatus = $_POST['femployeestatus'];
        $FDepartment = $_POST['fdepartment']; 
        $FQDS = $_POST['fqds'];
        $FEN = $_POST['fen'];
        $BpRateHour = $_POST['bpratehour'];
        $BpNohCutoff = $_POST['bpnohcutoff'];
        $BpIpCutoff = $_POST['bpipcutoff'];
        $HRateHour = $_POST['hratehour'];
        $HNohCutoff  = $_POST['hnohcutoff'];
        $HHPay = $_POST['hhpay'];
        $OIRateHour = $_POST['oiratehour'];
        $OInohcutoff = $_POST['oinohcutoff'];
        $OITotalIncome = $_POST['oitotalincome'];
        $SSS = $_POST['sss'];
        $Philhealth = $_POST['philhealth'];
        $PagIbig = $_POST['pagibig'];
        $ITR = $_POST['itr'];
        $OSSSLoan = $_POST['osssloan'];
        $OPagIbigLoan = $_POST['opagibigloan'];
        $OFSD = $_POST['ofsd'];
        $OFSL = $_POST['ofsl'];
        $OSL = $_POST['osl'];
        $OO = $_POST['oo'];
        $GrossIncome = $_POST['grossincome'];
        $DSRH = totalDeduction($SSS,$Philhealth,$PagIbig,$ITR,$OSSSLoan,$OPagIbigLoan,$OFSD,$OFSL,$OSL,$OO);
        $NetIncome = $GrossIncome - $DSRH;


    }


    if(isset($_POST['new'])){
        
        clearData();

    }

    if(isset($_POST['cancel'])){
        
        clearData();

    }

?>