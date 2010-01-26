<?php
/**
 * Elgg groups_bookmarkswidget left column
 *
 * @package Elgggroups_bookmarkswidget
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @copyright Kévin Dunglas - 2010
 */
?>
<div id="bookmarks_widget_layout">
  <h2>Bookmarks</h2>
  
  <?php
  set_context('search');
  echo list_entities('object','bookmarks',page_owner());
  ?>
</div>