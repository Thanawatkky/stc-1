<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">


<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
            <a class="navbar-brand ms-1" href="index.php">STC ONLINE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse"> 
            <form action="shop_search.php" method="POST">
                   <div class="row">
                     <div class="col-8">
                        <input class="form-control" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
                     </div>

                     <div class="col-4">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                     </div>
                   </div> 
                </form>

                <div>
                   <div class="list-group" id="show-list"></div> 
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active fs-5" href="index.php">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" type="button" data-bs-toggle="modal" data-bs-target="#basketModal">Shopping cart</a>
                    </li>


                    <li class="nav-item dropstart mt-1">
                        <div style="width: 40px; height: 40px;" data-bs-toggle="dropdown">
                             <img width="40" height="40" src="" id="" alt="profile" class="rounded-circle dropdown-item">
                        </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php?p=profile" class="dropdown-item">แก้ไขข้อมูลส่วนตัว</a>
                        </li>
                        <li>
                            <a href="index.php?p=history" class="dropdown-item">ประวัติการสั่งซื้อ</a>
                        </li>
                        <hr>
                        <li>
                            <a href="api/ac_logout.php" onclick="return confirm('ต้องการออกจาการะบบใช่หรือไม่?');" class="dropdown-item">ออกจากระบบ</a>
                        </li>
                    </ul>
                    </li>
                </ul>

            </div>
    </div>
</nav>


    <div class="modal" id="basketModal" tabindex="-1" aria-labelledby="basketModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="basketModalLabel">ตะกร้าสินค้า</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    // ลงหลังบ้านให้หน่อยครับ



                <div class="text-center">
                    <h5 class="text-center">ราคาทั้งหมด บาท</h5>
                    <a href="" class="btn btn-primary w-25"  id="btn-confirm">ยืนยัน</a> <!-- order -->
                </div>
                </div>
            </div>
        </div>
    </div>



    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
