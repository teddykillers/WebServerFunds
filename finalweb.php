<!DOCTYPE html>
<html>
<head>

    <div id="picture">        
    <title>
        Bank Information
    </title>
</head>

<style>
     #picture{
            border: 2px solid black;
            padding: 25px;
            background: url(Images/mountain.jpg);
            background-repeat: no-repeat;
            background-size: auto;
          }
</style>


<body>
    <img src="https://www.downtownkelowna.com/application/files/cache/d956e4c3765fc88def8a3da924446722.jpg" alt="Logo" style="float:right;width:450px;height:200px;">
    <br/>
    <h1>Bank Information</h1>
    <br/>
    <p>Please Fill out this form to confirm your bank information</p>
    <br/>


    <p>Enter Your First Name        Enter Your Last Name</p>
            <form action="action_page.php" method="get">
                <input type="text" id="firstname" onkeypress="return isValid(event);" /><span> </span><input type="text" id="lastname">   
                    <img src="https://www.nj.com/resizer/AZifv9tu48omf3bpM1S16lzps1A=/600x0/arc-anglerfish-arc2-prod-advancelocal.s3.amazonaws.com/public/ELE2VGM36FEQXEZVWW5MVKM52A.png" alt="Logo" style="float:right;width:350px;height:341px;">
            <br/>

            <!--Credit Card Number-->
            <p>Enter your CreditCard Number</p>
                <td> <input type="text" size="18" id="CardNumber" name="EPS_CARDNUMBER" onkeypress="return IsNumeric();" /> </td>


            <!--experitaion date-->
            <p>Enter the Expiration Date</p>
                <div>
                    <input type="text" size="2" id="ExpiryMonth"/><span>/</span><input type="text" size="4" id="ExpiryYear">
                </div>
            

            <br/>
            <p>Enter Your CVV number</p>    
                    <input type="text" size="3" id="CCV" name="CVVNum">
    
            <br/>
            </form>

        <form  onsubmit="return CCValidation()">
            <input type="submit">
        </form>
    </div> 

         
    <script>
        //check when pushing submit button
        function CCValidation() {
            if (CreditCard()) { } else { return; }
            if (ExpiryDate()) { } else { return; }
            if (CVV()) { } else { return; }
        }
    
        // check for creditcard
        function CreditCard() {
            var CreditNumber = document.getElementById("CardNumber").value;
            if (LengthCheck(CreditNumber, 16)) { return true }
            else {
                alert("Please enter a 16-digit CreditCard Number");
                //document.getElementById('lblMessage').innerHTML = 'CC wrong';
                return false;
            }
        }
    
        // verifying date
        function ExpiryDate() {
            var ExpiryMonth = document.getElementById("ExpiryMonth").value;
            var ExpiryYear = document.getElementById("ExpiryYear").value;
            DateEntered = new Date((document.getElementById("ExpiryYear").value),((document.getElementById("ExpiryMonth").value)))*1;
            Today = new Date()*1;
            if (DateEntered <= Today) {
                alert("Your expiry date cannot be lower than todays's date!", DateEntered, Today);
                return false;
            }
            else { return true; }
        }
    
        // check for ccv
        function CVV() {
            var CCVValue = document.getElementById("CCV").value;
            if (LengthCheck(CCVValue, 3)) { }
            else {
                alert("Please enter a 3-digit CCV")
                return false;
            }
        }
    
        // verifying length
        function LengthCheck(Value, Length) {
            if (String(Value).length != Length) { return false; }
            return true;
        }

</script> 

<script>
                // everything else then numeric answer is blocked
                        function IsNumeric(e) 
                        {
                        var specialKeys = new Array();
                        specialKeys.push(8); //Backspace
                        var keyCode = e.which ? e.which : e.keyCode
                        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                        return ret;
                        }
                </script> 
</body>

