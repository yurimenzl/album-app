<?php
    include ('./classes/artist.class.php');
    include('./includes/header.php');

    if ( isset($_POST['submit']) )
    {
        $artist = new Artist('', $_POST['artist_name'], $_POST['twitter_handle']);
        $query = "INSERT INTO artists VALUES (null,'" . $artist->get_artistName() . "', '" . $artist->get_artistTwitter . "')";
        $result = $database->queryset($query);

        header('Location: ./artist.php');
    }
    
?>
                <div class="ibox-content">
                    <form method="POST" class="form-horizontal" action="./create_artist.php" name="form" id="form">
                        <input type="hidden" value="<?=$_GET['id']?>" name="id" id="id" />
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <p class="font-bold">
                                    Artist Name
                                </p>
                                <input type="text" name="artist_name" id="artist_name" class="form-control" required>
                            </div>
                        </div>
                        <br />
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <p class="font-bold">
                                   Twitter Handle (@twitter)
                                </p>
                                <input type="text" name="twitter_handle" id="twitter_handle" class="form-control" required>
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