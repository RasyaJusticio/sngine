<?php
/* Smarty version 5.4.1, created on 2025-03-26 09:07:11
  from 'file:admin.tips.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3c3bf7111f0_50456674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09d2aa05c4782cb65113cde579e4435a38f840c3' => 
    array (
      0 => 'admin.tips.tpl',
      1 => 1696400761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67e3c3bf7111f0_50456674 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-dollar-sign mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tips");?>

  </div>

  <form class="js_ajax-forms" data-url="admin/settings.php?edit=tips">
    <div class="card-body">
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tips",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tips");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the tips On and Off");?>
<br>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/wallet"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet System");?>
</a>
          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="tips_enabled">
            <input type="checkbox" name="tips_enabled" id="tips_enabled" <?php if ($_smarty_tpl->getValue('system')['tips_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Minimum Tip");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="tips_min_amount" value="<?php echo $_smarty_tpl->getValue('system')['tips_min_amount'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The minimum amount of money so user can tip");?>

          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Maximum Tip");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="tips_max_amount" value="<?php echo $_smarty_tpl->getValue('system')['tips_max_amount'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The maximum amount of money so user can tip");?>

          </div>
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mt15 mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-end">
      <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
    </div>
  </form>
</div><?php }
}
