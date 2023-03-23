<?php
require('fpdf.php');
function Send() {
  $to_email = "kulal.shashank51@gmail.com";
  $subject = "Test email to send from XAMPP";
  $body = "Hi, This is test mail to check how to send mail from Localhost Using Gmail ";
  $headers = "From: sender email";
  
  if (mail($to_email, $subject, $body, $headers))
  
  {
      echo "Email successfully sent to $to_email...";
  }
  
  else
  
  {
      echo "Email sending failed!";
  }
}
// $namenew, $pno, $eircode, $contry, $emailnew, $selectedCountry, $f, $kw, $cm2, $mygrant, $nett
function Test($namenew = 'Shashank Kulal', $pno = '7062102545', $eircode = '5257', $contry = 'India', $emailnew = 'shashankkulal@live.in', $selectedCountry = 'India', $f = '6', $kw = '2800', $cm2 = '3600', $mygrant = '2400', $nett = '500') {
    $date = date('d-m-y');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',15);
    //$pdf->Image('https://mysolar.cleverdigital.ie/wp-content/uploads/2022/09/logo-1-150x150.png',15,5,'PNG');
    $pdf->Ln(40);
    $pdf->Cell(10,1, "$namenew,");
    $pdf->Ln(5);
    $pdf->Cell(10,10, 'Quote No:  :CF-'.'123');
    
    $pdf->Multicell(175,10,'Date:' .$date,0,'R');
    $pdf->Cell(10,10, 'Customer Name: '.$namenew);
    $pdf->Ln(10);
    $pdf->Cell(40,10, 'Phone Number: '.$pno);
    $pdf->Ln(10);
    $pdf->Cell(40,10, 'Eircode: '.$eircode);
    $pdf->Ln(10);
    $pdf->Cell(40,10, 'County: '.$contry);
    $pdf->Ln(10);
    $pdf->Cell(40,10, 'Email Address: '.$emailnew);
    $pdf->Ln(15);
    $pdf->Cell(40,10, 'Product Name: '.$selectedCountry);
    $pdf->Ln(10);
    $pdf->Cell(40,10, 'Number of Panels: '.$f);
    $pdf->Ln(10);
    $pdf->Cell(40,10, 'Estimated kWh  Generated: '.$kw);
    $pdf->Ln(20);
    //$pdf->Cell(40,10, 'Total Grant Available: €'.round( $cm2 ));
    $texsone = "Total Grant Available: €". number_format( $cm2 );  
    $pdf->Write(0,iconv('UTF-8', 'windows-1252', $texsone));
    $pdf->Ln(10);
    //$pdf->Cell(40,10, 'Total PV System Cost When Grant Approved: €'.round( $myclientgross ));
    //$textsto = "Total PV System Cost Without Grant: €". number_format( $myclientgross );  
    //$pdf->Write(0,iconv('UTF-8', 'windows-1252', $textsto));
    //$pdf->Ln(10);
    //$pdf->Cell(40,10, 'Total PV System Cost When Grant Approved: €'.round( $mygrant ));
    $textsevthre = "Total PV System Cost When Grant Approved: €". number_format( $mygrant );  
    $pdf->Write(0,iconv('UTF-8', 'windows-1252', $textsevthre));
    $pdf->Ln(15);
    // $pdf->Cell(40,10, 'Discounted Upfront Payment With Grant: €'.round( $nett ));
    $textsevfour = "Discounted Upfront Payment With Grant: €". number_format( $nett );  
    $pdf->Write(0,iconv('UTF-8', 'windows-1252', $textsevfour));

    $pdf->Ln(25);
    $pdf->SetFont('Times','BI',13);
    $pdf->Cell(10,0, 'Terms & Conditions');
    $pdf->Ln(5);
    $pdf->Cell(40,10, '* Savings based on standard electricity cost & south facing property.');
    $pdf->Ln(10);
    $pdf->Cell(40,10, '*  Final price subject to survey *.');
    $pdf->Ln(10);
    $pdf->Cell(40,10, '* Quote Expires In 30 days');
    $pdf->Ln(15);
    $pdf->Cell(10,0, 'Tel: 083 090 8912');
    
    $pdf->Multicell(100,0,'Email: sales@mysolar.ie',0,'R');

    $pdf->Multicell(160,0,'Web: mysolar.ie',0,'R');
    // $pdf->Ln(10);

    // $pdf->Cell(10,0, 'Terms & Conditions');


    // email stuff (change data below)
    $to = $emailnew; 
    $from = "sales@mysolar.ie"; 
    $subject = "SOLAR-CALCULATOR Quote";
    $message = '<body style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;" width="100%" bgcolor="#f6f6f6">
        <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;" width="580" valign="top">
            <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;">
                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;" width="100%">
                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                        <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;" valign="top">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                            <tr>
    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">
                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Hi,</p>
                                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Many thanks for taking the time to contact us.</p>
                                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">This estimated quote is valid for 30 days</p>
    <p>Customer Name: ' . $namenew . '</p>
    <p>Phone Number: ' . $pno . '</p>
    <p>Eircode: ' . $eircode . '</p>
    <p>County : ' . $contry . '</p>
    <p>Email Address: ' . $emailnew . '</p>
    <p>Product Name: ' . $selectedCountry . '</p>
    <p>Number Of Panel: ' . $f . '</p>
    <p>Total Grant : ' . round( $cm2 ) . '</p>
    <p>kw: ' . $kw . '</p>

                                    
                                    <p> Total PV System Cost When Grant Approved : ' . round( $mygrant ) . '</p>
                                <p>Discounted Upfront Payment With Grant: ' . round( $nett ) . '</p>
                                
                                <p>* Savings based on standard electricity cost & south facing property. </p>
                                            <p>Final price subject to survey</p>
                                </td>
                            </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->
                    <!-- START FOOTER -->
                    <div class="footer" style="clear: both; margin-top: 10px; text-align: center; width: 100%;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                        <tr>
                            <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;" valign="top" align="center">
                            <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">MySolar Registered in Ireland No.651647</span>
                            </td>
                        </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->
                </div>
            </td>
                <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
                </tr>
            </table>
            </body>';

    // // a random hash will be necessary to send mixed content
    // $separator = md5(time());

    // // carriage return type (we use a PHP end of line constant)
    // $eol = PHP_EOL;

    // // attachment name
    $filename = "MySolar.pdf";

    // // encode data (puts attachment in proper format)
    $pdfdoc = $pdf->Output("I", $filename, true);
    exit();
    // $attachment = chunk_split(base64_encode($pdfdoc));

    // // main header
    // $headers  = "From: ".$from.$eol;
    // $headers .= "MIME-Version: 1.0".$eol; 
    // $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

    // // no more headers after this, we start the body! //

    // $body = "--".$separator.$eol;
    // $body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
    // //$body .= "This is a MIME encoded message.".$eol;

    // // message
    // $body .= "--".$separator.$eol;
    // $body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
    // $body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
    // $body .= $message.$eol;

    // // attachment
    // $body .= "--".$separator.$eol;
    // $body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
    // $body .= "Content-Transfer-Encoding: base64".$eol;
    // $body .= "Content-Disposition: attachment".$eol.$eol;
    // $body .= $attachment.$eol;
    // $body .= "--".$separator."--";

    // send message
    //mail($to, $subject, $body, $headers);  
}

