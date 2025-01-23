
<nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand ms-5" href="/Startseite">
                <img src="<?= base_url('/images/07_-_WE-Logo.svg'); ?>" alt="Web Entwicklung" height="50">
            </a>
            <!-- Toggler Button -->
            <button class="navbar-toggler btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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