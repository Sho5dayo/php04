<?php
function dbConnect()
{

    $dsn = 'mysql:host=localhost;dbname=scoring_machine;charset=utf8';
    $user = 'administrator';
    $pass = 'P@ssw0rd';

    try {
        $dbh = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    } catch (PDOException $e) {
        echo '接続失敗' . $e->getMessage();
        exit();
    };
    return $dbh;
}

//SQLエラー関数：sql_error($stmt)
function sql_error($stmt)
{
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
}

//リダイレクト関数: redirect($file_name)
function redirect($file_name)
{
    header('Location: ' . $file_name);
    exit();
}


