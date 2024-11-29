<?php
// Yorumları tutan dizi (gerçek bir veritabanı yerine burada kullanılacak)
$yorumlar = array();

// Yorum ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["yorum"])) {
    $yorum = $_POST["yorum"];
    // Yeni yorumu diziye ekliyoruz
    array_push($yorumlar, $yorum);
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yorum Yapma</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Genel stil ayarları */
        body {
            font-family: Arial, sans-serif;
        }

        /* Yorum alanı stil */
        #yorumAlani {
            margin-top: 20px;
            display: none;
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px;
        }

        /* Yorumlar bölümünün stili */
        #yorumlar {
            margin-top: 30px;
        }

        .yorum {
            border-bottom: 1px solid #ccc;
            padding: 10px;
        }

        /* Buton stili */
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Yorum Yap</h1>

    <!-- Yorum yapma butonu -->
    <button id="yorumButonu">Yorum Yap</button>

    <!-- Yorum yapma alanı -->
    <div id="yorumAlani">
        <form method="POST" action="">
            <textarea name="yorum" rows="4" cols="50" placeholder="Yorumunuzu buraya yazın..."></textarea><br>
            <button type="submit">Yorumu Gönder</button>
        </form>
    </div>

    <!-- Yorumları listeleme -->
    <div id="yorumlar">
        <h3>Yorumlar:</h3>
        <?php
        // PHP dizisinden yorumları görüntüle
        if (count($yorumlar) > 0) {
            foreach ($yorumlar as $yorum) {
                echo "<div class='yorum'><p>" . htmlspecialchars($yorum) . "</p></div>";
            }
        } else {
            echo "<p>Henüz yorum yapılmamış.</p>";
        }
        ?>
    </div>

    <script>
        // Yorum yapma butonuna tıklama olayı
        $(document).ready(function() {
            $("#yorumButonu").click(function() {
                // Yorum yapma alanını göstermek
                $("#yorumAlani").toggle();
            });
        });
    </script>

</body>
</html>

