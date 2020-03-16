<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Survey') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <script type="text/javascript" src="js/jquery-min.js"></script>
	<script type="text/javascript" src="js/jquery.transit.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<!-- <script type="text/javascript" src="js/js.js"></script> -->
</head>
<body>
    <header class="page-header">
    	<div class="page-logo">
    		<a  href="{{ url('/') }}">
    			<img src="img/survey_logo.jpg" style="height: 100px;width: 100px;">
    		</a>
    	</div>
    </header>
    <main class="main">
    	<div class="container">
    		<div id="login" class="modal fade" role="dialog">
			    <div class="modal-dialog">

			        <div class="modal-content">
			            <div class="modal-header">
			                <h4 class="moda-title">Error</h4>
			                <button type="button" class="close" data-dismiss="modal">&times;</button>
			                
			            </div>
			            <div class="modal-body">
			                <p>Please select between 1 and 7 answers</p>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			            </div>
			        </div>
			        
			    </div>
			    
			</div>


			<div id="radio-error" class="modal fade" role="dialog">
			    <div class="modal-dialog">

			        <div class="modal-content">
			            <div class="modal-header">
			                <h4 class="moda-title">Error</h4>
			                <button type="button" class="close" data-dismiss="modal">&times;</button>
			                
			            </div>
			            <div class="modal-body">
			                <p>This Question is Required!</p>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			            </div>
			        </div>
			        
			    </div>
			    
			</div>
		    <!-- <div class="survey-body">
		    	<div class="question">
		    		sdfsdfsdfsdfdsf
		    	</div>
		    	<hr>
		    	<button type="button" class="btn btn-success float-right"><i class="fa fa-arrow-right"></i></button>
		    </div> -->
		<br>
			<div class="part1">
			<div class="survey-body">
				<div class="questionaire class_4392" required="1" q_a_id="4392" question-number="1">
	        <div class="page-text">
	        <h3>
	            
	        </h3>
	        </div>
	            <div class="question-title">
		            <h4 id="1">
		            	<span class="question-number">1.</span> 
		            	Have you taken out any of the following insurance products in the last 2 years? Please select all that are applicable
		            </h4>
	            </div>

	            <div class="row" id="scroll-0">
	            	<div class="col-md-12">
	            		<div class="question-answers">
	            			<form class="survey-questions" q_a_id="4392"> 
	            			<ul class="option-list checkbox-group required">
	            				<li class="list-item checkbox" target="">
			                		<label>
			                			<input type="checkbox" id="4296" name="4149_4296" value="4296">
			                			<span class="checkmark"></span>
			                				Domestic worker Insurance (Covers your domestic worker in the event of their death, disability or critical illness)
			                		</label>
	                			</li>
	                			<li class="list-item checkbox" target="">
	                				<label>
	                					<input type="checkbox" id="4299" name="4149_4299" value="4299">
	                					<span class="checkmark"></span>
	                					Pet Insurance (Covers your pet in the event of accident and illness)
	                				</label>
	                			</li>
	                			<li class="list-item checkbox" target="">
	                				<label>
	                					<input type="checkbox" id="4302" name="4149_4302" value="4302">
	                						<span class="checkmark"></span>
	                						Mobile Device Insurance (Covers your mobile device e.g. cell phone or tablet in the event of theft or loss)
	                					</label>
	                			</li>
	                			<li class="list-item checkbox" target="">
	                				<label>
	                					<input type="checkbox" id="4305" name="4149_4305" value="4305">
	                						<span class="checkmark"></span>
	                						Education plan (Cover is provided for your children’s education in the event of your death)
	                					</label>
	                			</li>
	                			<li class="list-item checkbox" target="">
	                				<label>
	                					<input type="checkbox" id="4308" name="4149_4308" value="4308">
	                						<span class="checkmark"></span>
	                						Funeral Plan (Cover for funeral arrangements in the event of your death)
	                					</label>
	                			</li>
	                			<li class="list-item checkbox" target="">
	                				<label>
	                				<input type="checkbox" id="2047" name="4149_2047" value="2047">
	                					<span class="checkmark"></span>
	                						None of the above</label>
	                			</li>
	                		</ul>
	            			<hr class="line-breaker">
	            			<p class="required-msg" style="color:#C10A27;"></p>
	            			<div class="btn-section">

	            			<button type="button" onclick="firstquestion()" class="btn btn-success float-right required-question 1stQ"><i class="fa fa-arrow-right"></i></button>
	            		</div>
	            	</form>
	            </div>
	        </div>
	    	</div>
	        </div>
	        </div>

	    	</div>
