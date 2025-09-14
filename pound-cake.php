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
                    </div>
                </div>
            </nav>
        </header>

        <section class="pb-5 pb-lg-0 mt-5">
            <div class="container">
                <div class="row align-items-start position-relative" style="min-height: 600px;">
                    <div class="col-lg-6">
                        <h1 class="hero-title">Pound Cake</h1>
                        <p class="pb-5 pe-md-5 hero-description">
                            Our pound cake is made with the perfect blend of ingredients, delivering a soft and moist texture with a rich, classic taste. Whether it’s for an afternoon snack, a special celebration, or simply a sweet treat every slice will bring you joy and satisfaction.
                        </p>
                        <div class="d-md-none cursor-pointer">
                            <img class="img-fluid" src="images/pound-cake-lerge.png">
                        </div>
                    </div>

                    <div>
                        <div class="text-center text-lg-end position-absolute left-0 top-0 d-none d-md-block cursor-pointer" style="width: 700px; right:0;">
                            <img class="img-fluid mt-5" src="images/pound-cake-lerge.png">
                        </div>
                    </div>
                </div>
            </div> 
        </section>

    </div>

    <div class="filter-area mt-5 mb-5">
        <div class="container pound-cake">
            <h2 class="pound-cake-title mb-5"> <span></span> Easily calculate your recipe in seconds</h2>
            <form action="">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="cake_weight" class="form-label">How many grams of cake do you want to make?</label>
                            <input type="text" class="form-control" id="cake_weight" placeholder="Enter your cake weight" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="oven_model" class="form-label">Which model of oven do you want to use for baking the cake?</label>
                            <select class="form-select w-100" id="oven_model" required>
                                <option value="" selected disabled hidden>Select your model</option>
                                <option value="1">M32CTS</option>
                                <option value="2">M25CDS</option>
                                <option value="3">M30AS3</option>
                                <option value="4">G30SCT</option>
                                <option value="5">25CDP</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>Ingredients</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Flour</td>
                                <td>140 g</td>
                            </tr>
                            <tr>
                                <td>Sugar</td>
                                <td>140 g</td>
                            </tr>
                            <tr>
                                <td>Egg</td>
                                <td>140 g</td>
                            </tr>
                            <tr>
                                <td>Powder Milk</td>
                                <td>3 g</td>
                            </tr>
                            <tr>
                                <td>Soybean Oil</td>
                                <td>71 g</td>
                            </tr>
                            <tr>
                                <td>Baking Powder</td>
                                <td>6 g</td>
                            </tr>
                            <tr>
                                <td>Vanilla Essence</td>
                                <td>5 g</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="fw-bold">Total</td>
                                <td class="fw-bold">500 g</td>
                            </tr>
                        </tfoot>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <div class="oven-model">
                        <div class="d-flex justify-content-center mt-3 temperature">
                            <h2>170 °</h2>
                            <img src="images/fire-icon.png" alt="" class="img-fluid">
                        </div>
                        <h4>Set Temperature</h4>
                        <p>“The temperature may need to be increased or decreased depending on the voltage.”</p>
                        <img src="images/oven-1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    
                </div>
                <div class="details-info mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                           <h2 class="pound-cake-title mb-5"> <span></span>  Details Recipe</h2>
                        </div>
                        <div class="col-lg-7">
                            <p><strong>Step 1:</strong> Sift together flour, milk powder, and baking powder into a bowl and mix well.</p>
                            <p><strong>Step 2:</strong> In another bowl, beat the eggs with a beater. Gradually add sugar while beating until it becomes fluffy and foamy.</p>
                            <p><strong>Step 3:</strong> Gradually add the flour mixture into the egg mixture and mix well. Then add soybean oil and vanilla essence (drops) and combine thoroughly.</p>
                            <p><strong>Step 4:</strong> Before pouring the batter, line the mold with baking paper and brush lightly with oil. Then pour the batter into the mold.</p>
                        </div>
                        <div class="col-lg-5">
                            <img class="img-fluid" src="images/details-image-one.jpg" alt="" >
                        </div>

                        <div class="col-lg-5 mt-3">
                            <img class="img-fluid" src="images/details-image-two.png" alt="" >
                        </div>
                        <div class="col-lg-7 mt-3">
                            <p><strong>Step 1:</strong> Preheat the oven in convection mode at the set temperature for 5 minutes. Once preheating is complete, place the mold with the batter into the oven.</p>
                            <p><strong>Step 2:</strong> Set the convection time for 40–60 minutes, adjust the temperature as required, and start the oven.</p>
                            <p><strong>Step 3:</strong> Baking time may vary depending on voltage, mold, and type of cake. After about 30-40 minutes, insert a dry stick into the cake to check. If the stick comes out with batter, the cake is not ready yet. If it comes out clean, the cake is done.</p>
                        </div>

                        <div class="col-lg-12 mt-5">
                            <h2 class="pound-cake-title mb-5"> <span></span> Cake Baking Tips</h2>
                            <p>1. If baking powder is old, the cake will collapse, so always use good quality and fresh baking powder.</p>
                            <p>2. Never store baking powder in the refrigerator; always keep it at room temperature.</p>
                            <p>3. Do not open the oven door repeatedly while baking.</p>
                            <p>4. Measure all ingredients accurately, as incorrect proportions may cause your cake to turn out poorly.</p>
                            <p>5. Use eggs at normal room temperature. Take them out of the refrigerator at least 30 minutes before use.</p>
                        </div>

                        <div class="col-lg-12 mt-5">
                            <h2 class="pound-cake-title mb-5"> <span></span> Note</h2>
                            <p>Each recipe is tested in our lab. However, variations in ingredients and cooking methods may affect the quality of the food.</p>
                        </div>
                        
                    </div>
                </div>
            </form>
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