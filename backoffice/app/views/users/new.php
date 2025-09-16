    <style>
    .flex-col {
        display: flex;
        flex-direction: column;
        padding: 1em;
        gap: 0.5em;
    }
    </style>
    
    
    <div class="col-md-6">
      <div class="page-header">
        <h1>FORMULAIRE</h1>
      </div>
      <form class="flex-col" action="users" method="POST" enctype="application/x-www-form-urlencoded">
        <div class="flex-col">
          <label for="firstname">Firstname</label>
          <input type="text" id="firstname" name="firstname" placeholder="Type here your firstname" />
          <label for="lastname">Lastname</label>
          <input type="text" id="lastname" name="lastname" placeholder="Type here your lastname" />
          <label for="psw">Password</label>
          <input type="password" id="psw" name="psw" placeholder="Create here a strong password" />
          <label for="Email">Email</label>
          <input type="email" id="Email" name="Email" placeholder="Type here your email address" />
        </div>
        <div class="flex-col">
          <input type="submit" class="btn btn-lg btn-primary" />
        </div>
      </form>
    </div>