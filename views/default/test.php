<?php

use yeesoft\helpers\Url;
use yeesoft\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Test Page';
$this->params['description'] = 'YeeCMS 0.2.0';
?>
<pre>
    <?php print_r($result) ?>
</pre>

<?= Html::a('Page', ['/page/default/index']) ?><br/>
<?= Html::a('Update Page', ['/page/default/update', 'id' => 1]) ?><br/>
<?= Html::a('Delete Page', ['/page/default/delete', 'id' => 1]) ?><br/>
<?= Html::a('Post', ['/post/default/index']) ?><br/>
<?= Html::a('Update Post', ['/post/default/update', 'id' => 1]) ?><br/>
<?= Html::a('Delete Post', ['/post/default/delete', 'id' => 1]) ?><br/>