<?php include  '../layout/top.php'; ?>
<head>
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .chart-js-container3 {
            position: relative;
            height: 400px; 
            width: 100%;
        }
        .chart55 {
            height: 100%; 
        }
    </style>

</head>
<?php

$sql = "SELECT COUNT(*) as totalMessages FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalMessages = $row['totalMessages'];
} else {
    $totalMessages = 0;
}

$sql = "SELECT COUNT(*) as totalDoctors FROM doctors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalDoctors = $row['totalDoctors'];
} else {
    $totalDoctors = 0;
}

$sql = "SELECT COUNT(*) as totalUsers FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalUsers = $row['totalUsers'];
} else {
    $totalUsers = 0;
}

$sql = "SELECT COUNT(*) as totalVisitors FROM visitors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalVisitors = $row['totalVisitors'];
} else {
    $totalVisitors = 0;
}

$sql = "SELECT DATE(VisitDate) as visit_date, COUNT(*) as visit_count FROM visitors GROUP BY DATE(VisitDate) ORDER BY visit_date";
$result = $conn->query($sql);

$dates = [];
$counts = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dates[] = $row['visit_date'];
        $counts[] = $row['visit_count'];
    }
}

$conn->close();

?>

<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-0">Total Users</p>
                        <h5 class="mb-0"><?php echo $totalUsers; ?></h5>
                    </div>
                    <img src="../assets/media/icons/customers.png" style="max-width: 40px;">
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-0">Page Views</p>
                        <h5 class="mb-0"><?php echo $totalVisitors; ?></h5>
                    </div>
                    <img src="../assets/media/icons/customers.png" style="max-width: 40px;">
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-0">Number of Doctors</p>
                        <h5 class="mb-0"><?php echo $totalDoctors; ?></h5>
                    </div>
                    <img src="../assets/media/icons/customers.png" style="max-width: 40px;">
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-0">Inbox</p>
                        <h5 class="mb-0"><?php echo $totalMessages; ?></h5>
                    </div>
                    <img src="../assets/media/icons/customers.png" style="max-width: 40px;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card radius-10">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-md-3">
                <h5 class="mb-0 mb-md-0">Views Overview</h5>
            </div>
        </div>
        <hr>
        <div class="chart-js-container3">
            <canvas class="chart55" id="chart5"></canvas>
        </div>
    </div>
</div>

<script>
  
    const dates = <?php echo json_encode($dates); ?>;
    const counts = <?php echo json_encode($counts); ?>;
    
    
    console.log("Dates:", dates);
    console.log("Counts:", counts);

    const ctx = document.getElementById('chart5').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar', 
        data: {
            labels: dates,
            datasets: [{
                label: 'Number of Visits',
                data: counts,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Date'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Visits'
                    },
                    beginAtZero: true
                }
            }
        }
    });
</script>

<?php include  '../layout/end.php'; ?>
