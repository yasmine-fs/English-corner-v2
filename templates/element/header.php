<header>
  <!-- Intro settings -->
  <style>
    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }
  </style>

  <!-- Background image -->
  <div
    id="intro-example"
    class="p-5 text-center bg-image"
    style="background-image: url('<?= $this->Url->build('/img/header.jpg'); ?>');"
>


    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Grow your skills,
          define your future.</h1>
          <h5 class="mb-4">Presenting Academy, the tech school of the future. We teach you the right skills to be prepared for tomorrow.</h5>
          <a
            data-mdb-ripple-init
            class="btn btn-outline-light btn-lg m-2"
            href="/login"
            role="button"
            rel="nofollow"
            target="_blank"
          >Start learning</a
          >
          <a
            data-mdb-ripple-init
            class="btn btn-outline-light btn-lg m-2"
            href="/"
            target="_blank"
            role="button"
          >Contact</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>