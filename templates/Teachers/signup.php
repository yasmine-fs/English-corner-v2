<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-light">
    <div class="col-lg-4 col-md-6 col-sm-10 p-4 shadow rounded bg-white">
        <div class="text-center mb-4">
            <a class="navbar-brand fw-bold fs-3" href="/" style="font-family: 'Arial', sans-serif;">
                <span class="text-info" style="font-family: 'Arial', sans-serif;">UP</span>Learn.
            </a>
        </div>
        <?= $this->Form->create($teacher, ['type' => 'file']) ?>
        <!-- Enable file upload -->
        <div class="row">
            <div class="col-sm-6">
                <?= $this->Form->control('full_name', ['label' => 'Full Name','class' => 'form-control']) ?>
            </div>
            <div class="col-sm-6">
                <?= $this->Form->control('email', ['type' => 'email','label' => 'Email','class' => 'form-control']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <?= $this->Form->control('password', ['type' => 'password','label' => 'Password','class' => 'form-control']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <!-- Certificate Upload -->
                <label class="form-label">Upload your Certificate (PDF)</label>
                <?= $this->Form->control('certificate', ['type' => 'file','label' => false,'accept' => 'application/pdf', 'required' => true,'class' => 'form-control']) ?>
            </div>
        </div>

        <?= $this->Form->button(__('Sign Up'), ['class' => 'btn btn-dark mt-4']) ?>
        <?= $this->Form->end() ?>