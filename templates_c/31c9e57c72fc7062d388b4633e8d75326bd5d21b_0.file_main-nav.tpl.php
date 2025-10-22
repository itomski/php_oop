<?php
/* Smarty version 5.6.0, created on 2025-10-22 09:49:26
  from 'file:main-nav.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_68f8a8a6aadd97_40883910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31c9e57c72fc7062d388b4633e8d75326bd5d21b' => 
    array (
      0 => 'main-nav.tpl',
      1 => 1761126562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f8a8a6aadd97_40883910 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?><!-- START: main-nav -->
<nav class="container">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?a=admin">Admin</a></li>
        <li><a href="index.php?c=fahrzeug">Fahrzeuge</a></li>
        <li><a href="index.php?c=kunde&a=liste">Kunden</a></li>
    </ul>
</nav>
<!-- END: main-nav --><?php }
}
