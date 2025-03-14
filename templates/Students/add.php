<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Add New Student</h2>
        <p class="text-muted">
            Use the form below to add a new student
        </p>
    </div>

    <?= $this->Form->create(  $student) ?>
    <div class="container m-5">

    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- Full_name input -->
            <div class="form-outline">
                <input type="text" name="Full_name" class="form-control" />
                <label class="form-label" for="form8Example1">Full_name</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!--email input -->
            <div class="form-outline">
                <input type="text" name="email" class="form-control" />
                <label class="form-label" for="form8Example2">email</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- password input -->
            <div class="form-outline">
                <input type="text" name="password" class="form-control" />
                <label class="form-label" for="form8Example3">password</label>
            </div>
        </div>
    </div>

    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>
