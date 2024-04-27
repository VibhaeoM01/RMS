<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="display" style="margin-top:0px;height:415px;">
		<h2><font color="blue">Passenger Detail</font></h2>
			
			<table class="table">
				<tr>
					<th style="width:100px;border-top:0px;">SNo.</th>
					<th style="width:200px;border-top:0px;"> Name</th>
					<th style="width:100px;border-top:0px;"> Age </th>
					<th style="width:100px;border-top:0px;"> Sex </th>
				</tr>
				<tr>
					<td > 1</td>
					<td ><input type="text" name="name1" ></td>
					<td ><input type="text" name="age1" class="input-small"></td>
					<td ><select name="sex1" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 2</td>
					<td ><input type="text" name="name2" ></td>
					<td ><input type="text" name="age2" class="input-small"></td>
					<td ><select name="sex2" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 3</td>
					<td ><input type="text" name="name3" ></td>
					<td ><input type="text" name="age3" class="input-small"></td>
					<td ><select name="sex3" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 4</td>
					<td ><input type="text" name="name4" ></td>
					<td ><input type="text" name="age4" class="input-small"></td>
					<td ><select name="sex4" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 5</td>
					<td ><input type="text" name="name5" ></td>
					<td ><input type="text" name="age5" class="input-small"></td>
					<td ><select name="sex5" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td style="border-top:0px;"><input class="btn btn-info"type="submit" value="Submit" id="subb" ></td>
					<td style="border-top:0px;"><input class="btn btn-info"type="reset" value="Reset"></td>
				</tr>	
				
			</table>
			</form>
		</div>
		
		<div>
		<br  />
		<p> <font color="red"> CHILDREN BELOW 5 YEAR (FOR WHOM TICKET IS NOT TO BE ISSUED). </font> </p>
		</div>
		
		</div>

        
    
</body>
</html> -->



























<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Details</title>
</head>
<body>

<div class="display" style="margin-top:0px;height:415px;">
    <h2><font color="blue">Passenger Detail</font></h2>
    <form id="passengerForm" action="process_passenger.php" method="post">
        <table class="table">
            <tr>
                <th style="width:100px;border-top:0px;">SNo.</th>
                <th style="width:200px;border-top:0px;"> Name</th>
                <th style="width:100px;border-top:0px;"> Age </th>
                <th style="width:100px;border-top:0px;"> Sex </th>
            </tr>
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><input type="text" name="name<?php echo $i; ?>"></td>
                    <td><input type="text" name="age<?php echo $i; ?>" class="input-small"></td>
                    <td>
                        <select name="sex<?php echo $i; ?>" class="input-small">
                            <option value="male">MALE</option>
                            <option value="female">FEMALE</option>
                        </select>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td style="border-top:0px;"><input class="btn btn-info" type="submit" value="Submit" id="subb"></td>
                <td style="border-top:0px;"><input class="btn btn-info" type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</div>

<div>
    <br>
    <p><font color="red">CHILDREN BELOW 5 YEAR (FOR WHOM TICKET IS NOT TO BE ISSUED).</font></p>
</div>

<script>
    document.getElementById('passengerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        var form = this;
        if (validateForm(form)) {
            form.submit(); // Submit the form if validation passes
        }
    });

    function validateForm(form) {
        var isValid = true;
        // Loop through each row of the table to validate input fields
        for (var i = 1; i <= 5; i++) {
            var nameField = form.elements['name' + i];
            var ageField = form.elements['age' + i];
            // Basic validation: Check if name and age fields are not empty
            if (nameField.value.trim() === '' || ageField.value.trim() === '') {
                alert('Please fill in all passenger details.');
                isValid = false;
                break; // Exit loop if any field is empty
            }
        }
        return isValid;
    }
</script>

</body>
</html>
     -->





























     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Details</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
        }
        .display
        {

            
            background-color:transparent;
            border-radius:10px;
             height:415px;height: 250px;
            border: 1px solid;
            margin: 100px 250px;
      

             width: 700px;
             padding: 8px; 
        }
        .btn-info
        {
            color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #49afcd;
    border:1px #49afcd;
    padding:3px;
    margin: 16px;
        }
        html { 
		  background: url(img/bg66.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}   
    </style>
</head>
<body>
<?php
		include ('header.php');
	?>
                    <h1 style="text-align: center;">Provide your information</h1>
<div class="display">
    <h2><font color="blue">Passenger Detail</font></h2>
   
    <form id="passengerForm" action="index.php" method="post"> <!-- Changed action to index.php -->
        <table class="table" style="margin:24px">
            <tr>
                <th style="width:100px;border-top:0px;">SNo.</th>
                <th style="width:200px;border-top:0px;"> Name</th>
                <th style="width:100px;border-top:0px;"> Age </th>
                <th style="width:100px;border-top:0px;"> Sex </th>
            </tr>
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><input type="text" name="name<?php echo $i; ?>"></td>
                    <td><input type="text" name="age<?php echo $i; ?>" class="input-small"></td>
                    <td>
                        <select name="sex<?php echo $i; ?>" class="input-small">
                            <option value="male">MALE</option>
                            <option value="female">FEMALE</option>
                        </select>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td style="border-top:0px;"><input class="btn btn-info" type="submit" value="Submit" id="subb"></td>
                <td style="border-top:0px;"><input class="btn btn-info" type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</div>

<div>
    <br>
   
</div>

<script>
    document.getElementById('passengerForm').addEventListener('submit', function(event) {
        var form = this;
        var filled = false; // Flag to track if at least one passenger's info is filled
        for (var i = 1; i <= 5; i++) {
            var nameField = form.elements['name' + i];
            var ageField = form.elements['age' + i];
            // Check if any name or age field is filled
            if (nameField.value.trim() !== '' || ageField.value.trim() !== '') {
                filled = true;
                break;
            }
        }
        // If no fields are filled, prevent form submission and display alert
        if (!filled) {
            alert('Please fill in at least one passenger detail.');
            event.preventDefault(); // Prevent form submission
        } else {
            alert('Ticket booked');
        }
    });
</script>

</body>
</html>
