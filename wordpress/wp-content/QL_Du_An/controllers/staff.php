<?php 

    include getenv('DIR_MODELS') . '/Staff.php';

    $base_path_folder_image = ABSPATH . 'wp-content\QL_Du_An\resources\img';

    $staffs = [];

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $address = $_POST['address'] ?? null;
    $birthday = $_POST['birthday'] ?? null;
    $position = $_POST['position'] ?? null;
    $email = $_POST['email'] ?? null;
    $gender = $_POST['gender'] ?? null;
    $status = $_POST['status'] ?? null;
    $avatar = $_FILES['avatar'] ?? null;
    $accountID = $_POST['accountID'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($phone) && isset($address) && isset($birthday)
    && isset($position) && isset($email) && isset($gender) && isset($status) && isset($accountID)){
        if(isset($avatar)){
            move_uploaded_file($avatar["tmp_name"], $base_path_folder_image . '/' . $avatar["name"]);
        }
        Add($name, $phone, $address, $birthday, $position, $email, $accountID, $gender, $status, $base_path_folder_image . '/' . $avatar["name"]);
        $staffs = Staff::GetAllStaff();
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($phone) && isset($address) && isset($birthday)
    && isset($position) && isset($email) && isset($gender) && isset($status) && isset($accountID)){
        if(isset($avatar)){
            move_uploaded_file($avatar["tmp_name"], $base_path_folder_image . '/' . $avatar["name"]);
        }
        Edit($id, $name, $phone, $address, $birthday, $position, $email, $accountID, $gender, $status, $base_path_folder_image . '/' . $avatar["name"]);
        $staffs = Staff::GetAllStaff();
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
        $staffs = Staff::GetAllStaff();
    }
    else if($method === 'find'){
        $staffName = $_POST['staffName'];
        $staffs = Find($staffName);
    }
    else {
        $staffs = Staff::GetAllStaff();
    }
    function Add($name, $phone, $address, $birthday, $position, $email, $accountID, $gender, $status, $avatar){
        $staff = new Staff();
        $staff->Add($name, $phone, $address, $birthday, $position, $email, $accountID, $gender, $status, $avatar);
    }

    function Edit($id, $name, $phone, $address, $birthday, $position, $email, $accountID, $gender, $status, $avatar){
        $staff = new Staff();
        $staff->Edit($id, $name, $phone, $address, $birthday, $position, $email, $accountID, $gender, $status, $avatar);
    }

    function Delete($id){
        $staff = new Staff();
        $staff->Delete($id);
    }

    function Find($name){
        $staff = new Staff();
        return $staff->Find($name);
    }
?>