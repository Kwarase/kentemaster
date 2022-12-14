<?php
require_once("../functions/displayCart.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Shipping Address
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="../actions/" method="post">
						        		<p><input type="text" placeholder="Address"></p>
										<p><input type="Submit" value="Submit"></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Card Details
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
						        	<p>Your card details goes here.</p>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<?php $catTotal = myPaymentSummaryTable_fnc();
								?>
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Total</td>
									<td><?php echo $catTotal;?></td>
								</tr>
							</tbody>
						</table>
						<!-- <a href="#" class="boxed-btn" onclick="payWithPaystack()" >Place Order</a> -->
						<button class="boxed-btn" type="submit"  onclick="payWithPaystack()">Pay</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	<script>
        

        function payWithPaystack() {
            event.preventDefault();
            // event.preventDefault();

            let handler = PaystackPop.setup({
                key: 'pk_test_1917da2fc21c61a25eb4edb146b723e98b2a7969', // Replace with your public key
                // email: document.getElementById("email-address").value,
                email: '<?php 
                  echo  $_SESSION['customer_email'] ; 
                  ?>',
                // amount: document.getElementById("amount").value * 100,
                amount: <?php echo $catTotal ?> * 100,
                ref: Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                currency: 'GHS',
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);

                    window.location = "../actions/payment_process.php?reference=" + response.reference;
                }
            });

            handler.openIframe();
        }
    </script>


</body>
</html> 