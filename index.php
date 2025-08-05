
<?php
 require_once 'database/database.php';
 

?> 

?>



<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Préinscriptions - Cours de Vacances</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-5 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-700">welcome to smartinscrip</h1>
      <nav class="space-x-4">
        <a href="login.html" class="text-gray-600 hover:text-blue-600">Connexion</a>
        <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Préinscription</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-100 py-20 text-center">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-4xl font-extrabold text-blue-800 mb-4">Plateforme de Préinscription aux Cours de Vacances</h2>
      <p class="text-lg text-blue-700 mb-6">
        Bienvenue sur la plateforme officielle de gestion des préinscriptions aux modules de vacances de CENTRE DE FORMATION PROFESSIONELLE LA CANADIENNE.
        Cette application permet aux apprenants de réserver une place dans les modules  proposés pendant les vacances universitaires.
      </p>
      <a href="register.html" class="inline-block bg-blue-600 text-white px-6 py-3 rounded shadow hover:bg-blue-700 transition">Je me préinscris maintenant</a>
    </div>
  </section>

  <!-- Description du projet -->
  

  <!-- Footer -->
  <footer class="bg-blue-100 py-6 mt-12 text-center text-gray-600">
    &copy; 2025 cfpc – Projet BTS Génie Logiciel – Tous droits réservés.
  </footer>