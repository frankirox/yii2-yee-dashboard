<?php

/* @var $this yii\web\View */

$this->title = 'Dashboard';
$this->params['description'] = 'YeeCMS 0.2.0';
$this->params['header-content'] = $this->render('actions');

$widgets = [
        ['row' => 0, 'column' => 0, 'order' => 1, 'title' => 'Posts', 'collapsed' => false],
        ['row' => 0, 'column' => 0, 'order' => 2, 'title' => 'Pages', 'collapsed' => false],
        ['row' => 0, 'column' => 1, 'order' => 1, 'title' => 'Comments', 'collapsed' => true],
        ['row' => 1, 'column' => 0, 'order' => 1, 'title' => 'Users', 'collapsed' => false],
        ['row' => 1, 'column' => 1, 'order' => 1, 'title' => 'Activity', 'collapsed' => false],
        ['row' => 0, 'column' => 0, 'order' => 1, 'title' => 'Likes', 'collapsed' => true],
        ['row' => 1, 'column' => 1, 'order' => 2, 'title' => 'Sales', 'collapsed' => false],
];

//echo '<pre>';
//print_r($widgets);

$layoutId = 4;

$layouts = [
    1 => [[12]],
    2 => [[12], [6, 6]],
    3 => [[12], [5, 7]],
    4 => [[12], [7, 5]],
    5 => [[6, 6]],
    6 => [[5, 7]],
    7 => [[7, 5]],
];

foreach ($widgets as &$w) {
    if (!isset($layouts[$layoutId][$w['row']])) {
        $w['row'] = 0;
    }

    if (!isset($layouts[$layoutId][$w['row']][$w['column']])) {
        $w['column'] = 0;
    }
}

//echo '<pre>';
//print_r($widgets);
//echo '</pre>';

$grouped = [];
foreach ($widgets as $widget) {
    $grouped[$widget['row']][$widget['column']][] = $widget;
}
//echo '<pre>';
//print_r($grouped);
//echo '</pre>';
?>

<?= $this->render('info-box') ?>

<?php foreach ($layouts[$layoutId] as $key => $value) : ?>
    <?= $this->render('_parts/row', ['columns' => $value, 'widgets' => $grouped[$key]]) ?>
<?php endforeach; ?>
