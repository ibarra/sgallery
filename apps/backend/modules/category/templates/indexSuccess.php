<h1>Sp categorys List</h1>

<table>
  <thead>
    <tr>
      <th>Id category</th>
      <th>Name</th>
      <th>Description</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sp_categorys as $sp_category): ?>
    <tr>
      <td><a href="<?php echo url_for('category/show?id_category='.$sp_category->getIdCategory()) ?>"><?php echo $sp_category->getIdCategory() ?></a></td>
      <td><?php echo $sp_category->getName() ?></td>
      <td><?php echo $sp_category->getDescription() ?></td>
      <td><?php echo $sp_category->getDate() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('category/new') ?>">New</a>
