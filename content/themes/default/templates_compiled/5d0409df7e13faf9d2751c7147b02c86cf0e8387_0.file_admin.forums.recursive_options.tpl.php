<?php
/* Smarty version 5.4.1, created on 2025-03-26 06:53:32
  from 'file:admin.forums.recursive_options.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3a46c4ef698_46335410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0409df7e13faf9d2751c7147b02c86cf0e8387' => 
    array (
      0 => 'admin.forums.recursive_options.tpl',
      1 => 1714809444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin.forums.recursive_options.tpl' => 2,
  ),
))) {
function content_67e3a46c4ef698_46335410 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><option <?php if ($_smarty_tpl->getValue('data')['forum_section'] == $_smarty_tpl->getValue('forum')['forum_id']) {?>selected style="font-weight: 600;" <?php }?> value="<?php echo $_smarty_tpl->getValue('forum')['forum_id'];?>
" <?php if (!$_smarty_tpl->getValue('forum')['iteration']) {?>class="bg-info" <?php }?>>
  <?php if ($_smarty_tpl->getValue('forum')['iteration']) {
echo str_repeat((string) "- - ", (int) $_smarty_tpl->getValue('forum')['iteration']);
}
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('forum')['forum_name'],30));?>

</option>
<?php if ($_smarty_tpl->getValue('forum')['childs']) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('forum')['childs'], '_forum');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_forum')->value) {
$foreach0DoElse = false;
?>
    <?php $_smarty_tpl->renderSubTemplate('file:admin.forums.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('forum'=>$_smarty_tpl->getValue('_forum')), (int) 0, $_smarty_current_dir);
?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
