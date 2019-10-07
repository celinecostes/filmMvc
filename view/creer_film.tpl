 
 <div id="formulaire">
 <p style ="background-color: darkgrey;">Formulaire d'enregistrement d'un nouveau film</p>

 <p>
 <form action="creer_film" method="POST">
          <div class="form-group">
          <label for="formGroup">Titre du film : </label>
          <input type="text"  name = "titre">
          </div>
          <div class="form-group">
          <label for="formGroup">réalisateur : </label>
          <input type="text" name="realisateur">
          </div>
          <div class="form-group">
          <label for="formGroup">affiche : </label>
          <input type="text" name="affiche">
          </div>
          <div class="form-group">
          <label for="formGroup">année : </label>
          <input type="text" name="annee">
          </div>
          <button type="submit" >Valider</button>
     </form>
     </p>
</div>
