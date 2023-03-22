


<div class="container home-single-step">
  <main>
    <div class="row no-gutters">
      <div class="col-md-12 col-lg-7 leftimg">
        <form class="needs-validation" id="products" novalidate="">
          <div class="row">
            <div class="col-sm-12">
              <div class="green-bg">
                <span>Step 1 :</span> Select Energy Option
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-sm-6">
              <div class="green-bg-01">
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="just-energy" name="my_options" value="Just Energy - Residential" checked="checked">
                  <label class="form-check-label" for="just-energy">Just Energy Residential </label>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="green-bg-02">
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="energy-hot-water" name="my_options" value="Energy &amp; Hot Water Diverter">
                  <label class="form-check-label" for="energy-hot-water">Energy &amp; Hot Water Diverter</label>
                </div>
              </div>
            </div>
          </div>
          <!--Select Country-->
          <div class="row">
            <div class="col-12">
              <div class="boxborder">
                <div class="step2">
                  <div class="green-bg">
                    <span>Step 2 :</span> Select Property Location
                  </div>
                </div>
                <div class="country-drop mb-10">
                  <select class="form-select" id="country" require="">
                    <option value="00">What Is Your House Location?</option>
                    <option value="300">Carlow</option>
                    <option value="0">Cavan</option>
                    <option value="1500">Clare </option>
                    <option value="1500">Cork</option>
                    <option value="1000">Donegal </option>
                    <option value="0">Dublin</option>
                    <option value="1000">Galway </option>
                    <option value="1500">Kerry </option>
                    <option value="0">Kildare </option>
                    <option value="500">Kilkenny </option>
                    <option value="0">Laois</option>
                    <option value="500">Leitrim </option>
                    <option value="1500">Limerick </option>
                    <option value="300">Longford </option>
                    <option value="0">Louth</option>
                    <option value="1500">Mayo </option>
                    <option value="0">Meath </option>
                    <option value="0">Monaghan </option>
                    <option value="500">Offaly</option>
                    <option value="1000">Roscommon </option>
                    <option value="1000">Sligo</option>
                    <option value="1000">Tipperary </option>
                    <option value="1000">Waterford </option>
                    <option value="300">Westmeath </option>
                    <option value="750">Wexford </option>
                    <option value="0">Wicklow</option>
                  </select>
                  <div class="invalid-feedback"> Please Select A Valid Country. </div>
                </div>
              </div>
            </div>
          </div>
          <!--Number Of Panel-->
          <div class="row">
            <div class="col-12">
              <div class="boxborder">
                <div class="step3">
                  <div class="green-bg">
                    <span>Step 3 :</span> Select Number Of Panels
                  </div>
                </div>
                <div class="l-whitebox mb-10">
                  <!--<label for="customRange1" class="form-label subheading"><span>Step 3 :</span> Select Number Of Panels</label>-->
                  <div class="range-wrap">
                    <div class="slidecontainer">
                      <input type="range" min="4" max="20" value="4" step="1" class="slider" id="avologic-range" list="tickmarks">
                      <div id="tickmarks">
                        <p id="slidfour">4</p>
                        <p id="slidfive">5</p>
                        <p>6</p>
                        <p>7</p>
                        <p>8</p>
                        <p>9</p>
                        <p>10</p>
                        <p>11</p>
                        <p>12</p>
                        <p>13</p>
                        <p>14</p>
                        <p>15</p>
                        <p>16</p>
                        <p>17</p>
                        <p>18</p>
                        <p>19</p>
                        <p>20</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="gray-bg">
                <div class="gray-header">
                  <div class="row">
                    <div class="col-sm-6 panelnone">SEAI Grant Available <br>
                      <span style="font-size:15px;"> (Paid To MySolar)</span>
                    </div>
                    <div class="col-sm-6 panelshow" style="display: none;">SEAI Grant Available <br>
                      <span style="font-size:15px;"> (Paid To MySolar)</span>
                    </div>
                    <div class="col-sm-4 text-left">
                      <!--<p class="morein" onclick="togglePopupp()" >-->
                      <p class="morein">
                        <a target="_BLANK" href="https://mysolar.ie/grant-eligibility-requirements/">Click For More Info</a>
                      </p>
                      <!-- <div class="col-12"><button class="morein" onclick="togglePopup()">Click For More Info</button></div> -->
                    </div>
                    <div class="col-sm-2 text-left">
                      <div id="grant"> € <?php echo (empty($grant) ?'error' : $grant); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Cost-->
          <div class="row">
            <div class="col-sm-12">
              <div class="gray-bg mb-10">
                <div class="gray-header pb-0">
                  <div class="row">
                    <div class="col-12">Total Installation Cost</div>
                  </div>
                </div>
                <div class="gray-body">
                  <div class="row">
                    <!-- <div class="col-sm-6">Extra Panel</div><div class="col-sm-6 txt-right"><p id="exp">0 </p></div> -->
                    <!-- <div class="col-sm-6">Extra Cost</div><div class="col-sm-6 txt-right"><p id="expcost">€0</p></div> -->
                    <div class="col-sm-8 text-left">Total PV System Cost When Grant Approved</div>
                    <div class="col-sm-4 txt-right">
                      <p id="lessgrant"></p>
                      <p id="mygrant" style="display: none;"></p>
                    </div>
                    <div style="display: none;" class="col-sm-8">Total PV System Cost Without Grant</div>
                    <div style="display: none;" class="col-sm-4 txt-right">
                      <p  id="clientgross">€4980</p>
                      <p  id="myclientgross">€4980</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Select Payment Terms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="boxborder">
                <div class="step4">
                  <div class="green-bg">
                    <span>Step 4 :</span> Select Payment Terms
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="gray-bg mb-10 border-0">
                  <!--<div class="gray-header"><div class="row"><div class="col-12"><span>Step 4 :</span> Select Payment Terms</div></div></div>-->
                  <div class="gray-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="finnaa" value="payupfrontselect" id="payupfront">
                          <label class="form-check-label" for="up-front">Pay Up Front</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="finnaa" value="finance" id="up-front" checked="">
                          <label class="form-check-label" for="up-front">Monthly Payments</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 fina" id="monPay" style="display: none;">
              <div class="l-whitebox mrgt-10">
                <label for="customRange1" class="form-label subheading">My Solar Payments (1 to 10 Years)</label>
                <div class="range-wrap">
                  <div class="range-ovalue" id="rangeZ" style="left: calc(100% + -10px);">
                    <span>10</span>
                  </div>
                  <input id="rangey" class="slider" type="range" min="1" max="10" value="10" step="1">
                  <div id="tickmarks">
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <p>4</p>
                    <p>5</p>
                    <p>6</p>
                    <p>7</p>
                    <p>8</p>
                    <p>9</p>
                    <p>10</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="gray-bg mb-10 mrgt-1">
                <div class="gray-body">
                  <div class="row">
                    <div style="display: none;" class="col-sm-9 fina customnene">Total Monthly Payment Without Grant Deducted </div>
                    <div class="col-sm-3 txt-right fina customnene">
                      <p id="ye" style="display: none;">€41.50</p>
                    </div>
                    <div class="col-sm-10 fina">Total Monthly Payment After Grant Deducted</div>
                    <div class="col-sm-2 txt-right fina">
                      <p id="Monthlyent"></p>
                    </div>
                    <div class="col-sm-7 finato" style="display: none;">Discounted Upfront Payment <br>
                      <span style="font-size:15px;">(Grant Deducted)</span>
                    </div>
                    <div class="col-sm-5 txt-right finato" style="display: none;">
                      <p id="clientgrossbo">€4854</p>
                      <p id="cod">€4,466</p>
                      <p id="nett" class="hidenetofsix">€3,152</p>
                      <p id="nettshow" class="shownetofsix" style="display: none;">€5107</p>
                      <!--<span class="botm"><i> (<p id="lessgranto">€3540</p> Before Advance Payment Discount) </i></span>-->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-5 finato" style="display: none;"></div>
                    <div class="col-sm-7 txt-right finato" style="display: none;">
                      <span class="botm">
                        <i> ( <p id="lessgranto">€3540</p> Before Advance Payment Discount) </i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="w-100 btn btn-primary btn-lg" id="showfrom" href="#emailmeqoute">Email Me The Quote</a>
        </form>
        <form id="fromofcal" method="post" style="display: none;">
          <div class="fromclaclutionmain" id="emailmeqoute">
            <!-- <div class="form-group row"><label for="email" class="col-sm-4 col-form-label">Property Type:</label><div class="col-sm-8"><select name="propertytype" id="property" required><option value="">Please Select Property Type ?</option><option value="Pitch">Pitch</option><option value="Orientation">Orientation</option><option value="Shading">Shading</option></select></div></div> -->
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">What type of property do you live in?:</label>
              <div class="col-sm-8">
                <select name="typeofproperty" id="property" required="">
                  <option value="">Please Select What type of property ?</option>
                  <option value="Semi Detached">Semi Detached</option>
                  <option value="Terraced">Terraced</option>
                  <option value="Bungalow">Bungalow</option>
                  <option value="Apartment">Apartment</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">What is the pitch of your roof?:</label>
              <div class="col-sm-8">
                <select name="roof" id="property" required="">
                  <option value="">Please Select Pitch ?</option>
                  <option value="0">0</option>
                  <option value="30">30</option>
                  <option value="45">45</option>
                  <option value="Unsure">Unsure</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">What orientation is the roof you want to install panels on?:</label>
              <div class="col-sm-8">
                <select name="installpanel" id="property" required="">
                  <option value="">Please Select Orientation ?</option>
                  <option value="South">South</option>
                  <option value="East">East</option>
                  <option value="West">West</option>
                  <option value="North">North</option>
                  <option value="Unsure">Unsure</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Do you have any shading on your roof from chimneys or nearby trees?:</label>
              <div class="col-sm-8">
                <select name="nearbychumeys" id="property" required="">
                  <option value="">Please Select Shading ?</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">During what part of the day are you home most?:</label>
              <div class="col-sm-8">
                <select name="homemost" id="property" required="">
                  <option value="">Please Select Your Time at Home ?</option>
                  <option value="Morning">Morning</option>
                  <option value="Afternoon">Afternoon</option>
                  <option value="Evening">Evening</option>
                  <option value="All Day">All Day</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Name:</label>
              <div class="col-sm-8">
                <input type="text" id="name" name="fname" class="form-control" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Email:</label>
              <div class="col-sm-8">
                <input type="email" id="email" name="email" class="form-control" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Phone Number:</label>
              <div class="col-sm-8">
                <input type="number" id="pnumber" name="pnumber" class="form-control" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Eircode :</label>
              <div class="col-sm-7 ">
                <!-- <input type="text" id="eircode"  class="form-control" required/> -->
                <input id="address-locator" name="eircode" class="mapControls form-control pac-target-input" type="text" placeholder="Enter a location" required="" autocomplete="off">
                <div class="fields" >
                  <div class="map-container">
                    <div id="map" style="overflow: hidden;"></div>
                  </div>
                </div>
              </div>
              <span class="col-sm-1 infromation">
                <a href="https://www.eircode.ie/" target="_blank">
                  <i class="fa fa-info-circle" aria-hidden="true"></i>
                </a>
              </span>
            </div>
            <button type="button" class="fromsb" name="submitt">
              <p class="sub">Submit</p>
            </button>
            <img src="https://mysolar.cleverdigital.ie/wp-content/uploads/2023/01/Iphone-spinner-2.gif" class="loader" style="display: none;">
          </div>
        </form>
      </div>
      <div class="col-md-12 col-lg-5 home-right-box">
        <div class="r-whitebox">
          <div class="qutresult">
            <p class="result">Your Solar Quotation</p>
          </div>
          <p id="seli">0</p>
          <div class="p-number">Energy Option : <span>
              <p id="right_energy"></p>
            </span>
          </div>
          <div class="p-number">Number of Panels : <span>
              <p id="democust"></p>
            </span>
          </div>
          <div class="upcoast" style="display: none;">Total Upfront Payment <span>
              <p id="cto" class="hidectoforsix" style="display: none;"></p>
              <p id="tup" class="hidectoforsix" style="display: inherit;"> €3152</p>
              <p id="leftupforsix" class="showctoforsix" style="display: none; display: inherit; ">€5107</p>
              <span class="star to">*</span>
              <br>
              <div class="smalltxt2" style="display: none;">(*Amount Payable After Payment Discount - You <p id="sveid"> Save </p>
                <p id="save">€1314</p>
                <p id="finalv"></p>
                <p class="hidectoforsix" id="customvl"></p>
                <p class="showctoforsix" id="mysavec" style="display: none; display: inline-block; font-size: inherit;"></p>
                <p id="discou"></p> )
              </div>
            </span>
          </div>
          <div class=" customtex upcoast" style="display: none;">Total Upfront Payment - Total <br> With Discount <p id="c">€3152</p>
            <span class="star">*</span>
            <br>
            <sapn>( After Discount* </sapn>
          </div>
          <div class="smalltxt2" style="display: none;">** Assumes SEAI Grant Approval </div>
          <div class="moncoast">Total Monthly Payment : <span>
              <p id="Monthlyentto">€<?php echo (empty($t_payment) ? 'Error' : $t_payment); ?></p>
            </span>
            <span class="star">*</span>
            <br>
            <span class="smalltxt">* When SEAI Grant Approved</span>
          </div>
          <div class="generates">System Size : <span>
              <p id="kw"><?php echo (empty($s_size) ? 'Error' : $s_size); ?></p>kWh
            </span>
          </div>
          <div class="rightbtn">
            <a class="w-100 btn btn-primary btn-lg" id="showfrom-2" onclick="document.getElementById('showfrom').click()">Email Me The Quote</a>
          </div>
          <div class="clearfix"></div>
          <!--<div class="descrip"><ul><li>You can use your energy to power your Car for Free.</li><li>You can use your energy power all your hot water needs.</li></ul></div>-->
        </div>
        <div class="how-much-save">
          <a href="https://mysolar.ie/how-much-will-solar-power-save-me/">
            <img src="https://mysolar.ie/wp-content/uploads/2023/02/howmuchsave.webp" class="attachment-full size-full" alt="How much I can save with my solar">
          </a>
        </div>
      </div>
    </div>
  </main>
</div>