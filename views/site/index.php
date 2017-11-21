
<?php
use yii\helpers\Html;

$this->title = $content->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<?php

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
?>
<div class="site-index">

 <!--    <div class="jumbotron">-->
 <!--        <h1>Congratulations!</h1>-->
 <!---->
 <!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
 <!---->
 <!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
 <!--    </div>-->

 <div class="body-content">

  <div class="row">
   <div class="col-lg-12">
    <h2>summary</h2>
    <p><?= $content->content_text;?></p>
   </div>
  </div>
  <hr>
  <div class="row">
   <div class="col-lg-8">

    <p><?= $content->content_text;?></p>

   </div>
   <div class="col-lg-4">
    <img src="img/<?= $content->image?>" style="height: 300px; width: 300px;">
   </div>
  </div>

 </div>
</div>