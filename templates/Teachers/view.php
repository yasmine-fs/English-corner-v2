<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Teachers</h2>
        <p class="text-muted">
            View and edit your teacher information below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- Teacher Information -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">Teacher Information</h4>

                <!-- Full Name -->
                <div class="mb-3">
                    <p><strong>Full Name:</strong> <?= h($teacher->Full_name) ?></p>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <p><strong>Email:</strong> <?= h($teacher->email) ?></p>
                </div>

                <!-- Teaching Domain -->
                <div class="mb-3">
                    <p><strong>Teaching Domain:</strong> <?= h($teacher->teaching_domain) ?></p>
                </div>

                <!-- Certificate (if uploaded) -->
                <div class="mb-3">
                    <p><strong>Certificate:</strong> 
                        <?php if (!empty($teacher->certificate)): ?>
                            <a href="<?= $this->Url->build('/' . $teacher->certificate, ['fullBase' => true]) ?>"
                               target="_blank" class="btn btn-primary">
                                View Certificate (PDF)
                            </a>
                        <?php else: ?>
                            <span class="text-danger">No certificate uploaded</span>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
