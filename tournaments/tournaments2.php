<?php include '../header.php'?>
<script>
  $(function() {
  	$(".dark").each(function(){
    $(this).click( function() {
    alert("You have entered the queue.");
	});
	});
	$(".light").click( function() {
    alert("You have entered the queue.");
	});
  });
   
</script>
        <!-- Home -->
            <div data-role="content">
                <div class="ui-grid-b">
                    <div class="ui-block-a">
                        <a data-role="button" href="tournaments.php">
                            Limited
                        </a>
                    </div>
                    <div class="ui-block-b">
                        <a data-role="button" href="tournaments2.php">
                            Standard
                        </a>
                    </div>
                    <div class="ui-block-b">
                        <a data-role="button" href="#page1">
                            Modern
                        </a>
                    </div>
                </div>
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <h2>
                            Flights
                        </h2>
                    </div>
                    <div class="ui-block-b">
                        <h2>
                            Scheduled
                        </h2>
                    </div>
                    <div class="ui-block-a dark">
                        <a href="#page1" onclick="javascript: $(this).alert("Are you sure you would like to enter")">
                            Standard 8-4	<div class="queue">2/8</div>
                        </a>
                        
                    </div>
                    <div class="ui-block-b dark end">
                    	<a href="#page1">
                            Standard Daily Event <div class="queue">3/6/2013 10:00am</div>
                        </a>
                    </div>
                    <div class="ui-block-a light">
                        <a href="#page1">
                   
                           Standard 4-3-2-2	<div class="queue">7/8</div>
                        </a>
                    </div>
                    <div class="ui-block-b light end">
                    	<a href="#page1">
                            Pro Tour Qualifier - Standard <div class="queue">3/6/2013 10:30am</div>
                        </a>
                    </div>
                    <div class="ui-block-a dark">
                        <a href="#page1">
                            ...
                        </a>
                    </div>
                    <div class="ui-block-b dark end">
                    	<a href="#page1">
                            ...
                        </a>
                    </div>
                    <div class="ui-block-a light">
                        <a href="#page1">
                            ...
                        </a>
                    </div>
                    <div class="ui-block-b light end">
                    	<a href="#page1">
                            ...
                        </a>
                    </div>
                    <div class="ui-block-a dark">
                        <a href="#page1">
                            ...
                        </a>
                    </div>
                    <div class="ui-block-b dark end">
                    	<a href="#page1">
                            ...
                        </a>
                    </div>
                    <div class="ui-block-a light">
                        <a href="#page1">
                            ...
                        </a>
                    </div>
                    <div class="ui-block-b light end">
                    	<a href="#page1">
                            ...
                        </a>
                    </div>
                    <div class="ui-block-a dark">
                        <a href="#page1">
                            ...
                        </a>
                    </div>
                    <div class="ui-block-b dark end">
                    	<a href="#page1">
                            ...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
