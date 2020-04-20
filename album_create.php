<?php
    include ('./classes/album.class.php');
    include('./includes/header.php');

    if ( isset($_POST['submit']) && $_POST['artist_name'] != 0)
    {
        $album = new Album('', $_POST['artist_name'], $_POST['album_name'], $_POST['year']);
        $query = "INSERT INTO albums VALUES (null, " . $album->get_albumArtist() . ",'" . $album->get_albumName() . "', '" . $album->get_albumYear() . "')";
        $result = $database->queryset($query);

        header('Location: ./album.php');
    }

    $query = "SELECT * FROM artists GROUP BY artist_name";
    $response = $database->queryset($query);
?>
                <div class="ibox-content">
                    <form method="POST" class="form-horizontal" action="./album_create.php" name="form" id="form">
                        <input type="hidden" value="<?=$_GET['album_id']?>" name="album_id" id="album_id" />
                        <div class="row justify-content-md-center">                            
                            <div class="col-md-6">
                                <p class="font-bold">
                                    Artist Name
                                </p>
                                <select name="artist_name" id="artist_name">
                                    <option value="0" selected>-- Select an Artist --</option>
                                    <?php
                                        while ($list = mysqli_fetch_array($response))
                                        {
                                            $id = $list['id'];
                                            $name = $list['artist_name'];
                                            $selected = ($id == $_GET['artist_id']) ? 'selected="selected"' : "";
                                    ?>
                                        <option value="<?=$id?>" <?=$selected?>><?=$name?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <p class="font-bold">
                                    Album Name:
                                </p>
                                <input type="text" name="album_name" id="album_name" class="form-control" required>
                            </div>
                        </div>
                        <br />
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <p class="font-bold">
                                    Album Year:
                                </p>
                                <input type="text" name="year" id="year" class="form-control" required>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-xs-12"> 
                                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create Album" />
                            </div>
                        </div>        
                    </form>
                </div>
<?php

    include('./includes/footer.php');

?>