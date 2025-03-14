<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Category'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="category view content">
            <h3><?= h($category->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($category->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $category->hasValue('category') ? $this->Html->link($category->category->name, ['controller' => 'Category', 'action' => 'view', $category->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($category->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Courses') ?></h4>
                <?php if (!empty($category->courses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Teacher Id') ?></th>
                            <th><?= __('Feedback') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->courses as $course) : ?>
                        <tr>
                            <td><?= h($course->id) ?></td>
                            <td><?= h($course->title) ?></td>
                            <td><?= h($course->description) ?></td>
                            <td><?= h($course->category_id) ?></td>
                            <td><?= h($course->teacher_id) ?></td>
                            <td><?= h($course->feedback) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $course->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $course->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>