<div class="col-md-12">
      <div class="page-header">
        <h1><?php echo $title ?></h1>
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
            <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['firstname']; ?></td>
            <td><?php echo $user['lastname']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td>
              <a href="users/edit/<?php echo $user['id']; ?>"><button type="button" class="btn btn-primary">Modifier</button></a>
              <button type="button" class="btn btn-secondary">Supprimer</button>
            </td>
          </tr>
        </tbody>
      </table>
  </div>