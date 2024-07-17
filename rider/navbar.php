
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
                    <li class="nav-item">
                        <a href="index.php?p=order_history" class="nav-link active fs-5">ประวัติการรับออเดอร์</a>
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

