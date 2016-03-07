<?php
namespace Itb;

class MainController
{
    public static function listAction()
    {
        // get all products from DB as array of Product objects
        $products = Product::getAll();

        $pageTitle = 'list all products : getAll();';

        require_once __DIR__ . '/../templates/page.php';
    }

    public static function searchAction()
    {
        // get products from DB as array of Product objects - id > minId, description containing $searchText
        $minId = 2;
        $searchText = 'er';
        $products = Product::customSearch($minId, $searchText);

        $pageTitle = "list all products : customSearch(\$minId = $minId, \$searchText='$searchText')";

        require_once __DIR__ . '/../templates/page.php';
    }

}