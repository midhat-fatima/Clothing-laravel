<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmation Email</title>
</head>
<body>
    <div style="border-top-left-radius: 3px; border-top-right-radius: 3px; padding: 10px 15px; background-color: #428bca; border-color: #428bca; color: #fff" class="v1panel-heading">
        You Have Mail Recieved from Wayshop Website
         </div>
         
    <table>
       
    <tr><td>Hello, {{$name}}</td></tr> 
    <tr> <td>Thank you for shopping with us. Your Order Details are follows</td> </tr>
    <tr><td><h1>Order No : {{$order_id}}</h1></td>  </tr>
    </table>   
    <table width="100%" cellpadding="5" cellspacing="5" border="1px">
       
            <tr>
                <td>Product Name</td>
                <td>Product Code</td>
                <td>Size</td>
                <td>Color</td>
                <td>Quantity</td>
                <td>Unit Price</td>
                <td>Total Price</td>
            </tr>
   
            <tr>
                <td>White T-Shirt</td>
                <td>WTS001</td>
                <td>Small</td>
                <td>White</td>
                <td>1</td>
                <td>500</td>
                <td>PKR 500</td>
            </tr>
           
            <tr>
                <td colspan="6" align="right"><strong>Shipping Charges (+)</strong></td>  <td>  PKR 0</td>
            </tr>
            <tr>
                <td colspan="6" align="right"><strong>Coupon Discount (-) </strong></td>  <td>PKR 0</td>
            </tr>
            <tr>
                <td colspan="6" align="right"><strong>Grand Total</td>  </strong><td>PKR 500</td>
            </tr>
    </table>
    <h4>Yours Billing & Shipping Address are as follows</h4> <br>
       
       <div class="billto" style="width:50%;float:left">
        <b>Billing Address</b> <br><br>
           <strong>Name : </strong>Amaan <br>
           <strong>Address : </strong>Lahore,Pakistan <br>
           <strong>City : </strong>Lahore <br>
           <strong>Country : </strong>Paksitan <br>
           <strong>Mobile : </strong>+92 1234567 <br>
       </div>
       
       <div class="shipto" style="width:50%;float: right;">
        <b>Shipping Address</b> <br><br>
        <strong>Name : </strong>Amaan <br>
        <strong>Address : </strong>Lahore,Pakistan <br>
        <strong>City : </strong>Lahore <br>
        <strong>Country : </strong>Paksitan <br>
        <strong>Mobile : </strong>+92 1234567 <br>
    </div><br><br><br><br>

   <div>
    <p>Note : If you need any query regarding this email plz feel free to contact us <a href="mailto:info@wayshop.com">infor@wayshop.com</a></p>
    <br>
    <b>Regards</b> <br>
    Wayshop Team
   </div>
</body>
</html>