<!-- Second Question -->
	    	<div class="part2" style="display: none;">
	        <div class="survey-body">
				<div class="questionaire class_4401" required="1" q_a_id="4401" question-number="2">
			        <div class="page-text">
			            <h3>
			                
			            </h3>
			        </div>
        			<div class="question-title">
        				<h4 id="1">
        					<span class="question-number">2.</span> Please provide which provider was used for Pet Insurance
        				</h4>
       				</div>
        			<div class="row" id="scroll-0">
        				<div class="col-md-12">
        					<div class="question-answers">
        						<form class="survey-questions" q_a_id="4401"> 
        	<ul class="option-list option-list-radio radio-group required">
        		<span class="">
        			<li class="list-item radio-btn">
		            <label>
			            <input target="" class="input-radio" type="radio" id="2027" name="4158" value="2027">
			            <span class="radiomark"></span>
		            1</label>
            		</li>
            		<li class="list-item radio-btn">
            <label>
            <input target="" class="input-radio" type="radio" id="3" name="4158" value="3">
            <span class="radiomark"></span>
            2</label>
            </li><li class="list-item radio-btn">
            <label>
            <input target="" class="input-radio" type="radio" id="4" name="4158" value="4">
            <span class="radiomark"></span>
            3</label>
            </li><li class="list-item radio-btn">
            <label>
            <input target="" class="input-radio" type="radio" id="5" name="4158" value="5">
            <span class="radiomark"></span>
            4</label>
            </li><li class="list-item radio-btn">
            <label>
            <input target="" class="input-radio" type="radio" id="6" name="4158" value="6">
            <span class="radiomark"></span>
            5</label>
            </li> 
	        <div class="anchors">
	        <span class="left-anchor"></span>
	        <span class="right-anchor pull-right"></span>
	        </div><br>
	        <span>      	
	        </span>
	    	</span>
	    	</ul>
        <hr class="line-breaker">
        <p class="required-msg" style="color:#C10A27;"></p>
        <div class="btn-section"><button type="button" onclick="secondquestion()" class="btn btn-success float-right required-question 2ndQ"><i class="fa fa-arrow-right"></i></button></div>
	    </form>
		</div>
		</div>
		</div>

        </div>
        </div>

    	</div>
<!--  			-->
<!-- Third Question -->
			<div class="part3" style="display: none;">
				<script type="text/javascript">
			    	if($('.other').is(':checked'))
			    	{
			    		$('.other-textbox').css('display','block');
			    	}
			    </script>

				<div class="survey-body">

					<div class="questionaire class_2472" required="1" q_a_id="2472" question-number="3">
				        <div class="page-text">
				            <h3>
				                
				            </h3>
				        </div>
				        <div class="question-title">
				        <h4 id="2"><span class="question-number">3.</span>  Where you able to log into the insights platform</h4>
				        </div>
				        <div class="row" id="scroll-0"><div class="col-md-12"><div class="question-answers"><form class="survey-questions" q_a_id="2472"> 
				        <ul class="option-list option-list-radio radio-group required"><span class=""><li class="list-item radio-btn">
				            <label>
				            <input target="#probe-127" class="input-radio probed-question" type="radio" id="2745" name="2742" value="2745">
				            <span class="radiomark"></span>
				            Yes</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="#probe-130" class="input-radio probed-question" type="radio" id="13" name="2742" value="13">
				            <span class="radiomark"></span>
				            No</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="#probe-123" onchange="showTextbox()" class="input-radio probed-question other" type="radio" id="2986" name="2742" value="2986">
				            <span class="radiomark"></span>
				            Other</label>
				            </li> 
				        <div class="anchors">
				        <span class="left-anchor"></span>
				        <span class="right-anchor pull-right"></span>
				        </div><br>
				        <span></span></span></ul>
				        
				                                <div id="probe-127" class="probe-div other-textbox" style="display: none;">
				                                :Please specify
				                                    <textarea class="probe form-control" answer="2745" id="127" name="probe"></textarea>
				                                </div>
				                        
				                                <!-- <div id="probe-130" class="probe-div">
				                                :Please specify
				                                    <textarea class="probe form-control" answer="13" id="130" name="probe"></textarea>
				                                </div>
				                        
				                                <div id="probe-123" class="probe-div">
				                                Please specify
				                                    <textarea class="probe form-control" answer="2986" id="123" name="probe"></textarea>
				                                </div> -->
				                        <hr class="line-breaker">
				        <p class="required-msg" style="color:#C10A27;"></p>
				        <div class="btn-section"><button type="button" onclick="thirdquestion()" class="btn btn-success float-right required-question 3rdQ"><i class="fa fa-arrow-right"></i></button></div></form></div></div></div>
        			</div>
				</div>

			</div>

