<?php
/* Smarty version 5.4.1, created on 2025-03-26 07:30:11
  from 'file:_boosted_post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3ad03ad9258_28026804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '714f84393be43004cd76be95c5463dc562cf40ba' => 
    array (
      0 => '_boosted_post.tpl',
      1 => 1647961207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
))) {
function content_67e3ad03ad9258_28026804 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted Posts");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'boosted'=>true), (int) 0, $_smarty_current_dir);
}
}
