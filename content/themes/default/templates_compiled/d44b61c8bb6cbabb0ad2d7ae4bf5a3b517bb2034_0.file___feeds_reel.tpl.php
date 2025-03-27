<?php
/* Smarty version 5.4.1, created on 2025-03-26 07:25:11
  from 'file:__feeds_reel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3abd787a684_98722856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd44b61c8bb6cbabb0ad2d7ae4bf5a3b517bb2034' => 
    array (
      0 => '__feeds_reel.tpl',
      1 => 1727355905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.text.tpl' => 1,
    'file:__svg_icons.tpl' => 3,
    'file:__reaction_emojis.tpl' => 2,
    'file:__feeds_post_reel.tpl' => 1,
  ),
))) {
function content_67e3abd787a684_98722856 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="reel-container<?php if ($_smarty_tpl->getValue('_hidden') || $_smarty_tpl->getValue('_iteration') > 1) {?> hidden<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
  <div class="position-relative">
    <div class="reel-video-wrapper">
      <div class="reel-prev-btn js_reel-prev-btn"><i class="fa fa-chevron-circle-up fa-3x"></i></div>
      <div class="reel-next-btn js_reel-next-btn"><i class="fa fa-chevron-circle-down fa-3x"></i></div>
      <div class="reel-video-container">
        <video class="js_video-plyr" data-reel="true" id="reel-<?php echo $_smarty_tpl->getValue('post')['reel']['reel_id'];?>
" <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>onplay="update_media_views('reel', <?php echo $_smarty_tpl->getValue('post')['reel']['reel_id'];?>
)" <?php }?> <?php if ($_smarty_tpl->getValue('post')['reel']['thumbnail']) {?>data-poster="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['reel']['thumbnail'];?>
" <?php }?> preload="auto" <?php if ($_smarty_tpl->getValue('_iteration') == 1) {?>autoplay<?php }?> playsinline preload="auto">
          <?php if (empty($_smarty_tpl->getValue('post')['reel']['source_240p']) && empty($_smarty_tpl->getValue('post')['reel']['source_360p']) && empty($_smarty_tpl->getValue('post')['reel']['source_480p']) && empty($_smarty_tpl->getValue('post')['reel']['source_720p']) && empty($_smarty_tpl->getValue('post')['reel']['source_1080p']) && empty($_smarty_tpl->getValue('post')['reel']['source_1440p']) && empty($_smarty_tpl->getValue('post')['reel']['source_2160p'])) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['reel']['source'];?>
" type="video/mp4">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('post')['reel']['source_240p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['reel']['source_240p'];?>
" type="video/mp4" size="240">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('post')['reel']['source_360p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['reel']['source_360p'];?>
" type="video/mp4" size="360">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('post')['reel']['source_480p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['reel']['source_480p'];?>
" type="video/mp4" size="480">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('post')['reel']['source_720p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['reel']['source_720p'];?>
" type="video/mp4" size="720">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('post')['reel']['source_1080p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['reel']['source_1080p'];?>
" type="video/mp4" size="1080">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('post')['reel']['source_1440p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['reel']['source_1440p'];?>
" type="video/mp4" size="1440">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('post')['reel']['source_2160p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['reel']['source_2160p'];?>
" type="video/mp4" size="2160">
          <?php }?>
        </video>

        <?php if ($_smarty_tpl->getValue('post')['text']) {?>
          <div class="video-caption-overlay"></div>
          <div class="video-caption">
            <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          </div>
        <?php }?>
        <div class="video-controlls">
          <div class="reel-actions">
            <!-- post picture -->
            <div class="post-avatar">
              <?php if ($_smarty_tpl->getValue('post')['is_anonymous']) {?>
                <div class="post-avatar-anonymous">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"spy",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
                </div>
              <?php } else { ?>
                <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->getValue('post')['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('post')['post_author_picture'];?>
);">
                </a>
                <?php if ($_smarty_tpl->getValue('post')['post_author_online']) {?><i class="fa fa-circle online-dot"></i><?php }?>
              <?php }?>
            </div>
            <!-- post picture -->

            <!-- reactions -->
            <div class="reel-action-btn">
              <div class="action-btn unselectable reactions-wrapper <?php if ($_smarty_tpl->getValue('post')['i_react']) {?>js_unreact-post<?php }?>" data-reaction="<?php echo $_smarty_tpl->getValue('post')['i_reaction'];?>
">
                <!-- reaction-btn -->
                <div class="reaction-btn">
                  <?php if (!$_smarty_tpl->getValue('post')['i_react']) {?>
                    <div class="reaction-btn-icon">
                      <i class="far fa-smile fa-fw white-icon"></i>
                    </div>
                  <?php } else { ?>
                    <div class="reaction-btn-icon">
                      <div class="inline-emoji no_animation">
                        <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('post')['i_reaction']), (int) 0, $_smarty_current_dir);
?>
                      </div>
                    </div>
                  <?php }?>
                </div>
                <!-- reaction-btn -->

                <!-- reactions-container -->
                <div class="reactions-container">
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reactions_enabled'), 'reaction');
$_smarty_tpl->getVariable('reaction')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('reaction')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('reaction');
?>
                    <div class="reactions_item reaction reaction-<?php echo $_smarty_tpl->getVariable('reaction')->iteration;?>
 js_react-post" data-reaction="<?php echo $_smarty_tpl->getValue('reaction')['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->getValue('reaction')['color'];?>
" data-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reaction')['title']);?>
">
                      <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('reaction')['reaction']), (int) 0, $_smarty_current_dir);
?>
                    </div>
                  <?php
$_smarty_tpl->setVariable('reaction', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
                <!-- reactions-container -->
              </div>
              <!-- reactions stats -->
              <span class="pointer" data-toggle="modal" data-url="posts/who_reacts.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                <?php echo $_smarty_tpl->getValue('post')['reactions_total_count_formatted'];?>

              </span>
              <!-- reactions stats -->
            </div>
            <!-- reactions -->

            <!-- comment -->
            <div class="reel-action-btn">
              <div class="action-btn js_reel-comments-toggle">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comment",'class'=>"white-icon",'width'=>"30px",'height'=>"30px"), (int) 0, $_smarty_current_dir);
?>
              </div>
              <span class="pointer  js_reel-comments-toggle"><?php echo $_smarty_tpl->getValue('post')['comments_formatted'];?>
</span>
            </div>
            <!-- comment -->

            <!-- share -->
            <?php if ($_smarty_tpl->getValue('post')['privacy'] == "public" || ($_smarty_tpl->getValue('post')['in_group'] && $_smarty_tpl->getValue('post')['group_privacy'] == "public") || ($_smarty_tpl->getValue('post')['in_event'] && $_smarty_tpl->getValue('post')['event_privacy'] == "public")) {?>
              <div class="reel-action-btn">
                <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"white-icon",'width'=>"30px",'height'=>"30px"), (int) 0, $_smarty_current_dir);
?>
                </div>
                <!-- shares -->
                <span class="pointer" data-toggle="modal" data-url="posts/who_shares.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                  <?php echo $_smarty_tpl->getValue('post')['shares_formatted'];?>

                </span>
                <!-- shares -->
              </div>
            <?php }?>
            <!-- share -->
          </div>
        </div>
      </div>
    </div>
    <div class="reel-comments-wrapper">
      <div class="clearfix">
        <div class="pt5 pr5 float-end">
          <button type="button" class="btn-close js_reel-comments-toggle">
          </button>
        </div>
      </div>
      <div class="lightbox-post" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
        <div class="js_scroller" data-slimScroll-height="100%">
          <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post_reel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
