

<a class="nav-link" href="/new">New Student</a>
<table class="table caption-top">
  <caption><?= esc($title)  ?></caption>
  <thead>
  <tbody>

  <?php foreach ($users as $user) {
    //echo $user['Fname'] . ' ' . $user['Lname'];
?>

    <tr>
        <td><?=$user['Id'];?></td>
    <td><a href="/user/<?=$user['Id'];?>"><?=$user['Fname'];?></a></td>
    <td><?=$user['Lname'];?></td>
    <td><?=$user['Course'];?></td>
    <td>
    <a href="/update/<?=$user['Id'];?>">edit</a>
    <a href="/deluser/<?=$user['Id'];?>">Del</a> </td>

  
<?php } ?>
  </tbody>
</table>

