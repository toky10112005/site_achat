CREATE DATABASE Coffre;
USE Coffre;

-- Table produits
CREATE TABLE produits (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100),
  description TEXT,
  prix DECIMAL(10,2),
  stock INT,
  image VARCHAR(255),
  categorie_id INT,
  FOREIGN KEY (categorie_id) REFERENCES categories(id)
);

CREATE TABLE categories (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
);


-- Table utilisateurs
CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  mot_de_passe VARCHAR(255),
  role ENUM('client','admin') DEFAULT 'client'
);

-- Table commandes
CREATE TABLE commandes (
  id INT PRIMARY KEY AUTO_INCREMENT,
  utilisateur_id INT,
  date DATETIME DEFAULT CURRENT_TIMESTAMP,
  statut ENUM('en_attente', 'envoyée', 'annulée') DEFAULT 'en_attente'
);

-- Table détails commandes
CREATE TABLE commande_details (
  id INT PRIMARY KEY AUTO_INCREMENT,
  commande_id INT,
  produit_id INT,
  quantite INT,
  prix DECIMAL(10,2)
);

INSERT INTO categories (nom) VALUES ('Gaming'),('kinds'),('Sport');

INSERT INTO produits(nom,description,prix,stock,image,categorie_id) VALUES
('Arcade Basketball Game',
'【Super Value】Besides the parts for the basketball stand. There are also 4 inflatable balls and 1 air pump included in the set. Material: plastic.
    【Size】Dimensions of basketball stand: 35" L x 18" W x 55" H
    【Adjustable Height】You can adjust the basketball stand height according to age. This basketball arcade game can be placed indoors and outdoors, basement, games room, garage, backyard.
    【Easy to Set Up】 All accessories (4 rubber basketballs, pump, high-quality net) are included. The indoor & outdoor basketball hoop set comes with instructions for quick assembly.
    【Ideal Gifts】This Arcade Basketball Game Set is a perfect Christmas birthdays gift for kids and toddlers. It can create an exciting and competitive atmosphere to offer a real arcade game experience.
',39.99,3,'../Assets/images/arcade.jpg',2),
('BENGOO G9000 Stereo Gaming Headset',
'【Multi-Platform Compatible】Support PlayStation 4, PlayStation 5, Xbox, Xbox Series X|S, Xbox One, PC, Nintendo 3DS, Laptop, PSP, Tablet, iPad, Computer, Mobile Phone. Please note you need an extra Microsoft Adapter (Not Included) when connect with an old version Xbox One controller.
    【7.1 Surround Sound】Clear sound operating strong brass, splendid ambient noise isolation and high precision 40mm magnetic neodymium driver, acoustic positioning precision enhance the sensitivity of the speaker unit, bringing you vivid sound field, sound clarity, shock feeling sound. Perfect for various games like Halo 5 Guardians, Metal Gear Solid, Call of Duty, Star Wars Battlefront, Overwatch, World of Warcraft Legion, etc.
    【Noise Isolating Microphone】Headset integrated onmi-directional microphone can transmits high quality communication with its premium noise-concellng feature, can pick up sounds with great sensitivity and remove the noise, which enables you clearly deliver or receive messages while you are in a game. Long flexible mic design very convenient to adjust angle of the microphone.
    【Great Humanized Design】Superior comfortable and good air permeability protein over-ear pads, muti-points headbeam, acord with human body engineering specification can reduce hearing impairment and heat sweat.Skin friendly leather material for a longer period of wearing. Glaring LED lights desigend on the earcups to highlight game atmosphere.
    【Effortlessly Volume Control】High tensile strength, anti-winding braided USB cable with rotary volume controller and key microphone mute effectively prevents the 49-inches long cable from twining and allows you to control the volume easily and mute the mic as effortless volume control one key mute.
',19.99,14,'../Assets/images/casque.jpg',1),
('5-Pack Women s Racerback Tank Top Dry-Fit Athletic Performance Yoga','Our Womens Dry Fit Athletic Tank Tops feature a superior design that wicks away moisture and dries quickly, keeping you comfortable and dry during any activity. Available in regular and plus sizing.
With our 5-pack of active racerback tank tops, you ll have a stylish and functional option for every day of the week, perfect for yoga, running, or hitting the gym.
Made with high-quality materials and a loose, flowy fit, our active tank tops are designed for maximum comfort and breathability. The racerback and sleeveless design allows for a full range of motion during any activity.
Choose from a variety of athletic and cute colors including pink, red, blue, and navy, to match any outfit and suit any occasion.
At Real Essentials, we are committed to providing affordable, high-quality clothing options for hard-working families. Our multi-pack of Womens Dry Fit Tank Tops not only saves you money, but it also gives you multiple options to choose from, ensuring you always have a comfortable and stylish top to wear during any activity',
37.97,10,'../Assets/images/debardeur.jpg',3),
('Xbox Wireless Gaming Controller',
'XBOX WIRELESS CONTROLLER: Experience the modernized design of the Xbox Wireless Controller, featuring sculpted surfaces and refined geometry for enhanced comfort during gameplay with battery life up to 40 hours*.
    STAY ON TARGET: New hybrid D-pad and textured grip on the triggers, bumpers, and back-case.
    SHARE BUTTON: Seamlessly capture and share content such as screenshots, recordings, and more with the new Share button.
    PLAY ANYWHERE: Includes Xbox Wireless and Bluetooth technology so you can easily pair and switch between devices including Xbox, Windows, Android, iOS, Fire TV Sticks, Smart TVs, and VR Headsets.
    COMPATIBILITY: Plug in any compatible headset with the 3.5mm audio headset jack. Connect using the USB-C port for direct plug and play to console or PC*.
    CUSTOM BUTTON MAPPING: Make the controller your own by customizing button mappings with the Xbox Accessories app*.
',62.14,30,'../Assets/images/manette_xbox.jpg',1),
('Little Tikes Fairy Cozy Coupe (Amazon Exclusive) Large',
'Made in the USA. The Little Tikes Company is located in the heartland of America.
    The cozy Coupe fairy has a fun design, A parent push handle and a removable floorboard. Parents and kids will both love the ride!
    Designed with a high Seat back and cup holders in the rear (cup not included). working horn. Moving, clicking ignition switch. Gas cap open and closes
    Cozy rolls on rugged, durable tires. Front wheels spin 360 degrees. Weight limit up to 50 lbs. Assembly required
    The Cozy Coupe Fairy has a fun design, a parent push handle and a removable floorboard. Parents and kids will both love the ride!
',64.99,27,'../Assets/images/mini_voiture.jpg',2),
('Rain Showers Splash Pond Toddler Water Table',
'SENSORY ACTIVITY: Let your little ones splash, pour, and explore with thrilling rain showers that spark imagination, fill with sand for even more playful possibilities
    RAIN SHOWER: Watch water pour down from the top creating realistic rainfall sights and sounds, teaches STEM principles, 13-piece toy set included for endless fun
    FUN FOR ALL KIDS: Large surface lets several kids play together, easy access, encouraging social and sharing skills, basin holds up to 5 gallons, dimensions 32" H x 24" W x 39" D
    EASY TO CLEAN & ASSEMBLE: Plug allows for easy drainage, use disinfectant wipes or household cleaners to clean for sanitary play environment
    DURABLE: Built to last, double-walled plastic construction, years of use with colors that won t chip, fade, crack, or peel
',79.99,20,'../Assets/images/rain.jpg',2),
('Up & Down Roller Coaster Kids Ride On Toy, Push Car, Indoor',
' SENSORY ACTIVITY: Let your little sones zoom down the 9-foot-long roller coaster track on the coaster car, climb steps, interactive motion
    SOCIAL & ACTIVE: Great outdoor toddler riding toys for backyard or indoor playrooms, ensuring kids stay active and entertained all season long, multiple kids can enjoy at a time
    SAFE PLAY: Easy entry steps for safe climbing, encourages gross motor skills and balance, assembled dimensions 12.75" H x 110" W x 27" D
    EASY TO CLEAN & ASSEMBLE: Use disinfectant wipes or household cleaners to clean for sanitary play environment, adult assembly required, includes assembly hardware, coaster track comes apart for easy storage
    DURABLE: Built to last, double-walled plastic construction, years of use with colors that won t chip, fade, crack, or peel
',139.43,20,'../Assets/images/rampe.jpg',2),
('Roblox Digital Gift Card - 1,000 Robux [Includes Exclusive Virtual Item] [Digital Code]',
'The easiest way to add Robux (Roblox’s digital currency) to your account. Use Robux to deck out your avatar and unlock additional perks in your favorite Roblox experiences.
    This is a digital gift card that can only be redeemed for Robux at Roblox.com/redeem. It cannot be redeemed in the Roblox mobile app or any video game console. Please allow up to 5 minutes for your balance to be updated after redeeming.
    Roblox Gift Cards can be redeemed worldwide, perfect for gifting to Roblox fans anywhere in the world.
    From now on, when you redeem a Roblox Gift Card, you get up to 25% more Robux. Perfect for gaming, creating, and exploring- more Robux means more possibilities!
    Every Roblox Gift Card grants a free virtual item upon redemption.
    Roblox is an immersive platform for connection and communication. Every day, millions of people come to Roblox to create, play, work, learn, and connect with each other in experiences built by our global community of creators.
    Note: This product grants a specified amount of Robux to the user’s Roblox account upon redemption. It cannot be used to purchase a Roblox Premium subscription.
    Please note larger orders, including those over $200 USD in value, may take additional time to process.
    For more information, please visit roblox.com/giftcardFAQs.

',10.00,34,'../Assets/images/roblox.jpg',1),
('TMKB Falcon M1 Wireless Gaming Mouse, 24000DPI Optical Sensor',
'24K DPI Precision Tracking: Adjustable 200-24,000 DPI (6 presets + 7 expandable via software). Dual visual feedback – wheel LED + RGB strip color-coding – instantly displays active DPI. Customizable 125-1000Hz Polling Rate for ultra-responsive tracking. Delivers 300IPS speed and 35G acceleration for pixel-perfect accuracy.
    Long 180Hr Smart Power + Rapid USB-C Recharge: 1,000mAh rechargeable battery powers 180hrs runtime (ECO Mode) or 48hrs (RGB Mode). Fully recharges via USB-C in 1 hour. Smart auto-sleep: 1min idle → light sleep (wake via movement) / 5min idle → deep sleep (wake via button). Sleep timers adjustable via driver for personalized power management.
    Tri-Mode Pro Connectivity - 2.4G/BT5.2/USB-C for PC/Mac/Laptop: Seamlessly switch between ultra-fast 2.4GHz (1000Hz), BT5.2 (dual-device pairing), and USB-C wired modes (1000Hz). Store 4 device profiles and toggle between them with the dedicated bottom button.
    90g Honeycomb Ergo Design: Matte Grip + Sweat-Resistant Structure. lightweight honeycomb shell (90 ±2g - without receiver) with matte texture enhances grip control during intense gaming. Medium-sized contour (4.93x2.48x1.61 in) optimized for comfortable grip by most hand sizes. Features 50M-click micro switches for crisp feedback and PTFE skates for near-frictionless glide.
    Fully Programmable Ecosystem(Only Supports Windows Systems): 6 customizable buttons support macro recording, key remapping, shortcut and rapid fire via driver. Fine-tune DPI presets, Polling Rate (125-1000Hz), sleep timers, and 13 RGB effects (Breath/Static/Flow/Starlight) across 16.8 million colors.
',28.80,40,'../Assets/images/souris.jpg',1),
('5 Pack Men’s Active Quick Dry Crew Neck T Shirts',
'ATHLETIC CREWNECK SHIRTS: Elevate your workout gear with our pack of 5 premium men s athletic crewneck shirts. These shirts provide the perfect blend of comfort and performance, whether you re pumping iron, hitting the track, or just running errands.
    ACTIVE STYLE: Look and feel great in the gym with our set of 5 premium athletic crewneck t-shirts in solid colors. Perfect for layering or wearing solo, these shirts will give you the confidence you need to crush your workouts and stand out in the gym.
    GAME CHANGER: Say goodbye to sweaty, uncomfortable shirts with our quick-drying fabric that wicks away moisture and keeps you cool and dry. The breathable material easily dissipates heat and feels ultra-soft on the skin.
    MOVE WITH EASE: Enjoy a non-restrictive cut and 4-way stretch construction that allows for optimal range of motion, so you can tackle any activity with ease. Our shirts also feature a tag-free neckline for distraction-free training.
    MEN S GYM STAPLES: Add some flair to your gym wardrobe with our stylish and vibrant athletic crewneck shirts. Designed with your comfort and performance in mind, these shirts are a true classic that will never go out of style',
    42.95,60,'../Assets/images/t-shirt.jpg',3);
