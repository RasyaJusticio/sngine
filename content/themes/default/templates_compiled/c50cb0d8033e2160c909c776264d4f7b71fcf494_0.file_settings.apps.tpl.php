<?php
/* Smarty version 5.4.1, created on 2025-03-26 09:28:35
  from 'file:settings.apps.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3c8c3ba4047_29038293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c50cb0d8033e2160c909c776264d4f7b71fcf494' => 
    array (
      0 => 'settings.apps.tpl',
      1 => 1685353413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:_no_data.tpl' => 1,
  ),
))) {
function content_67e3c8c3ba4047_29038293 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"apps",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apps");?>

</div>
<div class="card-body">
  <div class="alert alert-info">
    <div class="text">
      <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apps");?>
</strong><br>
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("These are apps you've used to log into. They can receive information you chose to share with them.");?>

    </div>
  </div>

  <?php if ($_smarty_tpl->getValue('apps')) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('apps'), 'app', true);
$_smarty_tpl->getVariable('app')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('app')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('app')->iteration++;
$_smarty_tpl->getVariable('app')->last = $_smarty_tpl->getVariable('app')->iteration === $_smarty_tpl->getVariable('app')->total;
$foreach0Backup = clone $_smarty_tpl->getVariable('app');
?>
      <div class="form-table-row <?php if ($_smarty_tpl->getVariable('app')->last) {?>mb0<?php }?>">
        <div class="avatar">
          <img class="tbl-image app-icon" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('app')['app_icon'];?>
">
        </div>
        <div>
          <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getValue('app')['app_name'];?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getValue('app')['app_description'];?>
</div>
        </div>
        <div class="text-end">
          <button class="btn btn-sm btn-danger js_delete-user-app" data-id="<?php echo $_smarty_tpl->getValue('app')['app_auth_id'];?>
">
            <i class="fas fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

          </button>
        </div>
      </div>
    <?php
$_smarty_tpl->setVariable('app', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
    <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php }?>
</div><?php }
}
