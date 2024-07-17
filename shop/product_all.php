


    <div class="container shadow-sm mt-5">
        <div class="text-center pt-3">
             <h3 class="fw-bolder">รายการอาหารทั้งหมด</h3>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-addfood">เพิ่มรายการอาหาร</button>
        </div>

        <div class="table-responsiv mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Images</th>
                        <th>รายการอาหาร</th>
                        <th>รายละเอียด</th>
                        <th>ราคา</th>
                        <th>ส่วนลด</th>
                        <th>หมวดหมู่</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>



                </tbody>
            </table>
        </div>
    </div>

    


    <!-- //เพิ่มรายการอาหาร -->
    <div class="modal" id="modal-addfood" tabindex="-1" aria-labelledby="addproductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="addproductModalLabel">เพิ่มรายการอาหาร</h3>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                    <div class="mt-1">
                        <label class="form-label" for="">รายการอาหาร</label>
                        <input class="form-control" type="text" placeholder="กรอกชื่่ออาหารที่ต้องการ...">
                    </div>
                    <div class="mt-2">
                        <label class="form-label" for="">รายละเอียด</label>
                        <input class="form-control" type="text" placeholder="กรอกรายละเอียดของอาหารที่ต้องการ...">
                    </div>
                    <div class="mt-2">
                        <label class="form-label" for="">ราคา</label>
                        <input class="form-control" type="number" placeholder="กรอกราคาของอาหารที่ต้องการ...">
                    </div>
                    <div class="mt-2">
                        <label class="form-label" for="">ส่วนลด</label>
                        <input class="form-control" type="number" placeholder="กรอกส่วนลดของอาหารที่ต้องการ...">
                    </div>
                    <div class="mt-2">
                        <label for="" class="form-label">หมวดหมู่อาหาร</label>
                        <section class="form-control">
                            <option value="">เลือกหมวดหมู่อาหาร</option>


                        </section>
                    </div>
                    <div class="mt-2">
                        <label for="" class="form-label">Images</label>
                        <input class="form-control" type="file" name="" id="">
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










    <!-- // modal กำหนดส่วนลด -->
    <div class="modal" id="" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center" id="">เพิ่ม/กำหนดส่วนลด</h3>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mt-3">
                            <input type="hidden" name="" id="">
                            <label class="form-label" for="">ส่วนลด</label>
                            <input type="number" name="" id="" class="form-control">
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


    <!-- //modal แก้ไข -->
    <div class="modal" id="" tabindex="" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center" id="">แก้ไขรายการอาหาร</h3>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mt-1">
                            <label for="" class="form-label">รายการอาหาร</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="mt-1">
                            <label for="" class="form-label">รายละเอียด</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="mt-1">
                            <label for="" class="form-label">ราคา</label>
                            <input class="form-control" type="number" name="" id="">
                        </div>
                        <div class="mt-1">
                            <label for="" class="form-label">ส่วนลด</label>
                            <input class="form-control" type="number" name="" id="">
                        </div>
                        <div class="mt-1">
                            <label for="" class="form-label">หมวดหมู่อาหาร</label>
                            <select class="form-control" name="" id="">
                                <option value="">เลือกหมวดหมู่อาหาร</option>



                            </select>
                        </div>
                        <div class="mt-1">
                            <label for="" class="form-label">Images</label>
                            <input class="form-control" type="file" name="" id="">
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