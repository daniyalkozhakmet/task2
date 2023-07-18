<?php

class Test extends Dbh
{
    public function change($id)
    {
        $statement = $this->connect()->prepare('SELECT * from texts WHERE id=? ;');
        $statement->execute(array($id));
        $data = $statement->fetch();
        if (is_array($data)) {
            return $data;
        } else {
            $response = [
                "error" => 'Could not find any record',
            ];
            print_r(json_encode($response));
            exit();
        }
    }
}
