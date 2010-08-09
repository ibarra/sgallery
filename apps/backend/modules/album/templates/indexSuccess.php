<h1>Sp albums List</h1>

<table>
  <thead>
    <tr>
      <th>Id album</th>
      <th>Description</th>
      <th>Name</th>
      <th>User</th>
      <th>Category</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sp_albums as $sp_album): ?>
    <tr>
      <td><a href="<?php echo url_for('album/show?id_album='.$sp_album->getIdAlbum()) ?>"><?php echo $sp_album->getIdAlbum() ?></a></td>
      <td><?php echo $sp_album->getDescription() ?></td>
      <td><?php echo $sp_album->getName() ?></td>
      <td><?php echo $sp_album->getUserId() ?></td>
      <td><?php echo $sp_album->getCategoryId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('album/new') ?>">New</a>
