<?php
    $page = 'artist';
    include("./includes/header.php");

    

    $query = "SELECT * FROM artists GROUP BY artist_name";
    $response = $database->queryset($query);

    
?>
                <div class="wrapper wrapper-content">
                    <div class="row row-eq-height">
                        <div class="col-lg-4" >
                            <div class="widget navy-bg p-xs text-center" >
                                <div class="m-b-xs">
                                    <i class="fa fa-male fa-2x"></i>
                                    <h3 class="font-bold no-margins" style="margin-top: 10px !important;">
                                        <a href="./create_artist.php" style="color: #fff">Create an Artist</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-eq-height">
                    <div class="text-center loginscreen rounded blue-bg">
                        <p class="font-bold alert alert-danger m-b-sm blue-bg h2">
                            Artist List
                        </p>
                    </div>
                    <?php
                        while ($result = mysqli_fetch_array($response))
                        {
                    ?>
                        <div class="col-lg-3" >
                            <div class="widget bg-info p-xs text-left" >
                                <div class="m-b-xs">
                                    <p class="h3 no-margins" style="margin-top: 10px !important;">
                                        <span class="h3"><?=$result['artist_name']?></span>
                                    </p>
                                    <br />
                                    <p class="text-right" style="margin-bottom: 0;">
                                        <a href="https://twitter.com/<?=$result['twitter_handle']?>" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                        <a href="./edit_artist.php?id=<?=$result['artist_id']?>&edit=0"><i class="fa fa-edit fa-2x"></i></a>
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