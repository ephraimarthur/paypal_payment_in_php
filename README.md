This source code is free 
Downlaod the files and please 

              <!-- To make this live payment remove the sandbox| the url will be  https://www.paypal.com/cgi-bin/webscr -->
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">

                            <!-- Identify the merchenat emails address of the paypal account-->
                                                                        <!-- chnage the value here to your test email-->
                            <input type="hidden" name="business" value="sb-laxrj3538160@business.example.com">

                            <!--Specify a buy now button-->
                            <input type="hidden" name="cmd" value="_xclick">

                            <!-- Specify the details of the item the buyer will purchase-->
                            <input type="hidden" name="item_name" value="Flat Screen Tv">
                            <input type="hidden" name="item_number" value="34454">
                            <input type="hidden" name="amount" value="200">
                            <input type="hidden" name="currency_code" value="USD">

                            <!-- Specify thr callback urls -->
                            <input type="hidden" name="return" value="http://localhost/Belitech_YT/paypal_express_pay/success.php">
                            <input type="hidden" name="cancel_return" value="http://localhost/Belitech_YT/paypal_express_pay/cancel.php">

                            <br>
                            <!-- Display the payment button-->
                          <!-- <button type="button" class="btn btn-block btn-info btn-lg" name="button">Buy Now</button> -->
                          <input type="image" style="width:150px;height:auto" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                        </form>
