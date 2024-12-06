<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVNPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <style>
    html, body{
        font-size: 14px;
        background-color: #e0f7fa;
    }
    
    .flip-animation {
        animation: flip 0.6s forwards;
    }

    @keyframes flip {
        0% {
            transform: rotateY(0);
        }
        50% {
            transform: rotateY(180deg);
        }
        100% {
            transform: rotateY(0);
        }
    }

    .button-container {
        display: flex;
        align-items: center;
        margin-left: auto; /* Pushes the button container to the right */
    }
    .button-container .btn {
        padding: 0; /* Remove padding for buttons */
        margin-left: 5px; /* Space between buttons */
    }
        nav {
            border-bottom: 2px solid black;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        .weight-label {
            margin-left: 10px; /* Add some space between input and label */
        }
        .btn-small {
            font-size: 0.8rem; /* Smaller font size for the button */
            padding: 0.2rem 0.5rem; /* Smaller padding for the button */
        }
        .user-info {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .function-keys {
            font-size: 0.9rem;
            margin-bottom: 20px;
        }
        .nav-item {
    position: relative; /* Required for positioning the submenu */
}

.submenu {
    display: none; /* Hide the submenu by default */
    position: absolute; /* Position it absolutely */
    background-color: turquoise; /* Background color */
    border: 1px solid #ccc; /* Optional border */
    z-index: 1000; /* Ensure it appears above other elements */
    list-style-type: none; /* Remove bullet points */
    padding: 0; /* Remove padding */
    margin: 0; /* Remove margin */
}

.nav-item:hover .submenu {
    display: block; /* Show submenu on hover */
}

.submenu li {
    padding: 8px 12px; /* Padding for submenu items */
}

.submenu li a {
    color: black; /* Color of submenu links */
    text-decoration: none; /* Remove underline */
}

.submenu li a:hover {
    background-color: #f0f0f0; /* Change background on hover */
}
    </style>
</head>
<body>
    
    <div class="d-flex align-items-center p-2">
        <i class="fas fa-desktop mr-2"></i> <!-- Computer Icon -->
        <span class="navbar-text">HIND MAHA MINERAL LLP</span>
        <div class="button-container ml-auto"> <!-- Move button container to the right -->
            <button class="btn btn-link text-dark" onclick="minimizeWindow()"><i class="fas fa-minus"></i></button>
            <button class="btn btn-link text-dark" onclick="maximizeWindow()"><i class="fas fa-square"></i></button>
            <button class="btn btn-link text-dark" onclick="closeWindow()"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li>
                    <i class="fas fa-desktop mt-3"></i> <!-- Computer Icon -->
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="first2.html">Weighment</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#">Customer Report</a>
                    <ul class="submenu">
                        <li><a class="dropdown-item" href="productwise_report.html">Grouping Report</a></li>
                        <li><a class="dropdown-item" href="customer_report.html">Customer Report</a></li>
                        <li><a class="dropdown-item" href="datewise.html">Datewise</a></li>
                        <li><a class="dropdown-item" href="ticketwise.html">Ticketwise</a></li>
                        <li><a class="dropdown-item" href="truck_report.html">Truck Report</a></li>
                        <li><a class="dropdown-item" href="user_report.html">User Report</a></li>
                        <li><a class="dropdown-item" href="userlog_report.html">User Log Report</a></li>
                        <li><a class="dropdown-item" href="product_report.html">Product Report</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#">Supplier Report</a>
                    <ul class="submenu">
                        <li><a class="dropdown-item" href="grouping_2.html">Grouping Report</a></li>
                        <li><a class="dropdown-item" href="supplier_2.html">Supplier Report</a></li>
                        <li><a class="dropdown-item" href="supplier_datewise.html">Supplier Datewise Report</a></li>
                        <li><a class="dropdown-item" href="product_report.html">Product Report</a></li>
                        <li><a class="dropdown-item" href="timediff.html">Time Difference Report</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#">DO Report</a>
                    <ul class="submenu">
                        <li><a class="dropdown-item" href="dowise.html">DO WISE REPORT</a></li>
                        <li><a class="dropdown-item" href="do_master.html">DO Master</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#">Transport Report</a>
                    <ul class="submenu">
                        <li><a class="dropdown-item" href="transportwise.html">Transport Wise</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#">Help</a>
                    <ul class="submenu">
                        <li><a class="dropdown-item" href="#">Software Guide</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#">Display Report</a>
                    <ul class="submenu">
                        <li><a class="dropdown-item" href="displayreport.html">Report</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="d-flex align-items-center mt-2 ml-5">
        <button class="btn btn-success btn-small mb-0" id="refresh" onclick="clearFields()" style="width: 80px; height: 35px; font-size: 16px;">Refresh</button>
        <form action ="data.php" method="post">
        <div class="row g-3 align-items-center ml-3">
            <div class="col-auto ml-5">
            <label for="wb" class="col-form-label">WB</label>
            </div>
            <div class="col-auto" style="width: 80px;">
            <input type="text" id="wb" name="wb" class="form-control bg-transparent" placeholder="0">
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <div class="form-group row" id="gatePassContainer" style="display: none;">
                        <label for="gatePassNo" class="col-sm-2 col-form-label">Gate Pass No.</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control bg-transparent" id="gatePassNo" name="gate_pass_no" placeholder="Enter Gate Pass No." readonly>
                        </div>
                    </div>
                    
                </div>
                
                <div class="form-group row" id="inOutContainer" style="display: none;">
    <label for="inOut" class="col-sm-2 col-form-label">IN/OUT</label>
    <div class="col-sm-10">
        <select class="form-control bg-transparent" id="inOut" name="in_out">
            <option value="">Select</option>
            <option value="IN">IN</option>
            <option value="OUT">OUT</option>
        </select>
    </div>
</div>

<div class="form-group row" id="doNoContainer" style="display: none;">
    <label for="doNo" class="col-sm-2 col-form-label">DO No.</label>
    <div class="col-sm-10">
        <select class="form-control bg-transparent" id="doNo" name="do_no">
            <option value="">Select</option>
            <?php include 'do_no.php'; echo $options; ?>
        </select>
    </div>
</div>
<div class="form-group row" id="supplierContainer" style="display: none;">
    <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
    <div class="col-sm-10">
        <select class="form-control bg-transparent" id="supplier" name="supplier">
            <option value="">Select</option>
            <?php include 'supplier11.php'; echo $options; ?>
        </select>
    </div>
</div>

<div class="form-group row" id="productContainer" style="display: none;">
    <label for="product" class="col-sm-2 col-form-label">Product</label>
    <div class="col-sm-10">
        <select class="form-control bg-transparent" id="product" name="product">
            <option value="">Select</option>
            <?php include 'product12.php'; echo $options; ?>
        </select>
    </div>
</div>

<div class="form-group row" id="qtyRemainingContainer" style="display: none;">
    <label for="qtyRemaining" class="col-sm-2 col-form-label">QTY Remaining</label>
    <div class="col-sm-10">
        <input type="number" class="form-control bg-transparent" id="qtyRemaining" name="qty_remaining" placeholder="Enter QTY Remaining">
    </div>
</div>

            <!-- Weight Section -->
            <div class="form-group row">
                <button class="btn btn-info btn-small mb-1 p-0" id="grossWeightButton" style="width: 80px; height: 35px;">Gross Weight</button>
                <div class="col-sm-5">
                    <input type="number" class="form-control bg-transparent" id="grossWeightInput" name="gross_weight" placeholder="Enter Gross Weight" oninput="calculateNetWeight()">
                </div>
                <div class="col-sm-5">
                    <button class="btn btn-success btn-small mb-1" id="backupGrossWeight">Backup</button>
                    <input type="date" class="form-control bg-transparent" id="grossWeightDateTime" name="in_date">
                    <input type="time" class="form-control bg-transparent" id="grossWeightDateTime" name="in_time">
                </div>
            </div>
            <div class="form-group row">
                <button class="btn btn-info btn-small mb-1 p-0" id="tareWeightButton" style="width: 80px; height: 35px;">Tare Weight</button>
                <div class="col-sm-5">
                    <input type="number" class="form-control bg-transparent" id="tareWeightInput" name="tare_weight" placeholder="Enter Tare Weight" oninput="calculateNetWeight()">
                </div>
                <div class="col-sm-5">
                    <input type="date" class="form-control bg-transparent" id="tareWeightDateTime" name="out_date">
                    <input type="time" class="form-control bg-transparent" id="tareWeightDateTime" name="out_time">
                </div>
            </div>
            <div class="form-group row">
                <button class="btn btn-info btn-small mb-1 p-0" id="netWeightButton" style="width: 80px; height: 35px;">Net Weight</button>
                <div class="col-sm-5">
                    <input type="text" class="form-control bg-transparent" id="netWeightOutput" name="net_weight" placeholder="Net Weight" readonly>
                </div>
            </div>
            <div class="form-group row mt-1 ml-5">
                <div class="col-sm-10">
                    <p class="mt-4 ml-5">Weighbridge Weight Display</p>
                    <textarea class="form-control bg-transparent" id="additionalComments" rows="5" placeholder="Enter any additional comments here..." style="width: 300px;"></textarea>
                </div>
            </div>
        </div>
    

            <!-- Additional Fields Section -->
            <div class="col-md-4">
    <div class="form-group row" id="weightDiffContainer" style="display: none;">
        <label for="weightDiff" class="col-sm-2 col-form-label">Weight Diff</label>
        <div class="col-sm-10">
            <input type="text" class="form-control bg-transparent" id="weightDiff" name="weight_diff" placeholder="Enter Weight Diff">
        </div>
    </div>
    <div class="form-group row" id="transporterContainer" style="display: none;">
    <label for="transporter" class="col-sm-2 col-form-label bg-transparent">Transporter</label>
    <div class="col-sm-10">
        <select class="form-control bg-transparent" id="transporter" name="transporter">
            <option value="">Select</option>
            <?php include 'transporter11.php'; echo $options; ?>
        </select>
    </div>
</div>
<div class="form-group row" id="sourceContainer" style="display: none;">
    <label for="source" class="col-sm-2 col-form-label">Source</label>
    <div class="col-sm-10">
        <select class="form-control bg-transparent" id="source" name="source">
            <option value="">Select</option>
            <?php include 'source11.php'; echo $options; ?>
        </select>
    </div>
</div>
<div class="form-group row" id="wclGatePassContainer" style="display: none;">
            <label for="wclGatePass" class="col-sm-2 col-form-label">WCL GatePass</label>
            <div class="col-sm-10">
                <input type="text" class="form-control bg-transparent" id="wclGatePass" placeholder="Enter WCL GatePass">
            </div>
        </div>

        
        <div class="form-group row" id="wclDateContainer" style="display: none;">
            <label for="wclDate" class="col-sm-2 col-form-label">WCL Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control bg-transparent" id="wclDate">
            </div>
        </div>
        <div class="form-group row" id="wclOutTimeContainer" style="display: none;">
            <label for="wclOutTime" class="col-sm-2 col-form-label">WCL OutTime</label>
            <div class="col-sm-10">
                <input type="time" class="form-control bg-transparent" id="wclOutTime">
            </div>
        </div>

        
        <div class="form-group row" id="wclGrossWtContainer" style="display: none;">
            <label for="wclGrossWt" class="col-sm-2 col-form-label">WCL Gross Wt</label>
            <div class="col-sm-10">
                <input type="text" class="form-control bg-transparent" id="wclGrossWt" placeholder="Enter WCL Gross Wt">
            </div>
        </div>


        <div class="form-group row" id="wclTareWtContainer" style="display: none;">
            <label for="wclTareWt" class="col-sm-2 col-form-label">WCL Tare Wt</label>
            <div class="col-sm-10">
                <input type="text" class="form-control bg-transparent" id="wclTareWt" placeholder="Enter WCL Tare Wt">
            </div>
        </div>

        
        <div class="form-group row" id="wclNetWtContainer" style="display: none;">
            <label for="wclNetWt" class="col-sm-2 col-form-label">WCL Net Wt</label>
            <div class="col-sm-10">
                <input type="text" class="form-control bg-transparent" id="wclNetWt" placeholder="Enter WCL Net Wt">
            </div>
        </div>


        <div class="form-group row" id="gradeContainer" style="display: none;">
            <label for="grade" class="col-sm-2 col-form-label">Grade</label>
            <div class="col-sm-10">
                <select class="form-control bg-transparent" id="grade" name="grade">
                    <option value="">Select</option>
                    <option value="Grade1">Grade1</option>
                    <option value="Grade2">Grade2</option>
                    <option value="Grade3">Grade3</option>
                </select>
            </div>
        </div>

        
        <div class="form-group row" id="remarksContainer" style="display: none;">
            <label for="remarks" class="col-sm-2 col-form-label">Remarks</label>
            <div class="col-sm-10">
                <select class="form-control bg-transparent" id="remarks" name="remarks">
                    <option value="">Select</option>
                    <option value="Remark1">Remark1</option>
                    <option value="Remark2">Remark2</option>
                    <option value="Remark3">Remark3</option>
                </select>
            </div>
        </div>
            <div class="user-info mt-5">USER LOGGED IN: RSATPAISE</div>
    <div class="function-keys">
      <p class="small">F1: Gross Weight F2: Tare Weight F3: New Slip F4: Cancel F5: Find F6: Pending List F7: Exit</p>
    </div>
        </div>
        
        <div class="col-md-4">
    
            <div class="form-group row" id="siteNameContainer" style="display: none;">
                <label for="siteName" class="col-sm-2 col-form-label">Site Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control bg-transparent" id="siteName" name="site_name" readonly>
                </div>
            </div>

            
            <div class="form-group row" id="truckNoContainer" style="display: none;">
                <label for="truckNo" class="col-sm-2 col-form-label">Truck No.</label>
                <div class="col-sm-10">
                    <select class="form-control bg-transparent" id="truckNo" name="truck_no">
                        <option value="">Select</option>
                        <?php include 'truck1.php'; echo $options; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row" id="panNoContainer" style="display: none;">
                <label for="panNo" class="col-sm-2 col-form-label">PAN No.</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control bg-transparent" id="panNo" name="pan_no" placeholder="Enter PAN No." value="" readonly>
                </div>
            </div>

        
            <div class="form-group row" id="gstinNoContainer" style="display: none;">
                <label for="gstinNo" class="col-sm-2 col-form-label">GSTIN No.</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control bg-transparent" id="gstinNo" name="gstin_no" placeholder="Enter GSTIN No." value="" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <textarea class="form-control bg-transparent" id="additionalComments" rows="22" placeholder="Enter any additional comments here..." style="width: 480px;"></textarea>
                </div>
            </div>
            </div>
        </div>
    
        <div class="mt-4">
            <p class="font-weight-bold">Saved Successfully : Press F3 For New Entry</p>
            <button type="submit" class="btn btn-primary ml-3" id="saveBtn" name="save">Save</button>
        </form>
            <button type="button" class="btn btn-success ml-2" id="newBtn" onclick="newEntry()">New</button>
            <button class="btn btn-info ml-3" id="printBtn" onclick="printData()">Print</button>
            <button type="button" class="btn btn-danger ml-3" id="cancelBtn" onclick="clearFields()">Cancel</button>
            <button class="btn btn-warning ml-3" id="findBtn" onclick="openSearchBox()">Find</button>
            <button class="btn btn-secondary ml-3" id="pendingBtn">Pending</button>
            <button type="button" class="btn btn-dark ml-3" id="removeBtn" onclick="clearFields()">Remove</button>
        </div>
        <hr class="border-dark">
        <footer class="text-center mt-4">
    <div class="container mt-4">
        <h5>Select Options</h5>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck1" onclick="toggleGatePassNo()">
                    <label class="form-check-label" for="flexCheck1">Show Gate Pass No.</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck2" onclick="toggleInOutFields()">
                    <label class="form-check-label" for="flexCheck2">Show IN/OUT Fields</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck3" onclick="toggleDoNoFields()">
                    <label class="form-check-label" for="flexCheck3">DO No.</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck4" onclick="toggleSupplierFields()">
                    <label class="form-check-label" for="flexCheck4">Supplier</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck5" onclick="toggleProductFields()">
                    <label class="form-check-label" for="flexCheck5">Product</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck6" onclick="toggleQtyRemainingField()">
                    <label class="form-check-label" for="flexCheck6">QTY Remaining</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck7" onclick="toggleWeightDiffField()">
                    <label class="form-check-label" for="flexCheck7">Weight Diff</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck8" onclick="toggleTransporterField()">
                    <label class="form-check-label" for="flexCheck8">Transporter</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck9" onclick="toggleSourceField()">
                    <label class="form-check-label" for="flexCheck9">Source</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck10" onclick="toggleWclGatePassField()">
                    <label class="form-check-label" for="flexCheck10">WCL GatePass</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck11" onclick="toggleWclDateField()">
                    <label class="form-check-label" for="flexCheck11">WCL Date</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck12" onclick="toggleWclOutTimeField()">
                    <label class="form-check-label" for="flexCheck12">WCL OutTime</label>
                </div>
            </div>
            <div class="col-md-3">
    <div class="form-check mb-3"> 
        <input class="form-check-input" type="checkbox" id="flexCheck13" onclick="toggleWclGrossWtField()">
        <label class="form-check-label" for="flexCheck13">WCL Gross Wt</label>
    </div>
</div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck14" onclick="toggleWclTareWtField()">
                    <label class="form-check-label" for="flexCheck14">WCL Tare Wt</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck15" onclick="toggleWclNetWtField()">
                    <label class="form-check-label" for="flexCheck15">WCL Net Wt</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck16" onclick="toggleGradeField()">
                    <label class="form-check-label" for="flexCheck16">Grade</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck17" onclick="toggleRemarksField()">
                    <label class="form-check-label" for="flexCheck17">Remarks</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck18" onclick="toggleSiteNameField()">
                    <label class="form-check-label" for="flexCheck18">Site Name</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck19" onclick="toggleTruckNoField()">
                    <label class="form-check-label" for="flexCheck19">Truck No.</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck20" onclick="togglePanNoField()">
                    <label class="form-check-label" for="flexCheck20">PAN No.</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheck21" onclick="toggleGstinNoField()">
                    <label class="form-check-label" for="flexCheck21">GSTIN No.</label>
                </div>
            </div>
        </div>
    </div>
    <hr class="border-dark">
    <p class="font-weight-bold">
        <span id="currentDate" style="margin-right: 30px;"></span>
    </p>
</footer>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
    <script>

    function toggleGatePassNo() {
    const gatePassContainer = document.getElementById('gatePassContainer');
    const checkbox = document.getElementById('flexCheck1');

    if (checkbox.checked) {
        gatePassContainer.style.display = 'block'; // Show the label and input field
    } else {
        gatePassContainer.style.display = 'none'; // Hide the label and input field
    }
}

function toggleInOutFields() {
    var checkbox = document.getElementById("flexCheck2");
    var inOutContainer = document.getElementById("inOutContainer");

    if (checkbox.checked) {
        inOutContainer.style.display = "block"; // Show the IN/OUT fields
    } else {
        inOutContainer.style.display = "none"; // Hide the IN/OUT fields
    }
}

function toggleDoNoFields() {
    var checkbox = document.getElementById("flexCheck3");
    var doNoContainer = document.getElementById("doNoContainer");

    if (checkbox.checked) {
        doNoContainer.style.display = "block"; // Show the DO No. fields
    } else {
        doNoContainer.style.display = "none"; // Hide the DO No. fields
    }
}

function toggleSupplierFields() {
    var checkbox = document.getElementById("flexCheck4");
    var supplierContainer = document.getElementById("supplierContainer");

    if (checkbox.checked) {
        supplierContainer.style.display = "block"; // Show the Supplier fields
    } else {
        supplierContainer.style.display = "none"; // Hide the Supplier fields
    }
}

function toggleProductFields() {
    var checkbox = document.getElementById("flexCheck5");
    var productContainer = document.getElementById("productContainer");

    if (checkbox.checked) {
        productContainer.style.display = "block"; // Show the Product fields
    } else {
        productContainer.style.display = "none"; // Hide the Product fields
    }
}

function toggleQtyRemainingField() {
    var checkbox = document.getElementById("flexCheck6");
    var qtyRemainingContainer = document.getElementById("qtyRemainingContainer");

    if (checkbox.checked) {
        qtyRemainingContainer.style.display = "block"; // Show the QTY Remaining field
    } else {
        qtyRemainingContainer.style.display = "none"; // Hide the QTY Remaining field
    }
}

function toggleWeightDiffField() {
    var container = document.getElementById("weightDiffContainer");
    var checkbox = document.getElementById("flexCheck7");

    if (checkbox.checked) {
        container.style.display = "block"; // Show the field
    } else {
        container.style.display = "none"; // Hide the field
    }
}

function toggleTransporterField() {
    var container = document.getElementById("transporterContainer");
    var checkbox = document.getElementById("flexCheck8");

    if (checkbox.checked) {
        container.style.display = "block"; // Show the dropdown
    } else {
        container.style.display = "none"; // Hide the dropdown
    }
}

function toggleSourceField() {
    var container = document.getElementById("sourceContainer");
    var checkbox = document.getElementById("flexCheck9");

    if (checkbox.checked) {
        container.style.display = "block"; // Show the dropdown
    } else {
        container.style.display = "none"; // Hide the dropdown
    }
}
         
function toggleWclGatePassField() {
            var container = document.getElementById("wclGatePassContainer");
            var checkbox = document.getElementById("flexCheck10");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the input field
            } else {
                container.style.display = "none"; // Hide the input field
            }
        }

        function toggleWclDateField() {
            var container = document.getElementById("wclDateContainer");
            var checkbox = document.getElementById("flexCheck11");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the input field
            } else {
                container.style.display = "none"; // Hide the input field
            }
        }

        function toggleWclOutTimeField() {
            var container = document.getElementById("wclOutTimeContainer");
            var checkbox = document.getElementById("flexCheck12");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the input field
            } else {
                container.style.display = "none"; // Hide the input field
            }
        }

        function toggleWclGrossWtField() {
            var container = document.getElementById("wclGrossWtContainer");
            var checkbox = document.getElementById("flexCheck13");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the input field
            } else {
                container.style.display = "none"; // Hide the input field
            }
        }

        function toggleWclTareWtField() {
            var container = document.getElementById("wclTareWtContainer");
            var checkbox = document.getElementById("flexCheck14");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the input field
            } else {
                container.style.display = "none"; // Hide the input field
            }
        }

        function toggleWclNetWtField() {
            var container = document.getElementById("wclNetWtContainer");
            var checkbox = document.getElementById("flexCheck15");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the input field
            } else {
                container.style.display = "none"; // Hide the input field
            }
        }

        function toggleGradeField() {
            var container = document.getElementById("gradeContainer");
            var checkbox = document.getElementById("flexCheck16");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the dropdown
            } else {
                container.style.display = "none"; // Hide the dropdown
            }
        }

        function toggleRemarksField() {
            var container = document.getElementById("remarksContainer");
            var checkbox = document.getElementById("flexCheck17");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the dropdown
            } else {
                container.style.display = "none"; // Hide the dropdown
            }
        }

        function toggleSiteNameField() {
            var container = document.getElementById("siteNameContainer");
            var checkbox = document.getElementById("flexCheck18");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the input field
            } else {
                container.style.display = "none"; // Hide the input field
            }
        }

        function toggleTruckNoField() {
            var container = document.getElementById("truckNoContainer");
            var checkbox = document.getElementById("flexCheck19");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the dropdown
            } else {
                container.style.display = "none"; // Hide the dropdown
            }
        }
        
        function togglePanNoField() {
            var container = document.getElementById("panNoContainer");
            var checkbox = document.getElementById("flexCheck20");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the input field
            } else {
                container.style.display = "none"; // Hide the input field
            }
        }

        function toggleGstinNoField() {
            var container = document.getElementById("gstinNoContainer");
            var checkbox = document.getElementById("flexCheck21");

            if (checkbox.checked) {
                container.style.display = "block"; // Show the input field
            } else {
                container.style.display = "none"; // Hide the input field
            }
        }
                    function generateGatePassNo() {
    
                     const uniqueNumber = Math.floor(Math.random() * 1000000); 
                     const gatePassNo = `GP-${uniqueNumber}`; 
                     document.getElementById('gatePassNo').value = gatePassNo;
                }


        window.onload = generateGatePassNo;

        document.addEventListener("DOMContentLoaded", function() {
        // Check if values are already stored in local storage
        const storedPan = localStorage.getItem("pan_no");
        const storedGstin = localStorage.getItem("gstin_no");

        // If values are not stored, set default values and store them
        if (!storedPan) {
            localStorage.setItem("pan_no", "AAMFH6820P");
        }
        if (!storedGstin) {
            localStorage.setItem("gstin_no", "27AAMFH6820P1ZQ");
        }

        // Set the input values from local storage
        document.getElementById("panNo").value = localStorage.getItem("pan_no");
        document.getElementById("gstinNo").value = localStorage.getItem("gstin_no");
    });

        const selectedSite = localStorage.getItem('selectedSite');
        if (selectedSite) {
            document.getElementById('siteName').value = selectedSite; // Set the site name in the input field
        }

        function calculateNetWeight() {
            // Get the values from the input fields
            const grossWeight = parseFloat(document.getElementById('grossWeightInput').value) || 0;
            const tareWeight = parseFloat(document.getElementById('tareWeightInput').value) || 0;
        
            // Calculate net weight
            const netWeight = grossWeight - tareWeight;
        
            // Update the net weight output field
            document.getElementById('netWeightOutput').value = netWeight.toFixed(2); // Display with 2 decimal places
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Function to handle keydown events
            document.addEventListener('keydown', function(event) {
                if (event.key === 'F1') {
                    event.preventDefault(); // Prevent default F1 help action
                    document.getElementById('grossWeightInput').focus(); // Focus on gross weight input
                } else if (event.key === 'F2') {
                    event.preventDefault(); // Prevent default action
                    document.getElementById('tareWeightInput').focus(); // Focus on tare weight input
                } else if (event.key === 'F3') {
                    event.preventDefault();
                    clearFields(); // Call refresh function
                } else if (event.key === 'F4') {
                    event.preventDefault();
                    clearFields(); // Call clear function
                } else if (event.key === 'F5') {
                        event.preventDefault();
                        openSearchBox();
                } else if (event.key === 'F7') {
                        event.preventDefault();
                        exitPage();
                }
            });
        });
 
        function refreshFields() {
    
        document.getElementById('grossWeightInput').value = ''; 
        document.getElementById('tareWeightInput').value = ''; 
        document.getElementById('netWeightOutput').value = ''; 
        
    }

        function clearFields() {
        // Clear all input fields
        const inputs = document.querySelectorAll('input[type="text"], input[type="number"], input[type="date"], input[type="time"], textarea');
        inputs.forEach(input => {
            input.value = ''; // Clear the value
        });
        const selects = document.querySelectorAll('select');
        selects.forEach(select => {
            select.selectedIndex = 0; // Reset to the first option
        });
    }
        
        function openSearchBox() {
                const doNo = prompt("Enter DO No. to search:");
                if (doNo) {
                    // Implement search logic here
                    alert("Searching for DO No: " + doNo);
                }
            }

        function exitPage() {
                if (confirm("Are you sure you want to exit?")) {
                    window.close(); // This may not work if the page was not opened via JavaScript
                }
            }

        document.addEventListener('DOMContentLoaded', function() {
        var today = new Date();
        var day = String(today.getDate()).padStart(2, '0'); // Get day and ensure it's 2 digits
        var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var month = monthNames[today.getMonth()]; // Get the month name
        var year = today.getFullYear(); // Get the full year

        // Format the date as "DD-MMM-YYYY"
        var formattedDate = day + '-' + month + '-' + year;
        document.getElementById('currentDate').textContent = formattedDate;
    });

    function newEntry() {
            document.body.classList.add('flip-animation');
            setTimeout(() => {
                clearFields();
                document.body.classList.remove('flip-animation');
            }, 600);
        }

        function clearFields() {
    // Clear all input fields except PAN No. and GSTIN No.
    const inputs = document.querySelectorAll('input[type="text"], input[type="number"], input[type="date"], input[type="time"], textarea');
    inputs.forEach(input => {
        if (input.id !== 'panNo' && input.id !== 'gstinNo' && input.id !== 'siteName') {
            input.value = ''; // Clear the value
        }
    });
    const selects = document.querySelectorAll('select');
    selects.forEach(select => {
        select.selectedIndex = 0; // Reset to the first option
    });
}


</script>
</body>
</html>