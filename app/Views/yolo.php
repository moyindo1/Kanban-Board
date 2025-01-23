<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/Style.css'); ?>">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.1/dist/locale/bootstrap-table-de-DE.min.js"></script>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand ms-5" href="/Startseite">
            <img src="<?= base_url('public/images/07_-_WE-Logo.svg'); ?>" alt="Web Entwicklung" height="50">
        </a>
        <!-- Toggler Button -->
        <button class="navbar-toggler btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                     <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                </span>
        </button>
        <!-- Collapsible Navigation -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-5">
                <a class="nav-link active" aria-current="page" href="/tasks">Tasks</a>
                <a class="nav-link" href="/boards">Boards</a>
                <a class="nav-link" href="/spalten">Spalten</a>
                <a class="nav-link" href="/personen">Personen</a>
            </div>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    <!-- Dein Hauptinhalt kommt hierhin -->
</main>

<footer class="mt-auto pt-3 pb-3 text-white" style="background-color: #343a40;">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <a class="text-white" href="#">©Web-Entwicklung 2024</a>
            </div>
            <div>
                <a class="text-white" href="#">Impressum</a>
                <a class="text-white" href="#">Datenschutz</a>
                <a class="text-white" href="#">Kontakt</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
