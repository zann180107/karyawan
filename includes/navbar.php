<nav class="navbar navbar-expand-lg bg-white shadow-sm rounded-4 px-4 py-3 mb-4">

    <div class="container-fluid">

        <div>
            <h3 class="fw-bold mb-0">
                Dashboard Smart Farming
            </h3>

            <small class="text-muted">
                Selamat Datang,
                <strong><?= $_SESSION['nama']; ?></strong>
            </small>
        </div>

        <div class="d-flex align-items-center">

            <!-- Notifikasi -->
            <button class="btn btn-light me-3 position-relative">

                <i class="fa-solid fa-bell fs-5"></i>

                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                    3

                </span>

            </button>

            <!-- Tanggal -->
            <span class="me-4 text-success fw-bold">

                <i class="fa-solid fa-calendar-days"></i>

                <span id="tanggal"></span>

            </span>

            <!-- Jam -->
            <span class="me-4 text-primary fw-bold">

                <i class="fa-solid fa-clock"></i>

                <span id="jam"></span>

            </span>

            <!-- Profil -->
            <div class="d-flex align-items-center">

                <img src="../assets/img/avatar.png"
                     width="45"
                     height="45"
                     class="rounded-circle shadow">

                <div class="ms-2">

                    <b><?= $_SESSION['nama']; ?></b>

                    <br>

                    <small class="text-muted">

                        <?= $_SESSION['role']; ?>

                    </small>

                </div>

            </div>

        </div>

    </div>

</nav>