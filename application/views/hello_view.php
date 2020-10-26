<h1>Hello <?=$name?></h1>
<p>Date <?=$date?></p>

<? foreach ($users as $user): ?>
    <p><?=$user?></p>
<? endforeach; ?>
