<?php 
    if(!class_exists('ActionDB')){

        $DIR_DB = getenv('DIR_DB');
        if(empty($DIR_DB) && $DIR_DB !== "0"){
            include 'MySqlBase.php';
        }
        else{
            include getenv('DIR_DB') . '/MySqlBase.php';
        }

        class ActionDB extends MySQLBase{
            public function __construct(){
                parent::__construct();
            }

            /**
             * Xác minh tài khoản
             *
             * @param string $username
             * @param string $password
             * @return bool|mysqli_result
             */
            public function VerifyAccount($username, $password){
                parent::connect();

                $result = null;

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XacMinhTaiKhoan(?, ?)");
                    $stmt->bind_param("ss", $username, $password);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            /**
             * Số Người Tham Da Dự Án
             *
             * @param int $projectID
             * @return bool|mysqli_result
             */
            public function StaffCountInProject($projectID){
                parent::connect();

                $result = null;

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("SELECT SoNguoiThamGia(?) AS staffCountInProject; ");
                    $stmt->bind_param("i", $projectID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            /**
             * Thông Tin Dự Án
             *
             * @return bool|mysqli_result
             */
            public function ProjectAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaDA()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function ContractAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaHD()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function PartnerAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaDT()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function StaffAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaTV()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function AccountAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaTK()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function ProjectCategoryAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaLDA()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function PermissionAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaQuyen()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function ImageAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaAnh()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function TeamAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaNhom()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function DepartmentAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaPB()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function JobAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaCV()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function QualificationAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaBC()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function JoinStaffAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaTVTG()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function ProjectInfo($ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinDA(?)");
                    $stmt->bind_param("i", $ProjectID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function PartnerInfo($PartnerID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinDT(?)");
                    $stmt->bind_param("i", $PartnerID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            // public function ProjectCategoryInfo($ProjectCategoryID){
            //     parent::connect();

            //     if(isset($this->conn)){
            //         /**
            //          * @var bool|mysqli_stmt $stmt
            //          */
            //         $stmt = $this->conn->prepare("CALL ThongTinLDA(?)");
            //         $stmt->bind_param("i", $ProjectCategoryID);
            //         $stmt->execute();
            //         $result = $stmt->get_result();
            //         $stmt->close();
            //     }

            //     parent::disconnect();

            //     return $result;
            // }

            public function TeamInfo($TeamID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinNhom(?)");
                    $stmt->bind_param("i", $TeamID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            // public function PermissionInfo($PermissionID){
            //     parent::connect();

            //     if(isset($this->conn)){
            //         /**
            //          * @var bool|mysqli_stmt $stmt
            //          */
            //         $stmt = $this->conn->prepare("CALL ThongTinQuyen(?)");
            //         $stmt->bind_param("i", $PermissionID);
            //         $stmt->execute();
            //         $result = $stmt->get_result();
            //         $stmt->close();
            //     }

            //     parent::disconnect();

            //     return $result;
            // }

            public function ContractPartnerInfo($projectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinHDDT(?)");
                    $stmt->bind_param("i", $projectID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            /**
             * Lấy thông tin thành viên
             *
             * @param int $staffID
             * @return bool|mysqli_result
             */
            public function StaffInfo($staffID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTV(?)");
                    $stmt->bind_param("i", $staffID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function ProjectImageInfo($ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinAnhCuaDuAn(?)");
                    $stmt->bind_param("i", $ProjectID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function ContractImageInfo($ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinAnhCuaHopDong(?)");
                    $stmt->bind_param("i", $ProjectID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function GetStaffJoinProject($ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinThanhVienThamGiaDuAn(?)");
                    $stmt->bind_param("i", $ProjectID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function ProjectCategoryProjectsInfo($ProjectCategoryID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinLDADA(?)");
                    $stmt->bind_param("i", $ProjectCategoryID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function TeamStaffsInfo($StaffID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinNhomTV(?)");
                    $stmt->bind_param("i", $StaffID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function DepartmentTeamsInfo($DepartmentID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinPBNhom(?)");
                    $stmt->bind_param("i", $DepartmentID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function StaffJoinStaffsInfo($StaffID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTVTVTG(?)");
                    $stmt->bind_param("i", $StaffID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function PermissionAccountsInfo($PermissionID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongQuyenTK(?)");
                    $stmt->bind_param("i", $PermissionID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function QualificationStaff($QualificationID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTVBC(?)");
                    $stmt->bind_param("i", $QualificationID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            /**
             * Tìm kiếm dự án
             *
             * @param string $ProjectName
             * @return bool|mysqli_result
             */
            public function FindProject($ProjectName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemDA(?)");
                    $stmt->bind_param("s", $ProjectName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function ProjectDetail($ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinChiTietDA(?)");
                    $stmt->bind_param("i", $ProjectID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }
            public function AddImage($ImageName, $Path, $ProjectCategoryID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemAnh(?, ?, ?)");
                    $stmt->bind_param("ssi", $ImageName, $Path, $ProjectCategoryID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditImage($ImageID ,$ImageName, $Path, $ProjectCategoryID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaAnh(?, ?, ?, ?)");
                    $stmt->bind_param("issi", $ImageID, $ImageName, $Path, $ProjectCategoryID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteImage($ImageID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaAnh(?)");
                    $stmt->bind_param("i", $ImageID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function AddQualification($QualificationName, $QualificationDate, $QualificationAddress, $StaffID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemBCCC(?, ?, ?)");
                    $stmt->bind_param("sssi", $QualificationName, $QualificationDate, $QualificationAddress, $StaffID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditQualification($QualificationID, $QualificationName, $QualificationDate, $QualificationAddress, $StaffID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaBCCC(?, ?, ?)");
                    $stmt->bind_param("isssi", $QualificationID , $QualificationName, $QualificationDate, $QualificationAddress, $StaffID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteQualification($QualificationID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaBCCC(?)");
                    $stmt->bind_param("i", $QualificationID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            
            public function AddJob($JobName, $JobContent, $JobNote, $JobBegin, $JobEnd, $TeamID, $ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemCV(?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssssii", $JobName, $JobContent, $JobNote, $JobBegin, $JobEnd, $TeamID, $ProjectID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditJob($JobID, $JobName, $JobContent, $JobNote, $JobBegin, $JobEnd, $TeamID, $ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaCV(?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("isssssii", $JobID, $JobName, $JobContent, $JobNote, $JobBegin, $JobEnd, $TeamID, $ProjectID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteJob($JobID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaCV(?)");
                    $stmt->bind_param("i", $JobID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            ///////
            public function AddPartner($PartnerName, $PartnerEmail, $PartnerPhone, $PartnerFax, $PartnerAddress, $PartnerStatus, $PartnerNote, $PartnerTaxCode, $PartnerRepresentative, $PartnerPosition){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemDT(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssssssssss", $PartnerName, $PartnerEmail, $PartnerPhone, $PartnerFax, $PartnerAddress, $PartnerStatus, $PartnerNote, $PartnerTaxCode, $PartnerRepresentative, $PartnerPosition);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditPartner($PartnerID, $PartnerName, $PartnerEmail, $PartnerPhone, $PartnerFax, $PartnerAddress, $PartnerStatus, $PartnerNote, $PartnerTaxCode, $PartnerRepresentative, $PartnerPosition){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaDT(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("issssssssss", $JobID, $JobName, $JobContent, $JobNote, $JobBegin, $JobEnd, $TeamID, $ProjectID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeletePartner($PartnerID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaDT(?)");
                    $stmt->bind_param("i", $PartnerID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function ProjectListImage($projectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinAnhDA(?)");
                    $stmt->bind_param("i", $projectID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function ImageInfo($ImageID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinAnh(?)");
                    $stmt->bind_param("i", $ImageID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function __destruct(){
                parent::__destruct();
            }
        }
    }
?>