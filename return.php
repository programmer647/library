<!DOCTYPE html>
<html>

<head>

</head>

<body>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <?php
    include_once("connection.php");
    $stmt=$conn-> prepare("SELECT * FROM Tblloans");
    $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      echo('<option value='.$row["LoanID"].'>'.$row["ISBN"].','.$row["UserID"]);
    }


?>
  </div>
</div>
</body>

<script>
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

</script>

</html>