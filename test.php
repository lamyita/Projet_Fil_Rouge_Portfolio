 <!-- <div id="mobileapp" class="non-active">
 <?php
                $db =Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='mobileapp'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>',,'<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>',,'<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="webapp" class="non-active">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='webapp'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>',,'<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>',,'<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="game" class="non-active">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='game'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>',,'<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>',,'<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="others" class="non-active">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='others'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top" src="assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>',,'<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getprj('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>',,'<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div> -->