<?php
namespace App\Ova\Php\Bdd;

/**
 * Created by PhpStorm.
 * User: Neant
 * Date: 09/12/2018
 * Time: 18:53
 */

use \PDO;
use \Exception;

class DB extends PDO
{
    private $params;
    const DB_PARAMS = array(
        'host' => 'localhost',
        'dbname' => 'nunyalab',
        'user' => 'root',
        'pass' => ''
    );

    public function __construct(Array $params)
    {
        $this->params = $params;
        $dsn = 'mysql:host='.$this->params['host'].';'
            .((isset($this->params['port'])) ? 'port='.$this->params['port'].';':'')
            .'dbname='.$this->params['dbname'];

        try {
            if (isset($this->params['pdo_options']))
                parent::__construct($dsn, $this->params['user'], $this->params['pass'], $this->params['pdo_options']);
            else
                parent::__construct($dsn, $this->params['user'], $this->params['pass']);
            parent::query('set names utf8');
        }catch(Exception $e){

        }
    }

    public function getDatabaseParams(){
        return $this->params['dbname'];
    }

    public function getServerHost(){
        return $this->params['host'];
    }

    public function queryForArray($statement, $mode = PDO::FETCH_ASSOC)
    {
        try {
            return parent::query($statement)->fetchAll($mode);
        }catch (Exception $e){

        }
        return false;
    }

    public function executeForArray($statement, Array $params=array(), $fetchMode=PDO::FETCH_ASSOC)
    {
        try {
            $req = $this->prepare($statement);
            if($req->execute($params))
                return $req->fetchAll($fetchMode);
        }catch (Exception $e){

        }
        return false;
    }
}
