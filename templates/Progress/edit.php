<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progres $progres
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $courses
 */
?>
<section>
    <div class="col-sm-4 m-1">
        <!-- id_progress input -->
        <div class="form-outline">
            <input type="text" name="id_progress" value="<?= $progres->id_progress ?  $progres->id_progress : '' ?>"
                class="form-control" />
            <label class="form-label" for="form8Example3">id_progress</label>
        </div>
    </div>
    </div>
    <div class="col-sm-4 m-1">
        <!-- user_id input -->
        <div class="form-outline">
            <input type="text" name="user_id" value="<?= $progres->user_id ?  $progres->user_id : '' ?>"
                class="form-control" />
            <label class="form-label" for="form8Example3">user_id</label>
        </div>
    </div>
    </div>

    <hr />
    <div class="col-sm-4 m-1">
        <!-- quizz_id input -->
        <div class="form-outline">
            <input type="text" name="quizz_id" value="<?= $progres->quizz_id ?  $progres->quizz_id : '' ?>"
                class="form-control" />
            <label class="form-label" for="form8Example3">quizz_id</label>
        </div>
    </div>

    <div class="col-sm-4 m-1">
        <!-- course_id input -->
        <div class="form-outline">
            <input type="text" name="course_id" value="<?= $progres->course_id ?  $progres->course_id : '' ?>"
                class="form-control" />
            <label class="form-label" for="form8Example3">course_id</label>
        </div>
        <div class="row">
            <div class="col-sm-4 m-1">
                <!-- completion input -->
                <div class="form-outline">
                    <input type="text" name="completion"
                        value="<?= $progres->completion ?  $progres->completion : '' ?>" class="form-control" />
                    <label class="form-label" for="form8Example3">completion</label>
                </div>

                <div class="form-outline">
                    <div class="col-sm-4 m-1">

                        <input type="text" name="last_accessed" value="<?= $progres->last_accessed ?  $progres->last_accessed : '' ?>"
                            class="form-control" />
                        <label class="form-label" for="form8Example3">last_accessed</label>
                    </div>
                </div>
            </div>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
            <?= $this->Form->end() ?>

</section>