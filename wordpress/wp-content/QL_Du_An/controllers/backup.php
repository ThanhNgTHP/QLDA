<?php

if (isset($_POST['method']) && $_POST['method'] === 'export') {
    $fileName = 'qlduan.sql';
    $filePath = realpath('../wp-content/QL_Du_An/resources/backup') . '/' . $fileName;
    $command = getenv('MYSQLDUMP') . ' -u ' . getenv('USER_NAME') .
                ' -P ' . getenv('PORT') . 
                ' '. getenv('DATABASE_NAME') . ' > ' . '"' . $filePath . '"';

    print_r($command);
    exec($command);

    $descriptors = array(
        0 => array("pipe", "r"),  // stdin
        1 => array("pipe", "w"),  // stdout
        2 => array("pipe", "w")   // stderr
     );

     $process = proc_open($command, $descriptors, $pipes);
     
     if (is_resource($process)) {
         // Đóng stdin
         fclose($pipes[0]);
     
         // Đọc output từ stdout
        $output = stream_get_contents($pipes[1]);

         // Đọc thông tin lỗi từ stderr
         $error = stream_get_contents($pipes[2]);
     
         // Đóng pipes
         fclose($pipes[1]);
         fclose($pipes[2]);

         // Lấy trạng thái kết thúc của process
         $retval = proc_close($process);
     
         // In output và mã trạng thái trả về
        // echo "Output:\n" . $output;
        // echo "Error:\n" . $error;
        // echo "Mã trạng thái trả về: " . $retval . "\n";
     } else {
        // echo "Không thể mở process";
     }
}

if (isset($_POST['method']) && $_POST['method'] === 'export') {
    $fileName = 'qlduan.sql';
    $filePath = realpath('../wp-content/QL_Du_An/resources/backup') . '/' . $fileName;
    $command = getenv('MYSQLDUMP') . ' -u ' . getenv('USER_NAME') .
                ' -P ' . getenv('PORT') . 
                ' '. getenv('DATABASE_NAME') . ' < ' . '"' . $filePath . '"';

    exec($command);

    $descriptors = array(
        0 => array("pipe", "r"),  // stdin
        1 => array("pipe", "w"),  // stdout
        2 => array("pipe", "w")   // stderr
     );

     $process = proc_open($command, $descriptors, $pipes);
     
     if (is_resource($process)) {
         // Đóng stdin
         fclose($pipes[0]);
     
         // Đọc output từ stdout
        $output = stream_get_contents($pipes[1]);

         // Đọc thông tin lỗi từ stderr
         $error = stream_get_contents($pipes[2]);
     
         // Đóng pipes
         fclose($pipes[1]);
         fclose($pipes[2]);

         // Lấy trạng thái kết thúc của process
         $retval = proc_close($process);
     
         // In output và mã trạng thái trả về
        // echo "Output:\n" . $output;
        // echo "Error:\n" . $error;
        // echo "Mã trạng thái trả về: " . $retval . "\n";
     } else {
        // echo "Không thể mở process";
     }
}
?>