<?php

/** @var yii\web\View $this */

$this->title = 'Админка';

?>

<div class="site-index">
    <div class="body-content">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Бонус</th>
                <th scope="col">Количество</th>
                <th scope="col">Ограничение</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($bonuses as $bonus):?>
                <tr>
                    <td><?= $bonus->id;?></td>
                    <td><?= $bonus->name;?></td>
                    <td><?= $bonus->count;?></td>
                    <?php if ($bonus->isUnlimited):?>
                        <td>Неограниченный</td>
                    <?php else:?>
                        <td>Ограниченный</td>
                    <?php endif;?>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Дата регистрации</th>
                <th scope="col">Бонус</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user):?>
                    <tr>
                        <td><?= $user->id;?></td>
                        <td><?= Yii::$app->formatter->asDate($user->created_at,'php:d.m.Y');?></td>
                        <?php if (is_null($user->bonus)):?>
                            <td></td>
                        <?php else:?>
                            <td><?= $user->bonus->name;?></td>
                        <?php endif;?>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
