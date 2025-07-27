<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SSLCommerz Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body,
        html {
            height: 100%;
        }

        .center-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container center-wrapper">
        <div class="col-md-6">
            <div class="card shadow-lg rounded-4 p-4">
                <h4 class="mb-4 text-center">SSLCommerz Payment</h4>
                <form action="{{ route('pay_index') }}" method="POST">
                    <div class="row mb-3">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" name="cus_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="cus_email" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Phone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input type="text" name="cus_phone" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Amount (BDT)</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                                <input type="number" name="amount" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" name="cus_add1" class="form-control" placeholder="Street address"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Note</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-pen-to-square"></i></span>
                                <input type="text" name="cus_note" class="form-control"
                                    placeholder="Note (optional)">
                            </div>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-credit-card"></i> Pay Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
