<?= $this->Form->create($teacher, ['type' => 'file']) ?> <!-- Enable file upload -->
<div class="row">
    <div class="col-sm-6">
        <?= $this->Form->control('full_name', [
            'label' => 'Full Name',
            'class' => 'form-control'
        ]) ?>
    </div>
    <div class="col-sm-6">
        <?= $this->Form->control('email', [
            'type' => 'email',
            'label' => 'Email',
            'class' => 'form-control'
        ]) ?>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <?= $this->Form->control('password', [
            'type' => 'password',
            'label' => 'Password',
            'class' => 'form-control'
        ]) ?>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <!-- Certificate Upload -->
        <label class="form-label">Upload Certificate (PDF)</label>
        <?= $this->Form->control('certificate', [
            'type' => 'file',
            'label' => false,
            'accept' => 'application/pdf',
            'class' => 'form-control'
        ]) ?>
    </div>
</div>

<?= $this->Form->button(__('Sign Up'), ['class' => 'btn btn-dark mt-4']) ?>
<?= $this->Form->end() ?>
