<?php

require_once __DIR__ . '/includes/config.php';

$title = "Privatisation Food Truck | Pays Bigouden";

$description = "Privatisez Kreizenn Blaz pour vos mariages, anniversaires, événements associatifs ou professionnels dans le Pays Bigouden et le Finistère Sud.";

include_once __DIR__ . '/includes/head.php';

include_once __DIR__ . '/includes/header.php';

$success = isset($_GET['success']);
$error = isset($_GET['error']);

?>

<section class="privatisation-section">

  <div class="container privatisation">

    <?php if ($success): ?>

      <div class="alert success">
        Votre message a bien été envoyé. Nous vous répondrons dans les meilleurs délais.
      </div>

    <?php endif; ?>


    <?php if ($error): ?>

      <div class="alert error">
        Une erreur est survenue lors de l'envoi du message. Veuillez réessayer.
      </div>

    <?php endif; ?>

    <div class="section-label">Privatisation</div>

    <div class="private-card">

      <h2>
        Vous souhaitez apporter une touche gourmande et conviviale à votre événement ?
      </h2>

      <p>Nous proposons des prestations sur mesure pour vos événements privés et
        professionnels : mariages, anniversaires, repas de famille, événements d'entreprise,
        inaugurations, marchés ou festivals.
      </p>

      <p>
        Notre cuisine est élaborée à partir de produits frais, locaux et de saison, avec une carte adaptée à votre événement et à vos envies.
      </p>

      <p>
        Nous assurons les prestations jusqu'à 60 personnes maximum afin de garantir la
        qualité de notre cuisine et de notre service.
      </p>

    </div>

  </div>

</section>

<section class="concept-cta">

  <div class="container ">

    <h3>
      N'hésitez pas à nous contacter pour échanger sur votre événement et obtenir un
      devis personnalisé.
    </h3>

    <div class="container private-form">

      <form action="traitement-contact.php" method="POST">

        <div class="form-grid">

          <label for="nom" class="sr-only">Nom</label>
          <input
            type="text"
            id="nom"
            name="nom"
            placeholder="Nom"
            required>

          <label for="prenom" class="sr-only">Prénom</label>
          <input
            type="text"
            id="prenom"
            name="prenom"
            placeholder="Prénom"
            required>

        </div>

        <div class="form-grid">

          <label for="email" class="sr-only">Adresse e-mail</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Adresse e-mail"
            required>

          <label for="telephone" class="sr-only">Téléphone</label>
          <input
            type="tel"
            id="telephone"
            name="telephone"
            placeholder="Téléphone"
            required>

        </div>

        <div class="form-grid">

          <label for="date_evenement" class="sr-only">Date de l'événement</label>
          <input
            type="date"
            id="date_evenement"
            name="date_evenement"
            required>

          <label for="nb_personnes" class="sr-only">Nombre de personnes</label>
          <input
            type="number"
            id="nb_personnes"
            name="nb_personnes"
            placeholder="Nombre de personnes"
            min="1"
            max="60"
            required>

        </div>

        <label for="lieu_evenement" class="sr-only">Lieu de l'événement</label>
        <input
          type="text"
          id="lieu_evenement"
          name="lieu_evenement"
          placeholder="Lieu de l'événement"
          required>

        <label for="message" class="sr-only">Message</label>
        <textarea
          id="message"
          name="message"
          placeholder="Décrivez votre projet (type d'événement, besoins particuliers...)"
          rows="6"
          required></textarea>

        <!-- Honeypot anti-spam -->
        <label for="website" style="display:none;">Website</label>
        <input
          type="text"
          id="website"
          name="website"
          style="display:none">

        <button type="submit">
          Envoyer la demande
        </button>

      </form>
    </div>

  </div>

  <p>
    Chaque demande étant unique, nous étudions votre projet en fonction de vos
    besoins et de nos disponibilités afin de vous proposer la solution la plus adaptée.
  </p>

</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>