<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Add New Course</h2>
        <p class="text-muted">
            Use the form below to add a new course
        </p>
    </div>

    <?= $this->Form->create(  $course) ?>
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
            <!-- level input -->
            <div class="form-outline">
                <input type="text" name="level" class="form-control" />
                <label class="form-label" for="form8Example3">level</label>

                <select id="options" name="level" class="form-select">
                    <option value="Technology">Easy</option>
                    <option value="Business">Medium</option>
                    <option value="Science">Hard</option>
                    <option value="Mathematics">Advanced</option>
            </div>
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