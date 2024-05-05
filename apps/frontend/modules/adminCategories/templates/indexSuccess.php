<div id="sf_admin_container">
    <h1>Categories</h1>
    <div id="sf_admin_content">
        <div class="sf_admin_list">
            <table class="whiteBg">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Slug</th>
                        <th>Title en</th>
                        <th>Title fr</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hr_categories_list as $hr_categories): ?>
                    <tr>
                        <td>
                            <?php if ($hr_categories->getTreeLeft() != 1) { ?>
                                <a href="<?php echo url_for('adminCategories/edit?id='.$hr_categories->getId()) ?>"><?php echo $hr_categories->getId() ?></a>
                            <?php }  ?>
                        </td>
                        <td>  <?php //echo $hr_categories_list_levels[$hr_categories->getId()] ?>
                            <?php if ($hr_categories->getTreeParent() == 1){ echo "<b>"; } ?>
                            <?php if ($hr_categories->getTreeParent() != 1){ echo "&nbsp&nbsp&nbsp&nbsp"; } ?>
                                <?php echo $hr_categories->getSlug() ?></td>
                            <?php if ($hr_categories->getTreeParent() == 1) { echo "</b>"; } ?>
                        <td><?php echo $hr_categories->getTitleEn() ?></td>
                        <td><?php echo $hr_categories->getTitleFr() ?></td>
                        <td>
                                <?php if ($hr_categories->getTreeLeft() != 1) { ?>
                            <ul class="sf_admin_td_actions">
                                <li class="sf_admin_action_edit">
                                    <a href="<?php echo url_for('adminCategories/edit?id='.$hr_categories->getId()) ?>">Edit</a>
                                </li></ul>
                                    <?php }  ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?php echo url_for('adminCategories/new') ?>">New</a>
        </div>
    </div>
</div>