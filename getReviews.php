<?php
    include_once 'configDB.php';
    $sql = "SELECT * FROM reviews ORDER BY user_id DESC LIMIT 4";
    $output = '';
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) == 0) {
        $output .= "<div class ='review-none'>Отзывов еще нет... Добавьте его - будьте первым!</div>";
    } elseif (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $output .= "<div class='reviews__item review'>
                                    <div class='review__text'>". $row['review'] ."</div>
                                    <div class='review__footer'>
                                        <div class='review__date'><time datetime=". $row['date'] .">". $row['date'] ."</time></div>
                                        <div class='review__name'>". $row['username'] ."</div>
                                    </div>
                                </div>";
        }
    }

    echo $output;

?>

