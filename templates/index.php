<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <title>Kamseen Orders Form</title>
</head>



<body>
    <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #00cbbe;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Orders</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <center>
            <h1>Orders</h1>
        </center>
    </div>
    <br>
    <div class="container">
        <form class="row g-3 " id="orderform" action="./" method="post" novalidate
            style="border:1px; border-style:solid; border-color:#5e5e5e; padding: 1em; margin-bottom:20px">
            <!--id-->
            <div class="col-md-6">
                <label for="id" class="form-label">Customer ID</label>
                <input type="text" class="form-control" id="id">
            </div>

            <!--name-->
            <div class="col-md-6">
                <label for="name" class="form-label">Customer Name</label>
                <input name = "customer-name"type="text" class="form-control" id="name">
            </div>

            <!--order date-->
            <div class="col-12">
                <label for="order-date" class="form-label">Order Date</label>
                <input name="order-date" type="date" class="form-control" id="order-date">
            </div>

            <!--deliver date-->
            <div class="col-12">
                <label for="deliver-date" class="form-label">Delivery Date</label>
                <input name="delivery-date" type="date" class="form-control" id="deliver-date">
            </div>

            <br>
            <!--status-->
            <div class="form-inline">
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="work-in-progress" value="work-in-progress"> Work in
                        Progress
                    </label>
                </div>
                <div class="form-check-inline disabled">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="pending" value="pending" > Pending
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="completed" value="completed"> Completed
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="cancelled" value="cancelled"> Cancelled
                    </label>
                </div>
            </div>

            <br>
            <div class="form-group fieldGroup">
                <div class="row g-3">
                    <div class="col-12">

                        <span class="frag-group">

                            <label for="fragrance" class="form-label">Fragrance Type:</label>
                            <select name="fragrance-type" id="fragrance" class="form-select">
                                <option value="KUSH">KUSH</option>
                                <option value="17TH MAI">17TH MAI</option>
                                <option value="JINGLES">JINGLES</option>
                                <option value="FIR">FIR</option>
                                <option value="WREATH">WREATH</option>
                                <option value="JOY">JOY</option>
                                <option value="BELLS">BELLS</option>
                                <option value="NORDLYS">NORDLYS</option>
                                <option value="KAPAS">KAPAS</option>
                                <option value="CAROLS">CAROLS</option>
                                <option value="MADHU">MADHU</option>
                                <option value="FJORDS & FJELL">FJORDS & FJELL</option>
                                <option value="PARI">PARI</option>
                                <option value="MERRY">MERRY</option>
                                <option value="FIRESIDE">FIRESIDE</option>
                                <option value="ELVES">ELVES</option>
                                <option value="TAZA">TAZA</option>
                                <option value="SAMISK">SAMISK</option>
                                <option value="LAVONILLA">LAVONILLA</option>
                                <option value="VIKINGS">VIKINGS</option>
                                <option value="MOJITO">MOJITO</option>
                                <option value="EROS">EROS</option>
                                <option value="GLOG">GLOG</option>
                                <option value="NUTCARCKER">NUTCARCKER</option>
                                <option value="BEWITCHED">BEWITCHED</option>
                                <option value="SAGAR">SAGAR</option>
                                <option value="BLOOMING">BLOOMING</option>
                                <option value="BAZAAR">BAZAAR</option>
                                <option value="VIVAAH">VIVAAH</option>
                                <option value="MAYA">MAYA</option>
                                <option value="ALLURE">ALLURE</option>
                                <option value="GULAAB">GULAAB</option>
                                <option value="TROLLS">TROLLS</option>
                                <option value="CHEER LEMON">CHEER LEMON</option>
                                <option value="HUGS">HUGS</option>
                                <option value="THE WISH">THE WISH</option>
                                <option value="L'AMOUR">L'AMOUR</option>
                                <option value="PRANA">PRANA</option>
                                <option value="LUBH">LUBH</option>
                                <option value="FROST">FROST</option>
                                <option value="HOLLY">HOLLY</option>
                            </select>
                        </span>
                    </div>

                    <div class="col-12">
                        <span class="container-group">

                            <label for="container" class="form-label">Container Type:</label>
                            <select name="container-type" id="container" class="form-select">
                                <option value="20-CL-Glass">20 CL Glass</option>
                                <option value="30-CL-Glass">30 CL Glass</option>
                                <option value="silver-tin">Silver Tin</option>
                                <option value="Rose-Gold-Tin">Rose Gold Tin</option>
                                <option value="Gold-Tin">Gold Tin</option>
                            </select>

                        </span>
                    </div>
                    <div class="col-12">

                        <span>

                            <label for="order-quantity" class="form-label">Quantity: </label>
                            <input type="number" name="quantity" id="order-quantity" class="form-control">

                        </span>
                    </div>

                    <div class="form-inline" style="text-align: center;">
                        <span>

                            <input  type="button" class="btn btn-success addMore" value="Add More" />

                        </span>
                        
        
                       
                        
                    </div>
                </div>



                <div class="form-group fieldGroupCopy" style="display: none;">
                    <hr>
                    <div class="row g-3">
                        <div class="col-12">
            
                            <span class="frag-group">
            
                                <label for="fragrance" class="form-label">Fragrance Type:</label>
                                <select name="fragrance-type" id="fragrance" class="form-select">
                                    <option value="KUSH">KUSH</option>
                                    <option value="17TH MAI">17TH MAI</option>
                                    <option value="JINGLES">JINGLES</option>
                                    <option value="FIR">FIR</option>
                                    <option value="WREATH">WREATH</option>
                                    <option value="JOY">JOY</option>
                                    <option value="BELLS">BELLS</option>
                                    <option value="NORDLYS">NORDLYS</option>
                                    <option value="KAPAS">KAPAS</option>
                                    <option value="CAROLS">CAROLS</option>
                                    <option value="MADHU">MADHU</option>
                                    <option value="FJORDS & FJELL">FJORDS & FJELL</option>
                                    <option value="PARI">PARI</option>
                                    <option value="MERRY">MERRY</option>
                                    <option value="FIRESIDE">FIRESIDE</option>
                                    <option value="ELVES">ELVES</option>
                                    <option value="TAZA">TAZA</option>
                                    <option value="SAMISK">SAMISK</option>
                                    <option value="LAVONILLA">LAVONILLA</option>
                                    <option value="VIKINGS">VIKINGS</option>
                                    <option value="MOJITO">MOJITO</option>
                                    <option value="EROS">EROS</option>
                                    <option value="GLOG">GLOG</option>
                                    <option value="NUTCARCKER">NUTCARCKER</option>
                                    <option value="BEWITCHED">BEWITCHED</option>
                                    <option value="SAGAR">SAGAR</option>
                                    <option value="BLOOMING">BLOOMING</option>
                                    <option value="BAZAAR">BAZAAR</option>
                                    <option value="VIVAAH">VIVAAH</option>
                                    <option value="MAYA">MAYA</option>
                                    <option value="ALLURE">ALLURE</option>
                                    <option value="GULAAB">GULAAB</option>
                                    <option value="TROLLS">TROLLS</option>
                                    <option value="CHEER LEMON">CHEER LEMON</option>
                                    <option value="HUGS">HUGS</option>
                                    <option value="THE WISH">THE WISH</option>
                                    <option value="L'AMOUR">L'AMOUR</option>
                                    <option value="PRANA">PRANA</option>
                                    <option value="LUBH">LUBH</option>
                                    <option value="FROST">FROST</option>
                                    <option value="HOLLY">HOLLY</option>
                                </select>
                            </span>
                        </div>
            
                        <div class="col-12">
                            <span class="container-group">
            
                                <label for="container" class="form-label">Container Type:</label>
                                <select name="container-type" id="container" class="form-select">
                                    <option value="20-CL-Glass">20 CL Glass</option>
                                    <option value="30-CL-Glass">30 CL Glass</option>
                                    <option value="silver-tin">Silver Tin</option>
                                    <option value="Rose-Gold-Tin">Rose Gold Tin</option>
                                    <option value="Gold-Tin">Gold Tin</option>
                                </select>
            
                            </span>
                        </div>
                        <div class="col-12">
            
            
                            <span>
            
                                <label for="order-quantity" class="form-label">Quantity: </label>
                                <input type="number" name="quantity" id="order-quantity" class="form-control">
            
                            </span>
                        </div>
            
                        <div class="form-inline" style="text-align: center;">
                            <span>
            
            
                                <input   type="button"name="submit" class="btn btn-danger remove" value="Remove" />
            
            
                            </span>
                        </div>
                    </div>
                </div>
                    <span class="form-inline" style="text-align : center; ">

                        <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT" />

                    </span>
        </form>

    </div>




 
    <!-- End of .container -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
        $(document).ready(function(){
            //group add limit
            var maxGroup = 10;
            
            //add more fields group
            $(".addMore").click(function(){
                
                if($('body').find('.fieldGroup').length < maxGroup){
                    var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
                    $('body').find('.fieldGroup:last').after(fieldHTML);
                }else{
                    alert('Maximum '+maxGroup+' items are allowed.');
                }
            });
            
            //remove fields group
            $("body").on("click",".remove",function(){ 
                $(this).parents(".fieldGroup").remove();
            });
        });
        
        </script>
</body>

</html>