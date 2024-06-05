<?php 
    putenv('SERVER_NAME=localhost');
    putenv('USER_NAME=root');
    putenv('PASSWORD=');
    putenv('DATABASE_NAME=QLDuAn');
    putenv('PORT='. 8888);

    putenv('DIR_ROOT=' . dirname(__FILE__));
    putenv('DIR_DB=' . getenv('DIR_ROOT').'/db');
    putenv('DIR_MODELS=' . getenv('DIR_ROOT').'/models');
    putenv('DIR_CONTROLLERS=' . getenv('DIR_ROOT').'/controllers');
    putenv('DIR_VIEWS=' . getenv('DIR_ROOT').'/views');
    putenv('DIR_RESOURCES='. getenv(('DIR_NAME')).'/resources');

    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    putenv('PROTOCOL='. $protocol);
    putenv('HOST='. $_SERVER['HTTP_HOST']);
    putenv('URI='. $_SERVER['REQUEST_URI']);
    putenv('URL='. getenv('PROTOCOL') . "://" . getenv('HOST') . getenv('URI'));
    putenv('URL_NOT_QUERY='. getenv('PROTOCOL') . "://" . getenv('HOST') . parse_url(getenv('URL'), PHP_URL_PATH));

    if(function_exists('content_url')){
        putenv('VIEWS_URL='. content_url().'/QL_Du_An/views');
        putenv('CONTROLLERS_URL='. content_url().'/QL_Du_An/controllers');
        putenv('MODELS_URL='. content_url().'/QL_Du_An/models');
        putenv('RESOURCES_URL='. content_url().'/QL_Du_An/resources'); 
    }

    // $format = $_GET['format'] ?? null;
    // if ($_SERVER['REQUEST_METHOD'] === 'GET' && $format == 'json') {
    //     $settings = [
    //         'SERVER_NAME' => getenv('SERVER_NAME'),
    //         'USER_NAME' => getenv('USER_NAME'),
    //         'PASSWORD' => getenv('PASSWORD'),
    //         'DATABASE_NAME' => getenv('DATABASE_NAME'),
    //         'PORT' => getenv('PORT'),
    //         'DIR_ROOT' => getenv('DIR_ROOT'),
    //         'DIR_DB' => getenv('DIR_DB'),
    //         'DIR_MODELS' => getenv('DIR_MODELS'),
    //         'DIR_CONTROLLERS' => getenv('DIR_CONTROLLERS'),
    //         'DIR_VIEWS' => getenv('DIR_VIEWS'),
    //         'DIR_RESOURCES' => getenv('DIR_RESOURCES'),
    //         'VIEWS_URL' => getenv('VIEWS_URL'),
    //         'CONTROLLERS_URL' => getenv('CONTROLLERS_URL'),
    //         'MODELS_URL' => getenv('MODELS_URL'),
    //         'RESOURCES_URL' => getenv('RESOURCES_URL'),
    //     ];

    //     $jsonSettings = json_encode($settings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

    //     echo $jsonSettings;
    // }

?>