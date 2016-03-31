<!-- File: /app/View/Posts/index.ctp -->
<?php 

	
?>
<h1>Blog users</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['name'],
array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>