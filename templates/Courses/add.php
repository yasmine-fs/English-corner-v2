<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 * @var \Cake\Collection\CollectionInterface|string[] $users
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
            <!-- title input -->
            <div class="form-outline">
                <input type="text" name="title" class="form-control" />
                <label class="form-label" for="form8Example1">title</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!--description input -->
            <div class="form-outline">
                <input type="text" name="description" class="form-control" />
                <label class="form-label" for="form8Example2">description</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- feedback input -->
            <div class="form-outline">
                <input type="text" name="feedback" class="form-control" />
                <label class="form-label" for="form8Example3">feedback</label>
            </div>
        </div>
    </div>

    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>
