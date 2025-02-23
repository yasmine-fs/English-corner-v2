<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Progres> $progress
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Progress List</h2>
        <p class="text-muted">
            Browse through the list of registered Progress. Click on a Progress to view more information
        </p>
    </div>

    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>

                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="id_progress"
                                class="datatable-sort-icon fas fa-arrow-up"></i> id_progress</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="user_id"
                                class="datatable-sort-icon fas fa-arrow-up"></i> user_id</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="quizz_id"
                                class="datatable-sort-icon fas fa-arrow-up"></i> quizz_id</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="course_id"
                                class="datatable-sort-icon fas fa-arrow-up"></i> course_id</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="completion"
                                class="datatable-sort-icon fas fa-arrow-up"></i> completion</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="last_accessed"
                                class="datatable-sort-icon fas fa-arrow-up"></i> last_accessed</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($Progres as $progress): ?>
                    <tr scope="row" data-mdb-index="0">
                        <td style="" class="" data-mdb-field="id_progress" false="">
                            <?= h(text: $progress->id_progress) ?></td>
                        <td style="" class="" data-mdb-field="user_id" false=""><?= h($progress->user_id) ?></td>
                        <td style="" class="" data-mdb-field="quizz_id" false=""><?= h($progress->quizz_id) ?></td>
                        <td style="" class="" data-mdb-field="course_id" false=""><?= h(text: $progress->course_id) ?></td>
                        <td style="" class="" data-mdb-field="completion" false=""><?= h($progress->completion) ?></td>
                        <td style="" class="" data-mdb-field="last_accessed" false=""><?= h($progress->last_accessed) ?>
                        </td>
                        </td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $progress->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $progress->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $progress->id],
                             ['confirm' => __('Are you sure you want to delete # {0}?', $progress->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</section>