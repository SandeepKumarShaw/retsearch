<link rel="stylesheet" type="text/css" href="<?php echo plugins_url(); ?>/rets-search/assets/css/custom-common.css">

<?php 

$rets = new Rets($_GET,'mortgage_cal/'.$_GET['Matrix_Unique_ID']);
$results = $rets->call();


echo '<div class="container">';
foreach($results as $listing) {
    /*echo '<pre>';
    print_r($listing);   
    echo '</pre>';exit;*/

    echo '<h2 class="photo-head">Mortgage Calculator - Listing ID:'.$listing->Matrix_Unique_ID.'</h2>';

    echo '<ul>';
    echo '<li>';
    echo '<span>Listing Price: $'.number_format($listing->ListPrice).'</span>';
    echo '</li>';
     echo '<li>';
    echo '<span>Status: '.$listing->Status.'</span>';
    echo '</li>';
     echo '<li>';
    echo '<span>Address: '.$listing->PublicAddress.'</span>';
    echo '</li>';
     echo '<li>';
    echo '<span>Bedrooms: '.$listing->BedroomsTotalPossibleNum.'</span>';
    echo '</li>';
    echo '<li>';
    echo '<span>Acres: '.$listing->NumAcres.'</span>';
    echo '</li>';
    echo '<li>';
    echo '<span>Square Feet: '.$listing->SqFtTotal.'</span>';
    echo '</li>';
    echo '</ul>';
    //$down_payment_percent=$listing['DownPayment'];
    $default_sale_price              = $listing->ListPrice;
    $default_annual_interest_percent = 5.0;
    $default_year_term               = 30;
    $default_down_percent            = 20;
    $default_show_progress           = TRUE;
    /* --------------------------------------------------- */
    


    /* --------------------------------------------------- *
     * Initialize Variables
     * --------------------------------------------------- */
    $sale_price                      = 0;
    $annual_interest_percent         = 0;
    $year_term                       = 0;
    $down_percent                    = 0;
    $this_year_interest_paid         = 0;
    $this_year_principal_paid        = 0;
    $form_complete                   = false;
    $show_progress                   = false;
    $monthly_payment                 = false;
    $show_progress                   = false;
    $error                           = false;
    /* --------------------------------------------------- */


    /* --------------------------------------------------- *
     * Set the USER INPUT values
     * --------------------------------------------------- */
    if (isset($_POST['form_complete'])) {
        //echo "Hello"; die();
        $sale_price                      = $_POST['sale_price'];
        $annual_interest_percent         = $_POST['annual_interest_percent'];
        $year_term                       = $_POST['year_term'];
        $down_percent                    = $_POST['down_percent'];
        $show_progress                   = (isset($_POST['show_progress'])) ? $_POST['show_progress'] : false;
        $form_complete                   = $_POST['form_complete'];
    }
    
    ?>
    <?php    
    function get_interest_factor($year_term, $monthly_interest_rate) {
        //echo "hiiiiiii";
        global $base_rate;
        $factor      = 0;
        $base_rate   = 1 + $monthly_interest_rate;
        $denominator = $base_rate;
        for ($i=0; $i < ($year_term * 12); $i++) {
            $factor += (1 / $denominator);
            $denominator *= $base_rate;
        }
        return $factor;
    }        

    // If the form is complete, we'll start the math
    if ($form_complete==1) {
    
        //$sale_price              = ereg_replace( "[^0-9.]", "", $sale_price);
        //$annual_interest_percent = eregi_replace("[^0-9.]", "", $annual_interest_percent);
        //echo $year_term          = eregi_replace("[^0-9.]", "", $year_term);
        //$down_percent            = eregi_replace("[^0-9.]", "", $down_percent);
        
        if (((float) $year_term <= 0) || ((float) $sale_price <= 0) || ((float) $annual_interest_percent <= 0)) {

            $error = "You must enter a <b>Sale Price of Home</b>, <b>Length of Motgage</b> <i>and</i> <b>Annual Interest Rate</b>";
        }
        
        if (!$error) {

            $month_term              = $year_term * 12;
            $down_payment            = $sale_price * ($down_percent / 100);
            $annual_interest_rate    = $annual_interest_percent / 100;
            $monthly_interest_rate   = $annual_interest_rate / 12;
            $financing_price         = $sale_price - $down_payment;
            $monthly_factor          = get_interest_factor($year_term, $monthly_interest_rate);
            $monthly_payment         = $financing_price / $monthly_factor;
        }
    } else {
 
        if (!$sale_price)              { $sale_price              = $default_sale_price;              }
        if (!$annual_interest_percent) { $annual_interest_percent = $default_annual_interest_percent; }
        if (!$year_term)               { $year_term               = $default_year_term;               }
        if (!$down_percent)            { $down_percent            = $default_down_percent;            }
        if (!$show_progress)           { $show_progress           = $default_show_progress;           }
    }
    
    if ($error) {
        print("<font color=\"red\">" . $error . "</font><br><br>\n");
        $form_complete   = false;
    }
    if ($listing->Status!="Leased"){
?>
<div id="IDX-previousPage">
    <a href="<?php echo site_url();?>/search-details/?Matrix_Unique_ID=<?php echo $listing->Matrix_Unique_ID; ?>" id="IDX-returnToPreviousPage">Back to Previous Page</a>
    <span class="IDX-previousSeparator">|</span>
    <a href="<?php echo site_url();?>/search-details/?Matrix_Unique_ID=<?php echo $listing->Matrix_Unique_ID; ?>">Go to Property</a>
</div>
<form method="POST" name="information" action="" class="mortgage_cal">
<input type="hidden" name="form_complete" value="1">
<table cellpadding="2" cellspacing="0" border="0" width="100%" class="form_table">
    <tr valign="top">
        <td align="right"><img src="/images/clear.gif" width="225" height="1" border="0" alt=""></td>
        <td align="smalltext" width="100%"><img src="/images/clear.gif" width="250" height="1" border="0" alt=""></td>
    </tr>
    
    <tr valign="top" bgcolor="#eeeeee">
        <td align="right">Price of Home:</td>
        <td width="100%"><input type="text" size="10" name="sale_price" value="<?php echo $sale_price; ?>">(In Dollars)</td>
    </tr>
    <tr valign="top" bgcolor="#eeeeee">
        <td align="right">Down Payment:</td>
        <td><input type="text" size="5" name="down_percent" value="<?php echo $down_percent; ?>">%</td>
    </tr>
    <tr valign="top" bgcolor="#eeeeee">
        <td align="right">Mortgage Term:</td>
        <td><input type="text" size="3" name="year_term" value="<?php echo $year_term; ?>">years</td>
    </tr>
    <tr valign="top" bgcolor="#eeeeee">
        <td align="right">Interest Rate:</td>
        <td><input type="text" size="5" name="annual_interest_percent" value="<?php echo $annual_interest_percent; ?>">%</td>
    </tr>
    <tr valign="top" bgcolor="#eeeeee">
        <td align="right">Explain Calculations:</td>
        <td><input type="checkbox" name="show_progress" value="1" <?php if ($show_progress) { print("checked"); } ?>> 
        Show amortization</td>
    </tr>
    <tr valign="top" bgcolor="#eeeeee">
        <td>&nbsp;</td>
        <td><input type="submit" value="Calculate"><br>
        <?php if ($form_complete) { print("<a href=\"" .$_SERVER['REQUEST_URI']. "\">Start Over</a><br>"); } ?><br></td>
    </tr>
<?php
    // If the form has already been calculated, the $down_payment
    // and $monthly_payment variables will be figured out, so we
    // can show them in this table
    if ($form_complete && $monthly_payment) {
?>
        <tr valign="top">
            <td align="center" colspan="2" bgcolor="#000000"><font color="#ffffff"><b>Mortgage Payment Information</b></font></td>
        </tr>
        <tr valign="top" bgcolor="#eeeeee">
            <td align="right">Down Payment:</td>
            <td><b><?php echo "\$" . number_format($down_payment, "2", ".", ","); ?></b></td>
        </tr>
        <tr valign="top" bgcolor="#eeeeee">
            <td align="right">Amount Financed:</td>
            <td><b><?php echo "\$" . number_format($financing_price, "2", ".", ","); ?></b></td>
        </tr>
        <tr valign="top" bgcolor="#cccccc">
            <td align="right">Monthly Payment:</td>
            <td><b><?php echo "\$" . number_format($monthly_payment, "2", ".", ","); ?></b><br><font>(Principal &amp; Interest ONLY)</font></td>
        </tr>
        
<?php    
    }
?>
</table>
</form>
<?php
}
    // This prints the calculation progress and 
    // the instructions of HOW everything is figured
    // out
    if ($form_complete && $show_progress) {
        $step = 1;
?>
        <br><br>
        
        <br>
<?php
        // Set some base variables
        $principal     = $financing_price;
        $current_month = 1;
        $current_year  = 1;
        // This basically, re-figures out the monthly payment, again.
        $power = -($month_term);
        $denom = pow((1 + $monthly_interest_rate), $power);
        $monthly_payment = $principal * ($monthly_interest_rate / (1 - $denom));
        
        print("<br><br><a name=\"amortization\"></a>Amortization For Monthly Payment: <b>\$" . number_format($monthly_payment, "2", ".", ",") . "</b> over " . $year_term . " years<br>\n");
        print("<table cellpadding=\"5\" cellspacing=\"0\" border=\"1\" width=\"100%\">\n");
        
        // This LEGEND will get reprinted every 12 months
        $legend  = "\t<tr valign=\"top\">\n";
        $legend .= "\t\t<td align=\"right\"><b>Month</b></td>\n";
        $legend .= "\t\t<td align=\"right\"><b>Interest Paid</b></td>\n";
        $legend .= "\t\t<td align=\"right\"><b>Principal Paid</b></td>\n";
        $legend .= "\t\t<td align=\"right\"><b>Remaing Balance</b></td>\n";
        $legend .= "\t</tr>\n";
        
        echo $legend;
                
        // Loop through and get the current month's payments for 
        // the length of the loan 
        while ($current_month <= $month_term) {        
            $interest_paid     = $principal * $monthly_interest_rate;
            $principal_paid    = $monthly_payment - $interest_paid;
            $remaining_balance = $principal - $principal_paid;
            
            $this_year_interest_paid  = $this_year_interest_paid + $interest_paid;
            $this_year_principal_paid = $this_year_principal_paid + $principal_paid;
            
            print("\t<tr valign=\"top\">\n");
            print("\t\t<td align=\"right\">" . $current_month . "</td>\n");
            print("\t\t<td align=\"right\">\$" . number_format($interest_paid, "2", ".", ",") . "</td>\n");
            print("\t\t<td align=\"right\">\$" . number_format($principal_paid, "2", ".", ",") . "</td>\n");
            print("\t\t<td align=\"right\">\$" . number_format($remaining_balance, "2", ".", ",") . "</td>\n");
            print("\t</tr>\n");
    
            ($current_month % 12) ? $show_legend = FALSE : $show_legend = TRUE;
    
            if ($show_legend) {
                print("\t<tr valign=\"top\" bgcolor=\"#ffffcc\">\n");
                print("\t\t<td colspan=\"4\"><b>Totals for year " . $current_year . "</td>\n");
                print("\t</tr>\n");
                
                $total_spent_this_year = $this_year_interest_paid + $this_year_principal_paid;
                print("\t<tr valign=\"top\" bgcolor=\"#ffffcc\">\n");
                print("\t\t<td>&nbsp;</td>\n");
                print("\t\t<td colspan=\"3\">\n");
                print("\t\t\tYou will spend \$" . number_format($total_spent_this_year, "2", ".", ",") . " on your house in year " . $current_year . "<br>\n");
                print("\t\t\t\$" . number_format($this_year_interest_paid, "2", ".", ",") . " will go towards INTEREST<br>\n");
                print("\t\t\t\$" . number_format($this_year_principal_paid, "2", ".", ",") . " will go towards PRINCIPAL<br>\n");
                print("\t\t</td>\n");
                print("\t</tr>\n");
    
                print("\t<tr valign=\"top\" bgcolor=\"#ffffff\">\n");
                print("\t\t<td colspan=\"4\">&nbsp;<br><br></td>\n");
                print("\t</tr>\n");
                
                $current_year++;
                $this_year_interest_paid  = 0;
                $this_year_principal_paid = 0;
                
                if (($current_month + 6) < $month_term) {
                    echo $legend;
                }
            }
    
            $principal = $remaining_balance;
            $current_month++;
        }
        print("</table>\n");
    }
?>
<br>

<?php
    //$photos = $rets->GetObject("Property", "LargePhoto", $listing['Matrix_Unique_ID'], "*", 0);
        
}
//$rets->FreeResult($search);
?>
</div>
