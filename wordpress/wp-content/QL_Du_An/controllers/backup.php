<?php

if (isset($_POST['method']) && $_POST['method'] === 'export') {
    $fileName = 'qlduan.sql';
    $filePath = realpath('../wp-content/QL_Du_An/resources/backup/export') . '/' . $fileName;
    $command = getenv('MYSQLDUMP') . ' -u ' . getenv('USER_NAME') .
                ' -P ' . getenv('PORT') . 
                ' --routines --triggers '. getenv('DATABASE_NAME') . ' > ' . '"' . $filePath . '"';

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
         $retval_export = $retval;
     
         // In output và mã trạng thái trả về
        // echo "Output:\n" . $output;
        // echo "Error:\n" . $error;
        // echo "Mã trạng thái trả về: " . $retval . "\n";
     } else {
        // echo "Không thể mở process";
     }
}

// $pathfile = $_FILES['pathfile'] ?? null;

// if (isset($_POST['method']) && $_POST['method'] === 'import'&& isset($pathfile)) {
//    // print_r($pathfile);exit;                

//    //  $fileName = 'qlduan.sql';
//     $filePath = realpath('../wp-content/QL_Du_An/resources/backup/import') . '/' . $pathfile['name'];
//     $command = getenv('MYSQL') . ' -u ' . getenv('USER_NAME') .
//                 ' -P ' . getenv('PORT') . 
//                 ' '. getenv('DATABASE_NAME') . ' < ' . '"' . $filePath . '"';
//     exec($command);

//     $descriptors = array(
//         0 => array("pipe", "r"),  // stdin
//         1 => array("pipe", "w"),  // stdout
//         2 => array("pipe", "w")   // stderr
//      );

//      $process = proc_open($command, $descriptors, $pipes);
     
//      if (is_resource($process)) {
//          // Đóng stdin
//          fclose($pipes[0]);
     
//          // Đọc output từ stdout
//         $output = stream_get_contents($pipes[1]);

//          // Đọc thông tin lỗi từ stderr
//          $error = stream_get_contents($pipes[2]);
     
//          // Đóng pipes
//          fclose($pipes[1]);
//          fclose($pipes[2]);

//          // Lấy trạng thái kết thúc của process
//          $retval = proc_close($process);
     
//          // In output và mã trạng thái trả về
//         // echo "Output:\n" . $output;
//         // echo "Error:\n" . $error;
//         // echo "Mã trạng thái trả về: " . $retval . "\n";
//      } else {
//         // echo "Không thể mở process";
//      }
// }




   $base_path_folder_import_backup = ABSPATH . 'wp-content/QL_Du_An/resources/backup/export';


   $pathfile = $_FILES['pathfile'] ?? null;

   $method = $_POST['method'] ?? null;

   if($method === 'import'){
      if(isset($pathfile)){
         move_uploaded_file($pathfile["tmp_name"], $base_path_folder_import_backup . '/' . $pathfile["name"]);
      } 

      $command_dropdatabase = getenv('MYSQL').' -u root -e "DROP DATABASE QLDuAn"';
      exec($command_dropdatabase);
      echo '<pre>';
      print_r($command_dropdatabase);
      echo '</pre>';

      $command_createdatabase = getenv('MYSQL').' -u root -e "CREATE DATABASE QLDuAn"';
      exec($command_createdatabase);
      echo '<pre>';
      print_r($command_createdatabase);
      echo '</pre>';

      // $fileName = 'qlduan.sql';
      $filePath = $base_path_folder_import_backup . '/' . $pathfile["name"];
      $command = getenv('MYSQL') . ' -u ' . getenv('USER_NAME') .
                  ' -P ' . getenv('PORT') . 
                  ' '. getenv('DATABASE_NAME') . ' < ' . '"' . $filePath . '"';
      echo '<pre>';
      print_r($command);
      echo '</pre>';
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
         $retval_import = $retval;

         // In output và mã trạng thái trả về
         // echo "Output:\n" . $output;
         // echo "Error:\n" . $error;
         // echo "Mã trạng thái trả về: " . $retval . "\n";
      } else {
         // echo "Không thể mở process";
      }
   }
?>
