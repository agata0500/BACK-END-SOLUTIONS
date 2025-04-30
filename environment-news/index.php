<?php
include 'articles.php';
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
$searchTerm = '';
$searchResults = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
    $searchTerm = sanitize($_POST['search']);
    foreach ($articles as $index => $article) {
        if (stripos($article['title'], $searchTerm) !== false || stripos($article['content'], $searchTerm) !== false || stripos($article['date'], $searchTerm) !== false) {
            $searchResults[$index] = $article;
        }
    }
}
$articleId = isset($_GET['id']) ? (int)$_GET['id'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        if ($articleId !== null && isset($articles[$articleId])) {
            echo $articles[$articleId]['title'];
        } else {
            echo "Today's Environmental News";
        }
        ?>
    </title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .article { border-bottom: 1px solid #ccc; padding: 10px 0; }
        .article img { max-width: 200px; height: auto; }
        .search-form { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Today's Environmental News</h1>

    <!-- Search Form -->
    <form method="post" class="search-form">
        <input type="text" name="search" placeholder="Search articles..." value="<?php echo htmlspecialchars($searchTerm); ?>">
        <button type="submit">Search</button>
    </form>

    <?php
    // display search results if a search was performed
    if ($searchTerm !== '') {
        if (!empty($searchResults)) {
            foreach ($searchResults as $index => $article) {
                echo '<div class="article">';
                echo '<h2>' . $article['title'] . '</h2>';
                echo '<p><em>' . $article['date'] . '</em></p>';
                echo '<img src="img/' . $article['image'] . '" alt="' . $article['imageDescription'] . '">';
                echo '<p>' . substr($article['content'], 0, 50) . '...</p>';
                echo '<a href="index.php?id=' . $index . '">Read more</a>';
                echo '</div>';
            }
        } else {
            echo '<p>The search term "' . htmlspecialchars($searchTerm) . '" does not appear in our newspaper.</p>';
        }
    }
    // display a specific article if ID is provided
    elseif ($articleId !== null) {
        if (isset($articles[$articleId])) {
            $article = $articles[$articleId];
            echo '<div class="article">';
            echo '<h2>' . $article['title'] . '</h2>';
            echo '<p><em>' . $article['date'] . '</em></p>';
            echo '<img src="img/' . $article['image'] . '" alt="' . $article['imageDescription'] . '">';
            echo '<p>' . $article['content'] . '</p>';
            echo '</div>';
        } else {
            echo '<p>This article does not exist.</p>';
        }
    }
    // display all articles
    else {
        foreach ($articles as $index => $article) {
            echo '<div class="article">';
            echo '<h2>' . $article['title'] . '</h2>';
            echo '<p><em>' . $article['date'] . '</em></p>';
            echo '<img src="img/' . $article['image'] . '" alt="' . $article['imageDescription'] . '">';
            echo '<p>' . substr($article['content'], 0, 50) . '...</p>';
            echo '<a href="index.php?id=' . $index . '">Read more</a>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>
