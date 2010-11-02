<h1>Sf imagess List</h1>

<table>
  <thead>
    <tr>
      <th>Id image</th>
      <th>Gallery</th>
      <th>User</th>
      <th>Description</th>
      <th>Order</th>
      <th>Name</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sf_imagess as $sf_images): ?>
    <tr>
      <td><a href="<?php echo url_for('imagesgallery/show?id_image='.$sf_images->getIdImage()) ?>"><?php echo $sf_images->getIdImage() ?></a></td>
      <td><?php echo $sf_images->getGalleryId() ?></td>
      <td><?php echo $sf_images->getUserId() ?></td>
      <td><?php echo $sf_images->getDescription() ?></td>
      <td><?php echo $sf_images->getOrder() ?></td>
      <td><?php echo $sf_images->getName() ?></td>
      <td><?php echo $sf_images->getCreatedAt() ?></td>
      <td><?php echo $sf_images->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('imagesgallery/new') ?>">New</a>