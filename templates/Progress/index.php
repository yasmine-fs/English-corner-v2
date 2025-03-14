<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Progres> $progress
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Progresses List</h2>
        <p class="text-muted">
            Browse through the list of registered progresses. Click on a progress to view more informations
        </p>
    </div>



    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>

                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="completed_chapters"
                                class="datatable-sort-icon fas fa-arrow-up"></i>completed_chapters</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="student_answers"
                                class="datatable-sort-icon fas fa-arrow-up"></i> student_answers</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="status"
                                class="datatable-sort-icon fas fa-arrow-up"></i> status</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($Progres as $progress): ?>
                    <tr scope="row" data-mdb-index="0">
                    <td style="" class="" data-mdb-field="completed_chapters" false=""><?= h($progress->completed_chapters) ?></td>
                        <td style="" class="" data-mdb-field="student_answers" false=""><?= h($progress->student_answers) ?></td>
                        <td style="" class="" data-mdb-field="status" false=""><?= h($progress->status) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $progress->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $progress->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $progress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $progress->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>