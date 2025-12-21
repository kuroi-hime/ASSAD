-- Insertion des valeurs dans la table utilisateurs:
-- Admin
INSERT INTO utilisateurs (nom_user, email, role, motpasse_hash) VALUES
('Admin Principal', 'admin@zoo.com', 'admin', md5('admin123'));

-- Guides
INSERT INTO utilisateurs (nom_user, email, role, motpasse_hash) VALUES
('Asmae Lhamri', 'asmea.savane@zoo.com', 'Guide', md5('guideAsmae123')),
('Khalid Ben Zida', 'benZida.tropiques@zoo.com', 'Guide', md5('guideKhalid123')),
('Omar Nabil', 'o.nabil.nocturne@zoo.com', 'Guide', md5('guideOmar123'));

-- Visiteurs
INSERT INTO utilisateurs (nom_user, email, role, motpasse_hash) VALUES
('Youssef El Amrani', 'youssef.elamrani@zoo.com', 'Visiteur', md5('Y0uss3f!2025')),
('Sara Benali', 'sara.benali@zoo.com', 'Visiteur', md5('S@ra#Zoo2025')),
('Hassan Idrissi', 'hassan.idrissi@zoo.com', 'Visiteur', md5('Hass@n_1234')),
('Meryem Fassi', 'meryem.fassi@zoo.com', 'Visiteur', md5('M3ryem*Zoo'));