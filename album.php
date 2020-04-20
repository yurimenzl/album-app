<?php
    $page = 'album';
    include("./includes/header.php");

    $query = "SELECT ar.id as artist_id, ar.artist_name, al.* FROM albums AS al LEFT JOIN artists AS ar on ar.id = al.id_artist";
    $response = $database->queryset($query);
?>
                <div class="wrapper wrapper-content">
                    <div class="row row-eq-height">
                        <div class="col-lg-4" >
                            <div class="widget navy-bg p-xs text-center" >
                                <div class="m-b-xs">
                                    <i class="fa fa-male fa-2x"></i>
                                    <h3 class="font-bold no-margins" style="margin-top: 10px !important;">
                                        <a href="./album_create.php" style="color: #fff">Create an Album</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center loginscreen rounded blue-bg">
                        <p class="font-bold alert alert-danger m-b-sm blue-bg h2">
                            Album List
                        </p>
                    </div>
                    <div class="row row-eq-height">
                    <?php
                        while ($result = mysqli_fetch_array($response))
                        {
                    ?>
                        <div class="col-lg-3" >
                            <div class="widget bg-info p-xs text-left" >
                                <div class="m-b-xs">
                                    <p class="h3 no-margins" style="margin-top: 10px !important;">
                                        Artist Name:
                                        <span class="h3"><?=$result['artist_name']?></span>
                                    </p>
                                    <p class="h3 no-margins" style="margin-top: 10px !important;">
                                        Album Name:
                                        <span class="h3"><?=$result['album_name']?></span>
                                    </p>
                                    <p class="h3 no-margins" style="margin-top: 10px !important;">
                                        Album Year:
                                        <span class="h3"><?=$result['year']?></span>
                                    </p>
                                    <p class="text-right" style="margin-bottom: 0;">
                                        <a href="./album_edit.php?album_id=<?=$result['id']?>&artist_id=<?=$result['artist_id']?>&edit=0"><i class="fa fa-edit fa-2x"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
<?php

    include('./includes/footer.php');

?>
