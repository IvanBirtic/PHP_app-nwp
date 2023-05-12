<?php 
error_reporting(0);
print '<h1>JSON - OpenLibrary</h1>';

if (!isset($_POST['action']) || $_POST['action'] == '') {
    $_POST['action'] = FALSE;
}

if ($_POST['action'] == FALSE) {
    print '
    <h1 style="text-align:center;">PRETRAGA AUTORA &#128214;</h1>
    <form class="form-horizontal" action="" name="authorsearch" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name"><h2>Ime autora/ice:*</h2></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Unesi ime autora, npr.: Stephen King, Milčec, Mažuranić" name="name" required>
            </div>
        </div>
        <input type="hidden" name="action" value="TRUE">
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Pretraži">
            </div>
        </div>
    </form>';
} 
else if ($_POST['action'] == TRUE) {
    print '<h1>Rezultati pretrage &#128214;</h1>';
    $url = 'https://openlibrary.org/search/authors.json?q=' . urlencode($_POST['name']);
    $json = file_get_contents($url);
    $_data = json_decode($json, true);

    if (isset($_data['docs']) && count($_data['docs']) > 0) {
        print '<p><a href="index.php?menu=8">↶ Natrag</a></p>';
        foreach ($_data['docs'] as $doc) {
            print '<div style="border:1px solid grey; padding: 10px; margin-bottom: 10px;">';
            if (isset($doc['name'])) {
                print '<p><strong>Ime autora:</strong> ' . $doc['name'] . '</p>';
            }
            if (isset($doc['birth_date'])) {
                print '<p><strong>Datum rođenja:</strong> ' . $doc['birth_date'] . '</p>';
            }
            if (isset($doc['death_date'])) {
                print '<p><strong>Datum smrti:</strong> ' . $doc['death_date'] . '</p>';
            }
            if (isset($doc['top_work'])) {
                print '<p><strong>Knjiga:</strong> ' . $doc['top_work'] . '</p>';
            }
            
            print '</div>';
        }
    }
    else {
        echo '<p><h2>Rezultati nisu pronađeni! 😭</h2></p>';
       
        print '<p><a href="index.php?menu=8">↶ Natrag</a></p>';
    }
}
print '</div>';
?>
