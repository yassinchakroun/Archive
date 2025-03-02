<?php
require_once '../Controller/userController.php';
$userC = new UserController();
$users=$userC->getuser();
?>
<table>
<tr>
    <th>email</th>
    <th>password</th>
</tr>
<?php foreach($users as $u){ }?>
<tr>
    <td><?php echo $u['email'];?</td>
    <td><?php echo $u['pwd']; ?></td>
</tr>
<?php endforeach;?>

?>
</table>