<?php 
require "../dbcon.php";
session_start();
if(!isset($_SESSION["admin"])){
    header("location: login.php");
    die("login failed");
}
$adminId = $_SESSION["admin"] - 155;
//=====================================================start of section
if(isset($_REQUEST['section'])){
    $checked = '0';
    if(isset($_REQUEST['checked'])) $checked = 1;
    $sec_title = $_REQUEST['sec_title'];
    $sec_item_1 = $_REQUEST['sec_item_1'];
    $sec_item_2 = $_REQUEST['sec_item_2'];
    $sec_item_3 = $_REQUEST['sec_item_3'];
    $sec_item_4 = $_REQUEST['sec_item_4'];
    $sec_item_5 = $_REQUEST['sec_item_5'];

    if($_REQUEST['section'] == 1){

        $sql = "UPDATE section_1 SET title = '$sec_title' , one = '$sec_item_1', two = '$sec_item_2', three = '$sec_item_3', four = '$sec_item_4', five = '$sec_item_5', status = '$checked' WHERE id = 1";
        if(mysqli_query($conn, $sql)){
            header("location: ?success=Successfully updated&q=section");
        }
        
    }else{
        $sec_item_6 = $_REQUEST['sec_item_6'];
        $sec_item_7 = $_REQUEST['sec_item_7'];
        $sec_item_8 = $_REQUEST['sec_item_8'];

        $sql = "UPDATE section_2 SET title = '$sec_title' , one = '$sec_item_1', two = '$sec_item_2', three = '$sec_item_3', four = '$sec_item_4', five = '$sec_item_5', six = '$sec_item_6', seven = '$sec_item_7', eight = '$sec_item_8', status = '$checked' WHERE id = 1";
        if(mysqli_query($conn, $sql)){
            header("location: ?success=Successfully updated&q=section");
        }
    }
}
//=====================================================end of section
//=====================================================start of system
if(isset($_REQUEST['sys_name'])){
    $sys_name = $_REQUEST['sys_name'];
    $sys_number = $_REQUEST['sys_number'];
    $sys_shipping = $_REQUEST['sys_shipping'];
    $sql = "UPDATE system_set SET number = '$sys_number', b_name = '$sys_name', shipping = '$sys_shipping' WHERE id = 1";
    if(mysqli_query($conn, $sql)){
        header("location: ?success=Successfully updated&q=setting");
    }
}
//=====================================================end of system
//=====================================================start of product
if(isset($_REQUEST['prod_name'])){
    $prod_name = $_REQUEST['prod_name'];
    $prod_title = $_REQUEST['prod_title'];
    $prod_price = $_REQUEST['prod_price'];
    $prod_old = $_REQUEST['prod_old'];
    $prod_v_pro = $_REQUEST['prod_v_pro'];
    $prod_v_set = $_REQUEST['prod_v_set'];
    $sql = "UPDATE product SET name = '$prod_name', title = '$prod_title', price = '$prod_price', 
    old_price = '$prod_old', vid_product = '$prod_v_pro', vid_setting = '$prod_v_set' WHERE id = 1";
    if(mysqli_query($conn, $sql)){
        header("location: ?success=Successfully updated&q=product");
    }
}

//=====================================================end of product
// ============================================================admin details
if(isset($_REQUEST['prof_username'])){
    $name = $_REQUEST['prof_username'];
    $pass = $_REQUEST['prof_password'];
    if(password_verify($pass, $system_set['password'])){
        $sql = "UPDATE system_set SET username = '$name' WHERE id = '$adminId'";
        if(mysqli_query($conn, $sql)){
            header("location: ?success=Successfully updated username&q=profile");
        }
    }else{
        header("location: ?error=invalid password&q=profile");
    }
}
//password
if(isset($_REQUEST['prof_con_password'])){
    $password = $_REQUEST['prof_password'];
    $new = $_REQUEST['prof_new_password'];
    $confirm = $_REQUEST['prof_con_password'];
    if(password_verify($password, $system_set['password'])){
        if($new === $confirm){
            if(strlen($new) >= 6){
                $has_pass = password_hash($new, PASSWORD_DEFAULT);
                $sql = "UPDATE system_set SET password = '$has_pass' WHERE id = '$adminId'";
                if(mysqli_query($conn, $sql)){
                    header("location: ?success=Successfully updated password&q=profile");
                }
            }else{
                header("location: ?error=New password must be minimum 6 characters long&q=profile");
            }
        }else{
            header("location: ?error=not match confirm password&q=profile");
        }
    }else{
        header("location: ?error=invalid password&q=profile");
    }
}
// ============================================================ admin details
// ============================================================ start of order
if (isset($_REQUEST['order_action'])) {
    $action = $_REQUEST['order_action'];
    $id = $_REQUEST['id'];
    $sql = "";
    switch ($action) {
        case 'done':
            $sql = "UPDATE product_order SET status = '1' WHERE id = '$id'";
            break;

        case 'del':
            $sql = "DELETE FROM product_order WHERE id = '$id'";
            break;

        case 'cancel':
            $sql = "UPDATE system_set SET status = '2' WHERE id = '$id'";
    }
    if(mysqli_query($conn, $sql)){
        header("location: ?success=Successfully updated&q=order");
    }
}
// ============================================================ start of order
?>