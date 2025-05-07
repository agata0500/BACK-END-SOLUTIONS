<?php
// Function to list PHP files from a folder
function showList($folder) {
    $path = __DIR__ . "/$folder";
    if (!is_dir($path)) return;

    $files = array_diff(scandir($path), ['.', '..']);
    echo "<h2>Index of " . ucfirst($folder) . "</h2><ul>";
    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            echo "<li><a href=\"$folder/$file\">$file</a></li>";
        }
    }
    echo "</ul>";
}

// Function to search files by filename in folders
function searchFiles($query) {
    $folders = ['examples', 'assignments'];
    $results = [];

    foreach ($folders as $folder) {
        foreach (glob("$folder/*.php") as $file) {
            if (stripos($file, $query) !== false) {
                $results[] = $file;
            }
        }
    }

    echo "<h2>Search Result for \"" . htmlspecialchars($query) . "\"</h2>";
    if ($results) {
        echo "<ul>";
        foreach ($results as $result) {
            echo "<li><a href=\"$result\">" . basename($result) . "</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Sorry, no search results found for \"" . htmlspecialchars($query) . "\"</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index Page</title>
</head>
<body>

<h1>Index Page</h1>

<ul>
    <li><a href="index.php?link=course">Course</a></li>
    <li><a href="index.php?link=examples">Examples</a></li>
    <li><a href="index.php?link=assignments">Assignments</a></li>
    <li><a href="index.php?link=solutions">Solutions</a></li>
</ul>

<form method="get" action="index.php">
    <label for="search-query">Search for:</label>
    <input type="text" name="search-query" id="search-query" placeholder="Enter a search term">
    <button type="submit">Submit</button>
</form>

<hr>

<?php
// Logic for showing content
if (isset($_GET['search-query']) && $_GET['search-query'] !== '') {
    searchFiles($_GET['search-query']);
} elseif (isset($_GET['link'])) {
    switch ($_GET['link']) {
        case 'course':
            echo '<h2>Course</h2>';
            echo '<iframe src="course.pdf" width="1000" height="750"></iframe>';
            break;
        case 'examples':
        case 'assignments':
        case 'solutions':
            showList($_GET['link']);
            break;
        default:
            echo '<p>Invalid link</p>';
    }
} else {
    echo '<p>Use the links above or search for a file.</p>';
}
?>

</body>
</html>
