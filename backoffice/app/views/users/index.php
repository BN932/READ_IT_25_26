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
              <button type="button" class="btn btn-primary">Modifier</button>
              <button type="button" class="btn btn-secondary">Supprimer</button>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
  </div>