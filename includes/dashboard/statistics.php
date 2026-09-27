<div class="row g-4 mt-2">

    <!-- Total Lahan -->
    <div class="col-xl-3 col-md-6">

        <div class="dashboard-card green">

            <div class="card-icon">
                <i class="fa-solid fa-seedling"></i>
            </div>

            <div class="card-content">

                <h6>Total Lahan</h6>

                <h2 id="totalLahan"><?= $totalLahan ?></h2>

                <small>
                    Lahan Terdaftar
                </small>

            </div>

        </div>

    </div>
 <!-- Device -->

    <div class="col-xl-3 col-md-6">

        <div class="dashboard-card blue">

            <div class="card-icon">

                <i class="fa-solid fa-microchip"></i>

            </div>

            <div class="card-content">

                <h6>Device</h6>

                <h2 id="totalDevice"><?= $totalDevice ?></h2>

                <small>

                    Online : <?= $online ?>

                </small>

            </div>

        </div>

    </div>

    <!-- Sensor -->

    <div class="col-xl-3 col-md-6">

        <div class="dashboard-card orange">

            <div class="card-icon">

                <i class="fa-solid fa-temperature-half"></i>

            </div>

            <div class="card-content">

                <h6>Sensor</h6>

                <h2 id="totalSensor"><?= $totalSensor ?></h2>

                <small>

                    Sensor Aktif

                </small>

            </div>

        </div>

    </div>

    <!-- Aktuator -->

    <div class="col-xl-3 col-md-6">

        <div class="dashboard-card red">

            <div class="card-icon">

                <i class="fa-solid fa-bolt"></i>

            </div>

            <div class="card-content">

                <h6>Aktuator</h6>

                <h2 id="totalAktuator"><?= $totalAktuator ?></h2>

                <small>

                    ON : 

                </small>

            </div>

        </div>

    </div>

</div>
