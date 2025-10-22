<?php
/* Smarty version 5.6.0, created on 2025-10-22 09:43:00
  from 'file:tabelle.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f8a724379af7_39870788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f273afa79654c0a9c445cee52f3ec964a2af6c7e' => 
    array (
      0 => 'tabelle.tpl',
      1 => 1761126153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main-nav.tpl' => 1,
  ),
))) {
function content_68f8a724379af7_39870788 (\Smarty\Template $_smarty_tpl) {
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
        
        <table>
            <thead>
                <tr>
                    <th>Vorname</th>
                    <th>Nachname</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('content'), 'kunde');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('kunde')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('kunde')->getVorname();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('kunde')->getNachname();?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>

    </main>
</body>
</html><?php }
}
