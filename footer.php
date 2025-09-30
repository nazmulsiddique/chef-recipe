    <footer>
        <img src="images/footer-curve-new.png" alt="" class="img-fluid">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Who We Are</h5>
                        <ul class="ps-3">
                            <li><a href="index.php" class="text-black text-decoration-none">Home</a></li>
                            <li><a href="https://waltonbd.com/about" target="_blank" class="text-black text-decoration-none">About</a></li>
                            <li><a href="https://waltonbd.com/Message-from-Chairman" target="_blank" class="text-black text-decoration-none">Message from Chairman</a></li>
                            <li><a href="https://waltonbd.com/Global-Operation" target="_blank" class="text-black text-decoration-none">Global Operation</a></li>
                            <li><a href="https://waltonbd.com/index.php?route=extension/d_blog_module/category&category_id=8" target="_blank" class="text-black text-decoration-none">Certificates</a></li>
                            <li><a href="https://waltonbd.com/accreditation" target="_blank" class="text-black text-decoration-none">Accreditation</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>How we can help you?</h5>
                        <ul class="ps-3">
                            <li><a href="https://waltonbd.com/contact" target="_blank" class="text-black text-decoration-none">Contact Us</a></li>
                            <li><a href="https://waltonplaza.com.bd/plaza-list" target="_blank" class="text-black text-decoration-none">Sales Outlet</a></li>
                            <li><a href="https://waltonbd.com/sales-outlet" target="_blank" class="text-black text-decoration-none">Store Locator</a></li>
                            <li><a href="https://waltonbd.com/sales-outlet" target="_blank" class="text-black text-decoration-none">Customer Care</a></li>
                            <li><a href="https://waltonbd.com/about-product-registration" target="_blank" class="text-black text-decoration-none">About Product Registration</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <h5>Support</h5>
                        <ul class="ps-3 list-unstyled">
                            <li><a href="tel:16216" class="text-black text-decoration-none">16267/08000016267</a></li>
                        </ul>
                        <h5 class="mt-md-5 mt-3">FOLLOW WALTON</h5>
                        <div class="ps-3 mb-4">
                            <a href="https://www.facebook.com/Waltonbd" target="_blank" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Facebook">
                                <img src="images/facebook.png" alt="Facebook">
                            </a>
                            <a href="https://x.com/WaltonBD_" target="_blank" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Twitter">
                                <img src="images/twitter.png" alt="Twitter">
                            </a>
                            <a href="https://www.youtube.com/user/WaltonHil" target="_blank" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Youtube">
                                <img src="images/youtube.png" alt="Youtube">
                            </a>
                            <a href="https://www.instagram.com/walton.refrigerator/" target="_blank" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Instagram">
                                <img src="images/instagram.png" alt="Instagram">
                            </a>
                            <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=bf&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fwalon-group%2F" target="_blank" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="LinkedIn">
                                <img src="images/linkedin.png" alt="LinkedIn">
                            </a>
                            <a href="https://www.pinterest.com/waltongroupbd/" target="_blank" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pinterest">
                                <img src="images/pinterest.png" alt="Pinterest">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 copyright">
                        <p class="text-center pt-3 text-black">Copyright © <?php echo date("Y"); ?> and all rights reserved by - All Sister Concerns of WALTON Group</p>
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
        // Tooltip init
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(function (el) {
            new bootstrap.Tooltip(el);
        });

        // Change oven image
        var ovenModel = document.getElementById("oven_model");
        if (ovenModel) {
            ovenModel.addEventListener("change", function (e) {
                var img = document.getElementById("oven_image");
                img.src = "images/" + e.target.value + ".png";
                img.alt = e.target.value;
            });
        }

        // Show/hide recipe div
        var submitBtn = document.getElementById("submitBtn");
        if (submitBtn) {
            submitBtn.addEventListener("click", function (e) {
                e.preventDefault();
                var recipeDiv = document.getElementById("recipeDiv");
                recipeDiv.classList.toggle("d-none");
            });
        }
    });
    </script>

</body>

</html>