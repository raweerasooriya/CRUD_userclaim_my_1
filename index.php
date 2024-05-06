<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Claim</title>

    <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

    <fieldset>
            <div class="text-center mb-4">
                <h4 style="margin-top: 20px;">Add New Claim</h4>
            </div>
            <div class="container d-flex justify-content-center">
            <form action="insert.php" method="post" style="width:50vw: min-width:300px;">
                <div class="row mb-3">

                    <div class="col">
                        <label class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First">
                    </div>

                    <div class="col">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">User Id:</label>
                    <input type="text" class="form-control" name="userId" placeholder="12345">
                </div>

                <div class="form-group mb-3">
                    <label>Gender:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="female">
                    <label for="female" class="form-input-label">Female</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="other">
                    <label for="other" class="form-input-label">Other</label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address">
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Phone Number:</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="+94700000000">
                    </div>

                    <div class="col">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="name@example.com">
                    </div>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" name="amount" placeholder="Rs.00000">
                </div>
                <div>
                <label class="form-label">Types of health insurance claims:</label>
                    <select name="typesClaims">
                     <option value="Medical Services">Medical Services Claim</option>
                      <option value="Prescription Drug">Prescription Drug Claim</option>
                      <option value="Dental Services">Dental Services Claim</option>
                      <option value="Vision Care">Vision Care Claim</option>
                      <option value="Mental Health">Mental Health Services Claim</option>
                      <option value="Maternity and Newborn Care">Maternity and Newborn Care Claim</option>
                      <option value="Preventive Care">Preventive Care Claim</option>
                      <option value="Emergency Care">Emergency Care Claim</option>
                        </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="read.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
        
    </fieldset>

</body>
</html>