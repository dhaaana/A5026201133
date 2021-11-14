<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hasil Tugas 5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Internal CSS -->
    <style>
      body {
        background-color: #a6b1e1;
      }

      .card .card-header {
        text-align: center;
      }
      .card-body h1 {
          text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
    function isPalindrome($n)
        {
        for ($i = 0; $i < floor(strlen($n) / 2); $i++)
	        if ($n[$i] != $n[strlen($n) - 1 - $i])
	            return false;
        return true;
        }


        function convertNumIntoString($num)
        {

        // base case:
        if ($num == 0)
	        return "0";
        $Snum = "";
        while ($num > 0)
        {
	        $Snum .= ($num % 10 - '0');
	        $num =(int)($num / 10);
        }
        return $Snum;
        }

        function closestPlandrome()
        {
        $num = $_POST["bilangan"];
        $RPNum = $num - 1;
        while (!isPalindrome(convertNumIntoString(abs($RPNum))))
	        $RPNum--;
        $SPNum = $num + 1;
        while (!isPalindrome(convertNumIntoString($SPNum)))
	        $SPNum++;


        if (abs($num - $RPNum) > abs($num - $SPNum))
	        return $SPNum;
        else
	        return $RPNum;
        }
    ?>
    <div class="container">
      <div class="d-flex min-vh-100 justify-content-center align-items-center">
        <div class="card shadow" style="width: 400px">
          <div class="card-header"><h4>Palindrome Terdekat</h4></div>
          <div class="card-body">
           <h1><?php echo closestPlandrome() ?></h1>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
