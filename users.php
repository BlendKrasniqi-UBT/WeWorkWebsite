<?php
require 'includes/class-autoload.inc.php';
session_start();

  $connection = new DBConnection();
	$query = $connection->getConnection()->query('SELECT * FROM users');
    $users = $connection->getConnection()->fetch();
?>

	<div class="mt-2">
        <div class="container">
            <a href="add_users.php">Add a new user</a>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><a href="edit_user.php?id=<?php echo $user['id']; ?>">Edit</a></td>
                            <td><a href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
