 <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container bg-light">
        <section class="row">
        <?php echo $contenu ?>
            <form action="" method="POST" class="border border-info">
                <div class="mb-4">
                    <label for="civilite" class="form-label">Civilité *</label> <br>
                    <div class="row">
                        <div class="col-2">
                            <input type="radio" name="civilite" value="f" id="civilite" checked> Femme</input>
                        </div>
                        <div class="col-2">
                            <input type="radio" name="civilite" value="h" id="civilite" checked> Homme</input>
                        </div> 
                    </div>            
                </div>
                <!-- fin row -->

                <div class="row mb-4">
                    <div class="col-6">
                        <label for="prenom" class="form-label">Prénom *</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" ></input>
                    </div>

                    <div class="col-6">
                        <label for="nom" class="form-label">Nom *</label>
                        <input type="text" name="nom" id="nom" class="form-control" ></input>
                    </div>
                </div> 
                <!-- fin row -->

                <div class="mb-4">
                    <label for="email" class="form-label">Adresse e-mail *</label>
                    <input type="email" name="email" id="email" class="form-control" ></input>
                </div>

                <div class="mb-4">
                    <label for="pseudo" class="form-label">Choisir un pseudo *</label>
                    <input type="text" name="pseudo" id="pseudo" class="form-control" ></input>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Mot de passe *</label>
                    <input type="number" name="mdp" id="mdp" class="form-control" ></input>
                </div>

                <div class="mb-4">
                    <label for="adresse" class="form-label">Adresse *</label>
                    <!-- <input type="text" name="adresse" id="adresse" class="form-control" ></input> -->
                    <textarea name="adresse" id="adresse" cols="30" rows="5" class="form-control"></textarea>
                </div>

                <div class="mb-4">
                    <label for="code_postal" class="form-label">Code postal *</label>
                    <input type="text" name="code_postal" id="code_postal" class="form-control" ></input>
                </div>

                <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
            <!-- fin row form1 -->
        </section>
        <!-- fin row -->

        <section>
            <div class="col-md-10 mx-auto m-4">
                <h2 class="m-4 p-4 text-center"></h2>         
            </div>
            <!-- fin col -->
        </section
        ><!-- fin row -->
    </main>
    <!-- fin container -->