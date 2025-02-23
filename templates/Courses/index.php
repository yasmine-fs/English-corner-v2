<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Course> $courses
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Courses List</h2>
        <p class="text-muted">
            Browse through the list of registered Courses. Click on a course to view more information
        </p>
    </div>

    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>

                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="category"
                                class="datatable-sort-icon fas fa-arrow-up"></i> category</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="state"
                                class="datatable-sort-icon fas fa-arrow-up"></i> state</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="name"
                                class="datatable-sort-icon fas fa-arrow-up"></i> name</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="duration"
                                class="datatable-sort-icon fas fa-arrow-up"></i> duration</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="price"
                                class="datatable-sort-icon fas fa-arrow-up"></i> price</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="course_level"
                                class="datatable-sort-icon fas fa-arrow-up"></i> course_level</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($courses as $course): ?>
                    <tr scope="row" data-mdb-index="0">
                        <td style="" class="" data-mdb-field="category_id" false="">
                            <?= h(text: $course->category) ?></td>
                        <td style="" class="" data-mdb-field="state_id" false=""><?= h($course->state) ?></td>
                        <td style="" class="" data-mdb-field="name" false=""><?= h($course->name) ?></td>
                        <td style="" class="" data-mdb-field="duration" false=""><?= h(text: $course->duration) ?></td>
                        <td style="" class="" data-mdb-field="price" false=""><?= h($course->price) ?></td>
                        <td style="" class="" data-mdb-field="course_level" false=""><?= h($course->course_level) ?>
                        </td>
                        </td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $course->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $course->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $course->id],
                             ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</section>