SELECT salles.nom, etage.nom, MAX(capacite) FROM salles INNER JOIN etage ON id_etages=etage.id;
