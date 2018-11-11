<div class="table-responsive">
    <table class="table table-hover table-striped">

        <thead>
        <tr>
            <th>Наименование</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Сумма</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($session['cart'] as $id => $item): ?>
            <tr>
                <td><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $id]) ?>"><?= $item['name'] ?></a></td>
                <td><?= $item['qty'] ?></td>
                <td><?= $item['price'] ? $item['price'] : 'Цену уточняйте' ?></td>
                <td><?= $item['price'] ? $item['qty'] * $item['price'] : 'Цену уточняйте' ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4">Итого:</td>
            <td><?= $session['cart.qty'] ?></td>
        </tr>
        <tr>
            <td colspan="4">На сумму:</td>
            <td><?= $session['cart.sum'] ?></td>
        </tr>
        </tbody>

    </table>
</div>

