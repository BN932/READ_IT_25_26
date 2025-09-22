    <style>
    .flex-col {
        display: flex;
        flex-direction: column;
        padding: 1em;
        gap: 0.5em;
    }

    .hidden {
      display: none;
    }
    </style>
    
    
    <div class="col-md-6">
      <div class="page-header">
        <h1>FORMULAIRE</h1>
      </div>
      <form class="flex-col" action="users/post" method="POST" enctype="application/x-www-form-urlencoded">
        <div class="flex-col">

          <input class="hidden" type="number" id="id" name="id" value="<?php echo $user['id'];?>" readonly />
          <label for="firstname">Firstname</label>
          <input type="text" id="firstname" name="firstname" value="<?php echo $user['firstname'];?>" placeholder="Type here the new firstname" />
          <label for="lastname">Lastname</label>
          <input type="text" id="lastname" name="lastname" value="<?php echo $user['lastname'];?>" placeholder="Type here the new lastname" />
          <label for="psw">Password</label>
          <input type="password" id="psw" name="password" placeholder="Create here a new strong password" />
          <label for="Email">Email</label>
          <input type="email" id="Email" name="email" value="<?php echo $user['email'];?>" placeholder="Type here the new email address" />
        </div>
        <div class="flex-col">
          <input type="submit" class="btn btn-lg btn-primary" />
        </div>
      </form>
    </div>