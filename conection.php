<?php



class Connection
{
    
    private $databaseFile;
    private $connection;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        return $this->connection = new PDO("myslq:host=localhost;dbname=cadastro;charset=UTF8","root","");
    }

    public function getConnection()
    {
        return $this->connection ?: $this->connection = $this->connect();
    }

    public function query($query)
    {
        $result      = $this->getConnection()->query($query);

        $result->setFetchMode(PDO::FETCH_INTO, new stdClass);

        return $result;
    }

    public function auth($email, $password)
    {
        $sql = "SELECT * FROM usuario WHERE email = '" . $email . "' AND senha = '" . $password  . "' ";
        $stmt = $this->connection->prepare($sql);
        $execute = $stmt->execute();

        $result = [];

        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            array_push($result, array(
                'nome' => $row['nome'],
                'email' => $row['email'],
                'senha' => $row['senha'],
                'id_banco' => $row['id_banco'],
            ));
        }

        return $result;
    }

};
