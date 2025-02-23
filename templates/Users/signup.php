<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-light">
    <div class="col-lg-4 col-md-6 col-sm-10 p-4 shadow rounded bg-white">
    <a class="navbar-brand fw-bold fs-3" href="/" style="font-family: 'Arial', sans-serif;">
            <span style="color: #0088ff; font-family: 'Arial', sans-serif;">Up</span>Learn.
        </a>
        <div class="text-center mb-4">
        </div>
        <?= $this->Form->create($user) ?>
        <div class="form-floating mb-3">
            <input type="text" id="fullName" name="full_name" class="form-control" placeholder="Full Name"pattern="[A-Za-z ]+" title="Only letters and spaces are allowed." required>
            <label for="fullName">Full Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
            <label for="email">E-mail</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" id="password" name="password" title="at least 8 characters." class="form-control" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control"placeholder="Confirm Password" required>
            <label for="confirmPassword">Confirm Password</label>
        </div>
        <input type="text" name="Role" value="student" hidden>
        <input type="text" name="State" value="active" hidden>

        
        <div class="d-grid">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary fw-bold py-2']) ?>
            <?= $this->Form->end() ?>
            <div class="text-center mt-3">
            <p>Already have an account?
                <?php echo $this->Html->link('Log In','/login',['escape' =>false,'class'=>'fw-bold text-'])?>
                </p>
            </div>
    </div>
</div>