<section class="login">
    <form action="" method="POST">
        <div class="title">
            <h2>login to your account</h2>
        </div>
        <label for="email"><i class="fas fa-envelope"></i> email</label>
        <input type="email"  name="email" required placeholder="example@mail.com">
        <span class="hint">invalid email</span>
        <label for="password"><i class="fas fa-lock"></i>password</label>
        <input type="password" name="password" required placeholder="*********">
        <span class="hint">invalid password</span>
        <?php
         echo $message;
         ?>
        <input type="submit" value="login" name="login">
        <div class="box">
            <input type="checkbox" name="remember" id="checkbox">
            <label for="checkbox">remember me</label>
        </div>
        <p>
            you dont have account
            <a href="register">sign up</a>
        </p>
    </form>
</section>