/*



  //////////// Bitrix API Pay Up Front (Energy & Hot Water Diverter) ////////////////

    $result = CRest::call(
    'crm.lead.add',
    ['FIELDS' => 
      [
      //'TITLE' => 'MySolar Website Quotation/Calculator', 
    'TITLE' => $namenew,
      'NAME' => $namenew, 
      'ADDRESS' => $contry, 
      'UF_CRM_1663758814' => $lastid, 
      'UF_CRM_1663758895' => $eircode,
      'UF_CRM_1663758913' => $contry, 
      'UF_CRM_1663758926' => $selectedroduct, 
      'UF_CRM_1663758956' => $cm, 
      'UF_CRM_1663758977' => $kw, 
      'UF_CRM_1663758998' => '€'.$cm2, 
      'UF_CRM_1663759019' => '€'.$clientgros, 
      'UF_CRM_1663759040' => '€'.$mygrant, 
      //'UF_CRM_1663759074' => $year, 
      //'UF_CRM_1663759169' => '€'.number_format( $monthlypay, 2 ), 
      //'UF_CRM_1663759180' => '€'.number_format( $monthlynetpalan, 2 ), 
      'UF_CRM_1663759200' => '€'.number_format($nett),  
      'UF_CRM_1659522970002' => $attachment,  
      //'SOURCE' => "API Integration Calculator Form", 
      'SOURCE_ID' => 'WEB', 
    'UF_CRM_1670253278' => '124',
      'EMAIL' => ['0' => ['VALUE' => $emailnew]], 
      'PHONE' => ['0' => ['VALUE' => $pno]], 
       ], 

    ],

  );*/
?>