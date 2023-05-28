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
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end mb-4 page-title">
                <h3 class="text-white">Welcome to Hope ability</h3>
                <hr class="divider my-4" />

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