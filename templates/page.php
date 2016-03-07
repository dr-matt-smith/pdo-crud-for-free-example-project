<!doctype html>
<html lang="en">
<head>
    <title><?= $pageTitle ?></title>
</head>
<body>

<h1><?= $pageTitle ?></h1>
<main>

<?php
    // outputs something like:
    //  [1] hammer
    //  [5] nail
    //  [7] nuts
    foreach ($products as $product){
        print '<p>';
        print 'id [' . $product->getId() . '] ';
        print $product->getDescription();
    }
?>

</main>

<footer>
    <hr>
    <ul>
        <li>
            <a href="index.php?action=list">list product descriptions</a>
        </li>

        <li>
            <a href="index.php?action=search">search product descriptions</a>
        </li>
    </ul>
</footer>
</body>
</html>

