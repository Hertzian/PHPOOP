<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = null;
    $dbName = 'pdoTest';

    // Set DSN
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;

    // Create PDO instance
    $pdo = new PDO($dsn, $user, $pass);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


    // Select
    // $status = 'admin';
    // $sql = 'SELECT * FROM users WHERE status = :status';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([
    //     'status' => $status
    // ]);
    // $users = $stmt->fetchAll();

    // foreach ($users as $user) {
    //     // echo $user['name'] . '<br>';
    //     // echo $user['email'] . '<br>';
    //     // echo $user['status'] . '<br>------------------<br>';
    //     echo $user->name . '<br>';
    //     echo $user->email . '<br>';
    //     echo $user->status . '<br>------------------<br>';
    // }

    // Insert
    $name = 'Pedro Perez';
    $email = 'pedro@pedro.com';
    $status = 'guest';

    $sql = 'INSERT INTO users(name,email,status) VALUES (:name,:email,:status)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => $name,
        'email' => $email,
        'status' => $status
    ]);

    echo 'User added';