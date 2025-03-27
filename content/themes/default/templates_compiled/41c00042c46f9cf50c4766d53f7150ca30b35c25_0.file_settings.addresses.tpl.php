<?php
/* Smarty version 5.4.1, created on 2025-03-26 09:37:43
  from 'file:settings.addresses.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3cae71ec210_51258777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c00042c46f9cf50c4766d53f7150ca30b35c25' => 
    array (
      0 => 'settings.addresses.tpl',
      1 => 1688826835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:_addresses.tpl' => 1,
  ),
))) {
function content_67e3cae71ec210_51258777 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Addresses");?>

</div>
<div class="card-body">
  <?php $_smarty_tpl->renderSubTemplate('file:_addresses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div><?php }
}
