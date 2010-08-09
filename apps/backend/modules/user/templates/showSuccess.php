<table>
  <tbody>
    <tr>
      <th>Id user:</th>
      <td><?php echo $sp_user->getIdUser() ?></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td><?php echo $sp_user->getUsername() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $sp_user->getPassword() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $sp_user->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $sp_user->getLastName() ?></td>
    </tr>
    <tr>
      <th>Date:</th>
      <td><?php echo $sp_user->getDate() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $sp_user->getEmail() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('user/edit?id_user='.$sp_user->getIdUser()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('user/index') ?>">List</a>
