<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Master</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e0f7fa; 
        }
        .box {
            border: 2px solid #4CAF50;
            padding: 20px;
            background-color: white;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-top: 50px;
            border-radius: 10px;
        }

        .box:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .heading {
            text-align: center;
            color: #4CAF50;
        }

        .table-editable {
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="box">
        <h1 class="heading font-weight-bold">Supplier Master</h1>
        <form action="supplier_master.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control bg-transparent" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control bg-transparent" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control bg-transparent" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control bg-transparent" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control bg-transparent" id="mobile" name="mobile" required>
            </div>
            <button type="button" class="btn btn-primary" id="saveBtn">Save</button>
            <button type="button" class="btn btn-danger" id="deleteBtn">Delete</button>
            <button type="button" class="btn btn-secondary" id="closeBtn">Close</button>
        </form>
        
        <div class="form-group">
            <label for="search" class="mt-4">Search by Name</label>
            <input type="text" class="form-control bg-transparent" id="search" placeholder="Search...">
        </div>

        <table class ="table table-bordered bg-transparent" id="supplierTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>  
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    document.getElementById('saveBtn').addEventListener('click', function () {
        const name = document.getElementById('name').value;
        const address = document.getElementById('address').value;
        const city = document.getElementById('city').value;
        const phone = document.getElementById('phone').value;
        const mobile = document.getElementById('mobile').value;

        // Create a FormData object
        const formData = new FormData();
        formData.append('name', name);
        formData.append('address', address);
        formData.append('city', city);
        formData.append('phone', phone);
        formData.append('mobile', mobile);

        // Send data to the server
        fetch('supplier_master.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data); // Show success message
            clearForm(); // Clear the form after saving
            fetchSuppliers(); // Refresh the table
        })
        .catch(error => {
            console.error('Error:', error);
            alert("An error occurred while saving the supplier.");
        });
    });

// Search functionality
document.getElementById('search').addEventListener('input', function () {
        const searchTerm = this.value.toLowerCase();
        const tableBody = document.getElementById('supplierTable').getElementsByTagName('tbody')[0];
        const rows = tableBody.getElementsByTagName('tr');

        Array.from(rows).forEach(row => {
            const nameCell = row.cells[0].innerText.toLowerCase();
            if (nameCell.includes(searchTerm)) {
                row.style.display = ''; // Show row
            } else {
                row.style.display = 'none'; // Hide row
            }
        });
    });

    function clearForm() {
        document.getElementById('name').value = '';
        document.getElementById('address').value = '';
        document.getElementById('city').value = '';
        document.getElementById('phone').value = '';
        document.getElementById('mobile').value = '';
    }

    function fetchSuppliers() {
        fetch('supplier_master.php') // Create this PHP file to fetch suppliers
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('supplierTable').getElementsByTagName('tbody')[0];
                tableBody.innerHTML = ''; // Clear existing table data

                data.forEach(supplier => {
                    const row = tableBody.insertRow();
                    Object.values(supplier).forEach(value => {
                        const cell = row.insertCell();
                        cell.innerText = value;
                    });
                });
            })
            .catch(error => {
                console.error('Error fetching suppliers:', error);
            });
    }

    // Call fetchSuppliers on page load
    document.addEventListener('DOMContentLoaded', fetchSuppliers);
</script>
</body>
</html>