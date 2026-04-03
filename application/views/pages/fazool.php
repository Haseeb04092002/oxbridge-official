<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hero Section</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <section class="position-relative min-vh-100 d-flex align-items-center text-white">

        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
            alt="Hero Background">

        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>

        <!-- Content -->
        <div class="container position-relative text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">
                        Build Digital Experiences
                    </h1>
                    <p class="lead mb-4">
                        We create modern, responsive, and scalable solutions to grow your business.
                    </p>

                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="#" class="btn btn-primary btn-lg px-4">
                            Get Started
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg px-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>