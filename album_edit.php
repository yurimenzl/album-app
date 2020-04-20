<?php
    include ('./classes/album.class.php');
    include('./includes/header.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ( isset($_POST['submit']) )
    {   
       
        $album = new Album($_POST['album_id'], $_POST['artist_name'], $_POST['album_name'], $_POST['year']);
        
        $query = "UPDATE albums SET id_artist = " . $album->get_albumArtist() . ", album_name = '" . $album->get_albumName() . "', year = '" . $album->get_albumYear() . "' WHERE id = " . $album->get_albumId();
        $result = $database->queryset($query);

        header('Location: ./album_edit.php?album_id=' . $album->get_albumId() . '&artist_id=' . $album->get_albumArtist() . "&edit=1");
    }

    $query = "SELECT * FROM albums WHERE id = " . $_GET['album_id'];
    $response = $database->queryset($query);
    $result = mysqli_fetch_array($response);

    $query = "SELECT * FROM artists";
    $response = $database->queryset($query);

?>
                <div class="ibox-content">
                    <?php
                        if ( $_GET['edit'] )
                        {
                    ?>
                            <div class="middle-box text-center loginscreen animated fadeInDown rounded">
                                    <p class="font-bold alert alert-danger m-b-sm bg-primary">
                                        Success! You edit an Album!
                                    </p>
                                </div>
                    <?php
                        }
                    ?>
                    <form method="POST" class="form-horizontal" action="./album_edit.php" name="form" id="form">
                        <input type="hidden" value="<?=$_GET['album_id']?>" name="album_id" id="album_id" />
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <p class="font-bold">
                                    Artist Name
                                </p>
                                <select name="artist_name" id="artist_name">
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
                                <input type="text" name="album_name" id="album_name" class="form-control" value="<?=stripslashes($result['album_name'])?>" required>
                            </div>
                        </div>
                        <br />
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <p class="font-bold">
                                    Album Year:
                                </p>
                                <input type="text" name="year" id="year" class="form-control" value="<?=stripslashes($result['year'])?>" required>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-xs-12"> 
                                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Update Album" />
                            </div>
                        </div>        
                    </form>
                </div>
<?php

    include('./includes/footer.php');

?>