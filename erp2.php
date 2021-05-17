<?php require_once 'heading.php'; ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 sm-12 buttondesign2">
                <button type="submit" class="" name = "updatebtn">Update</button>
                <button type="submit" class="" name = "deletebtn">Delete</button>
                <button type="submit" class="" id ="cancels" name="cancelbtn">Cancel</button>
            </div>

            
        </div>
    </div>

</form>    
</body>
<script>
    let nationality = "<?= $nationality ?>";
    let civilStatus = "<?= $civilstatus ?>";
    let deptStatus = "<?= $deptStatus ?>";
    let socialMedia = "<?= $socialMedia ?>";
    let country = "<?= $country ?>";
    let gender = "<?= $gender ?>";


    $("#nationality").val(nationality).change();
    $("#civilstatus").val(civilStatus).change();
    $("#deptstatus").val(deptStatus).change();
    $("#socialmedia").val(socialMedia).change();
    $("#country").val(country).change();
    $("#gender").val(gender).change();

</script>
<script type="text/javascript" src="js/control.js"></script>
<script src ="js/upload.js"></script>
</html>