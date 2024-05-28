<?php
echo '<form action="search_results.php" method="GET" class="search-container">
        <input type="text" name="q" class="search-bar" placeholder="Enter your search">
        <button type="submit" class="search-button">Search</button>
    </form>';
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['search'])) {
            $searchTerm = $_POST['search'];
            // Perform your search logic here
            // For demonstration purposes, let's just display the search term
            echo "<p>Search results for: $searchTerm</p>";
        }
    }
    ?>

<?php
// Assuming you want to process the search term passed via GET method
if(isset($_GET['q'])) {
    $searchTerm = $_GET['q'];
    // Perform your search logic here
    // For demonstration purposes, let's just display the search term
    echo "<p>Search results for: $searchTerm</p>";
}
?>