<!--	Forth Question -->
			<div class="part4" style="display: none;">
				<div class="survey-body">
					<div class="questionaire class_4404" required="1" q_a_id="4404" question-number="4">
				        <div class="page-text">
				            <h3>
				                
				            </h3>
				        </div>
				        <div class="question-title">
				        <h4 id="3"><span class="question-number">4.</span> Please provide which provider was used for Mobile Device</h4>
				        </div>
				        <div class="row" id="scroll-0"><div class="col-md-12"><div class="question-answers"><form class="survey-questions" q_a_id="4404"> 
				        <ul class="option-list option-list-radio radio-group required"><span class=""><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="2027" name="4161" value="2027">
				            <span class="radiomark"></span>
				            1</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="3" name="4161" value="3">
				            <span class="radiomark"></span>
				            2</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="4" name="4161" value="4">
				            <span class="radiomark"></span>
				            3</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="5" name="4161" value="5">
				            <span class="radiomark"></span>
				            4</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="6" name="4161" value="6">
				            <span class="radiomark"></span>
				            5</label>
				            </li> 
				        <div class="anchors">
				        <span class="left-anchor"></span>
				        <span class="right-anchor pull-right"></span>
				        </div><br>
				        <span></span></span></ul>
				        <hr class="line-breaker">
				        <p class="required-msg" style="color:#C10A27;"></p>
				        <div class="btn-section"><button type="button" onclick="forthquestion()" class="btn btn-success float-right required-question 4thQ"><i class="fa fa-arrow-right"></i></button></div></form></div></div></div>
				        </div>
					</div>
				</div>
	<!--		-->

	<!--  Fifth Question -->
					
				<div class="part5" style="display: none;">
					<div class="survey-body">
						<div class="questionaire class_4395" required="1" q_a_id="4395" question-number="5">
	        <div class="page-text">
	            <h3>
	                
	            </h3>
	        </div>
	        <div class="question-title">
	        <h4 id="4"><span class="question-number">5.</span> Please provide which provider was used for Domestic worker Insurance</h4>
	        </div>
	        <div class="row" id="scroll-0"><div class="col-md-12"><div class="question-answers"><form class="survey-questions" q_a_id="4395"> 
	        <ul class="option-list option-list-radio radio-group required"><span class=""><li class="list-item radio-btn">
	            <label>
	            <input target="" class="input-radio" type="radio" id="2027" name="4152" value="2027">
	            <span class="radiomark"></span>
	            1</label>
	            </li><li class="list-item radio-btn">
	            <label>
	            <input target="" class="input-radio" type="radio" id="3" name="4152" value="3">
	            <span class="radiomark"></span>
	            2</label>
	            </li><li class="list-item radio-btn">
	            <label>
	            <input target="" class="input-radio" type="radio" id="4" name="4152" value="4">
	            <span class="radiomark"></span>
	            3</label>
	            </li><li class="list-item radio-btn">
	            <label>
	            <input target="" class="input-radio" type="radio" id="5" name="4152" value="5">
	            <span class="radiomark"></span>
	            4</label>
	            </li><li class="list-item radio-btn">
	            <label>
	            <input target="" class="input-radio" type="radio" id="6" name="4152" value="6">
	            <span class="radiomark"></span>
	            5</label>
	            </li> 
	        <div class="anchors">
	        <span class="left-anchor"></span>
	        <span class="right-anchor pull-right"></span>
	        </div><br>
	        <span></span></span></ul>
	        <hr class="line-breaker">
	        <p class="required-msg" style="color:#C10A27;"></p>
	        <div class="btn-section"><button type="button" onclick="fifthquestion()" class="btn btn-success float-right required-question 5thQ"><i class="fa fa-arrow-right"></i></button></div></form></div></div></div>
	        </div>
				</div>
			</div>

<!--				 -->

