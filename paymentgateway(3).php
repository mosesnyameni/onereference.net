<?php



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>OneReference</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
        <script type="text/javascript">
            function customQuantitiesPayFast (formReference) {
            formReference['amount'].value = formReference['amount'].value * formReference['custom_quantity'].value;
                return true;
            }
            </script>
            <script type="text/javascript">
            
            function actionPayFastJavascript ( formReference ) {
            let shippingValidOrOff = typeof shippingValid !== 'undefined' ? shippingValid : true; 
            let customValid = shippingValidOrOff ? customQuantitiesPayFast( formReference ) : false;
            if (typeof shippingValid !== 'undefined' && !shippingValid) {
                return false;
            }
            
            if (typeof customValid !== 'undefined' && !customValid) {
                return false;
            }
                return true;
            }
        </script>
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php include_once("menu_general.php");?>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder"> Join Onereference </h1>
                    <p class="lead mb-0"> Subscribe to receive full benefits of the platform</p>
				
                </div>
            </div>
        </header>
        <!-- Page content-->
		<div id="Addreferree1" class="tabcontent">
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
							<div class="card-header"><h4> Make payment </h4></div>
				            <form onsubmit="return actionPayFastJavascript( this );" name="PayFastPayNowForm" action="https://payment.payfast.io/eng/process" method="post">
                                <input required type="hidden" name="cmd" value="_paynow">
                                <input required type="hidden" name="receiver" pattern="[0-9]" value="12050044">
                                <input type="hidden" name="return_url" value="https://www.onereference.net/return">
                                <input type="hidden" name="cancel_url" value="https://www.onereference.net/cancel">
                                <input type="hidden" name="notify_url" value="https://www.onereference.net/notify">
                                
                                <div class="card-body">
    								<div class="input-group">
    								      <table>
                                            <tr>
                                            <td><label class="form-control" id="PayFastAmountLabel" for="PayFastAmount">Amount: </label></td>
                                            <td><input class="form-control" required id="PayFastAmount" type="number" step=".01" name="amount" min="5.00" placeholder="5.00" value="399"></td>
                                            </tr>
                                          </table>
    							     
    								</div>
    						    </div>
    						       <div class="card-body">
    								<div class="input-group">
    								    <table>
                                            <tr>
                                            <td><label class="form-control" for="custom_quantity">Quantity: </label></td>
                                            <td><input class="form-control" required id="custom_quantity" type="number" name="custom_quantity" value="1"></td>
                                            </tr>
                                        </table>
    						
    								</div>
    						    </div>
                                
                                <input required type="hidden" name="item_name" maxlength="255" value="Subscription">
                                <table>
                                <tr>
                                <td colspan=2 align=center>
                                <input type="image" src="https://my.payfast.io/images/buttons/PayNow/Dark-Large-PayNow.png" alt="Pay Now" title="Pay Now with Payfast">
                                </td>
                                </tr>
                                </table>
                        </form> 
                            
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                  
                    <!-- Pagination
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav> -->
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header"><h4> Access Benefits </h4></div>
                        <div class="card-body">
                            <div class="input-group">
                                <!-- <input class="form-control" type="text" placeholder="Name" aria-label="Enter search term..." aria-describedby="button-search" /> -->
                                <p class="card-text"><b>Welcome to Onereference. A platform that automates the referal check process.</b></p>
								<p class="card-text"> <img src="images/angle-right.png"  alt="">  Agents conduct referal checks seamlessly on One platform</p>
								<p class="card-text"> <img src="images/angle-right.png"  alt=""> Candidates gather all your referrees on One platform</p>
								<p class="card-text"> <img src="images/angle-right.png"  alt=""> Use linkedin for easy signup and autocomplete your profile </p>						
								
                            </div>
							
                        </div>
						<div class="card-body">
                            <div class="input-group">
                               <!-- <input class="form-control" type="text" placeholder="Surname" aria-label="Enter search term..." aria-describedby="button-search" /> -->
                               
                            </div>
                        </div>
						
						<div class="card-body">
                            <div class="input-group">
                                
                               <!-- <button class="btn btn-primary" id="button-search" type="button"> Sign Up</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Side widget
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div> -->
                </div>
            </div>
        </div>
		</div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Powered by AI | Copyright &copy; umbrellacapital 2023</p></div>
			
			<!-- Footer  <img  src="\images\Umbrella2.jpg" alt="..." /> -->
        </footer>
        <!-- Bootstrap core JS  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS -->
        <script src="js/scripts.js"></script> 
    </body>
</html>
