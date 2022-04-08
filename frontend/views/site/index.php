<?php

/** @var yii\web\View $this */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'BonusList';
?>
<div class="site-index">
    <div class="row">
        <div class="col-2">
            <span>Имя: <?= $userData->first_name;?></span>
        </div>
        <div class="col-2">
            <span>Фамилия: <?= $userData->last_name;?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <span>Город: <?= $userData->home_town;?></span>
        </div>
        <div class="col-3">
            <span>Дата рождения: <?= $userData->bdate;?></span>
        </div>
    </div>
    <div class="row">

            <?php if (is_null($bonus)):?>
                <div class="col-12">
                    <button class="btn btn-success" onclick="document.location='bonus'">Получить бонус</button>
                </div>
            <?php else:?>
                <div class="col-2">
                    <span>Ваш бонус: </span>
                </div>
                <div class="col-4">
                    <span><?= $bonus->name;?></span>
                </div>
            <?php endif;?>

    </div>
</div>
