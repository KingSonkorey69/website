<!DOCTYPE html>
<html>

<head>
    <title>
        The Front Page
    </title>

    <!-- All the links to various fonts and also animations -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="./assets/css/shopping.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    

</head>

<body>

    <!-- This is where the nav-bar will be. -->
    <section class="section1">

        <!-- The name of the author -->
        <a href="index.php"> GABRIEL KIMOTHO GITHINJI</a>

        <!-- The quick links will be at the right -->
        <div class="title-right">
            <!-- This link will show you all the Books -->
            <a href="books.php">Books</a>
            <a href="contact.php">About</a>
        </div>


    </section>
    <!-- end of the first section -->
<section class=" shopping">
<div class="container-fluid mt-5">
        <h2 class="mb-5 text-center">Shopping Cart</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th class="text-right"><span id="amount" class="amount">Amount</span> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    
                                        <div class="img-prdct"><img src="./assets/images/fisi_na_kinyonga.jpg"width="130px" height="200px"></div>
                                    
                                </td>
                                <td>
                                    <p>Product One</p>
                                </td>
                                <td>
                                    <div class="button-container">
                                        <button class="cart-qty-plus" type="button" value="+">+</button>
                                        <input type="text" name="qty" min="0" class="qty form-control" value="0"/>
                                        <button class="cart-qty-minus" type="button" value="-">-</button>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" value="72" class="price form-control" disabled>
                                </td>
                                <td align="right">$ <span id="amount" class="amount">0</span></td>
                            </tr>
                            <tr>
                                <td>
                                    
                                        <div class="img-prdct"><img src="./assets/images/fisi_na_punda.jpg" width="130px" height="200px"></div>
                                
                                </td>
                                <td>
                                    <p>Product Two</p>
                                </td>
                                <td>
                                    <div class="button-container">
                                        <button class="cart-qty-plus" type="button" value="+">+</button>
                                        <input type="text" name="qty" min="0" class="qty form-control" value="0"/>
                                        <button class="cart-qty-minus" type="button" value="-">-</button>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" value="125" class="price form-control" disabled>
                                </td>
                                <td align="right">$ <span id="amount" class="amount">0</span></td>
                            </tr>
                            <tr>
                                <td>
                                    
                                        <div class="img-prdct"><img src="./assets/images/fisi_na_ini.jpg" width="130px" height="200px" ></div>
                                    
                                </td>
                                <td>
                                    <p>Product Three</p>
                                </td>
                                <td>
                                    <div class="button-container">
                                        <button class="cart-qty-plus" type="button" value="+">+</button>
                                        <input type="text" name="qty" min="0" class="qty form-control" value="0"/>
                                        <button class="cart-qty-minus" type="button" value="-">-</button>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" value="250" class="price form-control" disabled>
                                </td>
                                <td align="right">$ <span id="amount" class="amount">0</span></td>
                            </tr>
                            <tr>
                                <td>
                                
                                        <div class="img-prdct"><img src="./assets/images/fisi_na_kanyagara.jpg" width="130px" height="200px"></div>
                                    
                                </td>
                                <td>
                                    <p>Product Four</p>
                                </td>
                                <td>
                                    <div class="button-container">
                                        <button class="cart-qty-plus" type="button" value="+">+</button>
                                        <input type="text" name="qty" min="0" class="qty form-control" value="0"/>
                                        <button class="cart-qty-minus" type="button" value="-">-</button>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" value="300" class="price form-control" disabled>
                                </td>
                                <td align="right">$ <span id="amount" class="amount">0</span></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4"></td><td align="right"><strong>TOTAL = $  <span id="total" class="total">0</span></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- The footer will some information of the author -->
    <section class="section4 ">

        <div class="footer-left">
            <h1> Links</h1>

            <a href="#">Books</a>
            <a href="#">About</a>

        </div>



        <div class="footer-right">
            <h1> Contact</h1>

            <span>0722868642</span>
            <span>P.O Box 241-00100</span>
            <span>Nairobi, Kenya</span>

            <a href="ggwanjata@yahoo.com">ggwanjata@yahoo.com</a>


        </div>
        <div class="footer-center">
            <span>Follow Me</span>
        <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
          

        </div>

      
        <div class="last">
            <input type="email" name="EMAIL" value="" placeholder=" ENTER YOUR EMAIL......" class="ee">

            <input type="submit" value="Join now" class="bb">
            <img class="payment-img" src="//africa-public.food.jumia.com/dynamic/production/ke/images/paymenttypes/filepath_10_full.png">
            
        </div>
      
    </section>

   <div class="hr"></div>
    
    <section class="section5">
    
        <div class="sam">
            <span>© 2020 GGK, All rights reserved.</span>

        </div>
    </section>

<!-- This is where the user will be able to talk with the author directly -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5f197d4fa45e787d128bfc8a/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>