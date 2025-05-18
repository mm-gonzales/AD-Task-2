<?php 
    require_once __DIR__ . '/../../components/cards/recipe.card.php';
    require_once __DIR__ . '/../../handlers/pageData.handler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
        require_once __DIR__ . '/../../components/templates/nav.component.php';
?>

    <section class="hero">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1 class="display-5 fw-bold">Kapampangan Food</h1>
                <p class="lead">See the ingredients and the process to make this culture rich food</p>
            </div>
        </div>
    </section>

    <section class="grid">
        <h1>Pamangan</h1>
        <p>"Pagkain" in Kapampangan--The native language of Pampanga</p>
        <?php displayRecipeCards($recipe); ?>
    </section>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>