<?php $view->extend('::base.html.twig') ?>

<?php $view['slots']->set('title', 'AppBundle:HelloWorld:index') ?>

<?php $view['slots']->start('body') ?>
    <h1>Welcome to the HelloWorld:index page</h1>
<?php $view['slots']->stop() ?>
