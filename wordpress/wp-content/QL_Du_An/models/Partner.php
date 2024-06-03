<?php 
if(!class_exists('Partner')){
    include_once getenv('DIR_DB') . '/ActionDB.php';

    class Partner{
        /**
         * @var int $ID
         */
        public $ID;

        /**
         * @var string $Name
         */
        public $Name;

        /**
         * @var string $Representative
         */
        public $Representative;

        /**
         * @var string $Position
         */
        public $Position;

        /**
         * @var string $Email
         */
        public $Email;

        /**
         * @var string $Phone
         */
        public $Phone;

        /**
         * @var string $Fax
         */
        public $Fax;

        /**
         * @var string $Address
         */
        public $Address;

        /**
         * @var string $Note
         */
        public $Note;

        /**
         * @var string $Status
         */
        public $Status;
     
        /**
         * @var string $TaxCode
         */
        public $TaxCode;

        public static function GetAllPartner(){
            $actionDB = new ActionDB();

            $result = $actionDB->PartnerAllInfo();

            $partners = array();

            while($row = $result->fetch_assoc()){
                $partner = new Partner();

                $partner->ID = $row['ID'];
                $partner->Name = $row['Name'];
                $partner->Representative = $row['Representative'];
                $partner->Position = $row['Position'];
                $partner->Email = $row['Email'];
                $partner->Phone = $row['Phone'];
                $partner->Fax = $row['Fax'];
                $partner->Address = $row['Address'];
                $partner->Note = $row['Note'];
                $partner->Status = $row['Status'];
                $partner->TaxCode = $row['TaxCode'];
                
                $partners[] = $partner;
            }

            return $partners;
        } 
        
        public function Add($name, $email, $phone, $fax, $address, $status, $note, $taxCode, $representative, $position){
            $actionDB = new ActionDB();
            $actionDB->AddPartner($name, $email, $phone, $fax, $address, $status, $note, $taxCode, $representative, $position);
        }

        public function Edit($id, $name, $email, $phone, $fax, $address, $status, $note, $taxCode, $representative, $position){
            $actionDB = new ActionDB();
            $actionDB->EditPartner($id, $name, $email, $phone, $fax, $address, $status, $note, $taxCode, $representative, $position);
        }
        
        public function Delete($id){
            $actionDB = new ActionDB();
            $actionDB->DeletePartner($id);
        }            

        public function Find($name){
            $actionDB = new ActionDB();
            return $actionDB->FindPartner($name)->fetch_all(MYSQLI_ASSOC);
        }        
    }
}