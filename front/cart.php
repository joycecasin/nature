<?php include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <form class="col-md-12" method="post">
                        <div class="site-blocks-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Foto</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Prijs</th>
                                        <th class="product-quantity">Aantal</th>
                                        <th class="product-total">Totaal</th>
                                        <th class="product-remove">Verwijderen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="" alt="Image" class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black"></h2>
                                        </td>
                                       
                                        <td>
                                            <div class="input-group mb-3" style="max-width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                </div>
                                                <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                </div>
                                            </div>

                                        </td>
                                       
                                        <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
                                    </tr>

                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="" alt="Image" class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black"></h2>
                                        </td>
                                        
                                        <td>
                                            <div class="input-group mb-3" style="max-width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                </div>
                                                <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                </div>
                                            </div>

                                        </td>
            
                                        <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <button class="btn btn-outline-primary btn-sm btn-block" onclick="window.location='shop.php'">Continue Shopping</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-5">
                        <div class="row justify-content-end">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12 text-right border-bottom mb-5">
                                        <h3 class="text-black h4 text-uppercase">Totaal</h3>
                                    </div>
                                </div>
                            

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php'">Afrekenen</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('includes/footer.php'); ?>