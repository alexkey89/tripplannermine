

<?php
/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$Region_set = 0;
$Location_set = 0;

if(isset($_POST['region_name_nic']) OR isset($_POST['region_name_lar']) OR isset($_POST['region_name_lim']) OR isset($_POST['region_name_paph']) OR isset($_POST['region_name_fam'])) 
{
$Region_Name_nic = $_POST['region_name_nic'] ;
$Region_Name_lar = $_POST['region_name_lar'] ;
$Region_Name_lim = $_POST['region_name_lim'] ;
$Region_Name_paph = $_POST['region_name_paph'] ;
$Region_Name_fam = $_POST['region_name_fam'] ;
$Region_set = 1;
}

if(isset($_POST['level_name_mon']) OR isset($_POST['level_name_meu']) OR isset($_POST['level_name_anc']) OR isset($_POST['level_name_sight']) OR isset($_POST['level_name_gol']) OR isset($_POST['level_name_foot']) OR isset($_POST['level_name_pub']) OR isset($_POST['level_name_club']) OR isset($_POST['level_name_mount']) OR isset($_POST['level_name_beach']) ) 
{
$Level_Name_mon = $_POST['level_name_mon'] ;
$Level_Name_meu = $_POST['level_name_meu'] ;
$Level_Name_anc = $_POST['level_name_anc'] ;
$Level_Name_sight = $_POST['level_name_sight'] ;
$Level_Name_gol = $_POST['level_name_gol'] ;
$Level_Name_foot = $_POST['level_name_foot'] ;
$Level_Name_pub = $_POST['level_name_pub'] ;
$Level_Name_club = $_POST['level_name_club'] ;
$Level_Name_mount = $_POST['level_name_mount'] ;
$Level_Name_beach = $_POST['level_name_beach'] ;
$Location_set = 1;
}


/*
echo $Level_Name_mon;
echo $Level_Name_meu;
echo $Level_Name_anc;
echo $Level_Name_sight;
echo $Level_Name_gol;
echo $Level_Name_foot;
echo $Level_Name_pub;
echo $Level_Name_club;
echo $Level_Name_mount;
echo $Level_Name_beach;
*/

?>

