<?php 
session_start();
include "./header.php" ?>
        <div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Special Shoes With Offers</h1>
                <p class = "text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quos sit consectetur, ipsa voluptatem vitae necessitatibus dicta veniam, optio, possimus assumenda laudantium. Temporibus, quis cum.</p>

                <div class = "product-items">
                    
                
<?php  include '../Controler/Itemscontroler.php' ;?>
        
                </div>
            </div>
        </div>

        <div class = "product-collection">
            <div class = "container">
                <div class = "product-collection-wrapper">
                    <!-- product col left -->

                    <div class = "product-col-left flex">
                        <div class = "product-col-content">
                            <h2 class = "sm-title">men's shoes </h2>
                            <h2 class = "md-title">men's collection </h2>
                            <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                            <button type = "button" class = "btn-dark">Shop now</button>
                        </div>
                    </div>

                    <!-- product col right -->
                    <div class = "product-col-right">
                        <div class = "product-col-r-top flex">
                            <div class = "product-col-content">
                                <h2 class = "sm-title">women's dresses </h2>
                                <h2 class = "md-title">women's collection </h2>
                                <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                <button type = "button" class = "btn-dark">Shop now</button>
                            </div>
                        </div>

                        <div class = "product-col-r-bottom">
                            <!-- left -->
                            <div class = "flex">
                                <div class = "product-col-content">
                                    <h2 class = "sm-title">summer sale </h2>
                                    <h2 class = "md-title">Extra 50% Off </h2>
                                    <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                    <button type = "button" class = "btn-dark">Shop now</button>
                                </div>
                            </div>
                            <!-- right -->
                            <div class = "flex">
                                <div class = "product-col-content">
                                    <h2 class = "sm-title">shoes </h2>
                                    <h2 class = "md-title">best sellers </h2>
                                    <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                    <button type = "button" class = "btn-dark">Shop now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </script>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js">
        </script>
       
       
        <?php include "./footer.php" ?>
       
        


        