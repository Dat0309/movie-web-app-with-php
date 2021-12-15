<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title ?> - <?php echo $sitename ?> | <?php echo $tagline?>
    </title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <h1> <?php echo $sitename ?></h1>
    <p>
        <small> <?php echo $tagline ?></small>
    </p>
    <form action="search.php" method="get">
        <input type="text" name="search" placeholder="Type Title Here" required>
        <select name="channel" required>
            <option value="movie" selected="selected">Movie
            </option>
            <option value="tv">TV Show
            </option>
        </select>
        <button type="submit">CARI
        </button>
    </form>
    <ul>
        <li>
            <a href="index.php">Home
            </a>
        </li>
        <li>
            <a href="popular.php">Popular Movies
            </a>
        </li>
        <li>
            <a href="now_playing.php">Now Playing Movies
            </a>
        </li>
        <li>
            <a href="upcoming.php">Upcoming Movies
            </a>
        </li>
        <li>
            <a href="tv_series.php">TV SERIES
            </a>
        </li>
    </ul>