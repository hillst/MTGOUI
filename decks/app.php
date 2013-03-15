<?php include '../header.php';?>
<link rel="stylesheet" href="../my.css" />
<script>
 $('.deck_name').click(
    function(){
        var text = $(this).text();
        $(this).text('');
        $('<textarea />').appendTo($(this)).val(text).select().blur(
            function(){
                var newText = $(this).val();
                $(this).parent().text(newText),find('textarea').remove();
            });
    });
    $('.deck_name').click(
    function(){
        var text = $(this).text();
        $(this).text('');
        $('<textarea />').appendTo($(this)).val(text).select().blur(
            function(){
                var newText = $(this).val();
                $(this).parent().text(newText),find('textarea').remove();
            });
    }); 
    $('.deck_name').hover(function(){
            $(this).css('background-color', '#aaa');
        },
        function(){
           $(this).css('background-color', '#F9F9F9');
        });  
</script>
            <div data-role="content">
                <div class="ui-grid-c">
                	
                    <div class="ui-block-a">
                    	<h2 class = 'deck_name'>Red Deck Wins</h2>
                    	<div style="width: 100%;  position: relative; border-bottom: 4px solid #b8b8b8;">
							<a href='editdeck.php'>
                    		<img width="200px" src="../images/DeckBox.png" alt="image" />
                    		</a>
                        </div>
                    </div>
                    <div class="ui-block-b">
                    	<h2 class = 'deck_name'>Jed Deck Wins</h2>

                        <div style="width: 100%;position: relative; border-bottom: 4px solid #b8b8b8;">
                        	<a href='editdeck.php'>
                            <img width="200px" src="../images/DeckBox.png" alt="image"  />
                            </a>
                        </div>
                    </div>
					
                    <div class="ui-block-c">
                    	<h2 class = 'deck_name'>Experimental Green</h2>
                        <div style="width: 100%; position: relative; border-bottom: 4px solid #b8b8b8;">
                        	<a href='editdeck.php'>
                            <img width="200px" src="../images/DeckBox.png" alt="image" />
                            </a>
                        </div>
                    </div>
                    <div class="ui-block-d">
						<h2 >Add a new deck.</h2>                    	
                    	<div style="width: 100%;  position: relative;  border-bottom: 4px solid #b8b8b8;">
							<a href='#'>
                    		<img width="200px" src="../images/plus.png" alt="image" />
                    		</a>
                        </div>
                    </div>
  
                   
                    <div class="ui-block-a ourblock">
                    	<li>100% win rate</li>	
                    	<li>played 25 times</li>
                    	<li>Estimated worth 15 dollars</li>
                    </div>
                    <div class="ui-block-b ourblock">
                    	<li>0% win rate</li>	
                    	<li>played 200 times</li>
                    	<li>Estimated worth 105 dollars</li>
                    </div>
                    <div class="ui-block-c ourblock">
                    	<li>50% win rate</li>	
                    	<li>played 2 times</li>
                    	<li>Estimated worth 1 dollar</li>
                    </div>
                    <div class="ui-block-d ourblock">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
