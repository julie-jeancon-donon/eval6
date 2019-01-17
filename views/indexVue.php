<?php
  include("template/header.php")
 ?>

<div class="container mb-5">
	<div class="row">
		<div class="col-md-12 col-lg-8 mt-5 pr-5">

			<p class="mt-5 text-center title p-2">Livres de la bibliothèque</p>

            <div class="row mt-5">
          
          
                <div class="col-6 col-sm-6 col-md-4">
                    <a href="detailsBook.php">
                      <img src="../assets/img/randomImage.jpg" alt="book image" id="test" class="d-block mx-auto blop">
                      <p class="bookTitle mt-2 text-center p-2">Jean-Mi à la plage</p>
                    </a>
                </div>          
          
                <div class="col-6 col-sm-6 col-md-4">
                  <a href="detailsBook.php">
                    <img src="../assets/img/randomImage.jpg" alt="book image" class="img-fluid d-block mx-auto blop">
                    <p class="bookTitle mt-2 text-center p-2">Jean-Mi à la plage</p>
                 </a>
                </div>          
          
                <div class="col-6 col-sm-6 col-md-4">
                <a href="detailsBook.php">
                    <img src="../assets/img/randomImage.jpg" alt="book image" class="img-fluid d-block mx-auto blop">
                    <p class="bookTitle mt-2 text-center p-2">Jean-Mi à la plage</p>
              </a>
                </div>          
          
                <div class="col-6 col-sm-6 col-md-4">
                <a href="detailsBook.php">
                    <img src="../assets/img/randomImage.jpg" alt="book image" class="img-fluid d-block mx-auto blop">
                    <p class="bookTitle mt-2 text-center p-2">Jean-Mi à la plage</p>
                </a>
                </div>          
          
                <div class="col-6 col-sm-6 col-md-4">
                <a href="detailsBook.php">
                    <img src="../assets/img/randomImage.jpg" alt="book image" class="img-fluid d-block mx-auto blop">
                    <p class="bookTitle mt-2 text-center p-2">Jean-Mi à la plage</p>
                </a>
                </div>          
          
                <div class="col-6 col-sm-6 col-md-4">
                <a href="detailsBook.php">
                    <img src="../assets/img/randomImage.jpg" alt="book image" class="img-fluid d-block mx-auto blop">
                    <p class="bookTitle mt-2 text-center p-2">Jean-Mi à la plage</p>
                </a>
                </div>
            </div>

		</div>
		
		<div class="col-md-12 col-lg-4 mx-auto mt-5">
			
			<p class="title2 mt-5 p-2 title text-center">Ajouter un livre</p>
						
			<form method="post" action="index.php" class="mt-5 bgform">
        
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
          <label for="image" class="mb-0 pb-0 mt-2 typo">Ajouter image :</label>
          <input type="file" name="image" id="image" class=""/>
        </div>
        
        <div class="form-group mb-4">
				  <label for="resume" class="mb-0 pb-0 mt-2 typo">Résumé :</label>
				  <textarea class="form-control" name="resume" id="resume" rows="5"></textarea>
				</div>

				<input type="submit" name="addBook" value="Ajouter" class="d-block mx-auto w-50 p-2 deco">
			</form>
			
		</div>
	</div>
</div>

 <?php
   include("template/footer.php")
  ?>
