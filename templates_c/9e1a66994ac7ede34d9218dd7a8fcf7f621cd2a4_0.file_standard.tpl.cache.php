<?php
/* Smarty version 5.6.0, created on 2025-10-22 09:03:23
  from 'file:standard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f89ddb781da1_67084603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e1a66994ac7ede34d9218dd7a8fcf7f621cd2a4' => 
    array (
      0 => 'standard.tpl',
      1 => 1761123248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f89ddb781da1_67084603 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
$_smarty_tpl->getCompiled()->nocache_hash = '72608448768f89ddb77eee8_97301955';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->getValue('title');?>
</h1>
    <p><?php echo $_smarty_tpl->getValue('content');?>
</p>
</body>
</html><?php }
}
