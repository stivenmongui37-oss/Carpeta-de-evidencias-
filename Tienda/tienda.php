<?php include('includes/header.php') ?>

<section class="tienda">
    <h2> Nuestros productos </h2>

    <div class="productos">
         <div class="card">
            <img src="img/pulsar ns 160 pro.png" alt="camiseta">
            <h3>Pulsar ns 160 pro </h3>
            <p clas="precio"> $ 10,999,000.00COP </p>
            <form action="compra.php" method="POST">
                <input type="hidden" name="producto" value="camiseta">
                <input type="number" name="precio" min="1" value="1">
                <button type="sumbit" class="btn"> Compra </button>


            </form>
            
            <div class="card">
                <img src="img/pulsar ns 250.png" alt="Gorra">
                <h3>Pulsar ns 250 </h3>
                <p class="precio"> $13.799.000COP</p>
                <form action="compra.php" method="POST">
                    <imnput type="hidden" name="producto" value="Gorra">
                    <imnput type="number" name="cantidad" min="1" value="1">
                    <button class="btn">Compra </button>
                </form> 
            </div>
        </div>
    </div>
</section>






<?php include('includes/footer.php') ?>