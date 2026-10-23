<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/8811daf8c9.js" crossorigin="anonymous"></script>
    <title><?= $title??"App"; ?></title>
</head>
<header class="flex justify-between p-5 items-center">
    <p><a href="/">APP</a></p>
    <nav>
        <ul class="flex flex-row gap-3 items-center">
            <li><a href="/compra">Compra</a></li>
            <li><a href="/venda">Venda</a></li>
            <li><a href="/contact">Contacte</a></li>
            <li><a href="/usuari"><i class="fa-solid fa-circle-user text-xl"></i></a></li>
        </ul>
    </nav>
</header>
<?= include __DIR__."/../partials/nav.view.php" ?>