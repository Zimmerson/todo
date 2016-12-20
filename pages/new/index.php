<h2>Form</h2>
<form action="/new" method="post">

    <fieldset>
        <label for="nameField">Name</label>
        <input type="text" name="name" id="nameField">
    </fieldset>

    <fieldset>
        <label for="importantField">Important?</label>
        <input type="checkbox" name="isImportant" id="ImportantField">
    </fieldset>

    <fieldset>
        <input type="submit">
    </fieldset>

</form>


<h2>Todos</h2>

<?php foreach ($data['todos'] as $todo): ?>

    <h3><?=$todo['summary']?></h3>

    <div class="float-left">
        <?php if (is_null($todo['resolved_at'])): ?>
            <a href="/new/resolve?id=<?=$todo['id']?>">Resolve</a>
        <?php else: ?>
            <?=$todo['resolved_at']?>
        <?php endif; ?>
    </div>

    <div class="float-right">
        <?php if (is_null($todo['deleted_at'])): ?>
            <a href="/new/delete?id=<?=$todo['id']?>" onclick="return confirm('Are you sure you wish to delete that?');">Delete</a>
        <?php endif; ?>
    </div>

    <div class="clear-fix"></div>

    <hr>

<?php endforeach; ?>


