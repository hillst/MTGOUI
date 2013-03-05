<?php include '../header.php'?>
<link rel="stylesheet" href="../my.css" />
<script>
  $(function() {
    $( ".card" ).draggable({
    });
  });
   
</script>
            <div data-role="content">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                    <input id="searchinput1" placeholder="Lightn" value="" type="search">
                    <p/>
                    <img class = 'card' src="../images/card1.png">
                    <img class = 'card' src="../images/card2.png">
                    <img class = 'card' src="../images/card3.png">
                    <img class = 'card' src="../images/card4.png">
					</div>
					
                    <div class="ui-block-b" id = 'rightside'>
                    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
