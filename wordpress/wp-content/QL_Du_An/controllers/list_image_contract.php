<?php 
include_once getenv('DIR_MODELS') . '/Contract.php';
include 'base_controllers.php';

$contractID = $_GET['contractID'] ?? null;
if(!isset($contractID)){
    // xử lý ngoại lệ
    exit;
}

$ContractImages = GetImagesWhereContractID($contractID);

function GetImagesWherecontractID($contractID){
    $Contract = new Contract();
    $Contract->ID = $contractID;
    $ContractImages = $Contract->GetImages();

    return $ContractImages;
}
?>