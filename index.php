<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
  import {getAuth, createUserwithEmailAndPassword  } from
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCGHdK_OiH3qd9AehsAX2pBw0qBrV73SEE",
    authDomain: "aula-firebase-7a1ad.firebaseapp.com",
    projectId: "aula-firebase-7a1ad",
    storageBucket: "aula-firebase-7a1ad.appspot.com",
    messagingSenderId: "174740336936",
    appId: "1:174740336936:web:9d85f3692593478264e01d",
    measurementId: "G-7GV2B3VBM6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const fbAuth
  console.log(app);
</script>
</head>
<body>
    <h1>todo list</h1>
    <?php
       include_once 'src/main.php';
       ?>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="password"><br>
    <button id="BTNlogin">Login</button>
    <button id="BTNregistar">Registra</button>
</body>
</html>