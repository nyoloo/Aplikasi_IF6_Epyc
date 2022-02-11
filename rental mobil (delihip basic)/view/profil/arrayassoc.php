<!-- {
  "no_pelanggan": "01",
  "cart": [
    {
      "kode_kue": "0001",
      "harga": "10000",
      "nama_kue": "Bolue Meki",
      "jumlah": 1
    },
    {
      "kode_kue": "0004",
      "harga": "10000",
      "nama_kue": "Bolue Me",
      "jumlah": 3
    },
    {
      "kode_kue": "0003",
      "harga": "20000",
      "nama_kue": "Bolue Kntl",
      "jumlah": 2
    },
    {
      "kode_kue": "0002",
      "harga": "30000",
      "nama_kue": "Bolue Mek",
      "jumlah": 2
    }
  ]
} -->
<?php
if(isset($_POST["input"]))
  {
      $kodekue=$_POST["kodekue"];
      $namakue=$_POST["namakue"];
      $harga=$_POST["harga"];
    $cart = array();
    $cart['no_pelanggan'] = $_SESSION["no_pelanggan"];
    $cart['cart'] = array();
    array_push($cart['cart'],array(
      "kode_kue" => "$kodekue",
      "nama_kue" => "$namakue",
      "harga" => "$harga",
      "jumlah" => 1
    ));
    
  }


  $cart = array();
  $cart['no_pelanggan'] = "001";
  $cart['cart'] = array();
  array_push($cart['cart'],array(
    "kode_kue" => "001",
    "nama_kue" => "bolue meki",
    "harga" => "10000",
    "jumlah" => 1
  ));
  array_push($cart['cart'],array(
    "kode_kue" => "002",
    "nama_kue" => "bolue mek",
    "harga" => "30000",
    "jumlah" => 9
  ));
  $hasilcart=json_encode($cart);
    setcookie("cart",$hasilcart);
    echo $_COOKIE["cart"];
  ?>
<pre>
<?php
  print_r($_COOKIE)

  ?></pre>;   ?> 