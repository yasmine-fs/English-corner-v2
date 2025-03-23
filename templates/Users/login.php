<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row g-2 col-lg-4 col-md-6 col-sm-10 shadow p-4 rounded bg-white">
        <a class="navbar-brand fw-bold fs-3" href="/" style="font-family: 'Arial', sans-serif;">
            <span class="text-info" style="font-family: 'Arial', sans-serif;">UP</span>Learn.
        </a>
        <!-- Form-->
        <div class="text-center mb-5">

            <div class="col-12">

                <?= $this->Form->create(null) ?>

                <div class="form-floating mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
                    <label for="email">E-mail</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    <label for="password">password</label>  
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <input type="checkbox" id="RememberMe" class="form-check-input">
                        <label for="RememberMe" class="form-check-label">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none text-info">Forgot your password?</a>
                </div>

                <div class="d-grid">
                    <?= $this->Form->button(__('Log In'), ['class' => 'btn btn-info fw-bold py-2']) ?>
                </div>

                <?= $this->Form->end() ?>

                <div class="text-center mt-3">
                    <p>
                        Don't have an account yet?

                        <?php echo $this->Html->link('Sign up','/signup',['escape'=>false,'class'=>'fw-bold text-info']);?>

                    </p>
                </div>
            </div>
        </div>
    </div>