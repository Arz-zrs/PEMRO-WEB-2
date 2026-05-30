<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
        }
        
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: .5px;
        }

        .nav-link.active {
            font-weight: 600;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/home">My Profile</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= (current_url(true)->getPath() === '/home') ? 'active' : '' ?>"
                            href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (current_url(true)->getPath() === '/profile') ? 'active' : '' ?>"
                            href="/profile">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">