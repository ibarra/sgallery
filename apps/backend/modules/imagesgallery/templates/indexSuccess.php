<?php
	use_helper("jQuery");
	use_helper("sfJQueryLightbox");
 ?>

<h1>Sf imagess List</h1>

<table>
  <thead>
    <tr>
      <th>Id image</th>
      <th>Gallery</th>
      <th>User</th>
      <th>Description</th>
      <th>Created at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sf_imagess as $sf_images): ?>
    <tr>
      <td><a href="<?php echo url_for('imagesgallery/show?id_image='.$sf_images->getIdImage()) ?>"><?php echo $sf_images->getIdImage() ?></a></td>
      <td>
         <?php echo light_image("/uploads/gallery/s_".
      		$sf_images->getName(), "/uploads/gallery/".$sf_images->getName(), $image_link_options
      		= array('title' => $sf_images->getDescription() . ' ' . $sf_images->getCreatedAt() ));
      ?>

      </td>
      <td><?php echo $sf_images->getUserId() ?></td>
      <td><?php echo $sf_images->getDescription() ?></td>      
      <td><?php echo $sf_images->getCreatedAt() ?></td>      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  