<h2><?= esc($title)?></h2>

<form method="post" action="/updateUser">
    <label for="Fname">First Name:</label>
    <input type="text" name="id" value="<?= esc($user['Id'])?>" hidden>
    <input type="text" name="Fname" value="<?= esc($user['Fname'])?>" placeholder="<?= esc($user['Fname'])?>" required>

    <br>

    <label for="Lname">Last Name:</label>
    <input type="text" name="Lname" value="<?= esc($user['Lname'])?>" placeholder="<?= esc($user['Lname'])?>" required>

    <label for="Course">Course</label>
    <input type="text" name="Course" value="<?= esc($user['Course'])?>" placeholder="<?= esc($user['Course'])?>" required>

    <!-- Add more form fields as needed -->

    <br>

    <button type="submit">Update User</button>
</form>