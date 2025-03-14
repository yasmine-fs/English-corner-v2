<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-light">
    <div class="col-lg-4 col-md-6 col-sm-10 p-4 shadow rounded bg-white">
        <div class="text-center mb-4">
        <a class="navbar-brand fw-bold fs-3" href="/" style="font-family: 'Arial', sans-serif;">
            <span class="text-info" style="font-family: 'Arial', sans-serif;">UP</span>Learn.
        </a>
        </div>
        <?= $this->Form->create($user) ?>
        <div class="form-floating mb-3">
            <input type="text" id="fullName" name="full_name" class="form-control" placeholder="Full Name" pattern="[A-Za-z ]+" title="Only letters and spaces allowed" required>
            <label for="fullName">Full Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
            <label for="email">E-mail</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
            <label for="confirmPassword">Confirm Password</label>
        </div>
        <div class="d-grid">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-info fw-bold py-2']) ?>
        </div>
        <?= $this->Form->end() ?>
        <div class="text-center mt-3">
            <p>Already have an account? 
            <?php echo $this->Html->link('login','/login',['escape'=>false,'class'=>'fw-bold text-info']);?>
          </p>
            
        </div>
    </div>
</div>