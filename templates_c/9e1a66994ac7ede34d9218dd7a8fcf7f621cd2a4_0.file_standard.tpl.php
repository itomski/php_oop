<?php
/* Smarty version 5.6.0, created on 2025-10-22 09:28:02
  from 'file:standard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f8a3a24f8ed1_50844420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e1a66994ac7ede34d9218dd7a8fcf7f621cd2a4' => 
    array (
      0 => 'standard.tpl',
      1 => 1761125272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main-nav.tpl' => 1,
  ),
))) {
function content_68f8a3a24f8ed1_50844420 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    <?php $_smarty_tpl->renderSubTemplate("file:main-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <main class="container">
        <h1><?php echo $_smarty_tpl->getValue('title');?>
</h1>
        <p><?php echo $_smarty_tpl->getValue('content');?>
</p>
    </main>
</body>
</html><?php }
}
