<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <!-- BOOTSTRAP'S LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- PERSONAL CSS -->
    <link rel="stylesheet" href="./src/styles/main.css">
</head>
<body>
    <div id="app">
        <?php
          include_once __DIR__ . '/src/components/header.php';
        ?>

        <?php
          include_once __DIR__ . '/src/components/main.php';
        ?>
    </div>

    <!-- VUE'S LINK -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- AXIOS'S LINK -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- BOOTSTRAP'S JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- MAIN JAVASCRIPT -->
    <script src="./src/JS/main.js"></script>
</body>
</html>