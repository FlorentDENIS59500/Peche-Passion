CREATE DATABASE
    IF NOT EXISTS `photos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

USE `photos`;

CREATE TABLE
    IF NOT EXISTS `photo` (
        `ID_PHOTO` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `NOM_PHOTO` varchar(60) NOT NULL DEFAULT '',
        `TYPE_PHOTO` varchar(15) NOT NULL DEFAULT '',
        `DESC_PHOTO` varchar(900) DEFAULT NULL,
        `PICT_PHOTO` varchar(30) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO
    `photo` (
        `ID_PHOTO`,
        `NOM_PHOTO`,
        `TYPE_PHOTO`,
        `DESC_PHOTO`,
        `PICT_PHOTO`
    )
VALUES (
         1,
        'Bass-boat 1',
        'Bass-Boat',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'bass-boat1.jpg'
    ), (
        2,
        'Bass-Boat 2',
        'Bass-Boat',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'bass-boat2.jpg'
    ), (
        3,
        'Brochet 1',
        'Brochet',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        "brochet1.jpg"
    ), (
        4,
        'Brochet 2',
        'Brochet',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'brochet2.jpg'
    ), (
         5,
        'Perche 1',
        'Perche',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'perche1.jpg'
    ), (
        6,
        'Perche 2',
        'Perche',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'perche2.jpg'
    ), (
        7,
        'Sandre 1',
        'Sandre',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'sandre1.jpg'
    ), (
        8,
        'Sandre 2',
        'Sandre',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'sandre2.jpg'
    ), (
        9,
        'Lavaret 1',
        'Lavaret',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'lavaret1.jpg'
    ), (
        10,
        'Lavaret 2',
        'Lavaret',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'lavaret2.jpg'
    );

--

-- Structure de la table `admin`

--

CREATE TABLE
    if not EXISTS `admin` (
        `id` int(11) NOT NULL,
        `LOGIN_ADMIN` varchar(255) NOT NULL,
        `PASS_ADMIN` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Déchargement des données de la table `admin`

--

INSERT INTO
    `admin` (
        `id`,
        `LOGIN_ADMIN`,
        `PASS_ADMIN`
    )
VALUES (1, 'admin', 'admin');

-- -------------------------------------------------------- TABLE RESERVATION

CREATE TABLE
    IF NOT EXISTS `reservation` (
        `ID_RESERVATION` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `NOM` varchar(25) NOT NULL DEFAULT '',
        `PRENOM` varchar(15) NOT NULL DEFAULT '',
        `TELEPHONE` varchar(10) DEFAULT NULL,
        `EMAIL` varchar(30) DEFAULT NULL,
        `DATES` varchar(30) DEFAULT NULL,
        `NOMBRE_PERS` varchar(10) DEFAULT NULL,
        `MESSAGES` varchar(300) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;