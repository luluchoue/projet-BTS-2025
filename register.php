
<?php
require_once 'database/database.php';

// Initialisation des messages
$succes = "";
$erreurs = "";

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données
    $nom = (trim($_POST['nom']));
    $prenom =(trim($_POST['prenom']));
    $email = (trim($_POST['email']));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage sécurisé
    $module = (trim($_POST['module']));

    // Vérification simple (ex: pas de champ vide)
    if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($module)) {
        $erreurs = "Tous les champs sont obligatoires.";
    } else {
        try {
            // Insertion dans la base
            $sql = "INSERT INTO apprenants (nom, prenom, email, password, module)
                    VALUES (:nom, :prenom, :email, :password, :module)";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'password' => $password,
                'module' => $module
            ]);

            $succes = "Étudiant inscrit avec succès !";
        } catch (PDOException $e) {
            $erreurs = "Erreur lors de l'inscription : " . $e->getMessage();
        }
    }
}
?>





<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Préinscription Étudiant</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
    <h2 class="text-2xl font-bold text-center text-blue-700 mb-6">Formulaire de préinscription</h2>
    <form action="enregistrer-etudiant.php" method="post" class="space-y-4">
      <input type="text" name="nom_apprenant" placeholder="Nom" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
      <input type="text" name="prenom_apprenant" placeholder="Prénom" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
      <input type="email" name="email_apprenant" placeholder="Email" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
      <input type="text" name="password" placeholder="password" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
    
      <style>
       @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in-up {
      animation: fadeInUp 0.6s ease-out forwards;

    }

    </style>

      <select name="module_id" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="">-- Choisissez un module --</option>
        <option value="Mathématiques">maintenance</option>
        <option value="Informatique">Informatique</option>
        <option value="Physique">Physique</option>
      </select>

      <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded hover:bg-blue-700 transition duration-300">
        preinscrire
      </button>
    </form>
  </div>
</body>
</html>
