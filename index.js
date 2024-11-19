function printData() {
    // Collect data from the form
    const panNo = document.getElementById('panNo').value;
    const inOut = document.getElementById('inOut').value;
    const gatePassNo = document.getElementById('gatePassNo').value;
    const doNo = document.getElementById('doNo').value;
    const transporter = document.getElementById('transporter').value;
    const truckNo = document.getElementById('truckNo').value;
    const product = document.getElementById('product').value;
    const grossWeight = document.getElementById('grossWeightInput').value;
    const tareWeight = document.getElementById('tareWeightInput').value;
    const netWeight = document.getElementById('netWeightOutput').value;
    const source = document.getElementById('source').value;
    const wb = document.getElementById('wb').value;
    const gstinNo = document.getElementById('gstinNo').value;
    const outDate = document.getElementById('tareWeightDateTime').value;
    const outTime = document.getElementById('wclOutTime').value;
    const inDate = document.getElementById('grossWeightDateTime').value;
    const inTime = document.getElementById('grossWeightDateTime').value;
    const grade = document.getElementById('grade').value;

    // Open a new window for printing
    const printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.write(`
        <html>
            <head>
                <title>Print</title>
                <style>
                    body { font-family: Arial, sans-serif; }
                    h1 { text-align: center; }
                    .address { text-align: center; margin-bottom: 20px; }
                    .data-table { width: 100%; border-collapse: collapse; margin: 20px 0; }
                    .data-table th, .data-table td { border: 1px solid #000; padding: 8px; text-align: left; }
                    .data-table th { background-color: #f2f2f2; }
                </style>
            </head>
            <body>
                <h1>HIND MAHA MINERAL LLP</h1>
                <div class="address">Registered Office: Shop No. 105, Rama Port Vyapar Vihar, Bilaspur (CG) - 4950001</div>
                <table class="data-table">
                    <tr><th>PAN NO.</th><td>${panNo}</td></tr>
                    <tr><th>IN/OUT</th><td>${inOut}</td></tr>
                    <tr><th>Gate Pass No.</th><td>${gatePassNo}</td></tr>
                    <tr><th>DO No.</th><td>${doNo}</td></tr>
                    <tr><th>Transporter</th><td>${transporter}</td></tr>
                    <tr><th>Truck No.</th><td>${truckNo}</td></tr>
                    <tr><th>Product</th><td>${product}</td></tr>
                    <tr><th>Gross Weight</th><td>${grossWeight}</td></tr>
                    <tr><th>Tare Weight</th><td>${tareWeight}</td></tr>
                    <tr><th>Net Weight</th><td>${netWeight}</td></tr>
                    <tr><th>Source</th><td>${source}</td></tr>
                    <tr><th>WB</th><td>${wb}</td></tr>
                    <tr><th>GSTIN NO.</th><td>${gstinNo}</td></tr>
                    <tr><th>OUT DATE</th><td>${outDate}</td></tr>
                    <tr><th>OUT TIME</th><td>${outTime}</td></tr>
                    <tr><th>IN DATE</th><td>${inDate}</td></tr>
                    <tr><th>IN TIME</th><td>${inTime}</td></tr>
                    <tr><th>Grade</th><td>${grade}</td></tr>
                </table>
                <div style="text-align: right; margin-top: 20px;">Signature: ____________________</div>
            </body>
        </html>
    `);
    printWindow.document.close();
    printWindow.print();
    printWindow.close();
}