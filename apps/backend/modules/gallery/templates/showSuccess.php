<table>
  <tbody>
    <tr>
      <th>Id gallery:</th>
      <td><?php echo $sf_gallery->getIdGallery() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $sf_gallery->getTitle() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $sf_gallery->getDescription() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $sf_gallery->getUserId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sf_gallery->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sf_gallery->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('gallery/edit?id_gallery='.$sf_gallery->getIdGallery()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('gallery/index') ?>">List</a>
