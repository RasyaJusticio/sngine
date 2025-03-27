<?php
/* Smarty version 5.4.1, created on 2025-03-26 07:04:13
  from 'file:ajax.job.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3a6edc3d0c5_34766840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '318bfb099d7a09d5a2545cff4ca0c486fcd1e998' => 
    array (
      0 => 'ajax.job.publisher.tpl',
      1 => 1714200937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
))) {
function content_67e3a6edc3d0c5_34766840 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Job");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/job.php?do=publish">
  <div class="modal-body">
    <div class="row">
      <!-- job title -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</label>
        <input name="title" type="text" class="form-control">
      </div>
      <!-- job title -->
      <!-- location -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>
</label>
        <input name="location" type="text" class="form-control">
      </div>
      <!-- location -->
    </div>
    <!-- salary range -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Salary Range");?>
</label>
      <div>
        <div class="input-group">
          <input name="salary_minimum" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Minimum");?>
">
          <select class="form-select" name="salary_minimum_currency">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'currency');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('currency')->value) {
$foreach0DoElse = false;
?>
              <option value="<?php echo $_smarty_tpl->getValue('currency')['currency_id'];?>
" <?php if ($_smarty_tpl->getValue('system')['system_currency_id'] == $_smarty_tpl->getValue('currency')['currency_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('currency')['symbol'];?>
 (<?php echo $_smarty_tpl->getValue('currency')['code'];?>
)</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>
      <div class="mt15">
        <div class="input-group">
          <input name="salary_maximum" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Maximum");?>
">
          <select class="form-select" name="salary_maximum_currency">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'currency');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('currency')->value) {
$foreach1DoElse = false;
?>
              <option value="<?php echo $_smarty_tpl->getValue('currency')['currency_id'];?>
" <?php if ($_smarty_tpl->getValue('system')['system_currency_id'] == $_smarty_tpl->getValue('currency')['currency_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('currency')['symbol'];?>
 (<?php echo $_smarty_tpl->getValue('currency')['code'];?>
)</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>
      <div class="mt15">
        <select class="form-select" name="pay_salary_per">
          <option value="per_hour"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Per Hour");?>
</option>
          <option value="per_day"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Per Day");?>
</option>
          <option value="per_week"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Per Week");?>
</option>
          <option value="per_month"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Per Month");?>
</option>
          <option value="per_year"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Per Year");?>
</option>
        </select>
      </div>
    </div>
    <!-- salary range -->
    <div class="row">
      <!-- job type -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>
</label>
        <select class="form-select" name="type">
          <option value="full_time"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Full Time");?>
</option>
          <option value="part_time"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Part Time");?>
</option>
          <option value="internship"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Internship");?>
</option>
          <option value="volunteer"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Volunteer");?>
</option>
          <option value="contract"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Contract");?>
</option>
        </select>
      </div>
      <!-- job type -->
      <!-- category -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>
</label>
        <select class="form-select" name="category">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('jobs_categories'), 'category');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach2DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <!-- category -->
    </div>
    <!-- description -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</label>
      <textarea name="description" rows="5" dir="auto" class="form-control"></textarea>
      <div class="form-text">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Describe the responsibilities and preferred skills for this job");?>

      </div>
    </div>
    <!-- description -->
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
      <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- questions -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Questions");?>
</label>
      <div>
        <!-- add question -->
        <div class="add-job-question js_add-job-question"><i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Question");?>
</div>
        <!-- add question -->
        <!-- question #1 -->
        <div class="job-question x-hidden" data-id="1">
          <label class="form-label mb10"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Question");?>
 #1</label>
          <select class="form-select js_question-type" name="question_1_type">
            <option value="free_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free Text Question");?>
</option>
            <option value="yes_no_question"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes/No Question");?>
</option>
            <option value="multiple_choice"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Multiple Choice Question");?>
</option>
          </select>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select the type of your question");?>

          </div>
          <input name="question_1_title" type="text" class="form-control mt10">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ask your question");?>

          </div>
          <div class="x-hidden js_question-choices">
            <textarea name="question_1_choices" rows="3" dir="auto" class="form-control mt10"></textarea>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("One option per line");?>

            </div>
          </div>
        </div>
        <!-- question #1 -->
        <!-- question #2 -->
        <div class="job-question x-hidden" data-id="2">
          <label class="form-label mb10"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Question");?>
 #2</label>
          <select class="form-select js_question-type" name="question_2_type">
            <option value="free_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free Text Question");?>
</option>
            <option value="yes_no_question"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes/No Question");?>
</option>
            <option value="multiple_choice"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Multiple Choice Question");?>
</option>
          </select>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select the type of your question");?>

          </div>
          <input name="question_2_title" type="text" class="form-control mt10">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ask your question");?>

          </div>
          <div class="x-hidden js_question-choices">
            <textarea name="question_2_choices" rows="3" dir="auto" class="form-control mt10"></textarea>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("One option per line");?>

            </div>
          </div>
        </div>
        <!-- question #2 -->
        <!-- question #3 -->
        <div class="job-question x-hidden" data-id="3">
          <label class="form-label mb10"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Question");?>
 #3</label>
          <select class="form-select js_question-type" name="question_3_type">
            <option value="free_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free Text Question");?>
</option>
            <option value="yes_no_question"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes/No Question");?>
</option>
            <option value="multiple_choice"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Multiple Choice Question");?>
</option>
          </select>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select the type of your question");?>

          </div>
          <input name="question_3_title" type="text" class="form-control mt10">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ask your question");?>

          </div>
          <div class="x-hidden js_question-choices">
            <textarea name="question_3_choices" rows="3" dir="auto" class="form-control mt10"></textarea>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("One option per line");?>

            </div>
          </div>
        </div>
        <!-- question #3 -->
      </div>
    </div>
    <!-- questions -->
    <!-- cover image -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cover Image");?>
</label>
      <div class="x-image">
        <div class="x-image-loader">
          <div class="progress x-progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
        <input type="hidden" class="js_x-image-input" name="cover_image" value="">
      </div>
    </div>
    <!-- cover image -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <?php if ($_smarty_tpl->getValue('share_to') == "page") {?>
      <input type="hidden" name="handle" value="page">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('share_to_id');?>
">
    <?php } elseif ($_smarty_tpl->getValue('share_to') == "group") {?>
      <input type="hidden" name="handle" value="group">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('share_to_id');?>
">
    <?php } elseif ($_smarty_tpl->getValue('share_to') == "event") {?>
      <input type="hidden" name="handle" value="event">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('share_to_id');?>
">
    <?php }?>
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish");?>
</button>
  </div>
</form>

<?php echo '<script'; ?>
>
  $(function() {
    /* handle job questions */
    $('.js_add-job-question').on('click', function() {
      if ($('.job-question[data-id="1"]').is(":hidden")) {
        $('.job-question[data-id="1"]').show();
        return;
      }
      if ($('.job-question[data-id="2"]').is(":hidden")) {
        $('.job-question[data-id="2"]').show();
        return;
      }
      if ($('.job-question[data-id="3"]').is(":hidden")) {
        $('.job-question[data-id="3"]').show();
        $(this).hide();
        return;
      }
    });
    /* handle job questions dependencies */
    $('.js_question-type').on('change', function() {
      if ($(this).val() == "multiple_choice") {
        $(this).parents('.job-question').find(".js_question-choices").show();
      } else {
        $(this).parents('.job-question').find(".js_question-choices").hide();
      }
    });
  });
<?php echo '</script'; ?>
><?php }
}
