<div class="report-container">
    <div class="report-header">
        <h1 class="recent-Articles">Profile</h1>
        <!-- <button class="view">View All</button> -->
    </div>

    <div class="report-body">
        <div class="form_div">
            <div class="responsive-form"> 
                <h3> 
                    Update System Massage-------------
                </h3> 
                <form class="form-container"> 
                    <label for="name" class="form-container-label"> 
                        Username: 
                    </label> 
                    <input type="text" id="name" value="<?= $system_set['username'] ?>" name="prof_username" placeholder="Your username" class="form-container-input" required> 

                    <label for="password_1" class="form-container-label"> 
                        Password: 
                    </label> 
                    <input type="password" id="password_1" name="prof_password" placeholder="Your current password" class="form-container-input" required> 
                    <button type="submit" class="form-container-button"> 
                        Update 
                    </button> 
                </form> 
                <form class="form-container" style="margin-top: 20px; "> 
                    <label for="password_2" class="form-container-label"> 
                        Old Password: 
                    </label> 
                    <input type="password" id="password_2" name="prof_password" placeholder="Your current password" class="form-container-input" required> 

                    <label for="password_3" class="form-container-label"> 
                        New Password: 
                    </label> 
                    <input type="password" id="password_3" name="prof_new_password" placeholder="New Password" class="form-container-input" required> 
                    
                    <label for="password_4" class="form-container-label"> 
                        Confirm Password: 
                    </label> 
                    <input type="password" id="password_4" name="prof_con_password" placeholder="Confirm Password" class="form-container-input" required> 

                    <button type="submit" class="form-container-button"> 
                        Update 
                    </button> 
                </form> 
            </div>
        </div>
    </div>
</div>