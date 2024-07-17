  
  <!-- รอลงหลังบ้าน -->



<div class="container mt-5">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h3 class="text-center fw-bolder">แก้ไขข้อมูลส่วนตัว</h3>

                <div class="text-center mt-4">
                    <img class="rounded-circle img-fluid" width="185px" height="15%" src="" alt="Profile">
                </div>

                <form action="" method="POST" >
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div>
                                <label class="form-label" for="username">Username</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="mt-2">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password">
                                <input class="mt-1" type="checkbox" id="showpass" onclick="sp();"> 
                                <label for="showpass" id="showpass"><small>ShowPassword</small></label>
                            </div>
                            <div class="mt-2">
                                <label class="form-label" for="">Fullname</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="mt-2">
                                <label class="form-label" for="">Profile</label>
                                <input class="form-control" type="file">
                            </div>
                        </div>


                        <div class="col-12 col-sm-6">
                            <div class="">
                                <label class="form-label" for="">Address</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                            </div>
                            <div class="mt-2">
                                <label class="form-label" for="">Zipcode</label>
                                <input class="form-control" type="number">
                            </div>
                            <div class="mt-2">
                                <label class="form-label" for="">Tel</label>
                                <input class="form-control" type="tel" pattern="[0-9]{10}">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 mb-4 text-center">
                        <button type="submit" class="btn btn-light" style="width: 15%;">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary" style="width: 15%;">ยืนยัน</button>
                    </div>
                </form>
            </div>
        </div>
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