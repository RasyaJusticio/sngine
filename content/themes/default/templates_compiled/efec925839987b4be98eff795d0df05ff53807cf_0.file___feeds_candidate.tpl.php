<?php
/* Smarty version 5.4.1, created on 2025-03-26 06:08:20
  from 'file:__feeds_candidate.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e399d4ba91f5_83724740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efec925839987b4be98eff795d0df05ff53807cf' => 
    array (
      0 => '__feeds_candidate.tpl',
      1 => 1722357221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e399d4ba91f5_83724740 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="job-candidate-wrapper">
  <div class="job-candidate-header">
    <div class="job-candidate-avatar">
      <a class="post-avatar-picture large" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('candidate')['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('candidate')['user_picture'];?>
);"></a>
    </div>
    <div class="job-candidate-info">
      <div class="name">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('candidate')['user_name'];?>
"><?php echo $_smarty_tpl->getValue('candidate')['name'];?>
</a>
      </div>
      <div class="row mb10">
        <div class="col-md-6">
          <i class="fas fa-map-marker-alt fa-fw mr5" style="color: #1f9cff;"></i><?php echo $_smarty_tpl->getValue('candidate')['location'];?>

        </div>
        <div class="col-md-6">
          <i class="fas fa-clock fa-fw mr5" style="color: #ffc107;"></i><span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('candidate')['applied_time'];?>
"><?php echo $_smarty_tpl->getValue('candidate')['applied_time'];?>
</span>
        </div>
      </div>
      <div class="row mb10">
        <div class="col-md-6">
          <i class="fas fa-phone-alt fa-fw mr5" style="color: #2bb431;"></i><?php echo $_smarty_tpl->getValue('candidate')['phone'];?>

        </div>
        <div class="col-md-6">
          <i class="fas fa-envelope fa-fw mr5" style="color: #009688;"></i><?php echo $_smarty_tpl->getValue('candidate')['email'];?>

        </div>
      </div>
      <div>
        <!-- message -->
        <?php if ($_smarty_tpl->getValue('system')['chat_enabled']) {?>
          <button type="button" class="btn btn-sm btn-primary rounded-pill js_chat-start" data-uid="<?php echo $_smarty_tpl->getValue('candidate')['user_id'];?>
" data-name="<?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('candidate')['user_name'];
} else {
echo $_smarty_tpl->getValue('candidate')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('candidate')['user_lastname'];
}?>" data-link="<?php echo $_smarty_tpl->getValue('candidate')['user_name'];?>
" data-picture="<?php echo $_smarty_tpl->getValue('candidate')['user_picture'];?>
">
            <i class="fa fa-comments mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Message");?>

          </button>
        <?php }?>
        <!-- message -->
        <!-- resume -->
        <?php if ($_smarty_tpl->getValue('candidate')['cv']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('candidate')['cv'];?>
" class="btn btn-sm btn-success rounded-pill" target="_blank">
            <i class="fa fa-paperclip mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Download CV");?>

          </a>
        <?php }?>
        <!-- resume -->
      </div>
    </div>
  </div>
  <?php if (!$_smarty_tpl->getValue('_for_course')) {?>
    <div class="divider mtb20"></div>
    <div class="job-question">
      <div class="mb10">
        <div class="question"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Where did you work?");?>
</div>
        <div class="answer"><?php echo $_smarty_tpl->getValue('candidate')['work_place'];?>
</div>
      </div>
      <div class="row mb10">
        <div class="col-md-4">
          <div class="question"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Position");?>
</div>
          <div class="answer"><?php echo $_smarty_tpl->getValue('candidate')['work_position'];?>
</div>
        </div>
        <div class="col-md-4">
          <div class="question"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From");?>
</div>
          <div class="answer"><?php echo $_smarty_tpl->getValue('candidate')['work_from'];?>
</div>
        </div>
        <div class="col-md-4">
          <div class="question"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To");?>
</div>
          <div class="answer"><?php if ($_smarty_tpl->getValue('candidate')['work_now']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Till Now");
} else {
echo $_smarty_tpl->getValue('candidate')['work_to'];
}?></div>
        </div>
      </div>
      <div class="question"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</div>
      <div class="answer"><?php echo $_smarty_tpl->getValue('candidate')['work_description'];?>
</div>
    </div>
    <!-- questions -->
    <?php if ($_smarty_tpl->getValue('candidate')['question_1_title'] || $_smarty_tpl->getValue('candidate')['question_2_title'] || $_smarty_tpl->getValue('candidate')['question_3_title']) {?>
      <div class="divider mtb20"></div>
      <div>
        <!-- question #1 -->
        <?php if ($_smarty_tpl->getValue('candidate')['question_1_title']) {?>
          <div class="job-question">
            <div class="question"><?php echo $_smarty_tpl->getValue('candidate')['question_1_title'];?>
</div>
            <div class="answer">
              <?php echo $_smarty_tpl->getValue('candidate')['question_1_answer'];?>

            </div>
          </div>
        <?php }?>
        <!-- question #1 -->
        <!-- question #2 -->
        <?php if ($_smarty_tpl->getValue('candidate')['question_2_title']) {?>
          <div class="job-question">
            <div class="question"><?php echo $_smarty_tpl->getValue('candidate')['question_2_title'];?>
</div>
            <div class="answer">
              <?php echo $_smarty_tpl->getValue('candidate')['question_2_answer'];?>

            </div>
          </div>
        <?php }?>
        <!-- question #2 -->
        <!-- question #3 -->
        <?php if ($_smarty_tpl->getValue('candidate')['question_3_title']) {?>
          <div class="job-question">
            <div class="question"><?php echo $_smarty_tpl->getValue('candidate')['question_3_title'];?>
</div>
            <div class="answer">
              <?php echo $_smarty_tpl->getValue('candidate')['question_3_answer'];?>

            </div>
          </div>
        <?php }?>
        <!-- question #3 -->
      </div>
    <?php }?>
    <!-- questions -->
  <?php }?>
</div><?php }
}
