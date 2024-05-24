<?php 
    if(!class_exists('MySqlBase')){
        include_once __DIR__ . '../../enviroment_variables.php';

        // if(file_exists('../enviroment_variables.php')){
        //     include_once '../enviroment_variables.php';
        // }
        // else if(file_exists('wp-content\QL_Du_An\enviroment_variables.php')){
        //     include_once 'wp-content\QL_Du_An\enviroment_variables.php';
        // }

        class MySqlBase{
            /** @var string $servername */
            public $servername;

            /** @var string $username */
            public $username;
    
            /** @var string $password */
            public $password;
    
            /** @var string $dbname */
            public $dbname;
    
            /** @var string $port */
            public $port;
            
            /** @var bool|mysqli $conn */
            public $conn;
    
            /**
             * Khởi tạo
             */
            public function __construct(){
                $this->servername = getenv('SERVER_NAME');
                $this->username = getenv('USER_NAME');
                $this->password = getenv('PASSWORD');
                $this->dbname = getenv('DATABASE_NAME');
                $this->port = getenv('PORT');
            }
    
            /**
             * Thực hiện kết nối tới MySQL
             * @return void
             */
            public function connect(){
                if(!isset($this->conn)){
                    $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, $this->port);
                    
                    if ($this->conn->connect_error) {
                        die("Connection failed: " . $this->conn->connect_error);
                    }
                }
            }
    
            
            /**
             * Thực hiện truy vấn MySQL có kết quả trả về
             * @param string $query Câu truy vấn
             * @return bool|mysqli_result|null trả về kết quả truy vấn
            */
            public function execute_query($query){
                if(isset($this->conn)){
                    $result = $this->conn->query($query);
                    return $result;
                }
    
                return null;
            }
    
            /**
             * Thực hiện truy vấn MySQL không có kết quả trả về
             * @param string $query Câu truy vấn
             * @return void
             */
            public function execute_nonquery($query){
                if(isset($this->conn)){
                    $this->conn->query($query);
                }
            }
    
            /**
             * Ngắt kết nối MySQL
             *
             * @return void
             */
            public function disconnect(){
                if(isset($this->conn) && $this->conn->ping()){
                    mysqli_close($this->conn);
                    $this->conn = null;
                }
            }
    
    
            /**
             * Hủy
             */
            public function __destruct(){
                $this->disconnect();
            }
        }
    }
?>