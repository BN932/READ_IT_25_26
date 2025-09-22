<div class="col-md-12">
      <div class="page-header">
        <h1>LISTE DES POSTS</h1>
      </div>
      
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($users as $user): ?>
            <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['firstname']; ?></td>
            <td><?php echo $user['lastname']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td>
              <a class="btn btn-primary" href="users/edit/<?php echo $user['id']; ?>">Modifier</a>
              <a class="btn btn-secondary" href="users/delete/<?php echo $user['id']; ?>">Supprimer</a>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
  </div>