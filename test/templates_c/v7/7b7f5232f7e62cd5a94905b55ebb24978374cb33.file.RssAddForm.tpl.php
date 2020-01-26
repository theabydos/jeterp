<?php /* Smarty version Smarty-3.1.7, created on 2020-01-25 22:34:13
         compiled from "/var/www/html/jeterp.cairostates.com/includes/runtime/../../layouts/v7/modules/Rss/RssAddForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6791413965e2cc265b807a7-14786293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b7f5232f7e62cd5a94905b55ebb24978374cb33' => 
    array (
      0 => '/var/www/html/jeterp.cairostates.com/includes/runtime/../../layouts/v7/modules/Rss/RssAddForm.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6791413965e2cc265b807a7-14786293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e2cc265b88cc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2cc265b88cc')) {function content_5e2cc265b88cc($_smarty_tpl) {?>



<div class='modal-dialog' id="rssAddFormUi"><div class="modal-content"><?php ob_start();?><?php echo vtranslate('LBL_ADD_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<form class="form-horizontal" id="rssAddForm"  method="post" action="index.php" ><div class="modal-body"><div class="row"><div class="col-lg-12"><div class="col-lg-4 fieldLabel"><label><?php echo vtranslate('LBL_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-8 fieldValue"><input class="form-control" type="text" id="feedurl" name="feedurl" data-rule-required="true" data-rule-url="true" value="" placeholder="<?php echo vtranslate('LBL_ENTER_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>
<?php }} ?>