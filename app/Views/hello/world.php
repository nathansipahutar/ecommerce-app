<?php

use PhpParser\Node\Stmt\Echo_;
?>
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Hello world</h1>
<?= $data ?>
<?= $this->endSection() ?>