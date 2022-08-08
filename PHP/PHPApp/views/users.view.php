<?php require 'partials/head.php'; ?>

<h1> All Users </h1>


<?php foreach($users as $user) :?>
<li>
 
    <?= $user->name; ?>

</li>

<?php endforeach; ?>

<h1> Submit Your Application </h1>

<form method="POST" action="/users"> 
  <input name="name"> </input>


  <button type="submit">Submit </button>


</form>
<?php
/*
  <?php foreach($tasks as $task) :?>

      <li>
        <?php if ($task->completed) :?>
          <strike> <?= $task->description; ?> </strike>
        <?php else : ?>
          <?= $task->description ?>

        <?php endif; ?>
    </li>

  <?php endforeach; ?>*/?>


<?php require 'partials/footer.php'; ?>