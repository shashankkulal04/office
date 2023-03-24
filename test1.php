<?php
require_once __DIR__.'/fpdf184/fpdf.php';
$namenew = "Shashank Kulal";
$lastid = 551;
$pno='7062102545';
$eircode="C12345";
$contry = "IRELAND";
$emailnew='shashankkulal@live.in';
$selectedCountry = 'India';
$cm = '5';
$kw = '4.6';
$cm2 = '6';
$lessGrant = '5200';
$year = 10;
$monthlynetpalan = 4800;

$date = date('d-m-y');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->AliasNbPages();
$pdf->Image('https://devmysolar.genesisconsulting.ie/logoforpdf.png',15,5);
  $pdf->Ln(40);

$pdf->AliasNbPages();

$pdf->Cell(10,1, "$namenew,");
 $pdf->Ln(5);
 $pdf->Cell(10,10, 'Quote No:  :CF-'.$lastid);
 
 $pdf->Multicell(175,10,'Date:' .$date,0,'R');
 $pdf->Ln(5);
$pdf->Cell(10,10, 'Name: '.$namenew);
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
$pdf->Cell(40,10, 'Number of Panels: '.$cm);
$pdf->Ln(10);
$pdf->Cell(40,10, 'Estimated kWh  Generated: '.$kw);
$pdf->Ln(20);
//$pdf->Cell(40,10, 'Total Grant Available: '.round( $cm2 ));
$text = "Total Grant Available:  €". number_format( $cm2 );  
$pdf->Write(0,iconv('UTF-8', 'windows-1252', $text));
$pdf->Ln(10);
//$pdf->Cell(40,10, 'Total PV System Cost Without Grant: '.round( $clientgros ));
//$textto = "Total PV System Cost Without Grant:  €". number_format( $clientgros ); 
//$pdf->Write(0,iconv('UTF-8', 'windows-1252', $textto));
//$pdf->Ln(10);
//$pdf->Cell(40,10, 'Total PV System Cost When Grant Approved: '.round( $lessGrant ));
$textthree = "Total PV System Cost When Grant Approved:  €". number_format( $lessGrant ); 
$pdf->Write(0,iconv('UTF-8', 'windows-1252', $textthree));
$pdf->Ln(10);
$pdf->Cell(40,10, 'Contract Term (Years): '.$year);
$pdf->Ln(15);
//$pdf->Cell(40,10, 'Total Monthly Payment without Grant deducted: '. round( $monthlypay, 2 ));
//$textfour = "Total Monthly Payment without Grant deducted  €". number_format( $monthlypay, 2 ); 
//$pdf->Write(0,iconv('UTF-8', 'windows-1252', $textfour));
//$pdf->Ln(10);
//$pdf->Cell(40,10, 'Total Monthly Payment After Grant Deducted: '.round( $monthlynetpalan, 2 ));
$textfive = "Total Monthly Payment After Grant Deducted:  €". number_format( $monthlynetpalan, 2 ); 
$pdf->Write(0,iconv('UTF-8', 'windows-1252', $textfive));

$pdf->Ln(10);

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
 
$pdf->Multicell(100,0,'Email: info@mysolar.ie',0,'R');

$pdf->Multicell(160,0,'Web: mysolar.ie',0,'R');
// $pdf->Ln(10);

// $pdf->Cell(10,0, 'Terms & Conditions');


// email stuff (change data below)

$to = "joe@cleverdigital.ie,info@mysolar.ie"; 
  


$from = "info@mysolar.ie"; 
$subject = "SOLAR-CALCULATOR Quote";
$message = '<body style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
   <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;" width="100%" bgcolor="#f6f6f6" id="tblCustomers">
  <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
            <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;" width="580" valign="top">
              <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;">
                  <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;" width="100%">
                        <!-- START MAIN CONTENT AREA -->
                          <tr>
                           <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;" valign="top">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%"  >
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
                                         <p>Products Name: ' . $selectedCountry . '</p>
                                          <p>Number Of Panel: ' . $cm . '</p>
                                         <p>Total Grant  : €' . round( $cm2 ) . '</p>
                                          <p>kWh : ' . $kw . '</p>
                                         
                                          <p> Total PV System Cost When Grant Approved  : €' . round( $lessGrant ) . '</p>
                                          <p> Contract Term (Years): ' . $year . '</p>
                                          
                                           <p>Total Monthly Payment After Grant Deducted: €' . number_format( $monthlynetpalan, 2 ) . '</p>
                                          
                                          <p>* Savings based on standard electricity cost & south facing property. </p>
                                          <p>Final price subject to survey</p>
                                        </td>
                                        </tr>
                                   </table>
                                    
                                    </td>
                                 </tr>
                                 <script>
                                 console.log("Hleoo ther");
                                 </script>
                            <!-- END MAIN CONTENT AREA -->
                             </table>
                             
                              
                             <!-- END CENTERED WHITE CONTAINER -->
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

// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "MySolar.pdf";

// encode data (puts attachment in proper format)
//$pdfdoc = $pdf->Output("", "S");
$pdfdoc = $pdf->Output("", "I");
$attachment = chunk_split(base64_encode($pdfdoc));

// main header
$headers  = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

// no more headers after this, we start the body! //

$body = "--".$separator.$eol;
$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
//$body .= "This is a MIME encoded message.".$eol;

// message
$body .= "--".$separator.$eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$body .= $message.$eol;

// attachment
$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$body .= "Content-Transfer-Encoding: base64".$eol;
$body .= "Content-Disposition: attachment".$eol.$eol;
$body .= $attachment.$eol;
$body .= "--".$separator."--";

// send message
//mail($to, $subject, $body, $headers);
?>