<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Discount and Total Amount</h4>
                        <form action="" method="POST" onsubmit="return false;"> <!-- Prevent form submission for demo -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="price">Price:</label>
                                        <input type="text" id="price" name="price" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">    
                                    <div class="form-group">
                                        <label for="discount">%</label>
                                        <input type="text" id="discount" name="discount" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">    
                                    <label for="totalamnt">Total Amount:</label>
                                    <p id="totalamnt" name="totalamnt" class="form-control bg-light"></p> <!-- Added form-control and bg-light classes for styling -->
                                </div>
                            </div>
                            <button class="btn btn-success mt-3" onclick="getPrice()">Calculate Total</button>
                        </form>
                    </div>              
                </div>
            </div>
        </div>
    </div>

    <script>
        function getPrice() {
            var numVal1 = Number(document.getElementById("price").value);
            var numVal2 = Number(document.getElementById("discount").value) / 100;
            var totalValue = numVal1 - (numVal1 * numVal2);
            document.getElementById("totalamnt").textContent = totalValue.toFixed(2); // Use textContent to set the value of the <p> element
        }
    </script>

    <script src="../bootstrap/js/bootstrap.js"></script>
