<<<<<<< HEAD
<?php 

    include getenv('DIR_MODELS') . '/Staff.php';
    $staffs = Staff::GetAllStaff();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $address = $_POST['address'] ?? null;
    $birthday = $_POST['birthday'] ?? null;
    $position = $_POST['position'] ?? null;
    $email = $_POST['email'] ?? null;
    $gender = $_POST['gender'] ?? null;
    $status = $_POST['status'] ?? null;
    $avatar = $_POST['avatar'] ?? null;
    $accountID = $_POST['accountID'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($phone) && isset($address) && isset($birthday)
    && isset($position) && isset($email) && isset($gender) && isset($status) && isset($accountID)){
        if(isset($avatar)){
            move_uploaded_file($avatar["tmp_name"], $base_path_folder_image . '/' . $avatar["name"]);
        }
        Add($name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar);
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($phone) && isset($address) && isset($birthday)
    && isset($position) && isset($email) && isset($gender) && isset($status) && isset($accountID)){
        Edit($id, $name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar);
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
    }
    else if($method === 'find'){
        $staffName = $_POST['staff-name'];
        $staffs = Find($staffName);
    }

    function Add($name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar){
        $staff = new Staff();
        $staff->Add($name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar);
    }

    function Edit($id, $name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar){
        $staff = new Staff();
        $staff->Edit($id, $name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar);
    }

    function Delete($id){
        $staff = new Staff();
        $staff->Delete($id);
    }

    function Find($name){
        $staff = new Staff();
        return $staff->Find($name);
    }
=======
<?php 

    include getenv('DIR_MODELS') . '/Staff.php';
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
    $avatar = $_POST['avatar'] ?? null;
    $accountID = $_POST['accountID'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($phone) && isset($address) && isset($birthday)
    && isset($position) && isset($email) && isset($gender) && isset($status) && isset($accountID)){
        print_r($id.' '. $name.' '. $phone.' '. $address.' '. $birthday.' '. $position.' '. $email.' '. $gender.' '. $status.' '. $accountID.' '. $avatar);exit;
        if(isset($avatar)){
            move_uploaded_file($avatar["tmp_name"], $base_path_folder_image . '/' . $avatar["name"]);
        }
        Add($name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar);
        $staffs = Staff::GetAllStaff();
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($phone) && isset($address) && isset($birthday)
    && isset($position) && isset($email) && isset($gender) && isset($status) && isset($accountID)){

        Edit($id, $name, $phone, $address, $birthday, $position, $email, $accountID, $gender, $status, $avatar);
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
    function Add($name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar){
        $staff = new Staff();
        $staff->Add($name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar);
    }

    function Edit($id, $name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar){
        $staff = new Staff();
        $staff->Edit($id, $name, $phone, $address, $birthDay, $position, $email, $accountID, $gender, $status, $avatar);
    }

    function Delete($id){
        $staff = new Staff();
        $staff->Delete($id);
    }

    function Find($name){
        $staff = new Staff();
        return $staff->Find($name);
    }
>>>>>>> d45fdc2856ed37ffe9b365709a40cd9b2af68709
?>