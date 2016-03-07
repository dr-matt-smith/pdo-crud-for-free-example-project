<?php
namespace Itb;

// file: /src/Product.php
use Mattsmithdev\PdoCrud\DatabaseManager;

class Product extends \Mattsmithdev\PdoCrud\DatabaseTable
{
    private $id;
    private $description;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * illustrate custom PDO DB method
     * in this case we search for products with an id >= $minId, and whose descrption contains $searchText
     *
     * @param $minId
     * @param $searchText
     *
     * @return array
     */
    public static function customSearch($minId, $searchText)
    {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        // wrap wildcard '%' around the serach text for the SQL query
        $searchText = '%' . $searchText . '%';

        $sql = 'SELECT * FROM products WHERE (description LIKE :searchText) AND (id > :minId)';

        $statement = $connection->prepare($sql);
        $statement->bindParam(':minId', $minId, \PDO::PARAM_INT);
        $statement->bindParam(':searchText', $searchText, \PDO::PARAM_STR);
        $statement->setFetchMode(\PDO::FETCH_CLASS, '\\' . __CLASS__);
        $statement->execute();

        $products = $statement->fetchAll();

        return $products;
    }

}