<?php
/* Smarty version 5.4.1, created on 2025-03-25 09:29:38
  from 'file:__categories.recursive_rows.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e277820ff539_56400933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f13d9887f8b0ef4d60f802cca872a3abbb9ec1' => 
    array (
      0 => '__categories.recursive_rows.tpl',
      1 => 1689671994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_rows.tpl' => 2,
  ),
))) {
function content_67e277820ff539_56400933 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><tr class="treegrid-<?php echo $_smarty_tpl->getValue('row')['category_id'];?>
 <?php if ($_smarty_tpl->getValue('row')['category_parent_id'] != '0') {?>treegrid-parent-<?php echo $_smarty_tpl->getValue('row')['category_parent_id'];
}?>">
  <td>
    <?php echo $_smarty_tpl->getValue('row')['category_name'];?>

  </td>
  <td>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('row')['category_description'],50);?>

  </td>
  <td>
    <span class="badge rounded-pill badge-lg bg-info"><?php echo $_smarty_tpl->getValue('row')['category_order'];?>
</span>
  </td>
  <td>
    <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/<?php echo $_smarty_tpl->getValue('_url');?>
/edit_<?php if ($_smarty_tpl->getValue('_edit_slug')) {
echo $_smarty_tpl->getValue('_edit_slug');?>
_<?php }?>category/<?php echo $_smarty_tpl->getValue('row')['category_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
      <i class="fa fa-pencil-alt"></i>
    </a>
    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="<?php echo $_smarty_tpl->getValue('_handle');?>
" data-id="<?php echo $_smarty_tpl->getValue('row')['category_id'];?>
">
      <i class="fa fa-trash-alt"></i>
    </button>
  </td>
</tr>
<?php if ($_smarty_tpl->getValue('row')['sub_categories']) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('row')['sub_categories'], '_row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_row')->value) {
$foreach0DoElse = false;
?>
    <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('row'=>$_smarty_tpl->getValue('_row'),'_url'=>$_smarty_tpl->getValue('_url'),'_handle'=>$_smarty_tpl->getValue('_handle')), (int) 0, $_smarty_current_dir);
?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
