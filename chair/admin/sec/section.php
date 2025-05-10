<div class="report-container">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <div class="report-header">
        <h1 class="recent-Articles">Product</h1>
        <!-- <button class="view">View All</button> -->
    </div>
    <style>
        /* ============================================================== */

        .switch-container {
        width: 235px;
        height: 30px;
        border-radius: 15px;
        box-shadow: 5px 5px 15px 5px #cfd8dc;
        position: relative;
        }

        .switch-color {
        width: 98%;
        height: 26px;
        left: 2px;
        top: 2px;
        background: #cfd8dc;
        border-radius: 15px;
        z-index: 5;
        position: absolute;
        transition: all 500ms cubic-bezier(0.34, 1.36, 0.2, 1);
        }

        .switch-label {
        width: 26px;
        height: 26px;
        border-radius: 15px;
        background: white;
        position: absolute;
        top: 2px;
        left: 2px;
        box-shadow: 2px 2px 10px 2px #cfd8dc;
        z-index: 99;
        cursor: pointer;
        }

        .switch-label::before {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 20px;
        content: "\f00d";
        position: absolute;
        left: 5px;
        top: 3px;
        color: #e9182a;
        }

        .switch-label::after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 20px;
        content: "\f00c";
        position: absolute;
        left: 3px;
        top: 3px;
        opacity: 0;
        color: #00e676;
        }

        .switch:checked ~ .switch-label::before {
        opacity: 0;
        }

        .switch:checked ~ .switch-label::after {
        opacity: 1;
        }

        .switch:checked ~ .switch-label {
        transform: translatex(200px) rotatez(360deg);
        }

        .switch:checked ~ .switch-color {
        background: #00e676;
        }

        .switch ~ .switch-label {
        transition: all 1s cubic-bezier(0.34, 1.36, 0.2, 1);
        }

        .switch {
        display: none;
        }
        /* ======================================== */
    </style>
    <div class="report-body">
        <div class="form_div">
            <div class="responsive-form"> 
                <h3> 
                    Product section massage
                </h3> 
                <!-- ================================================ -->
                <h3 style="margin-top: 40px; "> 
                    Section ONE massage
                    <label for=""> </label>
                </h3>
                
                <form class="form-container" action="" method="post">
                <input type="hidden" name="section" value="1">
                    <label for="product_2" class="form-container-label"> 
                        Section On / Off : 
                    </label>
                    <div class="form-container-input">
                        <div class="switch-container">
                            <input type="checkbox" id='switch1' class='switch' name="checked" value="on" <?php if($section_1['status'] == 1) echo "checked" ?>>
                            <div class="switch-color"></div>
                            <label for="switch1" class="switch-label">
                            </label>
                        </div>
                    </div> 
                    <label for="product_0" class="form-container-label"> 
                        Section Title: 
                    </label> 
                    <input type="text" id="product_0" value="<?= $section_1['title'] ?>" name="sec_title" placeholder="Section title" class="form-container-input" required> 

                    <label for="product_1" class="form-container-label"> 
                        Item 1:
                    </label> 
                    <input type="text" id="product_1" value="<?= $section_1['one'] ?>" name="sec_item_1" placeholder="item one" class="form-container-input" required> 
                    
                    <label for="product_2" class="form-container-label"> 
                        Item 2:
                    </label> 
                    <input type="text" id="product_2" value="<?= $section_1['two'] ?>" name="sec_item_2" placeholder="item two" class="form-container-input" required> 
                    
                    <label for="product_3" class="form-container-label"> 
                        Item 3:
                    </label> 
                    <input type="text" id="product_3" value="<?= $section_1['three'] ?>" name="sec_item_3" placeholder="item three" class="form-container-input" required> 
                    
                    <label for="product_4" class="form-container-label"> 
                        Item 4:
                    </label> 
                    <input type="text" id="product_4" value="<?= $section_1['four'] ?>" name="sec_item_4" placeholder="item four" class="form-container-input" required> 
                    
                    <label for="product_5" class="form-container-label"> 
                        Item 5:
                    </label> 
                    <input type="text" id="product_5" value="<?= $section_1['five'] ?>" name="sec_item_5" placeholder="item five" class="form-container-input" required> 
                 
                    <button type="submit" class="form-container-button"> 
                        Update 
                    </button> 
                </form> 
                <!-- ============================================================= -->
                <h3 style="margin-top: 40px; "> 
                    Section TWO massage
                    <label for=""> </label>
                </h3>
                
                <form class="form-container" action="" mathod="post">
                    <input type="hidden" name="section" value="2">
                    <label for="product_2" class="form-container-label"> 
                        Section On / Off : 
                    </label>
                    <div class="form-container-input">
                        <div class="switch-container">
                            <input type="checkbox" id='switch2' class='switch' name="checked" value="on"  <?php if($section_2['status'] == 1) echo "checked" ?>>
                            <div class="switch-color"></div>
                            <label for="switch2" class="switch-label">
                            </label>
                        </div>
                    </div> 
                    <label for="product_2_0" class="form-container-label"> 
                        Section Title: 
                    </label> 
                    <input type="text" id="product_2_0" value="<?= $section_2['title'] ?>" name="sec_title" placeholder="Section title" class="form-container-input" required> 

                    <label for="product_2_1" class="form-container-label"> 
                        Item 1:
                    </label> 
                    <input type="text" id="product_2_1" value="<?= $section_2['one'] ?>" name="sec_item_1" placeholder="item one" class="form-container-input" required> 
                    
                    <label for="product_2_2" class="form-container-label"> 
                        Item 2:
                    </label> 
                    <input type="text" id="product_2_2" value="<?= $section_2['two'] ?>" name="sec_item_2" placeholder="item two" class="form-container-input" required> 
                    
                    <label for="product_2_3" class="form-container-label"> 
                        Item 3:
                    </label> 
                    <input type="text" id="product_2_3" value="<?= $section_2['three'] ?>" name="sec_item_3" placeholder="item three" class="form-container-input" required> 
                    
                    <label for="product_2_4" class="form-container-label"> 
                        Item 4:
                    </label> 
                    <input type="text" id="product_2_4" value="<?= $section_2['four'] ?>" name="sec_item_4" placeholder="item four" class="form-container-input" required> 
                    
                    <label for="product_2_5" class="form-container-label"> 
                        Item 5:
                    </label> 
                    <input type="text" id="product_2_5" value="<?= $section_2['five'] ?>" name="sec_item_5" placeholder="item five" class="form-container-input" required> 
                 
                    <label for="product_2_6" class="form-container-label"> 
                        Item 6:
                    </label> 
                    <input type="text" id="product_2_6" value="<?= $section_2['six'] ?>" name="sec_item_6" placeholder="item five" class="form-container-input" required> 
                 
                    <label for="product_2_7" class="form-container-label"> 
                        Item 7:
                    </label> 
                    <input type="text" id="product_2_7" value="<?= $section_2['seven'] ?>" name="sec_item_7" placeholder="item five" class="form-container-input" required> 
                 
                    <label for="product_2_8" class="form-container-label"> 
                        Item 8:
                    </label> 
                    <input type="text" id="product_2_8" value="<?= $section_2['eight'] ?>" name="sec_item_8" placeholder="item five" class="form-container-input" required> 
                 
                    <button type="submit" class="form-container-button"> 
                        Update 
                    </button> 
                </form> 
            </div>
        </div>
    </div>
</div>