<html>
<head>
<title>hjem</title>
</head>
<?php
session_start();
if($_SESSION['user']){ 
}
else{
header("location: startsiden.php"); 
}
$user = $_SESSION['user']; 
?>
<html>
<head>
 
</head>
<body>
 
<div class="courtlist">
<?php
    foreach($courts as $court){
        echo '<a href="calbook.php?cal=' . $court['cid'] . '">' . $court['name'] . '</a> | ';
    }
?>
</div>
 
<?php
    if(strlen($message) > 1){
        echo '<div class="message">';
        echo $message;
        echo '</div>';
    }
?>
 
<iframe src="https://www.google.com/calendar/embed?src=westerdals.no_52047oki4q0lo84vfq0sdkap98%40group.calendar.google.com&ctz=Europe/Oslo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
<h2>Reservere et rom</h2>
    <input type="hidden" readonly="true" value="<?php echo $thecal; ?>" name="calendar"></input>
    Navn på reservasjonen: <input type="text" value="Reservasjon for ...." name="title"></input><br />
    Dato: <input type="text" value="<?php echo date('Y-m-d'); ?>" id="startdate" name="startdate"></input><br />
    Fra tidspunkt: <input type="text" value="" id="starttime" name="starttime"></input><br />
    Til tidspunkt: <input type="text" value="" id="endtime" name="endtime"></input><br />
    <input type="submit" name="submit" value="Reserver rom"></input>
</form>
</body>
</html>