<!--  Sixth Question -->

			<div class="part6" style="display: none;">
				<div class="survey-body">
					<div class="questionaire class_2508" required="1" q_a_id="2508" question-number="6">
				        <div class="page-text">
				            <h3>
				                
				            </h3>
				        </div>
				        <div class="question-title">
				        <h4 id="5"><span class="question-number">6.</span> How would you rate the load speed on the Genex Insights platform?</h4>
				        </div>
				        <div class="row" id="scroll-0"><div class="col-md-12">
				        	<div class="question-answers "><form class="survey-questions" q_a_id="2508"> 
				        <ul class="option-list option-list-radio radio-group required quest6"><span class=""><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="2131" name="2748" value="2131">
				            <span class="radiomark"></span>
				            0</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="2027" name="2748" value="2027">
				            <span class="radiomark"></span>
				            1</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="3" name="2748" value="3">
				            <span class="radiomark"></span>
				            2</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="4" name="2748" value="4">
				            <span class="radiomark"></span>
				            3</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="5" name="2748" value="5">
				            <span class="radiomark"></span>
				            4</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="6" name="2748" value="6">
				            <span class="radiomark"></span>
				            5</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="7" name="2748" value="7">
				            <span class="radiomark"></span>
				            6</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="8" name="2748" value="8">
				            <span class="radiomark"></span>
				            7</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="9" name="2748" value="9">
				            <span class="radiomark"></span>
				            8</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="10" name="2748" value="10">
				            <span class="radiomark"></span>
				            9</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="2133" name="2748" value="2133">
				            <span class="radiomark"></span>
				            10</label>
				            </li> 
				        <div class="anchors">
				        <span class="left-anchor">Extremely Slowly</span>
				        <span class="right-anchor pull-right">Extremely Quickly</span>
				        </div><br>
				        <span></span></span></ul>
				        <hr class="line-breaker">
				        <p class="required-msg" style="color:#C10A27;"></p>
				        <div class="btn-section"><button type="button" onclick="sixthquestion()" class="btn btn-success float-right required-question 6thQ"><i class="fa fa-arrow-right"></i></button></div></form></div></div></div>
				        </div>

				</div>
			</div>
<!--				 -->

<!--Seventh Question -->

			<div class="part7" style="display: none;">
				<div class="survey-body">

					<div class="questionaire class_4072" required="0" q_a_id="4072" question-number="7">
				        <div class="page-text">
				        <h3>
				            
				        </h3>
				        </div>
				            <div class="question-title">
				            <h4 id="6"><span class="question-number">7.</span> Testing Demographic Question</h4>
				            </div>
				            <div class="row" id="scroll-0"><div class="col-md-12"><div class="question-answers"><form class="survey-questions" q_a_id="4072"> 
				            
				                    <div class="form-group">
				                        <label>test</label>
				                        <textarea name="demographic::Team" class="form-control data-answers"></textarea>
				                    </div>
				                    <hr class="line-breaker">
				            <p class="required-msg" style="color:#C10A27;"></p>
				            <div class="btn-section"><button type="button" onclick="seventhquestion()" class="btn btn-success float-right required-question 7thQ"><i class="fa fa-arrow-right"></i></button></div></form></div></div></div>
				    </div>
				</div>
			</div>

<!-- 				 -->
<!--		Eight	 -->
			<div class="part8" style="display: none;">
				<div class="survey-body">
					<div class="questionaire class_2511" required="1" q_a_id="2511" question-number="8">
				        <div class="page-text">
				            <h3>
				                
				            </h3>
				        </div>
				        <div class="question-title">
				        <h4 id="7"><span class="question-number">8.</span> Did the charts load in the dashboard?</h4>
				        </div>
				        <div class="row" id="scroll-0"><div class="col-md-12"><div class="question-answers"><form class="survey-questions" q_a_id="2511"> 
				        <ul class="option-list option-list-radio radio-group required"><span class=""><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="2745" name="2754" value="2745">
				            <span class="radiomark"></span>
				            Yes</label>
				            </li><li class="list-item radio-btn">
				            <label>
				            <input target="" class="input-radio" type="radio" id="13" name="2754" value="13">
				            <span class="radiomark"></span>
				            No</label>
				            </li> 
				        <div class="anchors">
				        <span class="left-anchor"></span>
				        <span class="right-anchor pull-right"></span>
				        </div><br>
				        <span></span></span></ul>
				        <hr class="line-breaker">
				        <p class="required-msg" style="color:#C10A27;"></p>
				        <div class="btn-section"><button type="button" onclick="eighthquestion()" class="btn btn-success float-right required-question 8thQ"><i class="fa fa-arrow-right"></i></button></div></form></div></div></div>
				        </div>
				</div>
			</div>
<!--				 -->
		</div>
	</main>
	<footer>
		<div class="q-counter pgBar">

			<div class="gauge-container">

				<div class="gauge-a"></div>
				
				<div class="gauge-b"></div>
				
				<div class="gauge-c"></div>
				
				<div class="gauge-data">
				
				<h1 id="percent">0%</h1>
				
				</div>
				
			</div>

		</div>
	</footer>
    <script type="text/javascript" src="js/main.js"></script>
    
</body>
</html>
