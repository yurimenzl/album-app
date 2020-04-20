<?php
    include ('./classes/artist.class.php');
    include('./includes/header.php');

    if ( isset($_POST['submit']) )
    {
        $artist = new Artist($_POST['id'], $_POST['artist_name'], $_POST['twitter_handle']);
        $query = "UPDATE artists SET artist_name = '" . $artist->get_artistName() . "', twitter_handle = '" . $artist->get_artistTwitter() . "' WHERE id = " . $artist->get_id();
        $result = $database->queryset($query);

        header('Location: ./edit_artist.php?id=' . $artist->get_id() . '&edit=1');
    }

    $query = "SELECT * FROM artists WHERE id = " . $_GET['id'];
    $response = $database->queryset($query);
    $result = mysqli_fetch_array($response);
?>
                <div class="ibox-content">
                <?php
                    if ( $_GET['edit'] )
                    {
                ?>
                        <div class="middle-box text-center loginscreen animated fadeInDown rounded">
                                <p class="font-bold alert alert-danger m-b-sm bg-primary">
                                    Success! You edit an Artist!
                                </p>
                            </div>
                <?php
                    }
                ?>
                    <form method="POST" class="form-horizontal" action="./edit_artist.php" name="form" id="form">
                        <input type="hidden" value="<?=$_GET['id']?>" name="id" id="id" />
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <p class="font-bold">
                                    Artist Name
                                </p>
                                <input type="text" name="artist_name" id="artist_name" class="form-control" value="<?=stripslashes($result['artist_name'])?>" required>
                            </div>
                        </div>
                        <br />
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <p class="font-bold">
                                   Twitter Handle (@twitter)
                                </p>
                                <input type="text" name="twitter_handle" id="twitter_handle" class="form-control" value="<?=stripslashes($result['twitter_handle'])?>" required>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-xs-12"> 
                                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Update Artist" />
                            </div>
                        </div>        
                    </form>
                </div>
<?php

    include('./includes/footer.php');

?>