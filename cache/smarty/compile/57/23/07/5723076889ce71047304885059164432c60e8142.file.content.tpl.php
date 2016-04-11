<?php /* Smarty version Smarty-3.1.19, created on 2016-04-11 10:34:59
         compiled from "/Applications/MAMP/htdocs/lm_prestashop/admin25351atpu/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192900106570b61b32264c8-17268813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5723076889ce71047304885059164432c60e8142' => 
    array (
      0 => '/Applications/MAMP/htdocs/lm_prestashop/admin25351atpu/themes/default/template/content.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192900106570b61b32264c8-17268813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570b61b322b7f3_86204880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570b61b322b7f3_86204880')) {function content_570b61b322b7f3_86204880($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
