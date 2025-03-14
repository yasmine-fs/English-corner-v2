<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Admin> $admins
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Admins List</h2>
        <p class="text-muted">
            Browse through the list of registered admins. Click on a admin to view more informations
        </p>
    </div>



    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>


                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="email"
                                class="datatable-sort-icon fas fa-arrow-up"></i> email</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="password"
                                class="datatable-sort-icon fas fa-arrow-up"></i> password</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($Admin as $admins): ?>
                    <tr scope="row" data-mdb-index="0">
                        <td style="" class="" data-mdb-field="email" false=""><?= h($admins->email) ?></td>
                        <td style="" class="" data-mdb-field="password" false=""><?= h($admins->password) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $admins->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admins->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admins->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>