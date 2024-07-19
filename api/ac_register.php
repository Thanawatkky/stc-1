<?php 
    include 'function.php';
    if(isset($_REQUEST['ac'])) {
        switch ($_REQUEST['ac']) {
            case 'user':
                if($_FILES['user_img']['name'] != '') {
                    $file = $_FILES['user_img']['name'];
                    move_uploaded_file($_FILES['user_img']['tmp_name'],'../img/profile/user/'.$file);
                }else{
                    $file = "avatar.jpg";
                }
                $data = [
                    'username'=>$_REQUEST['username'],
                    'password'=>password_hash($_REQUEST['password'],PASSWORD_BCRYPT),
                    'fullname'=>$_REQUEST['fullname'],
                    'address'=>$_REQUEST['address'],
                    'tel'=>$_REQUEST['tel'],
                    'user_img'=>$file,
                    'user_role'=>2
                ];
                if(insertDB('tb_user',$data)) {
                    echo json_encode(['status'=>true, 'msg'=>"สมัครสำเร็จ"]);
                }else{
                    echo json_encode(['status'=>false, 'msg'=>'ไม่สำเร็จ']);
                }
                break;
            
            default:
                # code...
                break;
        }
    }
?>