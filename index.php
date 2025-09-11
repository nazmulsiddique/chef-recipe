<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chef Recipe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="top-bar-area">
        <header class="main-menu">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.png" alt="Chef Recipe">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item px-4"><a class="nav-link px-0" href="#">Home</a></li>
                            <li class="nav-item px-4"><a class="nav-link px-0" href="#">Products</a></li>
                            <li class="nav-item px-4"><a class="nav-link px-0" href="#">About Us</a></li>
                            <li class="nav-item px-4"><a class="nav-link px-0" href="#">How To & Tips</a></li>
                            <li class="nav-item px-4"><a class="nav-link px-0" href="#">Blog</a></li>
                        </ul>
                        <div class="language">
                            <select class="form-select border-0 bg-transparent fw-semibold">
                                <option selected>English</option>
                                <option value="1">বাংলা</option>
                            </select>
                        </div>
                        <!-- <div class="dropdown">
                            <button class="btn dropdown-toggle fw-semibold" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                English
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">বাংলা</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </nav>
        </header>

        <section class="pb-5 pb-lg-0 mt-5">
            <div class="container">
                <div class="row align-items-start position-relative" style="min-height: 600px;">
                    <div class="col-lg-7">
                        <h1 class="hero-title">Chef’s Perfect Recipe</h1>
                        <p class="pb-5 pe-md-5 hero-description">
                            With Chef’s Perfect Recipe, cooking becomes easier and more reliable.
                            It adjusts the right ingredients, time, and settings for your oven to give you
                            perfect results every time. Whether you’re baking a cake or making a pizza,
                            our recipe calculator makes cooking simpler, faster, and tastier.
                        </p>
                        <div class="d-md-none cursor-pointer">
                            <img class="img-fluid" src="images/top-view-delicious-pizza.png">
                        </div>
                    </div>

                    <div>
                        <div class="text-center text-lg-end position-absolute left-0 top-0 d-none d-md-block cursor-pointer" style="width: 700px; right:0;">
                            <img class="img-fluid mt-5" src="images/top-view-delicious-pizza.png">
                        </div>
                    </div>
                </div>
            </div> 
        </section>

    </div>

    <div class="category-area mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-4">
                    <div class="category-item">
                        <img src="images/pound-cake.png" alt="Category 1" class="img-fluid py-3 px-2">
                        <div class="category-info">
                            <h5 class="mt-3">POUND CAKE</h5>
                            <p>Rich and moist pound cake, baked to perfection for a classic taste in every bite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="category-item">
                        <img src="images/sponge-cake.png" alt="Category 2" class="img-fluid py-3 px-2">
                        <div class="category-info">
                            <h5 class="mt-3">SPONGE CAKE <span class="upcoming-text">(Upcoming)</span></h5>
                            <p>Soft and fluffy sponge cake with a light texture, perfect for tea-time or dessert.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="category-item">
                        <img src="images/Dry Cake.png" alt="Category 3" class="img-fluid py-3 px-2">
                        <div class="category-info">
                            <h5 class="mt-3">Dry Cake <span class="upcoming-text">(Upcoming)</span></h5>
                            <p>Crisp and golden dry cake, a delightful snack for any time of the day.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="category-item">
                        <img src="images/Bun.png" alt="Category 3" class="img-fluid py-3 px-2">
                        <div class="category-info">
                            <h5 class="mt-3">Bun <span class="upcoming-text">(Upcoming)</span></h5>
                            <p>Freshly baked soft buns, ideal for burgers, sandwiches, or a simple snack.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="category-item">
                        <img src="images/Tandoori Chicken.png" alt="Category 3" class="img-fluid py-3 px-2">
                        <div class="category-info">
                            <h5 class="mt-3">Tandoori Chicken <span class="upcoming-text">(Upcoming)</span></h5>
                            <p>Juicy and flavorful chicken marinated with spices, roasted to a smoky perfection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="category-item">
                        <img src="images/Pizza.png" alt="Category 3" class="img-fluid py-3 px-2">
                        <div class="category-info">
                            <h5 class="mt-3">Pizza <span class="upcoming-text">(Upcoming)</span></h5>
                            <p>A pizza made with fresh ingredients, offering an authentic Italian taste in every slice.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="category-item">
                        <img src="images/Maltova Biscuit.png" alt="Category 3" class="img-fluid py-3 px-2">
                        <div class="category-info">
                            <h5 class="mt-3">Maltova Biscuit <span class="upcoming-text">(Upcoming)</span></h5>
                            <p>Golden and crumbly biscuits, baked to give a rich taste in every bite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="category-item">
                        <img src="images/Butter salt Biscuit.png" alt="Category 3" class="img-fluid py-3 px-2">
                        <div class="category-info">
                            <h5 class="mt-3">Butter salt Biscuit <span class="upcoming-text">(Upcoming)</span></h5>
                            <p>Crispy, light, and perfectly round biscuits for a quick and tasty snack.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <img src="images/footer-curve.png" alt="" class="img-fluid">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5>Who We Are</h5>
                        <ul class="ps-3">
                            <li><a href="" class="text-black text-decoration-none">Home</a></li>
                            <li><a href="" class="text-black text-decoration-none">About</a></li>
                            <li><a href="" class="text-black text-decoration-none">Message from Chairman</a></li>
                            <li><a href="" class="text-black text-decoration-none">Global Operation</a></li>
                            <li><a href="" class="text-black text-decoration-none">Certificates</a></li>
                            <li><a href="" class="text-black text-decoration-none">Accreditation</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>How we can help you?</h5>
                        <ul class="ps-3">
                            <li><a href="" class="text-black text-decoration-none">Contact Us</a></li>
                            <li><a href="" class="text-black text-decoration-none">Sales Outlet</a></li>
                            <li><a href="" class="text-black text-decoration-none">Store Locator</a></li>
                            <li><a href="" class="text-black text-decoration-none">Customer Care</a></li>
                            <li><a href="" class="text-black text-decoration-none">About Product Registration</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Awards</h5>
                        <ul class="ps-3">
                            <li><a href="" class="text-black text-decoration-none">International</a></li>
                            <li><a href="" class="text-black text-decoration-none">Local</a></li>
                            <li><a href="" class="text-black text-decoration-none">Special and Souvenir</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Newsroom</h5>
                        <ul class="ps-3">
                            <li><a href="" class="text-black text-decoration-none">Local News</a></li>
                            <li><a href="" class="text-black text-decoration-none">International</a></li>
                            <li><a href="" class="text-black text-decoration-none">Press Release</a></li>
                        </ul>
                    </div>
                    <div class="col text-end">
                        <h5>Support</h5>
                        <ul class="ps-3 list-unstyled">
                            <li><a href="" class="text-black text-decoration-none">16267/08000016267</a></li>
                        </ul>
                        <h5 class="mt-5">FOLLOW WALTON</h5>
                        <div class="ps-3">
                            <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Facebook">
                                <img src="images/facebook.png" alt="Facebook">
                            </a>
                            <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Twitter">
                                <img src="images/twitter.png" alt="Twitter">
                            </a>
                            <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Youtube">
                                <img src="images/youtube.png" alt="Youtube">
                            </a>
                            <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Instagram">
                                <img src="images/instagram.png" alt="Instagram">
                            </a>
                            <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="LinkedIn">
                                <img src="images/linkedin.png" alt="LinkedIn">
                            </a>
                            <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pinterest">
                                <img src="images/pinterest.png" alt="Pinterest">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 copyright">
                        <p class="text-center pt-3 text-black">Copyright © 2025 and all rights reserved by - All Sister Concerns of WALTON Group</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        });
    </script>

</body>

</html>