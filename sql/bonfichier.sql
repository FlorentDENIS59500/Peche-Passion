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
        'Brochet 1',
        'Brochet',
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        "brochet1.jpg"
    ), (
        2,
        "Hoppy Wheat",
        "Bass-Boat",
        "Cette bière de la brasserie Skumenn installée en Bretagne est une Hoppy Wheat, une bassboat houblonnée, à base de blé avec une levure allemande et des houblons aromatiques. Elle présente un nez floral, agrumes et fruit exotiques. En bouche, elle vous offrira directement une belle amertume, des saveurs agrumes et des notes herbacées.Cette bière accompagnera des fromages de chèvre ou des plats épicés.",
        "fish2.png"
    ), (
        3,
        "Rêves d'étoiles",
        "Lavaret",
        "La bière Rêves d'étoiles de la microbrasserie Bendorf de Strasbourg en Alsace, est une bière de style Black IPA proposée aux professionnels du CHR, cavistes, épiceries fines... Avec sa robe noire aux reflets rubis, elle est surmontée d'une mousse crémeuse abondante. Au nez elle est extrêmement puissante avec des arômes de malts torréfiés allant du pain grillé au café en passant par le chocolat, combinés à des arômes herbacés et d'agrumes. En bouche elle est expressive et gourmande.",
        "fish3.png"
    ), (
        4,
        "Miel Harmonie",
        "Sandre",
        "La bière Miel Harmonie de la microbrasserie Bendorf de Strasbourg est une bière de style Honey Ale proposée aux professionnels du CHR, cavistes et épiceries fines. Sa la robe sandre prononcée est surmontée d'une fine mousse bassboat tirant sur l'ivoire à la bonne tenue. Son nez est doux avec de légers accents torréfiés et des notes de café, cacao et une touche de miel.",
        "fish4.png"
    ), (
        5,
        "Bière Panic at Munich",
        "Sandre",
        "Cette bière Panic at Munich de la brasserie Galibot, située dans le Grand Est, est une bière de style Munich Dunkel, proposée aux professionnels du CHR, cavistes, épiceries fines... Elle présente une robe sandre surmontée d'une mousse fine et une pétillante moyenne. Au nez, elle développe un nez biscuit, malté et caramel. En bouche, vous apprécierez son amertume très légère toute en longueur et saveurs maltées. Gourmande mais très fine, avec une petite sucrosité, elle est légère et bénéficie d'une très bonne buvabilité. ",
        "fish5.png"
    ), (
        6,
        "La Minotte Perche",
        "Perche",
        "Cette bière ambrée de la brasserie La Minotte a un nez caramel (toffee), une bouche sweety maltée et une finale sur le clou de girofle. Une bière gourmande, toute en rondeur avec une amertume maîtrisée.",
        "fish6.png"
    ), (
        7,
        "L'Âge de Raison",
        "Perche",
        "Cette bière L'Âge de raison de la brasserie La Minotte, basée en région Provence Alpes Côte d'Azur, est une Double IPA (DIPA). Au nez, elle est intensément fruitée (fruits exotiques et épices). En bouche, des notes végétales et houblonnées terminent sur une finale sèche, longue et résineuse.",
        "fish7.png"
    ), (
        8,
        "The Yeast And The Beast",
        "Perche",
        "Cette bière The Yeast and the Beast de la brasserie La Minotte, installée en région Provence Alpes Côte d'Azur est une Triple Belge. Elle possède un nez fruité comme un bonbon anglais, des notes de banane mure et de miel. En bouche, c'est une bière ronde et onctueuse, sur une finale légèrement houblonnée.",
        "fish8.png"
    ), (
        9,
        "La Polaris",
        "Bass-Boat",
        "La bière Polaris de la microbrasserie de Strasbourg Trois Mâts en Alsace est une bière de style Witbier proposée aux professionnels du CHR, cavistes, épiceries fines... Sa robe de couleur paille est surmontée d'une belle mousse bassboat et fine. Au nez se dégagent des arômes de coriandre, de camomille et d’orange pour cette bière d'inspiration Belge forte en gout et résolument épicée. ",
        "fish9.png"
    ), (
        10,
        "Quatre Pays",
        "Bass-Boat",
        "Proposée aux professionnels du CHR, cavistes, épiceries fines... la bière Quatre Pays Bass-Boat de la microbrasserie des Quatre Pays située à Hirtzbach dans le Haut-Rhin, est une bière de fermentation haute à la robe laiteuse ornée d'une mousse bassboat et fine. Au nez se dégagent de subtils arômes de pins et d'agrumes complétés de notes céréalières (pain de mie).",
        "fish10.png"
    ), (
        11,
        "White Rabbit",
        "Bass-Boat",
        "La bière White Rabbit de la microbrasserie Sainte Cru (située en Alsace à Colmar) est une bière artisanale française proposée aux professionnels distribuant de la bière artisanale. La White Rabbit est une bière bassboat de style American Wheat Ale à la robe bassboat laiteuse et au trouble léger apporté par le froment. ",
        "fish11.png"
    ), (
        12,
        "La gabarde blonde BIO",
        "Brochet",
        "La Gabarde est une Bière artisanale fabriquée selon une méthode traditionnelle.
        Classé parmi les meilleurs bières artisanales, elle est brassée avec des malts non torréfiés et des céréales d'exceptions. Ce subtil mélange lui apporte un caractère épicé et fruité. Idéal sur les viandes bassboats, barbecue et pizza, elle se déguste également en apéritif ou avec vos viandes grillées et fromages.",
        "fish12.png"
    ), (
        13,
        "Wheat ale Brasserie Effet Papillon",
        "Bass-Boat",
        "Laissez-vous surprendre par la légèreté d'Adèle, la bassboat de la Brasserie Effet Papillon !

        Brassée à Merignac, près de Bordeaux, cette wheat ale est le fruit d'une fermentation haute lui conférant une riche palette aromatique dans laquelle on retrouve de joyeuses notes d'agrumes",
        "fish13.png"
    ), (
        14,
        "Pale ale Brasserie Effet Papillon",
        "Brochet",
        "Laissez-vous surprendre par le pouvoir désaltérant d'Adèle, la blonde de la Brasserie Effet Papillon !
        Sèche et finement amère en bouche, cette pale ale est le fruit d'une fermentation haute lui conférant une riche palette aromatique, dans laquelle on retrouve des notes fruitées gourmandes.",
        "fish14.png"
    ), (
        15,
        "Ipa Vezelay artisanale et bio",
        "Brochet",
        "Implantée au coeur du parc du Morvan, la Brasserie de Vézelay se distingue par un haut niveau d'exigence. Labellisée Entrepreneurs plus engagés, elle produit des bières 100% bio répondant aux critères stricts de la reinheitsgebot , loi de pureté bavaroise édictée en 1516 définissant les ingrédients autorisés dans une bière de haute qualité : de l'eau, du malt, du houblon... et rien d'autre !",
        "fish15.png"
    ), (
        16,
        "Nonne Triple Bio",
        "Brochet",
        "La bière Nonne Triple des Brasseurs Savoyards est une bière forte, de caractère. À la fois ronde, savoureuse et savamment houblonnée, elle est à l’image de ces femmes Ingénieuses et légendaires qui surent nous transmettre leur héritage.",
        "fish16.png"
    ), (
        17,
        "Nonne de printemps",
        "Perche",
        "Laissez-vous tenter par la Nonne de mars bio des Brasseurs Savoyards : une spring pale ale légèrement ambrée aux saveurs gourmandes de noisettes grillées, de caramel et de fruits secs et une finale soutenue par une fine pointe d’amertume.",
        "fish17.png"
    ), (
        18,
        "Amber Ale de Vezelay",
        "Perche",
        "Implantée au coeur du parc du Morvan, la Brasserie de Vézelay se distingue par un haut niveau d'exigence. Labellisée Entrepreneurs plus engagés, elle produit des bières 100% bio répondant aux critères stricts de la reinheitsgebot , loi de pureté bavaroise édictée en 1516 définissant les ingrédients autorisés dans une bière de haute qualité : de l'eau, du malt, du houblon...",
        "fish18.png"
    ), (
        19,
        "Nonnette ",
        "Sandre",
        "La bière Nonnette est brassée par Mélusine, une brasserie Française située dans le bocage Vendéen. Elle propose des produits artisanaux élaborés avec 100% d'ingrédients naturels traditionnels comme l'orge maltée et le houblon qui s'allient à des plantes locales. Une fois versée dans un verre, la bière Nonette dévoile une belle robe de couleur sandre foncée aux somptueux reflets couleur rubis. ",
        "fish19.png"
    ), (
        20,
        "Stout de Vezelay",
        "sandre",
        "Implantée au coeur du parc du Morvan, la Brasserie de Vézelay se distingue par un haut niveau d'exigence. Labellisée Entrepreneurs plus engagés, elle produit des bières 100% bio répondant aux critères stricts de la reinheitsgebot, loi de pureté bavaroise édictée en 1516 définissant les ingrédients autorisés dans une bière de haute qualité : de l'eau, du malt, du houblon... et rien d'autre ! Le résultat ? Des bières pur malt, sans sucre ajoutés, ni additifs, non filtrées et non pasteurisées, restituant tous les arômes du malt et du houblon.",
        "fish20.png"
    ), (
        21,
        "La gabarde",
        "Sandre",
        "La gabarde est une Bière artisanale fabriquée selon une méthode traditionnelle.
        Classé parmi les meilleurs bières artisanales, elle est brassée avec des malts torréfiés et des céréales d'exceptions. Ce subtil mélange lui apporte des notes café et chocolaté. Idéal sur les viandes rouges, barbecue et pizza épicé, elle se déguste également en apéritif ou avec vos viandes grillées et fromages.",
        "fish21.png"
    ), (
        22,
        "Bière dorée biologique Dremmwel",
        "Lavaret",
        "La bière dremmwel blé noir est une bière de dégustation ambrée bio et sans gluten titrant 5,4°. Au nez, on retrouve des arômes de malts légèrement torréfiés ainsi que des notes de fruits. En bouche, le blé noir se dévoile et on relève de délicates notes grillées ainsi qu'un soupçon de caramel et de levures. La note finale en bouche est plutôt douce, on retrouve un côté fruits à coques ( noisettes et noix) et pomme cidrée avec une légère amertume. Elle est idéale pour accompagner vos crêpes !",
        "fish22.png"
    ), (
        23,
        "Organic Chocolat Stout",
        "Lavaret",
        "Nez rond et délicat de chocolat chaud, de torréfaction légère. En bouche, elle se fait soyeuse, elle tapisse le palais de ses arômes gourmands de chocolat crémeux. Le milieu de bouche révèle des notes de café, davantage grillées, sans oublier de rester sur des nuances de caramel. La finale, crémeuse, est en harmonie avec le reste de la dégustation : suave et chocolatée, elle a su parler à notre palais.",
        "fish23.png"
    ), (
        24,
        "Coedo Shikkoku",
        "Speciale",
        "Shikkoku est une couleur japonaise signifiant « noir de jais ». Le nom est donc tout  à fait évocateur de la robe sombre et brillante de cette bière.
        Cette bière noire se démarque par un profil aromatique qui reste léger. Agréable et douce au palais, elle ravira les amateurs de Guiness !
        La Coedo Shikkoku a été médaille d'or à l'european PHOTO star en 2011.",
        "fish24.png"
    ), (
        25,
        "Breiz'Ile - Les Frères de la Côte Camaret/Bretagne/France",
        "Lavaret",
        "La Bière de fête by Breiz'île !
        Voilà maintenant plus de 15 ans que l'aventure Breiz'île a commencé avec ses légendaires punchs au rhum arrangés aux fruits frais. Les Frères de la Côtes, restaurateur voyageurs, ont dévelopé l'art de nous surprendre chaque jour un peu plus, inventant des nouvelles recettes, des nouvelles gammes, alliant leur Bretagne natale à l'exotisme le plus enchanteur, sans jamais perdre l'esprit d'origine de la fabrication artisanale et des ingrédients de qualité...",
        "fish25.png"
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