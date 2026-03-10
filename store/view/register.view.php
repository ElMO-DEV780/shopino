<section class="register">
    <form action="" method="POST">
        <h2>create your account now</h2>
        <label for="name"><i class="fas fa-user"></i> name</label>
        <input type="text" name="name" placeholder="YOUR FULL NAME" required>
        <label for="email"><i class="fas fa-envelope"></i> email</label>
        <input type="text" name="email" placeholder="YOUR EMAIL" required>
        <label for="password"><i class="fas fa-lock"></i> password</label>
        <input type="password" name="password" placeholder="PASSWORD" required>
        <label for="confirm_password"><i class="fas fa-lock"></i> confirm password</label>
        <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required>
        <?php echo $message; ?>
        <input type="submit" name="submit" value="sign up">
        <div class="box">
            <input type="checkbox" name="remeber" id="checkbox">
            <label for="checkbox">remember me</label>
        </div>
        <p>
            you already have account
            <a href="login">log in</a>
        </p>
    </form>
</section>