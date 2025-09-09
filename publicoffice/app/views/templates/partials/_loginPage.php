<style>
    .flex-col {
        display: flex;
        flex-direction: column;
        padding: 1em;
    }
</style>

<div class='flex-col'>
<h1>Login page</h1>

<form class="flex-col" action='users/login' method='POST' enctype='application/x-www-form-urlencoded'> 
    <label for="email">Adresse email:</label><br>    
    <input type='text' id='email' name='email' placeholder='deer@john.com'>
    <label for="password">Votre mot de passe:</label><br>    
    <input type='password' id='password' name='password' placeholder='Mot de passe'>
    <input type='submit' value='submit'>
</div>