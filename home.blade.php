<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACC Records Management System</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
        }

        .hero-section {
            background: url('/images/bg.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.6);
            background-blend-mode: overlay;
        }

        .hero-logo img {
            width: 120px;
            height: auto;
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-primary,
        .btn-outline-light {
            padding: 10px 20px;
            font-size: 1rem;
        }

        footer {
            background: #343a40;
            color: #fff;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/images/acc-logo.png" alt="ACC Logo" width="40" height="40"
                        class="d-inline-block align-text">
                    Abuyog Community College
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="{{ route('signup') }}">Sign Up</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-logo">
            <img src="/images/acc-logo.png" alt="ACC Logo">
        </div>
        <div>
            <h1 class="hero-title">Welcome to ACC Records Processing System</h1>
            <p class="hero-subtitle">Secure Management of Student and Document Records</p>
            <div>
                <a href="{{ route('login') }}" class="btn btn-outline-light me-3">Log In</a>
                <a href="{{ route('signup') }}" class="btn btn-primary">Sign Up</a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Document Request Page</h2>
            <div class="row">
                <div class="col-md-4">
                    <i class="bi bi-speedometer2 display-4 text-primary"></i>
                    <h5 class="mt-3">Fast Processing</h5>
                    <p>Get your documents processed and tracked with minimal waiting time.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-lock display-4 text-primary"></i>
                    <h5 class="mt-3">Secure Records</h5>
                    <p>Your data is encrypted and stored securely within our system.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-people display-4 text-primary"></i>
                    <h5 class="mt-3">Accessible Anywhere</h5>
                    <p>Manage your records anytime, anywhere with online accessibility.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; {{ date('Y') }} Abuyog Community College. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
