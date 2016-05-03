<?php
function get_evt($offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $bdd->prepare('SELECT id, nom, DATE_FORMAT(date, \'%d/%m/%Y\') AS dateevt, lieu,  prix, description, nbplacerest FROM evt ORDER BY date DESC LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $evt = $req->fetchAll();
    
    
    return $evt;
}
?>