<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="lawyerBstyle.css" />
    <link
      href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
      rel="stylesheet"
    />
    <title>Profile name</title>
  </head>

  <body>
    <div id="titleStyle">
      <h1>Hello [insert profile name]!</h1>
      <h2>Company: [insert company name]</h2>
      <p>
        This is your profile page. You can see the progress you've made with
        your work and manage your clients using this dashboard.
      </p>
      <div id="inlineStyle2">
        <button id="button">Change Password</button>
        <button id="button">Edit Profile</button>
        <button id="button">Clients & Pending Clients</button>
      </div>
    </div>

    <div id="account">
      <h2 style="text-align: center">My Account</h2>
      <div>
        <!-- for is to pair with input id -->
        <!-- name is for javascript -->
        <!-- textarea is for a block of text -->
        <form>
          <div id="marginStyle">
            <h4>User Information</h4>
            <div id="userInfo">
              <label for="username">Username</label>
              <div>
                <input
                  type="text"
                  id="username"
                  name="username"
                  placeholder="bing123"
                />
              </div>

              <label for="firstName">First name</label>
              <div>
                <input
                  type="text"
                  id="firstName"
                  name="firstName"
                  placeholder="Bing"
                />
              </div>

              <label for="lastName">Last name</label>
              <div>
                <input
                  type="text"
                  id="lastName"
                  name="lastName"
                  placeholder="Bing"
                />
              </div>

              <label for="gender">Gender</label><br />
              <input type="checkbox" id="gender" name="male" />
              <label for="male"> Male</label>
              <input type="checkbox" id="gender" name="female" />
              <label for="female"> Female</label>
              <input type="checkbox" id="gender" name="others" />
              <label for="others"> Others</label>
            </div>

            <h4>Contact Information</h4>
            <div id="contactInfo">
              <label for="CoName">Company Name</label>
              <div>
                <input
                  type="text"
                  id="CoName"
                  name="CoName"
                  placeholder="Enter company name"
                />
              </div>

              <label for="workNo">Work Number</label>
              <div>
                <input
                  type="tel"
                  id="workNo"
                  name="workNo"
                  placeholder="Exclude country code"
                />
              </div>

              <label for="workEmail">Work Email</label>
              <div>
                <input
                  type="email"
                  id="workEmail"
                  name="workEmail"
                  placeholder="bing@example.com"
                />
              </div>
            </div>

            <h4>Availability</h4>
            <div id="availability">
              <label for="avail">Maximum number of cases you can take on:</label
              ><br />
              <select name="avail" id="avail">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>

          <div id="PASandFee">
            <div id="PAS">
              <div id="inlineStyle">
                <h4>Practice Areas and Specialities</h4>
                <br />
                <h4>Minimum Legal Fee</h4>
                <br />
              </div>

              <!-- //////////////////////////// -->
              <div id="inlineStyle">
                <label for="practiceArea" style="margin-right: 25%"
                  >Select ALL practice areas and specialities you can take
                  on:</label
                ><br /><br />
                <label for="legalFee"
                  >State the minimum legal fee you are willing to accept:</label
                ><br /><br />
              </div>
              <!-- //////////////// -->

              <br />
              <strong>Criminal Law</strong>
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Criminal Defence"
                />
                <label for="Criminal Defence"> Criminal Defence</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />

              <!-- //////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Commercial Crime and Regulatory Compliance"
                />
                <label for="Commercial Crime and Regulatory Compliance">
                  Commercial Crime and Regulatory Compliance</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />

              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Magistrate's Complaint"
                />
                <label for="Magistrate's Complaint">
                  Magistrate's Complaint</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />

              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Cybercrime" />
                <label for="Cybercrime"> Cybercrime</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />

              <!-- ////////////////////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Protection From Harassment Order"
                />
                <label for="Protection From Harassment Order">
                  Protection From Harassment Order</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />

              <!-- /////////////////////// -->
              <br />
              <strong>Family Law</strong>
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Divorce" />
                <label for="Divorce"> Divorce</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />

              <!-- /////////////////////////////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Syariah Divorce"
                />
                <label for="Syariah Divorce"> Syariah Divorce</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ///////////////////////////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Divorce in England and Wales"
                />
                <label for="Divorce in England and Wales">
                  Divorce in England and Wales</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- /////////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Pre-Nuptial Agreement"
                />
                <label for="Pre-Nuptial Agreement"> Pre-Nuptial Agreement</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- /////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Personal Protection Order"
                />
                <label for="Personal Protection Order">
                  Personal Protection Order</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- /////////////// -->
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Adoption" />
                <label for="Adoption"> Adoption</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />

              <!-- ////////////// -->
              <br />
              <strong>Incapacity and Inheritance</strong>
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Lasting Power of Attorney (LPA)"
                />
                <label for="Lasting Power of Attorney (LPA)">
                  Lasting Power of Attorney (LPA)</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- //////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Probate and Letters of Administration"
                />
                <label for="Probate and Letters of Administration">
                  Probate and Letters of Administration</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- //////////////////////////// -->
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Wills" />
                <label for="Wills"> Wills</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Muslim Wills and Inheritance"
                />
                <label for="Muslim Wills and Inheritance">
                  Muslim Wills and Inheritance</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Mental Capacity Act applications"
                />
                <label for="Mental Capacity Act applications">
                  Mental Capacity Act applications</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- //////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Trusts" />
                <label for="Trusts"> Trusts</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />

              <!-- /////////////////////// -->
              <br />
              <strong>Personal Legal Procedures</strong>
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Deed Polls (Name Charge)"
                />
                <label for="Deed Polls (Name Charge)">
                  Deed Polls (Name Charge)</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Notary Public" />
                <label for="Notary Public"> Notary Public</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ///////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Drafting IOU/Debt Acknowledgement"
                />
                <label for="Drafting IOU/Debt Acknowledgement">
                  Drafting IOU/Debt Acknowledgement</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- //////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Bankruptcy" />
                <label for="Bankruptcy"> Bankruptcy</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Commissioner for Oaths"
                />
                <label for="Commissioner for Oaths">
                  Commissioner for Oaths</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Power of Attorney"
                />
                <label for="Power of Attorney"> Power of Attorney</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////////// -->
              <!-- /////////////////////// -->
              <br />
              <strong>Civil Claims</strong>
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Debt Recovery" />
                <label for="Debt Recovery"> Debt Recovery</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- /////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Employment Disputes"
                />
                <label for="Employment Disputes"> Employment Disputes</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Medical Negligence"
                />
                <label for="Medical Negligence"> Medical Negligence</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- //////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Civil Litigation"
                />
                <label for="Civil Litigation"> Civil Litigation</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- //////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Copyright Infringement"
                />
                <label for="Copyright Infringement">
                  Copyright Infringement</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Personal Injury"
                />
                <label for="Personal Injury"> Personal Injury</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Defamation" />
                <label for="Defamation"> Defamation</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- //////////////// -->
              <!-- /////////////////////// -->
              <br />
              <strong>Housing</strong>
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="MCST Disputes" />
                <label for="MCST Disputes"> MCST Disputes</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input type="checkbox" id="practiceArea" name="Conveyancing" />
                <label for="Conveyancing"> Conveyancing</label><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- /////////////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Landlord-Tenant Disputes"
                />
                <label for="Landlord-Tenant Disputes">
                  Landlord-Tenant Disputes</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
              <!-- ////////////// -->
              <!-- /////////////////////// -->
              <div id="inlineStyle">
                <input
                  type="checkbox"
                  id="practiceArea"
                  name="Renovation Claims"
                />
                <label for="Renovation Claims"> Renovation Claims</label
                ><br /><br />
                <hr />
                <input
                  type="text"
                  id="fee"
                  name="fee"
                  placeholder="$ Round off to nearest whole number"
                  size="30"
                />
              </div>
              <hr />
            </div>
          </div>
        </form>
      </div>
    </div>
    <input type="submit" value="Submit" id="submit" />
  </body>
</html>