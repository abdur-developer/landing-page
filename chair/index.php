<?php require "dbcon.php"; 

// ?name=number=jela=p-code=price=add
if(isset($_REQUEST['name'])){
    $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];
    $jela = $_REQUEST['jela'];
    $p_code = $_REQUEST['p-code'];
    $price = $_REQUEST['price'];
    $shipping = $_REQUEST['shipping'];
    $address = $_REQUEST['add'];
    $sql = "INSERT INTO product_order (name, number, price, shipping, jela, address, post_code) 
    VALUES ('$name', '$number', '$price', '$shipping', '$jela', '$address', '$p_code')";
    if(mysqli_query($conn, $sql)){
        header("location: ?success");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['name'] ?></title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php
        if(isset($_REQUEST['success'])){
            $success = $_REQUEST['success'];
            echo "
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'WOW...',
                    text: 'Successfully submitted order. Please wait some minute, we will contuct you'
                    });
            </script>
            ";
        }
    ?>
    <header>
        <img src="img/logo.png" alt="" class="img-fluid">
        <h1><?= $product['name'] ?></h1>
        <p class="text"><?= $product['title'] ?></p>
        <p class="price">মূল্য <strike><?= $product['old_price'] ?></strike> <?= $product['price'] ?>/=</p>
        <button>অর্ডার করতে চাই</button>
        <div class="video">
            <iframe width="420" height="315"
            src="https://www.youtube.com/embed/<?= $product['vid_product'] ?>"></iframe>
        </div>
        <button>অর্ডার করতে চাই</button>
    </header>
    <?php if($section_1['status'] == '1'){ ?>
        <section class="need-sec">
            <h3><?= $section_1['title'] ?></h3>
            <ul class='need'>
                <li><?= $section_1['one'] ?></li>
                <li><?= $section_1['two'] ?></li>
                <li><?= $section_1['three'] ?></li>
                <li><?= $section_1['four'] ?></li>
                <li><?= $section_1['five'] ?></li>
            </ul>
        </section>
    <?php } 
    if($section_2['status'] == '1'){ ?>
        <section>
            <h3><?= $section_2['title'] ?></h3>
            <ul class="fiture">
                <li><?= $section_2['one'] ?></li>
                <li><?= $section_2['two'] ?></li>
                <li><?= $section_2['three'] ?></li>
                <li><?= $section_2['four'] ?></li>
                <li><?= $section_2['five'] ?></li>
                <li><?= $section_2['six'] ?></li>
                <li><?= $section_2['seven'] ?></li>
                <li><?= $section_2['eight'] ?></li>
            </ul>
        </section>
    <?php } ?>
    <section>
        <h3>আমাদের প্রোডাক্ট ছবির ন্যায় বক্স আকারে আপনার কাছে পৌছাবে</h3>
        <div id="slider">  
            <div class="slides"><img src="<?= $slider['one'] ?>"/></div>
            <div class="slides"><img src="<?= $slider['two'] ?>"/></div>
            <div class="slides"><img src="<?= $slider['three'] ?>"/></div>
            <div class="slides"><img src="<?= $slider['four'] ?>"/></div>
            <div class="slides"><img src="<?= $slider['five'] ?>"/></div>
            <div class="slides"><img src="<?= $slider['six'] ?>"/></div>
            <div class="slides"><img src="<?= $slider['seven'] ?>"/></div>
              
            <div id="dot">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <p class="red-text text-center">আমাদের পন্য এমন বক্স আকারে যাবে, নিচের ভিডিও দেখে সেটিং করে নিতে হবে, খুবই সহজ ইনশাআল্লাহ পারবেন, না পারলে কল করবেন, আমরা বুঝায় দিবো।</p>
        <div class="video">
            <iframe width="420" height="315"
            src="https://www.youtube.com/embed/<?= $product['vid_setting'] ?>"></iframe>
        </div>
        <h4 class=" text-center"><b>Product সেটিং ভিডিও</b></h4>
    </section>
    <section>
        <h3>যেকোন প্রয়োজনে যোগাযোগ করুন - <?= $system_set['number'] ?></h3>
        <a href="tel:+88<?= $system_set['number'] ?>" class="call text-center"><?= $system_set['number'] ?></a>
        <p class="text-white text-center quality"><span class="text-info">১০০% হাই কোয়ালিটি</span> <?= $product['name'] ?> সবার চেয়ে কম দামে নিতে চান তবে এখনি অর্ডার করতে নিচের ফর্মটি পূরণ করুন</p>
        <form action="" method="get">
            <div class="row">
                <div class="col-md-6">
                    <p class="billing">Billing details</p>

                    <label for="name">আপনার নাম <span class="red-star">*</span></label>
                    <input type="text" name="name" id="name" class="form-control mb-4" placeholder="আপনার নাম লিখুন..." required>
                    
                    <label for="number">মোবাইল নম্বর <span class="red-star">*</span></label>
                    <input type="number" name="number" id="number" class="form-control mb-4" placeholder="01000..." required>
                    
                    <label for="jela">জেলা <span class="red-star">*</span></label>
                    <select name="jela" id="jela" class="form-control mb-4"  data-placeholder="Select an option…" required tabindex="-1" aria-hidden="true">
                        <option value="">Select an option…</option>
                        <option value="BD-05">Bagerhat</option>
                        <option value="BD-01">Bandarban</option>
                        <option value="BD-02">Barguna</option>
                        <option value="BD-06">Barishal</option>
                        <option value="BD-07">Bhola</option>
                        <option value="BD-03">Bogura</option>
                        <option value="BD-04">Brahmanbaria</option>
                        <option value="BD-09">Chandpur</option>
                        <option value="BD-10">Chattogram</option>
                        <option value="BD-12">Chuadanga</option>
                        <option value="BD-11">Cox's Bazar</option>
                        <option value="BD-08">Cumilla</option>
                        <option value="BD-13">Dhaka</option>
                        <option value="BD-14">Dinajpur</option>
                        <option value="BD-15">Faridpur </option>
                        <option value="BD-16">Feni</option>
                        <option value="BD-19">Gaibandha</option>
                        <option value="BD-18">Gazipur</option>
                        <option value="BD-17">Gopalganj</option>
                        <option value="BD-20">Habiganj</option>
                        <option value="BD-21">Jamalpur</option>
                        <option value="BD-22">Jashore</option>
                        <option value="BD-25">Jhalokati</option>
                        <option value="BD-23">Jhenaidah</option>
                        <option value="BD-24">Joypurhat</option>
                        <option value="BD-29">Khagrachhari</option>
                        <option value="BD-27">Khulna</option>
                        <option value="BD-26">Kishoreganj</option>
                        <option value="BD-28">Kurigram</option>
                        <option value="BD-30">Kushtia</option>
                        <option value="BD-31">Lakshmipur</option>
                        <option value="BD-32">Lalmonirhat</option>
                        <option value="BD-36">Madaripur</option>
                        <option value="BD-37">Magura</option>
                        <option value="BD-33">Manikganj </option>
                        <option value="BD-39">Meherpur</option>
                        <option value="BD-38">Moulvibazar</option>
                        <option value="BD-35">Munshiganj</option>
                        <option value="BD-34">Mymensingh</option>
                        <option value="BD-48">Naogaon</option>
                        <option value="BD-43">Narail</option>
                        <option value="BD-40">Narayanganj</option>
                        <option value="BD-42">Narsingdi</option>
                        <option value="BD-44">Natore</option>
                        <option value="BD-45">Nawabganj</option>
                        <option value="BD-41">Netrakona</option>
                        <option value="BD-46">Nilphamari</option>
                        <option value="BD-47">Noakhali</option>
                        <option value="BD-49">Pabna</option>
                        <option value="BD-52">Panchagarh</option>
                        <option value="BD-51">Patuakhali</option>
                        <option value="BD-50">Pirojpur</option>
                        <option value="BD-53">Rajbari</option>
                        <option value="BD-54">Rajshahi</option>
                        <option value="BD-56">Rangamati</option>
                        <option value="BD-55">Rangpur</option>
                        <option value="BD-58">Satkhira</option>
                        <option value="BD-62">Shariatpur</option>
                        <option value="BD-57">Sherpur</option>
                        <option value="BD-59">Sirajganj</option>
                        <option value="BD-61">Sunamganj</option>
                        <option value="BD-60">Sylhet</option>
                        <option value="BD-63">Tangail</option>
                        <option value="BD-64">Thakurgaon</option>
                    </select>
                    
                    <label for="p-code">পোস্ট কোড <span class="red-star">*</span></label>
                    <input type="number" name="p-code" id="p-code" class="form-control mb-4" placeholder="আপনার পোস্টাল কোড..." required>
                    
                    <input type="hidden" name="price" value="<?= $product['price'] ?>">

                    <label for="add">আপনার ঠিকানা <span class="red-star">*</span></label>
                    <input type="text" name="add" id="add" class="form-control mb-4" placeholder="আপনার ঠিকানা লিখুন..." required>
                </div>
                <div class="col-md-6">
                    <p class="billing">Your order</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="img/product.jpg" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-10">
                                            <p class="small"><?= $product['name'] ?> X 1</p>
                                        </div>
                                    </div>
                                </td>
                                <td>৳<?= $product['price'] ?>.00</td>
                            </tr>
                            
                            <tr>
                                <td>Subtotal</td>
                                <td>৳<?= $product['price'] ?>.00</td>
                            </tr>
                            <tr>
                                <input type="hidden" name="shipping" value="<?= $system_set['shipping'] ?>">
                                <td>Shipping</td>
                                <td>৳<?= $system_set['shipping'] ?>.00</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>৳<?= $product['price'] + $system_set['shipping'] ?>.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cod">
                        <p class="title">ক্যাশ অন ডেলিভারি</p>
                        <p class="details">পণ্য হাতে পেয়ে পেমেন্ট করতে পারবেন</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn-submit" type="submit">Place Order <?= $product['price'] + $system_set['shipping'] ?>.00৳</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <footer>
        <p>© Copyright 2024 <?= $system_set['b_name'] ?> | This website design by <a style="color: red; font-weight: bold;" href="https://facebook.com/abdur.developer">Abdur</a></p>
    </footer>
    <script>
        var index = 0;
        var slides = document.querySelectorAll(".slides");
        var dot = document.querySelectorAll(".dot");

        function changeSlide(){

        if(index<0){
            index = slides.length-1;
        }
        
        if(index>slides.length-1){
            index = 0;
        }
        
        for(let i=0;i<slides.length;i++){
            slides[i].style.display = "none";
            dot[i].classList.remove("active");
        }
        
        slides[index].style.display= "block";
        dot[index].classList.add("active");
        
        index++;
        
        setTimeout(changeSlide,2000);
        
        }

        changeSlide();
    </script>
</body>
</html>