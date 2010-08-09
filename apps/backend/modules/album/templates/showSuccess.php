<table>
  <tbody>
    <tr>
      <th>Id album:</th>
      <td><?php echo $sp_album->getIdAlbum() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $sp_album->getDescription() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $sp_album->getName() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $sp_album->getUserId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $sp_album->getCategoryId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('album/edit?id_album='.$sp_album->getIdAlbum()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('album/index') ?>">List</a>
