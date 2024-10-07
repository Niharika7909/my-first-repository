<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Student Registration</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script>
            function validateForm() {
                var rollno = document.getElementById("rollno").value;
                var fullname = document.getElementById("fullname").value;
                var branch = document.getElementById("branch").value;
                var year = document.querySelector('input[name="year"]:checked');
                
                if (rollno === "") {
                    alert("Please enter your Roll Number.");
                    return false;
                }

                if (fullname === "") {
                    alert("Please enter your Full Name.");
                    return false;
                }

                if (branch === "") {
                    alert("Please select your Branch.");
                    return false;
                }

                if (year === null) {
                    alert("Please select your Year.");
                    return false;
                }

                alert("Form submitted successfully!");

                document.getElementById("registrationForm").style.display = "none";
                document.getElementById("successMessage").style.display = "block";

                return false; 
            }
        </script>
    </head>
    <body>
        <h1>Student Registration</h1>
        
        <form id="registrationForm" action="register.php"method="post"
         onsubmit="return validateForm()">
            <div>
                <label for="rollno">Roll. No</label>
                <input type="text" id="rollno" name="rollno" placeholder="Enter Roll No"/>
            </div><br>

            <div>
                <label for="fullname">Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name"/>
            </div><br>

            <div>
                <label for="branch">Branch</label>
                <select name="branch" id="branch">
                    <option value="">Select Branch</option>
                    <option>CSE</option>
                    <option>IT</option>
                    <option>Mechanical</option>
                    <option>Electrical</option>
                    <option>Hotel Management</option>
                    <option>Civil</option>
                </select>
            </div><br>

            <div>
                <label>Year</label><br>
                <input type="radio" name="year" id="year1" value="1st">
                <label for="year1">1st Year</label><br>
                <input type="radio" name="year" id="year2" value="2nd">
                <label for="year2">2nd Year</label><br>
                <input type="radio" name="year" id="year3" value="3rd">
                <label for="year3">3rd Year</label><br>
            </div><br>

            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>

        
    </body>
</html>