<?php include "includes/header.php"; ?>

<div class="container mt-4">

    <!-- Form Creation -->
    <h2>Form: Collect Name</h2>
    <form method="post" class="mb-4">
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname" id="firstname" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname" id="lastname" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    // Display user input
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first = htmlspecialchars($_POST['firstname']);
        $last = htmlspecialchars($_POST['lastname']);
        echo "<h3>Hello $first $last, You are welcome to my site.</h3>";
    }
    ?>

    <!-- HTML Table -->
    <h2 class="mt-5">Sample Table</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Husain</td>
                <td>5 out of 5</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jamim</td>
                <td>4.5 out of 5</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tashinur</td>
                <td>3 out of 5</td>
            </tr>
        </tbody>
    </table>

    <!-- String Variables -->
    <h2 class="mt-5">String Variables</h2>
    <?php
    $str1 = "Hello";
    $str2 = "World";
    $combined = $str1 . " " . $str2;
    echo "Combined String: $combined <br>";
    echo "Length of string: " . strlen($combined);
    ?>

    <!-- Number Addition -->
    <h2 class="mt-5">Number Addition</h2>
    <?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "Sum of $num1, $num2, $num3 is: $sum";
    ?>

    <!-- Browser Detection -->
    <h2 class="mt-5">Browser Detection</h2>
    <?php
    echo "You are using: " . $_SERVER['HTTP_USER_AGENT'];
    ?>

</div>

<?php include "includes/footer.php"; ?>