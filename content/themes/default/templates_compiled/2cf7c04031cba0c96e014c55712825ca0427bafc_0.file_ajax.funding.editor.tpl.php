<?php
/* Smarty version 5.4.1, created on 2025-03-26 07:07:27
  from 'file:ajax.funding.editor.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3a7af73bc99_02791040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cf7c04031cba0c96e014c55712825ca0427bafc' => 
    array (
      0 => 'ajax.funding.editor.tpl',
      1 => 1685731051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67e3a7af73bc99_02791040 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Funding Request");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
  <div class="modal-body">
    <!-- funding title -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</label>
      <input name="title" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('post')['funding']['title'];?>
">
    </div>
    <!-- funding title -->
    <!-- funding amount -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount You Would Like To Receive");?>
</label>
      <div class="input-money <?php echo $_smarty_tpl->getValue('system')['system_currency_dir'];?>
">
        <span><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
        <input type="text" class="form-control" placeholder="0.00" name="amount" value="<?php echo $_smarty_tpl->getValue('post')['funding']['amount'];?>
">
      </div>
    </div>
    <!-- funding amount -->
    <!-- funding description -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</label>
      <textarea name="description" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->getValue('post')['text_plain'];?>
</textarea>
    </div>
    <!-- funding description -->
    <!-- cover image -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cover Image");?>
</label>
      <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['funding']['cover_image'];?>
')">
        <div class="x-image-loader">
          <div class="progress x-progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
        <input type="hidden" class="js_x-image-input" name="cover_image" value="<?php echo $_smarty_tpl->getValue('post')['funding']['cover_image'];?>
">
      </div>
    </div>
    <!-- cover image -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="handle" value="funding">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cancel");?>
</button>
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save");?>
</button>
  </div>
</form><?php }
}
