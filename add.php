<?php
 include('session.php');
?>
<!-- <center><h1>Add Materials</h1></center>

<form action="addmaterial.php" method="post" style="background-color: #FF6600; padding: 20px; border-radius: 10px;">
   <div style="border: 1px solid #ccc; border-radius: 5px; padding: 10px; margin-bottom: 10px;">
    <label for="M_ID" style="display: block; font-size: 18px; font-weight: bold; margin-bottom: 10px;">M_ID:</label>
    <select id="M_ID" name="M_ID" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; background-color: #f9f9f9; width: 100%;">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="1">4</option>
      <option value="1">5</option>
      <option value="1">6</option>
      <option value="1">7</option>
    </select>
  </div> 
   <div style="border: 1px solid #ccc; border-radius: 5px; padding: 10px; margin-bottom: 10px;">
    <label for="BRANCH_ID" style="display: block; font-size: 18px; font-weight: bold; margin-bottom: 10px;">BRANCH_ID:</label>
    <select id="BRANCH_ID" name="BRANCH_ID" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; background-color: #f9f9f9; width: 100%;">
      <option value="6">  6</option>
      <option value="7"> Computer Engineering - 7</option>
      <option value="9">9  </option>
    </select>
  </div>
  <div style="border: 1px solid #ccc; border-radius: 5px; padding: 10px; margin-bottom: 10px;">
    <label for="COURSE_ID" style="display: block; font-size: 18px; font-weight: bold; margin-bottom: 10px;">COURSE_ID:</label>
    <select id="COURSE_ID" name="COURSE_ID" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; background-color: #f9f9f9; width: 100%;">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
    </select>
  </div>
<label style="display: block; font-size: 18px; font-weight: bold; margin-bottom: 10px;">FILE_NAME:</label>

  <textarea id="details" name="details" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 16px;"></textarea>
<label style="display: block; font-size: 18px; font-weight: bold; margin-bottom: 10px;">.PDF:</label>

<div id="drop-area" style="border: 2px dashed #ccc; border-radius: 10px; padding: 20px; text-align: center; font-size: 18px; font-weight: bold; margin-bottom: 16px;">
  <input type="file" id="image" name="image" accept=".pdf">
  <p>Drag and drop an Material here, or click to select an Material</p>
</div>

<input type="submit" value="Publish" style="background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
</form>  -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Material</title>
</head>
<body>
<form action="adminuploadmaterial.php" method="post" enctype="multipart/form-data">
    <div class="form-input py-2">
        <div class="form-group">
          <input type="text" class="form-control" name="name"
                 placeholder="Enter File Name" required>
        </div> 
        <div class="form-input py-2">
        <div class="form-group">
          <input type="text" class="form-control" name="type"
                 placeholder="Enter File Type" required>
        </div> 
        <div>
        <select class="custom-select border-0 px-4" name="branch" id="role">
				<option selected>Select Branch</option>
				<option value="7">Computer Dept</option>
				<option value="16">It Dept</option>
                <option value="9">Electrical Dept</option>
                <option value="6">Civil Dept</option>
			</select></div>                           
        <div class="form-group">
          <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/>
        </div>
        <div class="form-group">
          <input type="submit" class="btnRegister"
                 name="submit" value="Submit">
        </div>
   </div>
</form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Material</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    form {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
    }

    h2 {
      text-align: center;
      margin-top: 0;
    }

    .form-input {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-control {
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
      width: 100%;
    }

    .custom-select {
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
      width: 100%;
      background-color: #fff;
    }

    .btnRegister {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    .btnRegister:hover {
      background-color: #0069d9;
    }

    .form-control:focus {
      outline: none;
      box-shadow: none;
      border: 1px solid #007bff;
    }

    select:focus,
    option:focus {
      outline: none;
      box-shadow: none;
      border: 1px solid #007bff;
    }
  </style>
</head>
<body>
<form action="adminuploadmaterial.php" method="post" enctype="multipart/form-data">
    <h2>Upload Material</h2>
    <div class="form-input py-2">
        <div class="form-group">
          <input type="text" class="form-control" name="name"
                 placeholder="Enter File Name" required>
        </div> 
        <div class="form-group">
          <input type="text" class="form-control" name="type"
                 placeholder="Enter File Type" required>
        </div> 
        <div class="form-group">
          <select class="custom-select" name="branch" id="role">
				<option selected>Select Branch</option>
				<option value="7">Computer Dept</option>
				<option value="16">It Dept</option>
                <option value="9">Electrical Dept</option>
                <option value="6">Civil Dept</option>
			</select>
        </div>                           
        <div class="form-group">
          <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/>
        </div>
        <div class="form-group">
          <input type="submit" class="btnRegister"
                 name="submit" value="Submit">
        </div>
   </div>
</form>
</body>
</html>
