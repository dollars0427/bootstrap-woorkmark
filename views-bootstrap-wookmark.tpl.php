<?php
/**
 * @file
 * Default view template to display a list of items in a grid.
 *
 * Available template variables:
 * - $view: The view object.
 * - $title: Title of the view. May be empty.
 * - $rows: Array of items.
 * - $list_class: The class for the items list.
 * - $classes: Array of classes for each item.
 * - $classes_array: Array of classes for each item.
 *
 * @ingroup views_templates
 */
?>
<div>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <ul class="active-wookmark" style="position: relative">
    <?php foreach ($rows as $id => $item): ?>
      <li>
      <div class="panel panel-default card">
        <div class="panel-body">
          <?php print $item;?>
        </div>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
</div>
