<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progres $progres
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 */
?>
<section>
    <div class="m-4">
        <h2 class="fw-bold">Add New progress</h2>
        <p class="text-muted">
            Use the form below to add a new progress.
        </p>
    </div>


    <?= $this->Form->create($progres) ?>
    <div class="container m-5">

     </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- id_progress  input -->
            <div class="form-outline">
                <input type="text" name="id_progress " class="form-control" />
                <label class="form-label" for="form8Example3">id_progress </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- user_id input -->
            <div class="form-outline">
                <input type="text" name="user_id" class="form-control" />
                <label class="form-label" for="form8Example3">user_id</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!--quizz_id  input -->
            <div class="form-outline">
                <input type="text" name="quizz_id" class="form-control" />
                <label class="form-label" for="form8Example4">quizz_id</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!--course_id  input -->
            <div class="form-outline">
                <input type="text" name="course_id" class="form-control" />
                <label class="form-label" for="form8Example4">course_id</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!--completion  input -->
            <div class="form-outline">
                <input type="text" name="completion" class="form-control" />
                <label class="form-label" for="form8Example4">completion</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!--last_accessed  input -->
            <div class="form-outline">
                <input type="text" name="last_accessed" class="form-control" />
                <label class="form-label" for="form8Example4">last_accessed</label>
            </div>
        </div>
    </div>
    </div>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>
