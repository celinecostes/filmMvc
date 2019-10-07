<div class="container-fluid" style="background-color: silver;" name="search">
  <p>
    <h2>Rechercher un film</h2>
  </p>
  <p>Saisissez un mot-clé<p>
      <form method="post" action="">
        <p><input class="form-control form-control-sm" type="text" placeholder=""> <input type="submit" value="Envoyer">
        </p>
      </form>
</div>
<p>
  <h1>Voici la liste de tous nos films</h1>
</p>
<div class="card-group">
  <div class="row">
    {foreach from=$allfilm key=k item=film}
    <div class="card col-4">
      <img class="card-img-top" src="{$film->get_affiche()}" class="img-fluid" alt="Responsive image"
        alt="Card image cap">
      <div class="card-body">
        <p><strong>{$film->get_titre()}</strong> ({$film->get_annee()})</p>
        <p>Réalisé par : {$film->get_realisateur()}</p>
        {foreach from=$film->get_role() key=k item=role}
        Acteurs  : 
        <p>{$role->get_acteur()->get_prenom()} {$role->get_acteur()->get_nom()} ({$role->get_personnage()})</p>
      {{/foreach}}
      </div>
    </div>
    {/foreach}
  </div>