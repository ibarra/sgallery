<h1>Sf gallerys List</h1>

<table>
  <thead>
    <tr>
      <th>Id gallery</th>
      <th>Title</th>
      <th>Description</th>
      <th>User</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sf_gallerys as $sf_gallery): ?>
    <tr>
      <td><a href="<?php echo url_for('gallery/show?id_gallery='.$sf_gallery->getIdGallery()) ?>"><?php echo $sf_gallery->getIdGallery() ?></a></td>
      <td><?php echo $sf_gallery->getTitle() ?></td>
      <td><?php echo $sf_gallery->getDescription() ?></td>
      <td><?php echo $sf_gallery->getUserId() ?></td>
      <td><?php echo $sf_gallery->getCreatedAt() ?></td>
      <td><?php echo $sf_gallery->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('gallery/new') ?>">New</a>
