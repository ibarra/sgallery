<table>
  <tbody>
    <tr>
      <th>Id members:</th>
      <td><?php echo $sf_gallery_members->getIdMembers() ?></td>
    </tr>
    <tr>
      <th>Gallery:</th>
      <td><?php echo $sf_gallery_members->getGalleryId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $sf_gallery_members->getUserId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('gallerymembers/edit?id_members='.$sf_gallery_members->getIdMembers()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('gallerymembers/index') ?>">List</a>
