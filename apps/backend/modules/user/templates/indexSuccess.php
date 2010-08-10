<h1>Sp users List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Username</th>      
      <th>First name</th>
      <th>Last name</th>
      <th>Date</th>
      <th>Email</th>
      <th>Web</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sp_users as $sp_user): ?>
    <tr>
      <td><a href="<?php echo url_for('user/show?id_user='.$sp_user->getIdUser()) ?>"><?php echo $sp_user->getIdUser() ?></a></td>
      <td><?php echo $sp_user->getUsername() ?></td>      
      <td><?php echo $sp_user->getFirstName() ?></td>
      <td><?php echo $sp_user->getLastName() ?></td>
      <td><?php echo $sp_user->getDate() ?></td>
      <td><?php echo $sp_user->getEmail() ?></td>
      <td><?php echo $sp_user->getWeb() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('user/new') ?>">New</a>

  