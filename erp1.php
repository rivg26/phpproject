<?php require_once 'heading.php'; ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 sm-12 buttondesign">
                <button type="submit" name = "save" class="save">Save</button>
                <button type="submit" name = "canceled" >Cancel</button>
            </div>
            
            
        </div>
        <div class="row">
            
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] === "none"){
                            echo "<div class='col badge bg-success text-wrap mt-3 p-3'>";
                            echo "<p class='text-center fs-3'> Registered Success! </p>";
                            echo "</div>";
                        }
                    }
                ?>
            
        </div>
    </div>
</form>   
</body>
<script type="text/javascript" src="js/control.js"></script>
</html>
<script src ="js/upload.js"></script>