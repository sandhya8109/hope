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
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Work With us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0" style="background-color:transparent; color:white;">
                <li class="breadcrumb-item"><a href="./landing.php" style="color:#fff;">Home</a></li>
                <li class="breadcrumb-item"><a href="#" style="color:#fff;">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page" style="color:#fff;">Work with us</li>
            </ol>
        </nav>
    </div>
</header>
<div class="text-center wow fadeInUp" data-wow-delay="0.3s">

    <h1 class="section-title bg-white text-center text-primary px-3">Join Our Team: Empowering Talent, Building
        Success for the Participants</h1>
    <p class="mb-5">At Hope Ability, we are always on the lookout for exceptional
        staffs
        who share our passion for
        making a
        positive impact. Join our team of dedicated professionals as we work collaboratively to achieve both
        organizational and participants' goals.
        Our inclusive and supportive work environment fosters teamwork and encourages personal and professional
        growth. Together, we strive to provide top-quality support and care, empowering individuals with
        disabilities to lead fulfilling lives. If you are committed to making a difference and being part of a
        dynamic team, we invite you to join us on this meaningful journey.</p>
</div>
<style>
    .bg-white {
        background-color: transparent !important;
    }
</style>
</div>
<section id="list">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="section-title bg-white text-center text-primary px-3">Our Services
            </h1>
        </div>
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


                    <!--  <hr class="divider border-dark" style="max-width: calc(80%)">-->
                    <button class="btn" style="background-color:#274a84; color:#fff;"> Apply Now</button>
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