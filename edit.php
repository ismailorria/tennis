<?php
echo form_open_multipart('player/edit');
?>
	<div class="control-group">
		<label class="control-label" for="f_code">playerno:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_no" value="<?php  echo $player['playerno'];  ?>">
		 
		</div>
	  </div>

	  <div class="control-group">
		<label class="control-label" for="f_code">name:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_name" value="<?php  echo $player['name'];  ?>" >
		
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">initials:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_ini" value="<?php  echo $player['initials'];  ?>">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">	birth date:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_birthdate" value="<?php  echo $player['birth_date'];  ?>">
		 
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">sex:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_sex" value="<?php  echo $player['sex'];  ?>">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">joined:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_join" value="<?php  echo $player['joined'];  ?>">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">street :</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_street" value="<?php  echo $player['street'];  ?>">
		 
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">house number:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_house" value="<?php  echo $player['houseno'];  ?>">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">postcode:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_post" value="<?php  echo $player['postcode'];  ?>">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">town:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_town" value="<?php  echo $player['town'];  ?>">
	
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">phone number:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_ohone" value="<?php  echo $player['phoneno'];  ?>">
		  
		</div>
	  </div>

<div class="control-group">
		<label class="control-label" for="f_code">league number:</label>
		<div class="controls">
		  <input type="text" id="f_code" name="p_league" value="<?php  echo $player['leagueno'];  ?>">
		
		</div>
	  </div>


	

	<div class="form-actions">
	  <input type="submit" id="f_submit"  name="submit" class="btn btn-primary" value="ذخیره" />
	  <button type="reset" class="btn">Cancel</button>
	</div>
<?php
echo form_close();
?>

