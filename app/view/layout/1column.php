<!DOCTYPE html>
<html>
<head>
    <title>VK</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
<?php include BASE_PATH . '/app/view/header.php' ?>
<section class="main">
    <?php if(empty($_SESSION['user_id'])): ?>
        <?php include BASE_PATH . '/app/view/' . $view . '.php' ?>
    <?php else: ?>
        <p>Hello <?php echo $_SESSION['login']; ?> </p>
    <?php endif; ?>
</section>
<?php include BASE_PATH . '/app/view/footer.php'; ?>
</body>
</html>