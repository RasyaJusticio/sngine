<?php
/* Smarty version 5.4.1, created on 2025-03-26 06:08:01
  from 'file:ajax.course.apply.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e399c1b2e284_48794966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f78710563152d575887643cde2959e80369e2db' => 
    array (
      0 => 'ajax.course.apply.tpl',
      1 => 1714485367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67e399c1b2e284_48794966 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Course Enrollment");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/course.php?do=apply&post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
  <div class="modal-body">
    <div class="text-xlg mb10"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Information");?>
</div>
    <div class="row">
      <!-- name -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>
</label>
        <input name="name" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('user')->_data['name'];?>
">
      </div>
      <!-- name -->
      <!-- location -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>
</label>
        <input name="location" type="text" class="form-control">
      </div>
      <!-- location -->
    </div>
    <div class="row">
      <!-- phone -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone");?>
</label>
        <input name="phone" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_phone'];?>
">
      </div>
      <!-- phone -->
      <!-- email -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email");?>
</label>
        <input name="email" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_email'];?>
">
      </div>
      <!-- email -->
    </div>
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apply");?>
</button>
  </div>
</form><?php }
}
