
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= esc($title)?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= esc($user['Fname'])?>,<?= esc($user['Lname'])?></h6>
    <p class="card-text"><?= esc($user['Course'])?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>