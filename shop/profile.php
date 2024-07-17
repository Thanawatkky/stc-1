

    <div class="container shadow-sm mt-4">
        <h3 class="text-center fw-bolder pt-3">แก้ไขข้อมูลส่วนตัว</h3>

        <div class="text-center mt-5">
            <img class="rounded-circle img-fluid" src="..\img\user-profile\avatar.jpg" width="185px" height="15%" alt="profile">
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="mt-4">
                        <label class="form-label" for="">Username</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                        <input class="mt-1" type="checkbox" id="showpass" onclick="sp();"> 
                        <label for="showpass" id="showpass"><small>ShowPassword</small></label>
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">ประเภทร้านอาหาร</label>
                        <section class="form-control">
                            <option value="">เลือกประเภทร้านอาหาร</option>


                        </section>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="mt-4">
                        <label for="" class="form-label">ชื่อร้าน</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Telephone</label>
                        <input class="form-control" type="tel" pattern="[0-9]{10}" name="" id="">
                    </div>
                    <div class="mt-4 pt-3">
                        <label for="" class="form-label">Profile</label>
                        <input class="form-control" type="file" name="" id="">
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 pb-4">
                <button class="btn btn-light" style="width: 15%;" type="button">ยกเลิก</button>
                <button class="btn btn-primary" style="width: 15%;" type="submit">ยืนยัน</button>
            </div>
        </form>
    </div>


<script>
    function sp() {
        showpass = document.getElementById("password");
        if (showpass.type === "password") {
            showpass.type = "text";
        }else {
            showpass.type = "password";
        }
    }
</script>