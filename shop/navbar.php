
<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
            <a class="navbar-brand ms-1" href="index.php">STC ONLINE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse"> 
            
                <div>
                   <div class="list-group" id="show-list"></div> 
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active fs-5" href="index.php">หน้าหลัก</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle fs-5" type="button" data-bs-toggle="dropdown">จัดการ</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-addProduct">เพิ่มหมวดหมู่อาหาร</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index.php?p=product_all">รายการอาหาร</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=salesum" class="nav-link active fs-5">สรุปยอดขาย</a>
                    </li>

                    <li class="nav-item dropdown mt-1">
                        <div style="width: 40px; height: 40px;" data-bs-toggle="dropdown">
                             <img width="40" height="40" src="" id="" alt="profile" class="rounded-circle dropdown-item">
                        </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php?p=profile" class="dropdown-item">แก้ไขข้อมูลส่วนตัว</a>
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




    <div class="modal" id="modal-addProduct" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="productModalLabel">เพิ่มหมวดหมู่อาหาร</h3>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                    <div class="mt-1">
                        <label class="form-label" for="">หมวดหมู่อาหาร</label>
                        <input class="form-control" type="text" name="" id="">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="">รูปภาพ</label>
                        <input class="form-control" type="file" src="" alt="">
                    </div>
                    <div class="mt-5 mb-3 text-center">
                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">ยกเลิก</button>
                        <button class="btn btn-primary" type="submit">ยืนยัน</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>