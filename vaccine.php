<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine</title>
    <link rel="stylesheet" href="css/Sample.css">
</head>
<body>
    
    <a class="Logout" href="">Logout</a>
<div class="box">
    <p class="vi">Student Vaccine Information</p>
<form action="">
    <div class="name">   
    <input type="text" name="Name" placeholder="Name">
    </div>
    <div class="roll">
        <input type="text" name="Roll" placeholder="Roll">
    </div>
    <div>
     <label class="radio">Vaccine Status</label>
     <label for="myRadioId" class="radio">
        <div><input type="radio">Taken 1st dose, but did not get schedule for 2nd dose</div>
        <div><input type="radio">Yes Vaccinated (Taken 2 doses)</div>
        <div><input type="radio">Registered on Surokkha website, but did not get schedule for 1st dose</div>
        <div><input type="radio">Do not have NID</div>
        <div class="x"><input type="radio">Did not Register</div>



    </div>
    <span class="first">
        <label for="first">First Vaccine name</label>
        <select class="dose1">
            <option>Pfizer </option>
            <option>Moderna</option>
            <option>Astrazeneca</option>
            <option>Johnson & johnson</option>
            <option>Sinopharm</option>
            <option>Sputni </option>
            </select>
    </span>
        <div class="DOB">

            <span><label for="">First Dose Date</label> 
            <input type="text" placeholder="Day" input size="2" maxlength="2" >
            <input type="text" name="" id="" placeholder="Month" input size="8">
            <input type="text" placeholder="Year" input size="4" minlength="4">
            </span>
        </div>
        <span class="first">
            <label for="first">Second Vaccine name</label>
            <select class="dose2">
                <option>Pfizer </option>
                <option>Moderna</option>
                <option>Astrazeneca</option>
                <option>Johnson & johnson</option>
                <option>Sinopharm</option>
                <option>Sputni </option>
            </select>
        </span>
        <div class="DOB">
        
            <span><label for="">Second Dose Date</label>
                <input type="text" placeholder="Day" input size="2" maxlength="2">
                <input type="text" name="" id="" placeholder="Month" input size="8">
                <input type="text" placeholder="Year" input size="4" minlength="4">
            </span>
        </div>
    <div class="sub">
    <input type="submit" name="submit" value="Update">
    </div> 
    
   
</form>
</div>
</body>
</html>