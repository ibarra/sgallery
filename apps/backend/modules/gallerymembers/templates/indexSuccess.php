<h1>Sf gallery memberss List</h1>

<table>
  <thead>
    <tr>
      <th>Id members</th>
      <th>Gallery</th>
      <th>User</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sf_gallery_memberss as $sf_gallery_members): ?>
    <tr>
      <td><a href="<?php echo url_for('gallerymembers/show?id_members='.$sf_gallery_members->getIdMembers()) ?>"><?php echo $sf_gallery_members->getIdMembers() ?></a></td>
      <td><?php echo $sf_gallery_members->getGalleryId() ?></td>
      <td><?php echo $sf_gallery_members->getUserId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('gallerymembers/new') ?>">New</a>
