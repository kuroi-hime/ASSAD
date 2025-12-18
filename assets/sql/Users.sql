-- Insertion des valeurs dans la table utilisateurs:
-- Admin
INSERT INTO utilisateurs (nom_user, email, role, motpasse_hash) VALUES
('Admin Principal', 'admin@zoo.com', 'admin', SHA2('admin123', 256));

-- Guides
INSERT INTO utilisateurs (nom_user, email, role, motpasse_hash) VALUES
('Asmae Lhamri', 'asmea.savane@zoo.com', 'guide', SHA2('guideAsmae123', 256)),
('Khalid Ben Zida', 'benZida.tropiques@zoo.com', 'guide', SHA2('guideKhalid123', 256)),
('Omar Nabil', 'o.nabil.nocturne@zoo.com', 'guide', SHA2('guideOmar123', 256));

-- Visiteurs
INSERT INTO utilisateurs (nom_user, email, role, motpasse_hash) VALUES
('Youssef El Amrani', 'youssef.elamrani@zoo.com', 'visiteur', SHA2('Y0uss3f!2025', 256)),
('Sara Benali', 'sara.benali@zoo.com', 'visiteur', SHA2('S@ra#Zoo2025', 256)),
('Hassan Idrissi', 'hassan.idrissi@zoo.com', 'visiteur', SHA2('Hass@n_1234', 256)),
('Meryem Fassi', 'meryem.fassi@zoo.com', 'visiteur', SHA2('M3ryem*Zoo', 256));