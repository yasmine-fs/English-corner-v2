<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 * @var string[]|\Cake\Collection\CollectionInterface $chapters
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Add New Content</h2>
        <p class="text-muted">
            Use the form below to add a new content
        </p>
    </div>

    <?= $this->Form->create(  $content) ?>
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
            <!-- text input -->
            <div class="form-outline">
                <input type="text" name="text" class="form-control" />
                <label class="form-label" for="form8Example1">text</label>
            </div>
        </div>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
        <?= $this->Form->end() ?>

</section>
