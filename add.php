<?php
echo form_open_multipart('player/add');
?>
	<div class="control-group">
		<label class="control-label" for="f_code">playerno:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_no">
		 
		</div>
	  </div>

	  <div class="control-group">
		<label class="control-label" for="f_code">name:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_name">
		
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">initials:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_ini">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">	birth date:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_birthdate">
		 
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">sex:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_sex">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">joined:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_join">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">street :</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_street">
		 
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">house number:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_house">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">postcode:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_post">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">town:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_town">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">phone number:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_phone">
		  
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">league number:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_league">
		
		</div>
	  </div>


	

	<div class="form-actions">
	  <input type="submit" id="f_submit"  name="submit" class="btn btn-primary" value="ذخیره" />
	  <button type="reset" class="btn">Cancel</button>
	</div>
<?php
echo form_close();
?>

