<?php require_once 'heading.php'; ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 sm-12 buttondesign2">
                <button type="submit" class="">Update</button>
                <button type="submit" class="">Delete</button>
                <button type="submit" class="">Cancel</button>
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
    let t = $('.picpath').val();
    let k = t.replace('../','');

    

    if($('.picpath').val()){
        $('#imagesrc').attr("src",k);
        $("#nationality").val(nationality).change();
        $("#civilstatus").val(civilStatus).change();
        $("#deptstatus").val(deptStatus).change();
        $("#socialmedia").val(socialMedia).change();
        $("#country").val(country).change();
        $("#gender").val(gender).change();
    }

</script>
</html>