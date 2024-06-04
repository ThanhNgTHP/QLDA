<?php 

    include getenv('DIR_MODELS') . '/Partner.php';
    $partners = Partner::GetAllPartner();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $representative = $_POST['representative'] ?? null;
    $position = $_POST['position'] ?? null;
    $email = $_POST['email'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $fax = $_POST['fax'] ?? null;
    $address = $_POST['address'] ?? null;
    $status = $_POST['status'] ?? null;
    $note = $_POST['note'] ?? null;
    $taxCode = $_POST['taxCode'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($representative) && isset($position) 
    && isset($email) && isset($phone) && isset($fax) && isset($address)
    && isset($status) && isset($note) && isset($taxCode)){
        Add($name, $email, $phone, $fax, $address, $status, $note, $taxCode, $representative, $position);
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($representative) && isset($position) 
    && isset($email) && isset($phone) && isset($fax) && isset($address)
    && isset($status) && isset($note) && isset($taxCode)){
        Edit($id, $name, $content, $note, $begin, $end, $teamID, $projectID, $progress, $priority, $targetBudget, $actualBudget, $staffID);
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
    }
    else if($method === 'find'){
        $partnerName = $_POST['partner-name'];
        $partners = Find($partnerName);
    }
    function Add($name, $email, $phone, $fax, $address, $status, $note, $taxCode, $representative, $position){
        $partner = new Partner();
        $partner->Add($name, $email, $phone, $fax, $address, $status, $note, $taxCode, $representative, $position);
    }

    function Edit($id, $name, $email, $phone, $fax, $address, $status, $note, $taxCode, $representative, $position){
        $partner = new Partner();
        $partner->Edit($id, $name, $email, $phone, $fax, $address, $status, $note, $taxCode, $representative, $position);
    }

    function Delete($id){
        $partner = new Partner();
        $partner->Delete($id);
    }

    function Find($name){
        $partner = new Partner();
        return $partner->Find($name);
    }
?>