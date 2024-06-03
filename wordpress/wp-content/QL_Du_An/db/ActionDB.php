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

            public function TaskAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaNhiemVu()");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function EventAllInfo(){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThongTinTatCaSK()");
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
            public function AddImage($ImageName, $Path, $ProjectCategoryID, $ContractID, $ImageCategory){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemAnh(?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssiis", $ImageName, $Path, $ProjectCategoryID, $ContractID, $ImageCategory);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditImage($ImageID ,$ImageName, $Path, $ProjectCategoryID, $ContractID, $ImageCategory){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaAnh(?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("issiis", $ImageID, $ImageName, $Path, $ProjectCategoryID, $ContractID, $ImageCategory);
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

            public function FindImage($ImageName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemAnh(?)");
                    $stmt->bind_param("s", $ImageName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }
            
            public function AddProjectCategory($ProjectCategoryName, $Description){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemLDA(?, ?)");
                    $stmt->bind_param("ss", $ProjectCategoryName, $Description);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditProjectCategory($ProjectCategoryID ,$ProjectCategoryName, $Description){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaLDA(?, ?, ?)");
                    $stmt->bind_param("iss", $ProjectCategoryID, $ProjectCategoryName, $Description);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteProjectCategory($ProjectCategoryID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaLDA(?)");
                    $stmt->bind_param("i", $ProjectCategoryID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function FindProjectCategory($ProjectCategoryName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemLDA(?)");
                    $stmt->bind_param("s", $ProjectCategoryName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function AddPermission($PermissionName, $Note){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemQuyen(?, ?)");
                    $stmt->bind_param("ss", $PermissionName, $Note);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditPermission($PermissionID ,$PermissionName, $Note){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaQuyen(?, ?, ?)");
                    $stmt->bind_param("iss", $PermissionID, $PermissionName, $Note);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeletePermission($PermissionID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaQuyen(?)");
                    $stmt->bind_param("i", $PermissionID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function FindPermission($ProjectCategoryName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemQuyen(?)");
                    $stmt->bind_param("s", $ProjectCategoryName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function AddDepartment($DepartmentName, $Description){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemPB(?, ?)");
                    $stmt->bind_param("ss", $DepartmentName, $Description);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditDepartment($DepartmentID ,$DepartmentName, $Description){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaPB(?, ?, ?)");
                    $stmt->bind_param("iss", $DepartmentID ,$DepartmentName, $Description);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteDepartment($DepartmentID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaPB(?)");
                    $stmt->bind_param("i", $DepartmentID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function FindDepartment($DepartmentName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemPB(?)");
                    $stmt->bind_param("s", $DepartmentName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function AddTeam($TeamName, $Leader, $DepartmentID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemNhom(?, ?, ?)");
                    $stmt->bind_param("ssi", $TeamName, $Leader, $DepartmentID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditTeam($TeamID, $TeamName, $Leader, $DepartmentID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaNhom(?, ?, ?, ?)");
                    $stmt->bind_param("issi", $TeamID, $TeamName, $Leader, $DepartmentID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteTeam($TeamID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaNhom(?)");
                    $stmt->bind_param("i", $TeamID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function FindTeam($TeamName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemNhom(?)");
                    $stmt->bind_param("s", $TeamName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function AddAccount($AccountName, $Password, $PermissionID, $Status){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemTK(?, ?, ?, ?)");
                    $stmt->bind_param("ssis", $AccountName, $Password, $PermissionID, $Status);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditAccount($AccountID, $AccountName, $Password, $PermissionID, $Status){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaTK(?, ?, ?, ?, ?)");
                    $stmt->bind_param("issis", $AccountID, $AccountName, $Password, $PermissionID, $Status);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteAccount($AccountID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaTK(?)");
                    $stmt->bind_param("i", $AccountID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function FindAccount($AccountName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemTK(?)");
                    $stmt->bind_param("s", $AccountName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
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

            public function FindQualification($QualificationName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemBCCC(?)");
                    $stmt->bind_param("s", $QualificationName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function AddJob($JobName, $JobContent, $JobNote, $JobBegin, $JobEnd, $TeamID, $ProjectID, $JobProgress, $JobPriority, $JobTargetBudget, $JobActualBudget, $StaffID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemCV(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssssiiíddi", $JobName, $JobContent, $JobNote, $JobBegin, $JobEnd, $TeamID, $ProjectID, $JobProgress, $JobPriority, $JobTargetBudget, $JobActualBudget, $StaffID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditJob($JobID, $JobName, $JobContent, $JobNote, $JobBegin, $JobEnd, $TeamID, $ProjectID, $JobProgress, $JobPriority, $JobTargetBudget, $JobActualBudget, $StaffID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaCV(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("isssssiiíddi", $JobID, $JobName, $JobContent, $JobNote, $JobBegin, $JobEnd, $TeamID, $ProjectID, $JobProgress, $JobPriority, $JobTargetBudget, $JobActualBudget, $StaffID);
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

            public function FindJob($JobName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemCV(?)");
                    $stmt->bind_param("s", $JobName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function AddStaff($StaffName, $StaffPhone, $StaffAddress, $StaffBirthDay, $StaffPosition, $StaffEmail, $AccountID, $StaffGender, $StaffStatus, $StaffAvatar){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemTV(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssssssisss", $StaffName, $StaffPhone, $StaffAddress, $StaffBirthDay, $StaffPosition, $StaffEmail, $AccountID, $StaffGender, $StaffStatus, $StaffAvatar);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditStaff($StaffID, $StaffName, $StaffPhone, $StaffAddress, $StaffBirthDay, $StaffPosition, $StaffEmail, $AccountID, $StaffGender, $StaffStatus, $StaffAvatar){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaTV(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("issssssisss", $StaffID, $StaffName, $StaffPhone, $StaffAddress, $StaffBirthDay, $StaffPosition, $StaffEmail, $AccountID, $StaffGender, $StaffStatus, $StaffAvatar);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteStaff($StaffID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaTV(?)");
                    $stmt->bind_param("i", $StaffID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function FindStaff($StaffName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemTV(?)");
                    $stmt->bind_param("s", $StaffName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
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
                    $stmt->bind_param("issssssssss", $PartnerID, $PartnerName, $PartnerEmail, $PartnerPhone, $PartnerFax, $PartnerAddress, $PartnerStatus, $PartnerNote, $PartnerTaxCode, $PartnerRepresentative, $PartnerPosition);
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
                    $stmt = $this->conn->prepare("CALL XoaDT(?)");
                    $stmt->bind_param("i", $PartnerID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function FindPartner($PartnerName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemDT(?)");
                    $stmt->bind_param("s", $PartnerName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function AddContract($ContractName, $ContractNumber, $ContractSignDay, $ContractExpire, $ContractNote, $ContractValue, $ContractStatus, $PartnerID, $ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemHD(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssssssssss", $ContractName, $ContractNumber, $ContractSignDay, $ContractExpire, $ContractNote, $ContractValue, $ContractStatus, $PartnerID, $ProjectID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditContract($ContractID, $ContractName, $ContractNumber, $ContractSignDay, $ContractExpire, $ContractNote, $ContractValue, $ContractStatus, $PartnerID, $ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaHD(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("issssssssss", $ContractID, $ContractName, $ContractNumber, $ContractSignDay, $ContractExpire, $ContractNote, $ContractValue, $ContractStatus, $PartnerID, $ProjectID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteContract($ContractID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaHD(?)");
                    $stmt->bind_param("i", $ContractID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function FindContract($ContractName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemHD(?)");
                    $stmt->bind_param("s", $ContractName);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
            }

            public function AddProject($ProjectName, $ProjectBegin, $ProjectEnd, $ProjectStatus, $ProjectContact, $ProjectDescription, $ProjectCategoryID, $ProjectTargetBudget, $ProjectActualBudget, $ProjectProgress){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemDA(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssssssiddi", $ProjectName, $ProjectBegin, $ProjectEnd, $ProjectStatus, $ProjectContact, $ProjectDescription, $ProjectCategoryID, $ProjectTargetBudget, $ProjectActualBudget, $ProjectProgress);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditProject($ProjectID, $ProjectName, $ProjectBegin, $ProjectEnd, $ProjectStatus, $ProjectContact, $ProjectDescription, $ProjectCategoryID, $ProjectTargetBudget, $ProjectActualBudget, $ProjectProgress){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaDA(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("issssssiddi", $ProjectID, $ProjectName, $ProjectBegin, $ProjectEnd, $ProjectStatus, $ProjectContact, $ProjectDescription, $ProjectCategoryID, $ProjectTargetBudget, $ProjectActualBudget, $ProjectProgress);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteProject($ContraProjectIDctID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaDA(?)");
                    $stmt->bind_param("i", $ProjectID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function AddEvent($EventName, $EventImage, $EventNote, $EventContent, $ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL ThemSK(?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssssi", $EventName, $EventImage, $EventNote, $EventContent, $ProjectID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function EditEvent($EventID, $EventName, $EventImage, $EventNote, $EventContent, $ProjectID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL SuaSk(?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("issssi", $EventID, $EventName, $EventImage, $EventNote, $EventContent, $ProjectID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function DeleteEvent($EventID){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL XoaSK(?)");
                    $stmt->bind_param("i", $EventID);
                    $stmt->execute();
                    $stmt->close();
                }

                parent::disconnect();
            }

            public function FindEvent($EventName){
                parent::connect();

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("CALL TimKiemSK(?)");
                    $stmt->bind_param("s", $v);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                }

                parent::disconnect();

                return $result;
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

            public function ChangePassword($accountID, $currentPassword, $newPassword){
                parent::connect();

                $result = null;

                if(isset($this->conn)){
                    /**
                     * @var bool|mysqli_stmt $stmt
                     */
                    $stmt = $this->conn->prepare("SELECT DoiMatKhau(?, ?, ?) AS State");
                    $stmt->bind_param("sss", $accountID, $currentPassword, $newPassword);
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