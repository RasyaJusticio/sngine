<?php
/* Smarty version 5.4.1, created on 2025-03-25 01:28:21
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e206b56f0b91_43592736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26f89c83f5702c21005b5e260f718a506bd3cfd1' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1667410219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e206b56f0b91_43592736 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
