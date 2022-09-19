<?php

if(isset($_POST["one-time-code"]) && !empty($_POST["one-time-code"])){
  echo $_POST["one-time-code"];
}
else{
  echo "something went wrong!";
}
