<?php
  include("template/header.php")
 ?>


<div class="container mb-5">
	<div class="row">
		<div class="col-md-12 col-lg-6 mt-5 pr-5">

			<p class="mt-5 text-center title p-2">Titre du livre</p>

            <div class="row mt-5">
          
                <div class="col-lg-6">
                    <img src="../assets/img/randomImage.jpg" alt="oui oui">
                </div>

                <div class="col-lg-6 mt-5">
                    <p>Jean Michel Mangemicro<p>
                    <p>Publié le 17/01/2019<p>
                    <p>Science Fiction</p>
                    <p>Emprunté</p>
                    <input type="submit" name="addBook" value="Restituer" class="d-block mx-auto p-2 deco w-100">




                </div>

                <div class="col-lg-12 mt-5">
                <p>Résumé:</p><br>
                  <p>zqerestdryfgtujhkes rdfghjzqresdtfygkuhyjthgzqre srdtfygkuyjhqsfdghjkugjfhdgsqdd
                      dddddddddsfdghrtjrehuhbiiiiiiiiiiiiiiiohynttttttttttttttt
                      ttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                      ttttttttbzpu(vhnzèy('etbujhph</p>
                </div>
                
            </div>

		</div>
		
		<div class="col-md-12 col-lg-5 mx-auto mt-5">
						
			<form method="post" action="index.php" class="mt-5 bgform">
        
            <div class="row mb-1">
                <div class="form-group mb-4 col-6">
                    <label for="category" class="mb-0 pb-0 mt-2 typo">Utilisateurs :</label>
                                <select class=" p-1" name="category" required>
                                    <option value="" disabled>Utilisateurs</option>
                                    <option value="romance">Régis</option>
                                    <option value="policier">Françis</option>
                                    <option value="thriller">Marcel</option>
                                    

                                </select>
                </div>

        
            <div class="form-group mb-4 col-6">
            <input type="submit" name="addBook" value="Emprunter" class="d-block mx-auto p-2 deco w-100">
            

            </div>

        
            <div class="form-group mb-4 col-6">
            <input type="submit" name="addBook" value="Supprimer" class="d-block mx-auto p-2 deco w-100 text-danger">
            </div>

    
            <div class="form-group mb-4 col-6">
            <input type="submit" name="addBook" value="Modifier" class="d-block mx-auto p-2 deco w-100">
            </div>
        </div>
    </form>



    <form method="post" action="index.php" class="mt-5 bgform">
        <div class="row">
        <div class="col-md-12 col-lg-10 mx-auto mt-5">
			
    
						
        
        <div class="form-group mb-4">
            <label for="title" class="mb-0 pb-0 mt-2 typo">Titre :</label>
            <input type="text" class="form-control rad" id="title" aria-describedby="nameHelp" placeholder="Titre" name=title autofocus required>
        </div>
        
				<div class="form-group mb-4">
					<label for="author" class="mb-0 pb-0 mt-2 typo">Auteur :</label>
					<input type="text" class="form-control rad" id="author" placeholder="Auteur" name="author" required>
				</div>
        
        <div class="form-group  mb-4">
					<label for="date" class="mb-0 pb-0 mt-2 typo">Date de publication :</label>
					<input type="date" class="form-control rad" id="date" max="<?= $date=date("Y-m-d") ?>" value="<?= $date ?>" name="date" required>
				</div>
        
        <div class="form-group  mb-4">
					<label for="category" class="mb-0 pb-0 mt-2 typo">Catégorie :</label>
					<select class=" p-1" name="category" required>
						<option value="" disabled>Catégories</option>
                        <option value="romance">Romance</option>
                        <option value="policier">Policier</option>
                        <option value="thriller">Thriller</option>
                        <option value="thriller">Science fiction</option>

					</select>
				</div>
               
        <div class="form-group mb-4">
          <label for="image" class="mb-0 pb-0 mt-2 typo">Modifier image :</label>
          <input type="file" name="image" id="image" class=""/>
        </div>
        
        <div class="form-group mb-4">
				  <label for="resume" class="mb-0 pb-0 mt-2 typo">Résumé :</label>
				  <textarea class="form-control" name="resume" id="resume" rows="5"></textarea>
				</div>

				<input type="submit" name="addBook" value="Valider" class="d-block mx-auto w-50 p-2 deco">
                
            </div>
        </div>
    </form>


        
			
    </div>


    
    
    

</div>
</div>

<?php
   include("template/footer.php")
  ?>

