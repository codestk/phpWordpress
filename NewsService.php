

<?php





include 'db.php';
//post_status=all&post_type=nf_sub&form_id=3
$sql = "SELECT post_id, MAX(IF(meta_key= '_field_9', meta_value, NULL)) AS _field_9,
 MAX(IF(meta_key= '_field_10', meta_value, NULL)) AS Email,
 MAX(IF(meta_key= '_field_11', meta_value, NULL)) AS Name
FROM  wp_postmeta WHERE post_id in (  SELECT post_id FROM wp_postmeta where meta_key='_form_id' and meta_value='16') and  post_id not in ( SELECT ID FROM wp_posts where post_type='nf_sub' and post_status = 'trash'  ) Group by post_id";
//$sql = " SELECT * FROM wp_postmeta where meta_key='_form_id' and meta_value='16'   ";
 //$sql = "   SELECT * FROM wp_posts where post_type='nf_sub' and post_status = 'trash'    ";


$result = $conn->query($sql);
$rows = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

  $rows[] = $row ;
    }
} else {
    echo "0 results";
}


print json_encode($rows);
$conn->close();
?>
