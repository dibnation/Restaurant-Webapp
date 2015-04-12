<?php
Function restaurantdropdown()
{
    
$query = "SELECT name from Gproject.restaurant";
$result = pg_query ($query);
echo "<select name=dropdown value=''>Dropdown</option>";
while($r = pg__fetch_array($result)){
echo "<option> value=$r[0]>$r[0]</option>";
}
echo "</select>";

}


?>

