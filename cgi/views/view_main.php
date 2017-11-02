<h1><?= $data["title"]; ?></h1>
<?php foreach($data["arr"] as $value): ?>
<div class="schema">
    <p><?= $value ?></p>
</div> 
<?php endforeach; ?> 