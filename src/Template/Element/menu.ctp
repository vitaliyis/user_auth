<?php if($logged_user): ?>
    <p>Welcome, <?php echo $logged_user['username'] ?></p>
    <p><?php echo $this->Html->link('Logout','/users/logout') ?></p>
    <p><?php echo $this->Html->link('Users','/users') ?></p>
<?php else: ?>
    <p><?php echo $this->Html->link('Login','/users/login') ?></p>

<?php endif; ?>