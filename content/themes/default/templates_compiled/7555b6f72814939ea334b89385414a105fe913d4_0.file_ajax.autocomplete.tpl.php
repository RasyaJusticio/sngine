<?php
/* Smarty version 5.4.1, created on 2025-03-25 09:31:07
  from 'file:ajax.autocomplete.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e277dbba5be6_60437464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7555b6f72814939ea334b89385414a105fe913d4' => 
    array (
      0 => 'ajax.autocomplete.tpl',
      1 => 1707823892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e277dbba5be6_60437464 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><ul>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
    <li>
      <div class="data-container clickable small <?php if ($_smarty_tpl->getValue('type') == 'tags') {?>js_tag-add<?php } else { ?>js_autocomplete-add<?php }?>" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
" data-name="<?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_user')['user_name'];
} else {
echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];
}?>" <?php if ($_smarty_tpl->getValue('_user')['chat_price']) {?>data-chat-price="<?php echo $_smarty_tpl->getValue('_user')['chat_price'];?>
" <?php }?> <?php if ($_smarty_tpl->getValue('_user')['call_price']) {?>data-call-price="<?php echo $_smarty_tpl->getValue('_user')['call_price'];?>
" <?php }?>>
        <div class="data-avatar">
          <img class="data-avatar" src="<?php echo $_smarty_tpl->getValue('_user')['user_picture'];?>
" alt="">
        </div>
        <div class="data-content">
          <div><strong><?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_user')['user_name'];
} else {
echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];
}?></strong></div>
        </div>
      </div>
    </li>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul><?php }
}
