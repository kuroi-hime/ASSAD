-- Insertion des valeurs dans la table étapes des réservations:

-- Visite 1 : (capacite_max = 20)
INSERT INTO reservations (visite_id, user_id, nbpersonnes, date_reservation) VALUES
(1, 5, 4, '2025-06-01 10:15:00'),
(1, 6, 6, '2025-06-02 09:30:00'),
(1, 7, 5, '2025-06-03 14:20:00'),
(1, 8, 5, '2025-06-04 11:05:00');

-- Visite 2 : (capacite_max = 15)
INSERT INTO reservations (visite_id, user_id, nbpersonnes, date_reservation) VALUES
(2, 5, 3, '2025-06-05 09:00:00'),
(2, 6, 4, '2025-06-05 09:05:00'),
(2, 7, 1, '2025-06-06 10:30:00'),
(2, 8, 3, '2025-06-06 11:00:00');

-- Visite 3 : (capacite_max = 25)
INSERT INTO reservations (visite_id, user_id, nbpersonnes, date_reservation) VALUES
(3, 5, 5, '2025-06-07 08:45:00'),
(3, 6, 4, '2025-06-07 09:10:00'),
(3, 7, 6, '2025-06-08 10:00:00'),
(3, 8, 6, '2025-06-08 10:15:00');
