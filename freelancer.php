<?php 
$title = 'Freelancers';
include_once('components/navbar.php'); 
?>
    <!--==========================
    Freelancers Section
  ============================-->

    <section id="freelancer" class="padd-section wow fadeInUp">
        <div class="container">
            <div class="section-title text-center" style="padding-top: 10px;">
                <h2>FreeLancers</h2>
            </div>
            <!--Example 1-->
            <?php 
            $data = file_get_contents("data/freelancer.json");
            $data = json_decode($data, true);
            foreach($data as $row)
            { ?>
            <div class="justify-content-center">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="margin: 10px;">
                    <div class="card-body">
                        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["alt"]; ?>"/>
                        <div class="card-title">
                            <div class="list-inline">
                                <div class="list-inline-item">
                                    <h4><?php echo $row["name"]; ?></h4>
                                </div>
                                <div class="list-inline-item">
                                    <a href="<?php echo $row["link"]; ?>" aria-label="Freelancer" target="_blank" rel="noreferrer" class="btn btn-info"> 
                                        <small>Portfolio <i class="fa fa-external-link"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-text">
                            <p><?php echo $row["summary"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!--Freelancers Section-->
    <?php include_once('components/footer.php') ?>