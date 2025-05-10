<div class="report-container">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <div class="report-header">
        <h1 class="recent-Articles">Product</h1>
        <!-- <button class="view">View All</button> -->
    </div>
    <div class="report-body">
        <div class="form_div">
            <div class="responsive-form"> 
                <h3> 
                    Product section massage
                </h3> 
                <form class="form-container"> 
                    
                    <label for="product" class="form-container-label"> 
                        Product Name: 
                    </label> 
                    <input type="text" id="product" value="<?= $product['name'] ?>" name="prod_name" placeholder="Your current password" class="form-container-input" required> 
                    
                    <label for="produc" class="form-container-label"> 
                        Title / massage: 
                    </label> 
                    <input type="text" id="produc" value="<?= $product['title'] ?>" name="prod_title" placeholder="Product title / massage" class="form-container-input" required> 
                    
                    <label for="produ" class="form-container-label"> 
                        Price: 
                    </label> 
                    <input type="number" id="produ" value="<?= $product['price'] ?>" name="prod_price" placeholder="Product current price" class="form-container-input" required> 
                    
                    <label for="prod" class="form-container-label"> 
                        Old price: 
                    </label> 
                    <input type="number" id="prod" value="<?= $product['old_price'] ?>" name="prod_old" placeholder="Product old price" class="form-container-input" required> 
                    
                    <label for="prod" class="form-container-label"> 
                        Product <span class="small">(youtube video id)</span>: 
                    </label> 
                    <input type="text" id="prod" value="<?= $product['vid_product'] ?>" name="prod_v_pro" placeholder="product video id" class="form-container-input" required> 
                    
                    <label for="prod" class="form-container-label"> 
                        Setting <span class="small">(youtube video id)</span>: 
                    </label> 
                    <input type="text" id="prod" value="<?= $product['vid_setting'] ?>" name="prod_v_set" placeholder="setting video id" class="form-container-input" required> 
                    <button type="submit" class="form-container-button"> 
                        Update 
                    </button> 
                </form> 
            </div>
        </div>
    </div>
</div>