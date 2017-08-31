<?php
/* Smarty version 3.1.30, created on 2017-08-31 10:28:04
  from "D:\dev\smarty\views\components\header.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7c894dce1f0_29330984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77f05df96279cdd379f04d60a0db20d2644928e0' => 
    array (
      0 => 'D:\\dev\\smarty\\views\\components\\header.tpl.html',
      1 => 1504168082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a7c894dce1f0_29330984 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Smarty MVC</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/features">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav><?php }
}
