<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/styles.css">
</head>
<body>
  <div id=mother>
    <div id=topBar>
      <h1>Welcome to this site</h1>
    </div>
    <div id=navBar>
      <ol>
        <li>
          Bobs
        </li>
        <li>
          Bob
        </li>
        <li>
          Bob
        </li>
        <li>
          Bob
        </li>
      </ol>
    </div>
    <div id=content>
      <?php
        $name = "bob";
        for($i = 10; $i--; $i > 0)
        {
            echo "<p>Gobbledigook er skemmtilegt ruglumbull</p>";
        }
      ?>
    </div>
  </div>
  </body>
  </html>
