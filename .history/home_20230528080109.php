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
<section id="list">
    <div class="container mt-3 pt-2">
        <h4 class="text-center">Vacancy List</h4>
        <!--<hr class="divider">-->
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

                    <br>
                    <!--  <hr class="divider border-dark" style="max-width: calc(80%)">-->

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