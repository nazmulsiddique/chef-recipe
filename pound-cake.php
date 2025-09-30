<?php include 'header.php'; ?>

<body>
    <div class="top-bar-area">
        <?php include 'navbar.php'; ?>
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

    <div class="filter-area mb-5">
        <div class="container pound-cake">
            <?php include 'breadcrumb.php'; ?>
            <h2 class="pound-cake-title mb-5"> <span></span> Easily calculate your recipe in seconds</h2>
                <form action="">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="cake_weight" class="form-label">How many grams of cake do you want to make?</label>
                                <input type="text" class="form-control" id="cake_weight" placeholder="Enter your cake weight in “Grams”" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="oven_model" class="form-label">Which model of oven do you want to use for baking the cake?</label>
                                <select class="form-select w-100" id="oven_model" required>
                                    <option value="" selected disabled hidden>Select your model</option>
                                    <option value="M32CTS">M32CTS</option>
                                    <option value="M25CDS">M25CDS</option>
                                    <option value="M30AS3">M30AS3</option>
                                    <option value="G30SCT">G30SCT</option>
                                    <option value="25CDP">25CDP</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" id="submitBtn" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-5 d-none" id="recipeDiv">
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
                                <td>140 g ( 1 Egg = 50g )</td>
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
                                <td>5 Drops</td>
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
                                <div class="d-flex justify-content-center mt-3 temperature mb-4">
                                    <h2>170 °</h2>
                                    <img src="images/fire-icon.png" alt="" class="img-fluid">
                                </div>
                                <h4>Set Temperature</h4>
                                <p>“The temperature may need to be increased or decreased depending on the voltage.”</p>
                            <img id="oven_image" src="" alt="" class="img-fluid">
                        </div>
                    </div>
                    
                </div>
                
                <div class="details-info mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                           <h2 class="pound-cake-title mb-5"> <span></span>  Details Recipe</h2>
                        </div>
                        <div class="col-lg-7">
                            <p><strong>Step 1:</strong> Put the flour, milk powder, and baking powder in a bowl, strain them with a strainer, and mix well. </p>
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
                            <p><strong>Step 5:</strong> Preheat the oven in convection mode at the set temperature for 5 minutes. Once preheating is complete, place the mold with the batter into the oven.</p>
                            <p><strong>Step 6:</strong> Set the convection time for 40–60 minutes, adjust the temperature as required, and start the oven.</p>
                            <p><strong>Step 7:</strong> Baking time may vary depending on voltage, mold, and type of cake. After about 30-40 minutes, insert a dry stick into the cake to check. If the stick comes out with batter, the cake is not ready yet. If it comes out clean, the cake is done.</p>
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
            
        </div>
    </div>

<?php include 'footer.php'; ?>