<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quiz $quiz
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Add New quiz</h2>
        <p class="text-muted">
            Use the form below to add a new quiz
        </p>
    </div>

    <?= $this->Form->create(  $quiz) ?>
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
            <!--question input -->
            <div class="form-outline">
                <input type="text" name="question" class="form-control" />
                <label class="form-label" for="form8Example2">question</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- attempts input -->
            <div class="form-outline">
                <input type="text" name="attempts" class="form-control" />
                <label class="form-label" for="form8Example3">attempts</label>
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
