<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Add New user</h2>
        <p class="text-muted">
            Use the form below to add a new user
        </p>
    </div>

    <?= $this->Form->create(  $user) ?>
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
    <div class="row">
        <!-- state input -->
        <div class="form-outline">
            <input type="text" name="state" class="form-control" />
            <label class="form-label" for="form8Example2">state</label>

            <select id="options" name="state" class="form-select">
                <option value="enrolled">enrolled</option>
                <option value="active">active</option>
                <option value="blocked">blocked</option>
                <option value="inactive">inactive</option>
            </select>
        </div>


    </div>

    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>
?>