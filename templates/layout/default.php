<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'UpLearn';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <?= $this->Html->css(['mdb.min','new-prism']) ?>

    <style>
    @media (min-width: 1400px) {

        main,
        header,
        #main-navbar {
            padding-left: 240px;
        }
    }
    </style>

</head>


</body>
</html>

<body>
    <?= $this->Flash->render() ?>


    <?php echo $this->element('admin/navbar'); ?>
    <main style="margin-top: 58px">
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <?php echo $this->element('admin/footer'); ?>


    <?= $this->Html->script(['new-prism', 'mdbsnippet.min','mdb.min']) ?>


    <!-- Custom scripts -->
    <script type="text/javascript">
    const sidenav = document.getElementById("sidenav-1");
    const instance = mdb.Sidenav.getInstance(sidenav);

    let innerWidth = null;

    const setMode = (e) => {
        // Check necessary for Android devices
        if (window.innerWidth === innerWidth) {
            return;
        }

        innerWidth = window.innerWidth;

        if (window.innerWidth < 1400) {
            instance.changeMode("over");
            instance.hide();
        } else {
            instance.changeMode("side");
            instance.show();
        }
    };

    setMode();

    window.addEventListener("resize", setMode);
    </script>

    <script>
  $(function() {
    $("#updated_at_datepicker").datepicker({
      dateFormat: 'yy-mm-dd' 
    });
  });
</script>

    
</body>

</html>