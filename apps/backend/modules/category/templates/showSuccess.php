<table>
  <tbody>
    <tr>
      <th>Id category:</th>
      <td><?php echo $sp_category->getIdCategory() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $sp_category->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $sp_category->getDescription() ?></td>
    </tr>
    <tr>
      <th>Date:</th>
      <td><?php echo $sp_category->getDate() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('category/edit?id_category='.$sp_category->getIdCategory()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('category/index') ?>">List</a>
