<?php
namespace Vinhphis\Lab123\Models;
use Vinhphis\Lab123\Models\env;
use \PDO;

// tạo kết nối từ project php sang mysql
class DataBase
{
    private $conn;

    public function __construct()
    {
        $env = new env();
        $this->conn = new PDO(
            "mysql:host=" . $env::DBHOST
            . ";dbname=" . $env::DBNAME
            . ";charset=" . $env::DBCHARSET,
            $env::DBUSER,
            $env::DBPASS
        );
    }

    public function getData($query, $getAll = true)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
}


