<h2>Login</h2>

<?php echo getFlash('message'); ?>
<form action="/login" method="POST" id='box-login'>
    <input type="text" name="email" placeholder="Seu email" value='drake@gmail.com'>
    <input type="password" name="password" placeholder="Sua senha" value='123456'>
    <button type="submit">Login</button>
</form>
