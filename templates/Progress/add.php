<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progres $progres
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Add New Chapter</h2>
        <p class="text-muted">
            Use the form below to add a new chapter
        </p>
    </div>

    <?= $this->Form->create(  $chapter) ?>
    <div class="container m-5">

    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- completed_chapters input -->
            <div class="form-outline">
                <input type="text" name="title" class="form-control" />
                <label class="form-label" for="form8Example1">completed_chapters</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!-- student_answers input -->
            <div class="form-outline">
                <input type="text" name="student_answers" class="form-control" />
                <label class="form-label" for="form8Example1">student_answers</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!-- status input -->
            <div class="form-outline">
                <input type="text" name="status" class="form-control" />
                <label class="form-label" for="form8Example1">status</label>

                <select id="options" name="state" class="form-select">
                    <option value="not_statrted">not_statrted</option>
                    <option value="in_progress">in_progress</option>
                    <option value="completed">completed</option>
                </select>
            </div>
        </div>

        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
        <?= $this->Form->end() ?>

</section>