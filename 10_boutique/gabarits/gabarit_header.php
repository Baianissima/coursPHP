<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== -->
     
    <!-- fin containeur-fluid -->
    <header class="container-fluid f-header p-2">
        <div class="col-12 text-center">
            <h1 class="display-4">La Boutique</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    