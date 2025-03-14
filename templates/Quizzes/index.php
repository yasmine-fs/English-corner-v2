<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Quiz> $quizzes
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Quizzes List</h2>
        <p class="text-muted">
            Browse through the list of registered quizzes. Click on a quiz to view more informations
        </p>
    </div>



    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>

                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="title"
                                class="datatable-sort-icon fas fa-arrow-up"></i>title</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="question"
                                class="datatable-sort-icon fas fa-arrow-up"></i> question</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="attempts"
                                class="datatable-sort-icon fas fa-arrow-up"></i> attempts</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($Quiz as $quizzes): ?>
                    <tr scope="row" data-mdb-index="0">
                    <td style="" class="" data-mdb-field="title" false=""><?= h($quizzes->title) ?></td>
                        <td style="" class="" data-mdb-field="question" false=""><?= h($quizzes->question) ?></td>
                        <td style="" class="" data-mdb-field="attempts" false=""><?= h($quizzes->attempts) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $quizzes->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quizzes->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quizzes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzes->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>