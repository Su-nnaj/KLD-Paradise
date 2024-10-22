<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .reservation-form {
            background: #0f1a2c;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            color: white;
        }
        .guest-details {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Room Reservation Form</h2>
    <form class="reservation-form">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Full Name" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="example@example.com" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="+1234567890" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="checkin">Check-in Date</label>
                <input type="date" class="form-control" id="checkin" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="checkout">Check-out Date</label>
                <input type="date" class="form-control" id="checkout" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="rooms">Number of Rooms</label>
                <select class="form-control" id="rooms" required>
                    <option value="" disabled selected>Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="guests">Number of Guests</label>
                <input type="number" class="form-control" id="guests" placeholder="1" min="1" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="message">Special Requests</label>
                <textarea class="form-control" id="message" rows="2" placeholder="Any special requests?"></textarea>
            </div>
        </div>

        <!-- Guest Details Section -->
        <div id="guestDetailsContainer">
            <h5 class="mt-4">Guest Details</h5>
            <div class="guest-details" id="guest1">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="guestName1">Guest Name</label>
                        <input type="text" class="form-control" id="guestName1" placeholder="Guest Name" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="guestEmail1">Guest Email</label>
                        <input type="email" class="form-control" id="guestEmail1" placeholder="Guest Email" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="guestPhone1">Guest Phone</label>
                        <input type="tel" class="form-control" id="guestPhone1" placeholder="Guest Phone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="guestGender1">Gender</label>
                        <select class="form-control" id="guestGender1" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="guestBirthday1">Birthday</label>
                        <input type="date" class="form-control" id="guestBirthday1" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <button type="button" class="btn btn-danger btn-sm mb-2" onclick="removeGuest(1)" style="padding: 15px 30px;">Delete Guest</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-3">
        <button type="button" class="btn btn-warning" id="addGuestButton" style="padding: 10px 20px;">Add Another Guest</button>
        </div>
        <!-- Payment Status Section -->
        <div class="row mt-4">
            <div class="col-md-4 mb-3">
                <label for="paymentStatus">Payment Status</label>
                <select class="form-control" id="paymentStatus" required>
                    <option value="" disabled selected>Select Payment Status</option>
                    <option value="paid">Paid</option>
                    <option value="pending">Pending</option>
                    <option value="failed">Failed</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-warning btn-block mt-3">Reserve Now</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    let guestCount = 1;

    document.getElementById('addGuestButton').addEventListener('click', function() {
        guestCount++;
        const guestDetailsContainer = document.getElementById('guestDetailsContainer');
        
        const newGuestDiv = document.createElement('div');
        newGuestDiv.className = 'guest-details';
        newGuestDiv.id = `guest${guestCount}`;
        newGuestDiv.innerHTML = `
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="guestName${guestCount}">Guest Name</label>
                    <input type="text" class="form-control" id="guestName${guestCount}" placeholder="Guest Name" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="guestEmail${guestCount}">Guest Email</label>
                    <input type="email" class="form-control" id="guestEmail${guestCount}" placeholder="Guest Email" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="guestPhone${guestCount}">Guest Phone</label>
                    <input type="tel" class="form-control" id="guestPhone${guestCount}" placeholder="Guest Phone" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="guestGender${guestCount}">Gender</label>
                    <select class="form-control" id="guestGender${guestCount}" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="guestBirthday${guestCount}">Birthday</label>
                    <input type="date" class="form-control" id="guestBirthday${guestCount}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <button type="button" class="btn btn-danger btn-sm mb-2" onclick="removeGuest(${guestCount})">Delete Guest</button>
                </div>
            </div>
        `;
        
        guestDetailsContainer.appendChild(newGuestDiv);
    });

    function removeGuest(guestId) {
        const guestDiv = document.getElementById(`guest${guestId}`);
        guestDiv.remove();
    }
</script>
</body>
</html>
    