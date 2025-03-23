<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Answer> $answers
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Answers List</h2>
        <p class="text-muted">
            Browse through the list of registered answers. Click on an answer to view more informations
        </p>
    </div>



    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="correct_answer"
                                class="datatable-sort-icon fas fa-arrow-up"></i> correct_answer</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="is_correct"
                                class="datatable-sort-icon fas fa-arrow-up"></i>is_correct</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($Answer as $answers): ?>
                    <tr scope="row" data-mdb-index="0">
                        <td style="" class="" data-mdb-field="correct_answer" false=""><?= h($answers->correct_answer) ?></td>
                        <td style="" class="" data-mdb-field="is_correct" false=""><?= h($answers->is_correct) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $answers->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $answers->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $answers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answers->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>