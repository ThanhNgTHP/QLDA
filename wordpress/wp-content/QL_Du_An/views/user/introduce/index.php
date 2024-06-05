<?php 
    spl_autoload_register(function ($class_name) {
        include 'models/' . $class_name . '.php';
    });

    $current_directory = content_url().'/QL_Du_An/views/introduce';
	wp_enqueue_style( 'Introduce_style', $current_directory.'/index.css' );
?>
<div>
    <h1>Giới thiệu chung</h1>
    <p>Công ty cổ phần đầu tư và phát triển Công nghệ mô phỏng Việt Nam được thành lập năm 2010 bởi một tập thể các chuyên gia nhiều năm kinh nghiệm trong lĩnh vực công nghệ mô phỏng, công nghệ thông tin, điện tử viễn thông, điều khiển và cơ khí.</p>
    <p>Chúng tôi định hướng công ty đầu tư nghiên cứu, xây dựng, phát triển và thương mại các hệ thống:</p>
    <ul>
        <li>Mô phỏng phục vụ đào tạo.</li>
        <li>Mô phỏng vũ khí, khí tài quân sự phục vụ huấn luyện.</li>
        <li>Mô phỏng thiết bị phục vụ ngành an ninh, cảnh sát.</li>
        <li>Mô phỏng thiết bị phòng cháy chữa cháy.</li>
        <li>Mô phỏng phục vụ ngành giao thông.</li>
        <li>Mô phỏng thiết bị phục vụ đào tạo trong ngành Y tế.</li>
        <li>Sản xuất, chuyển giao thiết bị dạy nghề các ngành điện, điện tử, công nghiệp,... bằng công nghệ Mô phỏng, thực tại ảo 3D, 4D (VR, AR) tiên tiến.</li>
        <li>Sản xuất, chuyển giao các thiết bị dạy nghề ngành Công nghệ ô tô (khung, gầm, điện, điện lạnh, động cơ,...) bằng công nghệ thực tại ảo 3D, 4D (VR, AR) tiên tiến.</li>
        <li>Game mô phỏng dạy học mẫu giáo và tiểu học.</li>
        <li>Mô phỏng môi trường, địa hình, địa vật.</li>
        <li>Mô phỏng theo yêu cầu các bài toán cụ thể.</li>
        <li>Mô phỏng phần mềm trên nền tảng Smart phone.</li>
        <li>Mô phỏng 3D.</li>
        <li>Phần mềm nhúng.</li>
        <li>Phần mềm ERP.</li>
        <li>Phần mềm quản lý doanh nghiệp.</li>
        <li>Website.</li>
        <li>Outsourcing.</li>
    </ul>
</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>