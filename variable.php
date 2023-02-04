<form method="post" action="variable.php">
<p> Account 
<input type="text" name ="account" size="40"></p>
<p> Password
<input type="password" name="password" size="40"></p>

<p> Prefered time
<br>
<input type="radio" name="when" value="AM">AM<br>
<input type="radio" name="when" value="PM" checked>PM </p>

<p> Checkbox
<br>
<input type="checkbox" name="class1" value="math">math<br>
<input type="checkbox" name="class2" value="literature">literature<br>
<input type="checkbox" name="class3" value="science">science</p>

<p> choose drink
<br>
<select name="drink" >
<option value="0"> --please select </option>
<option value="1"> coke </option>
<option value="2"> milk </option>
<option value="3"> water </option> </p>
</select>

<p><label for="inp09"> which are good? <br> 
<select multiple="multiple" name="code[]" id="inp09">
    <option value="python">Python</option>
    <option value="HTML"> HTML</option>
    <option value="CSS"> CSS</option> 
    <option value="javascript"> javascript </option> 
</p>
</select>
<input type="submit">
</form>
<?php
print_r($_POST);
?>