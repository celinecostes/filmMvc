
<br>

<form action="connection" method="POST">
    <div>
        <label for="email">e-mail :</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">password :</label>
        <input type="password" id="password" name="password">
    <br><button type="submit" >Valider</button>
   
   <p>{$status}</p>
   {if isset($user)}
   {$user->get_email()}
   {/if}

   
    </div>
    
    