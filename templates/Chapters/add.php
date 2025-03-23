<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chapter $chapter
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
            <!-- title input -->
            <div class="form-outline">
                <input type="text" name="title" class="form-control" />
                <label class="form-label" for="form8Example1">title</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!-- content input -->
            <div class="form-outline">
                <input type="text" name="title" class="form-control" />
                <label class="form-label" for="form8Example1">content</label>
            </div>
        </div>

        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
        <?= $this->Form->end() ?>

</section>