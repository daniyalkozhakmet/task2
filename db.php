<?php
class Dbh
{
    protected function connect()
    {
        try {
            $username = 'root';
            $dsn = 'mysql:host=localhost:3306;dbname=layout';
            $password = '';
            $db = new PDO($dsn, $username, $password);
            return $db;
        } catch (PDOException $e) {
            $error = 'Database error:';
            $error .= $e->getMessage();
            $response = [
                "error" => $error,
            ];
            print_r(json_encode($response));
            // echo $error;
            exit();
        }
    }
}
