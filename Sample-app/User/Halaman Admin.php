<?php include("../Template/header.php");
include ("../Template/Navbar Admin.php"); ?>
<body background="../User/Bg_img.jpg">
<!-- <div img src="../User/Picture 1.png" alt="Landing Page Picture"> -->
    <div class="row " style="margin-top:100px">
        <div class="col-4">
        </div>
        <div class="col-4">
        <div class="card text-center">
            <div class=" card-header bg-info" >
                <h5 style="margin-bottom:-0px" class="text-white" > Cari Pemesanan </h5>
            </div>
            <div class="card-body text-left">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Order_id">
                    </div>
                    <div class="text-right">
                        <a class="btn btn-info" href="Data Pemesanan.php" role="button"> Cari </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="col-4">
        </div>
    </div>
<!-- </div> -->
<?php include("../Template/footer.php");?>