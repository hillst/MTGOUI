<?php include '../header.php' ?>
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
                    <h2>Search your collection</h2>
                    <img title="Not-implemented: Click one of the colors to filter out cards of that color." src = '../images/5colors.png' class = 'filter' style = "width:30%; margin-top:-5px; float:right;"></img>
                    
                    <input id="searchinput1" placeholder="Lightn" value="" type="search" style="width:20%;">
                    <p/>
                    <img src = "../images/fold.png" id ="fold"></img>
                    <img class = 'card' src="../images/card1.png">
                    <img class = 'card' src="../images/card2.png">
                    <img class = 'card' src="../images/card3.png">
                    <img class = 'card' src="../images/card4.png">
					</div>
                    <div class="ui-block-b" id = 'rightside'>
                    <button data-inline="true">Save</button><button  data-inline="true">Deck Statistics</button>
                    	<div data-inline="true" style="width: 50%; float:right; margin-top:7px;" data-role="fieldcontain">
							<select name="select-choice-1" id="select-choice-1">
								<option value="standard">Sort By: Color</option>
								<option value="rush">Sort By: Converted Mana Cost</option>
								<option value="express">Sort By: Card Type</option>
							</select>
						</div>
						<div id="picture"></div>
                    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
