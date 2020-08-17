<?php include("includes/header.php"); ?>

<?php
// enkel ingelogde gebruiker mag deze pagina zien
if (!$session->is_signed_in()) {
    redirect('login.php');
}

   $product = new Product();
    if (isset($_POST['submit'])) {
        if ($product) {
            $product->naam = $_POST['naam'];
            $product->omschrijving = $_POST['omschrijving'];
            $product->serienummer = $_POST['serienummer'];
            $product->prijs = $_POST['prijs'];


            $product->save();
            redirect('products.php');
        }
    }

?>
<?php include("includes/sidebar.php"); ?>
<?php include("includes/navbar.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Product Toevoegen</h2>
            <form action="add_product.php" method="post">
                <div class="col-md-8">

                    <div class="form-group">
                        <label for="naam">Naam</label>
                        <input type="text" name="naam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="omschrijving">omschrijving</label>
                        <input type="text" name="omschrijving" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="serienummer">serienummer</label>
                        <input type="text" name="serienummer" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="prijs">prijs</label>
                        <input type="text" name="prijs" class="form-control">
                    </div>

                    <input type="submit" name="submit" value="Product toevoegen" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>


