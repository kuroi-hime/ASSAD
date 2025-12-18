-- Insertion des valeurs dans la table étapes des visites:

-- Visite 1 :
INSERT INTO etapes (titre_etape, description_etape, ordre_etape, visite_id) VALUES
('Accueil et présentation du safari',
 'Présentation du programme de la visite, rappel des règles de sécurité et introduction à la savane africaine.',
 1, 1),
('Zone lions et grands prédateurs',
 'Observation des lions et autres carnivores africains, focus sur la chasse et l’organisation sociale.',
 2, 1),
('Zone zèbres et antilopes',
 'Découverte des grands herbivores de la savane et de leurs stratégies de survie face aux prédateurs.',
 3, 1),
('Plateforme panoramique au coucher du soleil',
 'Point de vue sur la savane reconstituée, temps pour les photos et questions/réponses avec le guide.',
 4, 1);

-- Visite 2 :
INSERT INTO etapes (titre_etape, description_etape, ordre_etape, visite_id) VALUES
('Introduction aux félins africains',
 'Présentation des différentes espèces de félins présentes au zoo et de leurs caractéristiques communes.',
 1, 2),
('Enclos des lions',
 'Observation détaillée du comportement des lions, structure du groupe et rôle de chaque individu.',
 2, 2),
('Zone guépards',
 'Focus sur la vitesse, l’adaptation morphologique et les techniques de chasse du guépard.',
 3, 2),
('Zone léopards',
 'Découverte du léopard, de son camouflage et de ses habitudes de chasse nocturne.',
 4, 2);

-- Visite 3 :
INSERT INTO etapes (titre_etape, description_etape, ordre_etape, visite_id) VALUES
('Accueil à la ferme pédagogique',
 'Présentation de la ferme, des règles de sécurité et des espèces domestiques présentes.',
 1, 3),
('Zone chèvres et moutons',
 'Interaction avec les chèvres et moutons, explication sur leur rôle dans l’agriculture.',
 2, 3),
('Enclos des poneys et ânes',
 'Découverte des équidés de la ferme et possibilité de les approcher sous la supervision du guide.',
 3, 3),
('Atelier nourrissage',
 'Participation encadrée au nourrissage de certains animaux, avec consignes pédagogiques adaptées aux familles.',
 4, 3);

-- Visite 4 :
INSERT INTO etapes (titre_etape, description_etape, ordre_etape, visite_id) VALUES
('Introduction à la vie nocturne',
 'Explications sur les adaptations des animaux à la nuit et rappel des consignes pour la visite nocturne.',
 1, 4),
('Zone lions de nuit',
 'Observation silencieuse des lions au crépuscule, mise en avant de leurs comportements nocturnes.',
 2, 4),
('Zone hyènes et autres charognards',
 'Découverte du rôle écologique des charognards dans l’équilibre de la savane.',
 3, 4),
('Point d’observation final',
 'Dernier arrêt pour répondre aux questions et récapituler les notions vues pendant la visite.',
 4, 4);

-- Visite 5 :
INSERT INTO etapes (titre_etape, description_etape, ordre_etape, visite_id) VALUES
('Accueil bilingue et présentation du parcours',
 'Présentation en français et en anglais du déroulé de la visite et des principales zones visitées.',
 1, 5),
('Zone savane africaine',
 'Découverte des principaux mammifères de la savane avec commentaires bilingues.',
 2, 5),
('Transition vers la forêt tropicale',
 'Explications sur les différences de climat et de biodiversité entre savane et forêt tropicale.',
 3, 5),
('Zone forêt tropicale',
 'Observation des primates et oiseaux tropicaux, mise en avant de la diversité des milieux humides.',
 4, 5);

-- Visite 6 :
INSERT INTO etapes (titre_etape, description_etape, ordre_etape, visite_id) VALUES
('Introduction aux reptiles',
 'Présentation des principales familles de reptiles et des idées reçues les concernant.',
 1, 6),
('Maison des serpents',
 'Visite des terrariums de serpents, avec explications sur la sécurité et les modes de chasse.',
 2, 6),
('Zone lézards et caméléons',
 'Découverte des lézards, caméléons et de leurs capacités de camouflage et de régulation thermique.',
 3, 6),
('Espace pédagogique',
 'Séance de questions-réponses et rappel des enjeux de conservation des reptiles.',
 4, 6);