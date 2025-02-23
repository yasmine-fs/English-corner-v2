<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<section>
    <div class="col-sm-4 m-1">
        <!-- category input -->
        <div class="form-outline">
            <select id="options" name="state" class="form-select">
                <option value="Economic, Commercial and Management Sciences Faculty"
                    <?= $course->category == 'Economic, Commercial and Management Sciences Faculty' ? 'selected' : '' ?>>
                    Economic, Commercial and Management Sciences Faculty</option>
                <option value="Humanities and Social Sciences Faculty"
                    <?= $course->category == 'Humanities and Social Sciences Faculty' ? 'selected' : '' ?>>Humanities
                    and
                    Social Sciences Faculty</option>
                <option value="Law and Political Science Faculty"
                    <?= $course->category == 'Law and Political Science Faculty' ? 'selected' : '' ?>>Law and Political
                    Science Faculty</option>
                <option value="Literature and languages Faculty"
                    <?= $course->category == 'Literature and languages Faculty' ? 'selected' : '' ?>>Literature and
                    languages Faculty</option>
                <option value="Material Sciences and Computer Science Faculty"
                    <?= $course->category == 'Material Sciences and Computer Science Faculty' ? 'selected' : '' ?>>
                    Material
                    Sciences and Computer Science Faculty</option>
                <option value="Medicine" <?= $course->category == 'Medicine' ? 'selected' : '' ?>>Medicine</option>
                <option value="Science and Technology of Physical Activities and Sports Institute"
                    <?= $course->category == 'Science and Technology of Physical Activities and Sports Institute' ? 'selected' : '' ?>>
                    Science and Technology of Physical Activities and Sports Institute</option>
                <option value="Sciences and Technology Faculty"
                    <?= $course->category == 'Sciences and Technology Faculty' ? 'selected' : '' ?>>Sciences and
                    Technology
                    Faculty</option>
                <option value="Nature and Life Sciences and Earth Sciences Faculty"
                    <?= $course->category == 'Nature and Life Sciences and Earth Sciences Faculty' ? 'selected' : '' ?>>
                    Nature and Life Sciences and Earth Sciences Faculty</option>
            </select>
        </div>
    </div>
    <div class="col-sm-4 m-1">
        <!-- name input -->
        <div class="form-outline">
            <input type="text" name="name" value="<?= $course->name ?  $course->name : '' ?>" class="form-control" />
            <label class="form-label" for="form8Example3">name</label>
        </div>
    </div>
    </div>

    <hr />
    <div class="col-sm-4 m-1">
        <!-- duration input -->
        <div class="form-outline">
            <input type="text" name="duration" value="<?= $course->duration  ?  $course->duration : '' ?>"
                class="form-control" />
            <label class="form-label" for="form8Example3">duration</label>
        </div>
    </div>

    <div class="col-sm-4 m-1">
        <!-- price input -->
        <div class="form-outline">
            <input type="text" name="price" value="<?= $course->price  ?  $course->price : '' ?>"
                class="form-control" />
            <label class="form-label" for="form8Example3">price</label>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-4 m-1">
            <select id="options" name="state" class="form-select">
                <option value="posted" <?= $course->state == 'posted' ? 'selected' : '' ?>>posted</option>
                <option value="dropped" <?= $course->state == 'dropped' ? 'selected' : '' ?>>dropped</option>
                <option value="archived" <?= $course->state == 'archived' ? 'selected' : '' ?>>archived</option>
                <option value="pending" <?= $course->state == 'pending' ? 'selected' : '' ?>>pending</option>
            </select>
        </div>

        <div class="col-sm-4 m-1">

            <select id="options" name="course_level" class="form-select">

                <option value="beginner" <?= $course->course_level == 'beginner' ? 'selected' : '' ?>>beginner</option>
                <option value="intermediate" <?= $course->course_level == 'intermediate' ? 'selected' : '' ?>>
                    intermediate
                </option>
                <option value="advanced" <?= $course->course_level == 'advanced' ? 'selected' : '' ?>>advanced</option>
            </select>

        </div>

    </div>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>