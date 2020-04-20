<?php include_once('lib/header.php');
require_once('functions/alert.php');

if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){

    header("Location: dashboard.php");
}


?>
<div class="container">
    <div class="col-8">
        <h2>Register</h2>
    </div>
    <div class="col-10">
        <p><strong>Welcome, Please Register</strong></p>
    </div>
    <div class="col-10">
        <p>All Fields are required</p>
    </div>
    <div class="col-8">

        <form method="POST" action="processregister.php">
        <p>
           <?php print_alert(); ?> 
        </p>
            <p>
                <label>First Name</label><br />
                <input  
                <?php              
                    if(isset($_SESSION['first_name'])){
                        echo "value=" . $_SESSION['first_name'];                                                             
                    }                
                ?>
                type="text" class="form-control" name="first_name" placeholder="First Name" />
            </p>
            <p>
                <label>Last Name</label><br />
                <input
                <?php              
                    if(isset($_SESSION['last_name'])){
                        echo "value=" . $_SESSION['last_name'];                                                             
                    }                
                ?>
                type="text" class="form-control" name="last_name" placeholder="Last Name"  />
            </p>
            <p>
                <label>Email</label><br />
                <input
                
                <?php              
                    if(isset($_SESSION['email'])){
                        echo "value=" . $_SESSION['email'];                                                             
                    }                
                ?>

                type="text" class="form-control" name="email" placeholder="Email"  />
            </p>

            <p>
                <label>Password</label><br />
                <input type="password" class="form-control" name="password" placeholder="Password"  />
            </p>
            <p>
                <label>Gender</label><br />
                <select class="form-control" name="gender" >
               
                    <option value="">Select One</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Female</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Male</option>
                </select>
            </p>
        
            <p>
                <label>Designation</label><br />
                <select class="form-control" name="designation" >
                
                    <option value="">Select One</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Mentors (MT)'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Mentors (MT)</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Interns'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Interns</option>
                </select>
            </p>
            <p>
            <label>Department</label><br />
                <select class="form-control" name="department" >
                    <option value="">Select One</option>
                    <option
                    <?php              
                        if(isset($_SESSION['department']) && $_SESSION['department'] == 'Frontend (FE)'){
                            echo "selected";                                                           
                        }                
                    ?>
                    
                    >Frontend(FE)</option>
                    <option
                    <?php              
                        if(isset($_SESSION['department']) && $_SESSION['department'] == 'Backend (BE)'){
                            echo "selected";                                                           
                        }                
                    ?>
                               
                    >Backend (BE)</option>
                    <option
                    <?php              
                        if(isset($_SESSION['department']) && $_SESSION['department'] == 'Design (UI/UX)'){
                            echo "selected";                                                           
                        }                
                    ?>
                    
                    
                    >Design</option>
                    </select>
                </p>
                              
                <p>
                <button class="btn btn-sm btn-success" type="submit">Register</button>
                </p>
            <p>
                    <a href="forgot.php">Forgot Password</a><br />
                    <a href="login.php">Already have an account? Login</a>
            </p>
        </form>

    </div>

</div>
