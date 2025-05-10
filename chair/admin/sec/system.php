<div class="report-container">
    <div class="report-header">
        <h1 class="recent-Articles">System Setting</h1>
        <!-- <button class="view">View All</button> -->
    </div>

    <div class="report-body">
        <div class="form_div">
            <div class="responsive-form"> 
                <h3> 
                    Update System Massage-------------
                </h3> 
                <form class="form-container" action="" method="get"> 
                    <label for="name" class="form-container-label"> 
                        Business Name: 
                    </label> 
                    <input type="text" id="name" name="sys_name" placeholder="Your business name" class="form-container-input" value="<?= $system_set['b_name'] ?>" required> 

                    <label for="number" class="form-container-label"> 
                        Contuct Number: 
                    </label> 
                    <input type="number" id="number" name="sys_number" placeholder="Your contuct number" class="form-container-input" value="<?= $system_set['number'] ?>" required> 
                    
                    <label for="shipping" class="form-container-label"> 
                        Product Shipping (charge): 
                    </label> 
                    <input type="number" id="shipping" name="sys_shipping" placeholder="Your shipping charge" class="form-container-input" value="<?= $system_set['shipping'] ?>" required> 

                    <button type="submit" class="form-container-button"> 
                        Update 
                    </button> 
                </form> 
            </div>
        </div>
    </div>
</div>