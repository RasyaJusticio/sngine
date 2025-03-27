<?php
/* Smarty version 5.4.1, created on 2025-03-26 06:00:15
  from 'file:ajax.orders.view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e397efa95ce6_80031412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd240eb930152842df75495730330ddd163f1da1' => 
    array (
      0 => 'ajax.orders.view.tpl',
      1 => 1691322285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_order.tpl' => 1,
  ),
))) {
function content_67e397efa95ce6_80031412 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View Order");?>
 #<?php echo $_smarty_tpl->getValue('order')['order_hash'];?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <?php $_smarty_tpl->renderSubTemplate('file:_order.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for_admin'=>true,'sales'=>true), (int) 0, $_smarty_current_dir);
?>
</div><?php }
}
