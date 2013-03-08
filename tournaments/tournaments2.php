<?php include '../header.php' ?>

<script src="my.js">
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
                    <div class="ui-block-a dark confirm">
                        <a href="#page1" >
                            Standard 8-4	<div class=" queue">2/8</div>
                        </a>
                        
                    </div>
                    <div class="ui-block-b dark end confirm">
                    	<a href="#page1">
                            Standard Daily Event <div class="queue">3/6/2013 10:00am</div>
                        </a>
                    </div>
                    <div class="ui-block-a light confirm">
                        <a href="#page1">
                   
                           Standard 4-3-2-2	<div class=" queue">7/8</div>
                        </a>
                    </div>
                    <div class="ui-block-b light end confirm">
                    	<a href="#page1">
                            Pro Tour Qualifier - Standard <div class=" queue">3/6/2013 10:30am</div>
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

        <div id="Confirmation">
        <div id= "x">X</div>
    	<table>
    		<tr>
    		<td></td>
    		<td><br/> Cost: $2000.00 <p/> 
    			<div data-role="fieldcontain">
    			Choose Payment Method:
    			<div data-role="fieldcontain">
					<select name="select-choice-1" id="select-choice-1">
						<option value="standard">Visa</option>
						<option value="rush">Mastercard</option>
						<option value="express">Paypal</option>
					</select>
				</div>
    			Security Code:<br/>
    			<input type="password" name="password" id="password" value="" />
				</div>
				<button id="purchase">Purchase!</button>
    		</td>
    		
    		
    	</table>
    	<div id = "complete">Purchase Complete! <br/>You have entered the Queue!</div>
    	
	</div>
    </body>
</html>
