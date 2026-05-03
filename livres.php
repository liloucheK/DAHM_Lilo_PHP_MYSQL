<!-- Commande pour afficher tous les livres de la db, filter ceux publié après 2000 et trier dans l'ordre alphabétique les titres -->


SELECT * FROM `livres` GROUP BY annee_publication HAVING annee_publication > 2000 ORDER BY titre ASC;