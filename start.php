<?php
/**
 * Elgg groups_bookmarkswidget plugin
 *
 * @package Elgggroups_bookmarkswidget
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @copyright Kévin Dunglas - 2010
 */

function groups_bookmarkswidget_init() {
  extend_view('css', 'groups_bookmarkswidget/css', 900);
  extend_view('groups/left_column', 'groups_bookmarkswidget/left_column', 100);
}

register_elgg_event_handler('init','system','groups_bookmarkswidget_init');
?>