<?php
/* Smarty version 5.4.1, created on 2025-03-26 07:06:53
  from 'file:__feeds_job.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3a78d27b971_52079517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcd38079654209db3ec719ff189052a683e52e07' => 
    array (
      0 => '__feeds_job.tpl',
      1 => 1715932802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_need_subscription.tpl' => 1,
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67e3a78d27b971_52079517 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="col-md-6 col-lg-4">
  <div class="card product <?php if ($_smarty_tpl->getValue('_boosted')) {?>boosted<?php }?>">
    <?php if ($_smarty_tpl->getValue('_boosted')) {?>
      <div class="boosted-icon" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted");?>
">
        <i class="fa fa-bullhorn"></i>
      </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('post')['needs_subscription']) {?>
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
        <div class="ptb20 plr20">
          <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
      </a>
    <?php } else { ?>
      <div class="product-image">
        <div class="product-price">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('post')['job']['salary_minimum'],$_smarty_tpl->getValue('post')['job']['salary_minimum_currency']['symbol'],$_smarty_tpl->getValue('post')['job']['salary_minimum_currency']['dir']);?>
 - <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('post')['job']['salary_maximum'],$_smarty_tpl->getValue('post')['job']['salary_maximum_currency']['symbol'],$_smarty_tpl->getValue('post')['job']['salary_maximum_currency']['dir']);?>
 / <?php echo $_smarty_tpl->getValue('post')['job']['pay_salary_per_meta'];?>

        </div>
        <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['job']['cover_image'];?>
">
        <div class="product-overlay">
          <a class="btn btn-sm btn-outline-secondary rounded-pill" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More");?>

          </a>
          <?php if ($_smarty_tpl->getValue('post')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id']) {?>
            <button type="button" class="btn btn-sm btn-info rounded-pill js_job-apply" data-toggle="modal" data-size="large" data-url="posts/job.php?do=application&post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apply Now");?>

            </button>
          <?php }?>
        </div>
      </div>
      <div class="product-info">
        <div class="product-meta">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
" class="title"><?php echo $_smarty_tpl->getValue('post')['job']['title'];?>
</a>
        </div>
        <div class="product-meta">
          <i class="fa fa-briefcase fa-fw mr5" style="color: #2bb431;"></i><?php echo $_smarty_tpl->getValue('post')['job']['type_meta'];?>

        </div>
        <div class="product-meta">
          <i class="fa fa-map-marker fa-fw mr5" style="color: #1f9cff;"></i><?php if ($_smarty_tpl->getValue('post')['job']['location']) {
echo $_smarty_tpl->getValue('post')['job']['location'];
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("N/A");
}?>
        </div>
        <?php if ($_smarty_tpl->getValue('system')['posts_reviews_enabled']) {?>
          <div class="product-meta">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span><?php echo $_smarty_tpl->getValue('post')['reviews_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reviews");?>
</span>
            <?php if ($_smarty_tpl->getValue('post')['post_rate']) {?>
              <span class="review-stars small ml5">
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 1) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 2) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 3) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 4) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 5) {?>checked<?php }?>"></i>
              </span>
              <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('post')['post_rate'],1);?>
</span>
            <?php }?>
          </div>
        <?php }?>
      </div>
    <?php }?>
  </div>
</div><?php }
}
