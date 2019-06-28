<?php
/**
 * DokuWiki Bootstrap3 Template: Sidebar
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

$sidebar_title = $lang['sidebar'];

if (bootstrap3_conf('sidebarShowPageTitle')) {
  $sidebar_title = p_get_first_heading(page_findnearest($sidebar_page, bootstrap3_conf('useACL')));
  if (! $sidebar_title) $sidebar_title = $lang['sidebar'];
}

?>
<!-- ********** ASIDE ********** -->
<div id="stwst">
  <div class="page">
  <?php bootstrap3_sidebar(tpl_include_page($sidebar_page, 0, 1, bootstrap3_conf('useACL'))) /* includes the nearest sidebar page */ ?>
  </div>
</div>
