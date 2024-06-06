<?php
ob_start(); // Bật bộ đệm đầu ra

if (isset($_POST['method']) && $_POST['method'] === 'export') {
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'qlduan';
    $fileName = '/qlduan.sql';
    $filePath = 'D:/xampp/xampp_install/htdocs/backup' . $fileName; // Chỉ định vị trí lưu file tương đối
    
    $command = 'D:\xampp\xampp_install\mysql\bin\mysqldump -u '.$dbUsername.' '.$dbName.'> '.$filePath;
    print_r($command);
    exec($command);

    // Kiểm tra xem file đã được tạo thành công chưa
    // if (file_exists($filePath)) {
    //     // Thiết lập tiêu đề HTTP để tải file
    //     header('Content-Description: File Transfer');
    //     header('Content-Type: application/octet-stream');
    //     header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
    //     header('Expires: 0');
    //     header('Cache-Control: must-revalidate');
    //     header('Pragma: public');
    //     header('Content-Length: ' . filesize($filePath));
    //     flush(); // Xóa bộ đệm đầu ra của hệ thống
    //     readfile($filePath);
    //     exit;
    // } else {
    //     echo "File không tồn tại hoặc không thể tạo file.";
    // }
}

ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra
?>