<?php 

    include getenv('DIR_MODELS') . '/Contract.php';
    $contracts = Contract::GetAllContract();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $number = $_POST["number"] ?? null;
    $signDay = $_POST['signDay'] ?? null;
    $expire = $_POST['expire'] ?? null;
    $note = $_POST['note'] ?? null;
    $value = $_POST['value'] ?? null;
    $status = $_POST['status'] ?? null;
    $partnerID = $_POST['partnerID'] ?? null;
    $projectID = $_POST['projectID'] ?? null;

    $method = $_POST['method'] ?? null;

        if($method === 'add' && isset($name) && isset($number) 
        && isset($signDay) && isset($expire) && isset($note)
        && isset($value) && isset($status) && isset($partnerID) 
        && isset($projectID)){
                // print_r($name.' '. $number.' '. $signDay.' '. $expire.' '. $note.' '. $value.' '. $status.' '. $partnerID.' '. $projectID);exit;

            Add($name, $number, $signDay, $expire, $note, $value, $status, $partnerID, $projectID);
            $contracts = Contract::GetAllContract();
        }
        else if($method === 'edit' && isset($id) && isset($name) && isset($number) 
        && isset($signDay) && isset($expire) && isset($note)
        && isset($value) && isset($status) && isset($partnerID)
        && isset($projectID)){
                // print_r($id. ' ' .$name.' '. $number.' '. $signDay.' '. $expire.' '. $note.' '. $value.' '. $status.' '. $partnerID.' '. $projectID);exit;

            Edit($id, $name, $number, $signDay, $expire, $note, $value, $status, $partnerID, $projectID);
            $contracts = Contract::GetAllContract();
        }
        else if($method === 'delete' && isset($id)){
            Delete($id);
            $contracts = Contract::GetAllContract();
        }
        else if($method === 'find'){
            $contractName = $_POST['contractName'];
            $contracts = Find($contractName);
        }
        else {
        $contracts = Contract::GetAllContract();
        }

    function Add($name, $number, $signDay, $expire, $note, $value, $status, $partnerID, $projectID){
        $contract = new Contract();
        $contract->Add($name, $number, $signDay, $expire, $note, $value, $status, $partnerID, $projectID);
    }

    function Delete($id){
        $contract = new Contract();
        $contract->Delete($id);
    }

    function Edit($id, $name, $number, $signDay, $expire, $note, $value, $status, $partnerID, $projectID){
        $contract = new Contract();
        $contract->Edit($id, $name, $number, $signDay, $expire, $note, $value, $status, $partnerID, $projectID);
    }

    function Find($name){
        $contract = new Contract();
        return $contract->Find($name);
    }
?>