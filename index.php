
<!----
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
----->
<script src="js/jquery1.3.2jquery.min.js"></script> 
<script src="js/jqueryui1.7.1-jquery-ui.min.js"></script>



<pre> 
    <div id="info">Sürükle Bıral İle Güncelleme Ajax</div> 
</pre> 
<ul id="test-list"> 
<?php
$db =  new PDO("mysql:host=localhost;dbname=dersler", "root", "localhost"); 
$query = $db->query('SELECT * FROM konular ORDER BY sira ASC',PDO::FETCH_ASSOC);
foreach($query as  $row){
?>
    <li id="listItem_<?php echo $row['id']?>"> 
        <img src="unnamed.png" alt="move" width="16" height="16" class="handle" /> 
        <strong><?php echo $row['konu_aciklama']?></strong>  
    </li>
 <?php } ?>	
</ul> 

<form action="ajax.php" method="post" name="sortables"> 
    <input type="hidden" name="test-log" id="test-log" /> 
</form>



<script type="text/javascript"> 
    // When the document is ready set up our sortable with it's inherant function(s) 
    $(document).ready(function() { 
        $("#test-list").sortable({ 
            handle : '.handle', 
            update : function () { 
                var order = $('#test-list').sortable('serialize'); 
                $("#info").load("ajax.php?"+order); 
            } 
        }); 
    }); 
</script>