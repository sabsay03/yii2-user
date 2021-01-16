<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel sabsay03\user\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if (Yii::$app->user->id==1):?>
<div class="user-index">



    <p>
        <?= Html::a('Kategori Ekle', ['/categories/categories/create'], ['class' => 'btn btn-success']) ?>
    </p>



    <p>
        <?= Html::a('Ürün Ekle', ['/products/products/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<?php else:?>
    Sadece ID si 1  olan kullanıcı (Yani Admin) bu sayfayı görüntüleyebilir.
<?php endif;?>