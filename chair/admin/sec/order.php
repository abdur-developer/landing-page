<div class="report-container">
    <div class="report-header">
        <h1 class="recent-Articles">Order</h1>
        <!-- <button class="view">View All</button> -->
         <form action="" method="post" id="status-form">
            <input type="hidden" name="q" value="order">
            <select name="status" onchange="submitForm()">
                <?php
                if(isset($_REQUEST['status'])){
                    $s = $_REQUEST['status'];
                    if($s == "con"){
                        echo "<option value='pen'>Pending</option><option value='con' selected>Confirm</option><option value='rej'>Cancel</option>";
                    }elseif($s == "rej"){
                        echo "<option value='pen'>Pending</option><option value='con'>Confirm</option><option value='rej' selected>Cancel</option>";
                    }elseif($s == "pen"){
                        echo "<option value='pen'>Pending</option><option value='con'>Confirm</option><option value='rej'>Cancel</option>";
                    }
                }else{
                    echo "<option value='pen'>Pending</option><option value='con'>Confirm</option><option value='rej'>Cancel</option>";
                }
                ?>
            </select>
         </form>
    </div>

    <div class="report-body">
        <table class="table">
            <thead class="">
                <tr>
                    <th><h3 class="t-op">Name</h3></th>
                    <th><h3 class="t-op">Number</h3></th>
                    <th><h3 class="t-op">Price</h3></th>
                    <th><h3 class="t-op">Action</h3></th>
                </tr>
            </thead>

            <tbody class="items">
                <?php
                
                    $sql = "SELECT * FROM product_order WHERE status = 0";
                    if(isset($_REQUEST['status'])){
                        $s = $_REQUEST['status'];
                        if($s == "con"){
                            $sql = "SELECT * FROM product_order WHERE status = 1";
                        }elseif($s == "rej"){
                            $sql = "SELECT * FROM product_order WHERE status = 2";
                        }elseif($s == "pen"){
                            $sql = "SELECT * FROM product_order WHERE status = 0";
                        }
                    }
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($query)){
                        $id = $row['id']; ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['number'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td>
                                <?php
                                    if($row['status'] == 0){
                                        echo "<a href='?q=order&id=$id&order_action=done' class='view-true'>Confirm</a>
                                        <a href='?q=order&id=$id&order_action=cancel' class='view-false'>Cancel</a>
                                        <a href='view.php?id=$id' class='view-btn'>View</a>";
                                    }else{
                                        echo "<a href='?q=order&id=$id&order_action=del' class='view-false'>Delete</a>
                                        <a href='view.php?id' class='view-btn'>View</a>";
                                    }
                                ?>
                            
                            </td>
                        </tr>
                <?php }
                ?>
            </tbody>
        </table>
        
    </div>
    <script>
        function submitForm() {
            const form = document.getElementById("status-form");
            form.submit();
        }
    </script>
</div>