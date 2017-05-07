<?php /* Smarty version Smarty-3.1.19, created on 2017-05-04 07:50:25
         compiled from "/home/ngrclemak836005/public_html/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1813505845590b15814be727-25528707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d23dc56e8efe9a1adfbdde2019a80e5493b2fce' => 
    array (
      0 => '/home/ngrclemak836005/public_html/modules/welcome/views/templates/tooltip.tpl',
      1 => 1492618222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1813505845590b15814be727-25528707',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_590b15814c4557_83407938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590b15814c4557_83407938')) {function content_590b15814c4557_83407938($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
