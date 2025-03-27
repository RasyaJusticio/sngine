<?php
/* Smarty version 5.4.1, created on 2025-03-26 07:06:56
  from 'file:ajax.job.apply.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3a790e5b269_34340884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c6e920f188a634158e9a02cfce92f213fe2f77f' => 
    array (
      0 => 'ajax.job.apply.tpl',
      1 => 1705231072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67e3a790e5b269_34340884 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Job Apply");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/job.php?do=apply&post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
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
    <div class="divider mtb10"></div>
    <div class="mb10">
      <span class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Experience");?>
</span>
      <small class="badge bg-light text-dark mr5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Optional");?>
</small>
    </div>
    <div class="row">
      <!-- work place -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Where did you work?");?>
</label>
        <input name="work_place" type="text" class="form-control">
      </div>
      <!-- work place -->
      <!-- work position -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Position");?>
</label>
        <input name="work_position" type="text" class="form-control">
      </div>
      <!-- work position -->
    </div>
    <!-- work description -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</label>
      <textarea name="work_description" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- work description -->
    <!-- work duration -->
    <div class="row">
      <div class="col-md-6 form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From");?>
</label>
        <select class="form-select" name="work_from">
          <?php $_smarty_tpl->assign('i', 2022, false, NULL);?>
          <?php
 while ($_smarty_tpl->getValue('i') >= 1970) {?>
            <option value="<?php echo $_smarty_tpl->getValue('i');?>
"><?php echo $_smarty_tpl->getValue('i');?>
</option>
            <?php echo $_smarty_tpl->getVariable('i')->postIncDec('--');?>

          <?php }?>

        </select>
      </div>
      <div class="col-md-6 form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To");?>
</label>
        <select class="form-select" name="work_to">
          <?php $_smarty_tpl->assign('i', 2022, false, NULL);?>
          <?php
 while ($_smarty_tpl->getValue('i') >= 1970) {?>
            <option value="<?php echo $_smarty_tpl->getValue('i');?>
"><?php echo $_smarty_tpl->getValue('i');?>
</option>
            <?php echo $_smarty_tpl->getVariable('i')->postIncDec('--');?>

          <?php }?>

        </select>
        <div class="form-check mt10">
          <input type="checkbox" class="form-check-input" name="work_now" id="work_now">
          <label class="form-check-label" for="work_now">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("I currently work here");?>

          </label>
        </div>
      </div>
    </div>
    <!-- work duration -->
    <!-- questions -->
    <?php if ($_smarty_tpl->getValue('post')['job']['question_1_title'] || $_smarty_tpl->getValue('post')['job']['question_2_title'] || $_smarty_tpl->getValue('post')['job']['question_3_title']) {?>
      <div class="divider mtb10"></div>
      <div class="mb10">
        <span class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Job Questions");?>
</span>
        <small class="badge bg-light text-dark mr5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Required");?>
</small>
      </div>
      <div class="form-group">
        <div>
          <!-- question #1 -->
          <?php if ($_smarty_tpl->getValue('post')['job']['question_1_title']) {?>
            <div class="job-question">
              <label class="form-label mb5"><?php echo $_smarty_tpl->getValue('post')['job']['question_1_title'];?>
</label>
              <?php if ($_smarty_tpl->getValue('post')['job']['question_1_type'] == "free_text") {?>
                <textarea name="question_1_answer" rows="3" dir="auto" class="form-control"></textarea>
              <?php } elseif ($_smarty_tpl->getValue('post')['job']['question_1_type'] == "yes_no_question") {?>
                <div>
                  <div class="form-check">
                    <input type="radio" name="question_1_answer" id="question_1_yes" value="yes" class="form-check-input">
                    <label class="form-check-label" for="question_1_yes"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="question_1_answer" id="question_1_no" value="no" class="form-check-input">
                    <label class="form-check-label" for="question_1_no"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</label>
                  </div>
                </div>
              <?php } else { ?>
                <div>
                  <select class="form-select" name="question_1_answer">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('post')['job']['question_1_options'], 'value', false, 'id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                      <option value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getValue('value');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              <?php }?>
            </div>
          <?php }?>
          <!-- question #1 -->
          <!-- question #2 -->
          <?php if ($_smarty_tpl->getValue('post')['job']['question_2_title']) {?>
            <div class="job-question">
              <label class="form-label mb5"><?php echo $_smarty_tpl->getValue('post')['job']['question_2_title'];?>
</label>
              <?php if ($_smarty_tpl->getValue('post')['job']['question_2_type'] == "free_text") {?>
                <textarea name="question_2_answer" rows="3" dir="auto" class="form-control"></textarea>
              <?php } elseif ($_smarty_tpl->getValue('post')['job']['question_2_type'] == "yes_no_question") {?>
                <div>
                  <div class="form-check">
                    <input type="radio" name="question_2_answer" id="question_2_yes" value="yes" class="form-check-input">
                    <label class="form-check-label" for="question_2_yes"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="question_2_answer" id="question_2_no" value="no" class="form-check-input">
                    <label class="form-check-label" for="question_2_no"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</label>
                  </div>
                </div>
              <?php } else { ?>
                <div>
                  <select class="form-select" name="question_2_answer">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('post')['job']['question_2_options'], 'value', false, 'id');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                      <option value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getValue('value');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              <?php }?>
            </div>
          <?php }?>
          <!-- question #2 -->
          <!-- question #3 -->
          <?php if ($_smarty_tpl->getValue('post')['job']['question_3_title']) {?>
            <div class="job-question">
              <label class="form-label mb5"><?php echo $_smarty_tpl->getValue('post')['job']['question_3_title'];?>
</label>
              <?php if ($_smarty_tpl->getValue('post')['job']['question_3_type'] == "free_text") {?>
                <textarea name="question_3_answer" rows="3" dir="auto" class="form-control"></textarea>
              <?php } elseif ($_smarty_tpl->getValue('post')['job']['question_3_type'] == "yes_no_question") {?>
                <div>
                  <div class="form-check">
                    <input type="radio" name="question_3_answer" id="question_3_yes" value="yes" class="form-check-input">
                    <label class="form-check-label" for="question_3_yes"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="question_3_answer" id="question_3_no" value="no" class="form-check-input">
                    <label class="form-check-label" for="question_3_no"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</label>
                  </div>
                </div>
              <?php } else { ?>
                <div>
                  <select class="form-select" name="question_3_answer">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('post')['job']['question_3_options'], 'value', false, 'id');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
                      <option value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getValue('value');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              <?php }?>
            </div>
          <?php }?>
          <!-- question #3 -->
        </div>
      </div>
    <?php }?>
    <!-- questions -->
    <!-- CV attachment -->
    <div class="divider mtb10"></div>
    <div class="mb10">
      <span class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("CV Attachment");?>
</span>
      <small class="badge bg-light text-dark mr5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Optional");?>
</small>
    </div>
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload your CV");?>
</label>
      <div class="x-image">
        <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
        <div class="x-image-loader">
          <div class="progress x-progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <i class="fa fa-paperclip fa-lg js_x-uploader" data-handle="x-file" data-type="file"></i>
        <input type="hidden" class="js_x-image-input" name="cv" value="">
      </div>
      <div class="form-text">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Allowed file types");?>
: <?php echo $_smarty_tpl->getValue('system')['file_extensions'];?>

      </div>
    </div>
    <!-- CV attachment -->


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
