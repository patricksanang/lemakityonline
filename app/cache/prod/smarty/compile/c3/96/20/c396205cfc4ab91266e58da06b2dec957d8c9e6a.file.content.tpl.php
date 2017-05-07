<?php /* Smarty version Smarty-3.1.19, created on 2017-05-04 07:50:24
         compiled from "/home/ngrclemak836005/public_html/admin123/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1848183966590b1580c32b52-87477687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c396205cfc4ab91266e58da06b2dec957d8c9e6a' => 
    array (
      0 => '/home/ngrclemak836005/public_html/admin123/themes/default/template/content.tpl',
      1 => 1492598292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848183966590b1580c32b52-87477687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_590b1580cfdc32_36381949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590b1580cfdc32_36381949')) {function content_590b1580cfdc32_36381949($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
