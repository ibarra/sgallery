<table>
  <tbody>
    <tr>
      <th>Id image:</th>
      <td><?php echo $sf_images->getIdImage() ?></td>
    </tr>
    <tr>
      <th>Gallery:</th>
      <td><?php echo $sf_images->getGalleryId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $sf_images->getUserId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $sf_images->getDescription() ?></td>
    </tr>
    <tr>
      <th>Order:</th>
      <td><?php echo $sf_images->getOrder() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $sf_images->getName() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sf_images->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sf_images->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('imagesgallery/edit?id_image='.$sf_images->getIdImage()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('imagesgallery/index') ?>">List</a>
