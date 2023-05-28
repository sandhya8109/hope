<?php
include 'admin/db_connect.php';
?>
<style>
    #portfolio .img-fluid {
        width: calc(100%);
        height: 30vh;
        z-index: -1;
        position: relative;
        padding: 1em;
    }

    .vacancy-list {
        cursor: pointer;
    }

    span.hightlight {
        background: yellow;
    }
</style>
<header class="masthead">
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Work With us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Workwithus</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!--abouthem-->
    <section class="bg-light">

        <div class="first bg-light">
            <h1>"Join Our Team: Empowering Talent, Building Success for the Participants"</h1>
            <p>
                "At Hope Ability, we are always on the lookout for exceptional staffs who share our passion for making a
                positive impact. Join our team of dedicated professionals as we work collaboratively to achieve both
                organizational and participants' goals.
                Our inclusive and supportive work environment fosters teamwork and encourages personal and professional
                growth. Together, we strive to provide top-quality support and care, empowering individuals with
                disabilities to lead fulfilling lives. If you are committed to making a difference and being part of a
                dynamic team, we invite you to join us on this meaningful journey."
            </p>
        </div>
    </section>
    <!--end-->
    <div class="card-body">
        <h4 class="text-center">Find Vacancies</h4>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" id="filter">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
</header>
<section id="list">
    <div class="container mt-3 pt-2">
        <h4 class="text-center">Vacancy List</h4>
        <hr class="divider">
        <?php
        $vacancy = $conn->query("SELECT * FROM vacancy order by date(date_created) desc ");
        while ($row = $vacancy->fetch_assoc()):
            $trans = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES);
            unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
            $desc = strtr(html_entity_decode($row['description']), $trans);
            $desc = str_replace(array("<li>", "</li>"), array("", ","), $desc);
            ?>
                <div class="card vacancy-list" data-id="<?php echo $row['id'] ?>">
                    <div class="card-body">
                        <h3><b class="filter-txt">
                                <?php echo $row['position'] ?>
                            </b></h3>
                        <span><small>Needed:
                                <?php echo $row['availability'] ?>
                            </small></span>
                        <hr>
                        <larger class="truncate filter-txt">
                            <?php echo strip_tags($desc) ?>
                        </larger>
                        <br>
                        <hr class="divider border-dark" style="max-width: calc(80%)">

                    </div>
                </div>
                <br>
        <?php endwhile; ?>
    </div>
</section>


<script>
    $('.card.vacancy-list').click(function () {
        location.href = "index.php?page=view_vacancy&id=" + $(this).attr('data-id')
    })
    $('#filter').keyup(function (e) {
        var filter = $(this).val()

        $('.card.vacancy-list .filter-txt').each(function () {
            var txto = $(this).html();
            txt = txto
            if ((txt.toLowerCase()).includes((filter.toLowerCase())) == true) {
                $(this).closest('.card').toggle(true)
            } else {
                $(this).closest('.card').toggle(false)

            }
        })
    })
</script>