<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $hr_categories->getId() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $hr_categories->getSlug() ?></td>
    </tr>
    <tr>
      <th>Tree left:</th>
      <td><?php echo $hr_categories->getTreeLeft() ?></td>
    </tr>
    <tr>
      <th>Tree right:</th>
      <td><?php echo $hr_categories->getTreeRight() ?></td>
    </tr>
    <tr>
      <th>Tree parent:</th>
      <td><?php echo $hr_categories->getTreeParent() ?></td>
    </tr>
    <tr>
      <th>Topic:</th>
      <td><?php echo $hr_categories->getTopicId() ?></td>
    </tr>
    <tr>
      <th>Title en:</th>
      <td><?php echo $hr_categories->getTitleEn() ?></td>
    </tr>
    <tr>
      <th>Title fr:</th>
      <td><?php echo $hr_categories->getTitleFr() ?></td>
    </tr>
    <tr>
      <th>Description en:</th>
      <td><?php echo $hr_categories->getDescriptionEn() ?></td>
    </tr>
    <tr>
      <th>Description fr:</th>
      <td><?php echo $hr_categories->getDescriptionFr() ?></td>
    </tr>
    <tr>
      <th>Is published:</th>
      <td><?php echo $hr_categories->getIsPublished() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $hr_categories->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $hr_categories->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('adminCategories/edit?id='.$hr_categories->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('adminCategories/index') ?>">List</a>
