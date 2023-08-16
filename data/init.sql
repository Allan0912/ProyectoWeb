-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2023 a las 22:38:20
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE `dispositivo` (
  `N_serial` int(30) NOT NULL,
  `Tipo_maquina` varchar(100) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Descripcion` varchar(600) NOT NULL,
  `usuario_eliminacion` varchar(45) DEFAULT NULL,
  `fecha_eliminacion` datetime DEFAULT NULL,
  `usuario_actualizacio` varchar(45) DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL,
  `usuario_insercion` varchar(45) NOT NULL,
  `fecha_insercion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dispositivo`
--

INSERT INTO `dispositivo` (`N_serial`, `Tipo_maquina`, `Marca`, `Descripcion`, `usuario_eliminacion`, `fecha_eliminacion`, `usuario_actualizacio`, `fecha_actualizacion`, `usuario_insercion`, `fecha_insercion`) VALUES
(12345, 'soldar', 'chindawua', 'mantenimiento', NULL, NULL, NULL, NULL, 'root@localhost', '2023-08-11 14:19:26');

--
-- Disparadores `dispositivo`
--
DELIMITER $$
CREATE TRIGGER `before_insert_dispositivo` BEFORE INSERT ON `dispositivo` FOR EACH ROW BEGIN
  SET NEW.usuario_insercion = CURRENT_USER;
  SET NEW.fecha_insercion = CURRENT_TIMESTAMP ;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_dispositivo` BEFORE UPDATE ON `dispositivo` FOR EACH ROW BEGIN
  SET NEW.usuario_insercion = CURRENT_USER;
  SET NEW.fecha_insercion = CURRENT_TIMESTAMP ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_servicio`
--

CREATE TABLE `orden_servicio` (
  `Id_ORDEN` int(11) NOT NULL,
  `Dispositivo_Serial` int(11) NOT NULL,
  `Estado_Inicial` varchar(300) NOT NULL,
  `Estado_Final` varchar(300) NOT NULL,
  `fk_Usuario_Documento` int(11) DEFAULT NULL,
  `fk_Usuario_Documento_cliente` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `usuario_eliminacion` varchar(45) DEFAULT NULL,
  `fecha_eliminacion` datetime DEFAULT NULL,
  `usuario_actualizacion` varchar(45) DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL,
  `usuario_insercion` varchar(45) NOT NULL,
  `fecha_insercion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `orden_servicio`
--

INSERT INTO `orden_servicio` (`Id_ORDEN`, `Dispositivo_Serial`, `Estado_Inicial`, `Estado_Final`, `fk_Usuario_Documento`, `fk_Usuario_Documento_cliente`, `Nombre`, `usuario_eliminacion`, `fecha_eliminacion`, `usuario_actualizacion`, `fecha_actualizacion`, `usuario_insercion`, `fecha_insercion`) VALUES
(11, 12345, 'se ingreso para hacerle mantenimiento', 'hola hola lala\r\n', NULL, 1109411200, 'Juan David', NULL, NULL, NULL, '2023-08-25 13:35:00', '', '2023-08-11 13:35:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Url` varchar(300) DEFAULT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Titulo`, `Descripcion`, `Url`, `img`) VALUES
(4, 'careta para soldar ', 'esta careta esta diseñada para la proteccion de nuestro rostro a la hora de soldar', NULL, 0xffd8ffe000104a46494600010100000100010000ffdb00840009060710121210101213111510100f0f150f10101010151015121511161715151515181d2820181a251d161521312125292b2e2e2e171f3638332c37282d2e2b010a0a0a0e0d0e171010172f221f1e2d2e2b2b2f2d2f2b2d2d2d2d2e2d2e372d352b2d2b2b2b372d2d2d302d2b2d2d2d2e2d2b2d2f2d2b2d2d352b37312b2b2d2bffc000110800e100e103012200021101031101ffc4001c0001000105010100000000000000000000000302040506070108ffc4004810000201020205090405080807000000000102000311042105123141710607132251618191a13262b1d1427292a2c11423525382b2e1f0154363647483a3b324253373c2c3f1ffc4001a010101010101010100000000000000000000010302040506ffc400281101010002010205030501000000000000000102110312210431414271052291141561a1f013ffda000c03010002110311003f00ee3111011110111101111011110111101113c2607b1216c5531b5d071759e2e3291d9529f83afce04f128e916d7b8b76dc5a78b5d0ec653c184092222022220222202222022220222202222022220222202222022475eb2a297760aaa2e598d809a1f28f9c002e9861fe6b0fdd53f13e50372d2da56961d0bd46032eaadc6b31ec5139f693e72ebdc8a5411476bb966f801f19a5690d2b52a316766663b4b124cc6d4c419748d9719cbbc7bed661dc95020fba04c4d6e51556f6839e3509f8898a6ab283523432674d7bade93d5d343de1e03e7315af3d0f1a19ca7a647e9781065671341fdba748f7945bf9daf308a648a44686768228ce856af44eee8abd403caf32785e54e97c3ecac98841f46b20d6f3166fbc66a8b69734b10c3633789b8f581d234373a78772131549f0efbd85de978d86b0f23c66f784c553aa82a5375746f65d18329e044e04eeae2ce14f7ec32bd118fc4e05fa5c3543aa4f5e93674dc7632efe22c442be808984e4a7292963a97489d5a89615a9137646fc54e763bf882266e40888808888088880888808888088880987e5372930d80a5d2d76b5ee29d319d4761b947c4ec1331383f3a1a6e956c7562d6347068b44657d6ab725f8d89b781960b2e5473895b14d92da983d4427aa3c06d3df356aba62b1ec1c04cad0a25c06a786abaa45c134d0023b733153035ff50ffe9fce75a73b605b48d5edf413cfe90a9da3ca64eae12aefa2fe4a7f19675a811b6938ff002cfe10bb44ba49b780785c495748aef047a8968e29efcb886128d443b1bd44832b4f10adb1870dfe52653304d43bc78895a3d55d87c2f71e46067d24ca263b038d623ac878ae7f776f95e64e85456f64836da378e23740a96557955a52d08a83c956acb52603c2b39a034c360f109884beafb35907d3a64f5871de3bc4eed87acaeaae84147556461b0a91704784f9ce9bdf29d5f9a7d2a6a619f0cc7ad857b2f6f44f729e4438e0048ade62224088880888808888088880888818ae55697184c2623126d7a54cea03bea1c9078b113e67e8cd57c3d363735ab1a9549da45f327ef4eadcfa696eae1b04a73a8c6ad51dc3ab4c1e24b1fd99cfb92b861531a4fd1a28a9e2723e81a7512ba8e0706a29a02a2faa2f9774f6ae8ba4db56dc099702b2f68f39462f12111df23aaa4dafb4ee123062713c9fa7b9987100cc163b4291b1c78adbf19906e51d4de89e0584c7e2b4d5f6a7937f08dd7731ac33e886cee54f9fca59e2b435c7b287ca659b4927637a7ce5071c8779f1064eaabaad71b93afb85b83c8317a31e88058dc31b017b9bed9b84d7395152ef4d06e527c58d87c225daca8347656e132030eaf72d90417671ed01d8b6209276017f21722c291b13dd61e92feb359117b6eedc49217c80b8fae66dc5875e5a33cba66d52a9feaeaab7b95c0a6fe0e094f3329ab50ad85456a64ecd71d53f55b611c2428a49b00491b6c2f244aae9700900fb4a7d93f594e4de227a32f0f8dbf6d65396fac7a4ca0b49bf26ba97349d172bd5a20aae795ca302873b64bab203409f61e9b7bac452a9e4c754f831330cb873c7d1a4ce54d45e6e5cd9638d3c7a2dfab88a752991bb580e914fdc61fb534aa4ac0956565616eab020f919b0f251b5719836fef5407da70a7e331aeddee2224522220222202222022220222637949a47f26c2e2711be951a8cbf5b57aa3ced0381f2e34afe53a4f1356f7a7459913b35288d5f560c7c65d7371853a8f588cea3b35fbafaa3ff0029a7547228d5639b542141de49ccceadc91c1f45411778551e433f5bcdf878faf298b9bdd7e44a09e1b25f389615d36cf77e877e5939ff009acb1da9bc5f6ded357d24806772366c3dd9ed9b1e2b0ea768f533018ed1e84e4587031fb672df2b2ba98561714e54801af95ce43b78484620f74c8d4d123f48f8e728fe873fa63ecff19c5fa6f3cf6ff716cb05d3077a0f0330f89add2e235ad965976051f397f8bc03531ac4a917032bdff9ca62b471cea3f603eb9fe13c7c9c5971e5aca6aa48b8a6d993de7e32fb18d6b1feca8f0ce925a63289ca5ce9237a5ac3f5687ec90a7f7677c1756fc38e49bd7ca0c4695640d874f649bbbec6248cc1233225d601dba3b33b15bdd558df57b6c4dc8bf6036c84c0e372aadd8c1181ed0c80fc49994c1d71d18eeca65bbbdbbd76674e2a87468ad4eabd45a9ac4ebdd18074655259b2165642bab621efb458fb8c4ab56961b5a9d3051ac8692b534666a6037511053d6c9b7e40dad95e63b078871acaa7270a0800126cc081e606c97389c4b05e8b598dae1fac4a8eda69b86fd6236ecd97d6de74cc6677cd9dddbd312285baaa9b840417dc4937217ddf8e672bd866f410b62709fe3309fefa4c260d667b418ff88c2ff8bc2ffbe93cd95b6eeb593534ef111139522220222202222022220273ee7b348747801481cf115d14fd55bb9f555f39d06718e7d717af88c1e186c5a6ce477bb85f82cb073ac3d0d7ab84a3ef748e3b875be0beb3b160a96aa28ec517e273339a72330dd2e32abfd1a4150766673f453e73a9289eff00058f7b53d5e549615a5e5532c310d3eaf1c77163896c8cc45633258a7c8cc43b4fa1c78d6914169e6b46acf089b2562394988ea85ee27cfaa3e2661b0fd5a2c7f4cdbd6df393f28eb5d88ef03ec8cfd4c8717d54a49dd73e5fc4cfc8f8ecfaf9f3bfcebf0c6bc432ff000f67a4c87e8937ed28e2de4083f6c4c6a192e1f13a8c1ad719865bdb594ed17dddc77100ee9e7e3cba7295329b9a5954c17d0240a897d56392ba6db71dbe76ec97782d1f501b9365b02d7b027b028db7efd93295292b286167a64f5588cafd847d161bc7c4589ad1453008003b0bd3161651fac61bfdd076917390b36d970e33eedf66733b7b6bbbc0a2902065508eb36f4047ef907f641fd22356d691b9ec0320370122ad5758d85ed7372492589da493b78c9f0e261965d55a49a65706bb267f402ffc56107f7bc37a5559ab53d22a8c01f399ad09a7f0d4ead1c43b9e8a8d6a6d508562c00719ea81739db64e2abe8289adf277975a3b1d50d1c3562f54216d46a3590ea820120ba807689b248a444404444044440444404f9d797ba4c6274956acb9a53a4a29f7aaaf54f8defe33b6f2df48f4182aee0d9997a34edd67eadc70049f09f3fd3cead77dc6a6a8e08028f84b067b9b6c35b0ed54edab558dfb865f39b789cfe9d665f6495faa48f8490699c426caadfb566fdebceb6cee35be132db12d6179a8272b6b0dbd1b71041f306de92babcac0c2cd4c8ef560c3c88134c7973c7cb2a6b289749696b12356fe331eba510ed0c3c0198ec5e391cdc1f31696e083b2c784f5f1fd47c461eedfcc7733b1b0a63691d8c3c72f8ca8d51b774d722f3d58fd633f7613fdf95eb63b12daf59476b0bf89b9f48c7d4bd43ee803f13f19ee0581a8f50ec50c7e5e92d35ae493b4924f8cf8d6eeeea2e034a59a517955342c6c2454f81ad55189a6cca48eb153911d8c36370327c4620926ec5989ebbb12589ef276ff002250e428d55dbf48ca116544d4565ea0ca5bd1597f4a95c4835cd2150eb191d3c5dae3710a2de37f8ccae3742d46b95b1eebda598d095f2028d5776d63a9451aa300b6b92101cb3856dfcd5e280d218565bf59cd32323ed235fd27d193857333c9ca9f95f4f529d555a4acdf9da6ea35829502e40cfaf7b7bb3bac94222240888808888088881cf79dbc4f570b4373bd476fd950abfbede5394ad022fab6da4f8939cdf79d6c45f1d453726194f8b35427e02734a8fd63c65176fafc25a5543be4a1f29055795113488c8eb54912e2edb45fbc6dfe32895d2fc65abdc4bca7515b61bf76ff002874072328b318a71b18f8e7f1951c73916cb8db38a985ec3e7f390f42c37796720b8a62d4dbb5d80f019996f6933dfaaa01eaae7c4e67f094151bcf80ccc0f10126c36997a004161ed1da6788022dedd63b06ff001322064158125a6250a24f4840b9a0b325444b3c3acbad6813ebcdaf9a96d6d207ddc1d73fea511f8cd22ad59bdf3274b5b138babfaba14d2fff0072a5ff00f5c83b044448a44440444404444044440e29ce7d4ff9938eca34ff00db27f19cf6a36666fbce80b6947efc3d33f708fc273eae7332a251524555e47af22a8f288ab3cb57325a8640d2aa9bc99314e379f1b1f8c827b02e7f2d7f77c8fce78716fdc380f9c8204825e909da4cbac2a81d63bb64b5a4b7e12eaf7e1ba11eb3126e654a2780491440ad04b9a4240825d51102ee888ab5252cf612cab57815d6ab3b7733ba20d1c0f4ce2cf8ba9d20bede880d5a7e7d66e0c2736e6f391cfa42b07a808c25261d2b6cd73b7a253da779dc3bc89f415340a028002a800002c001b001255551112044440444404444044440e2fcee522349d16dcf811e6af541f889cdb183333b0f3c58226b602b8d829e2e9b7121193e0f39163973328b066913b4ade44d2a236913494c8c885513d89ec04a809e01254102b45dde727128412b102a1245128592ac224497286c2f2dd2795aac2bdaf5cf8f64da79bfe4354d20fd254d64c2a35aa541ed3b7eae9f7f69ddc65b7213923534857d5cd68d3b1c4551f446e45f7cfa6d9f43e03054e8d34a3494253a6a151176003f9db250d1f81a5429a51a48a94a98b2228c80fc4f7ef97111204444044440444404444044440d279d47a7d05143ff0050d567a63dd5a4c1cf0ebaf989c3b1cb999d2f9c7d21af8f64bf570d8744b7bf53aede869f94e758f5cccb061aa2cb76597b5565bb2ca8b72250c24e44a0ac2a0220092959e0581e28925313c224aa20542562522542115acad4ca0194b3c2a57ab331c94e4e57c7575a34c6791a9508ea524decddfd837cf3927c99af8eac295219e46a5461f9ba4bfa4ddfd837cfa1f933c9ea181a228d11df52a1f6ea3ef663f86e904dc9fd0b47074130f44595732c7da773ed3b1de4fc86c13231120444404444044440444404444044440f9d79758e3fd218e3fde1878200a3f766bcd8abcd979cdd1e69e91c50b655192a2f7874049fb5ac3c26a352819d0546121694bdc6d946bc0f4894113dd68bc0a6d169ec5e079695ca2f1ad024067bad22d79553426055ac4e426dbc88e44e231efd5ea5153f9dc430eaafba9fa4ff000dfba6c7c83e6baa56d5af8c0d4a81b15a39ad7a83defd5afdee1919da30785a74916953554a682c88800503b84968b4d03a12860e92d0a0baaa336273776dece779fe4584c8c44811110111101111011110111101111011110347e73f926d8ba4b5e80be270e0f537d4a473283de0731c4f6ce2446dcb306c41c882368227d4b348e5af37947185abd1228e28ed6b7e6aa1fed146ff00787919651c2ea5312d2ae184cf69ed058bc1b6ae268b20bd85551ad45b838cbc36f74c49606518d7a4448493328e9207a1031e5ccf35ccbb6c34a7f253ff00d816d732b45266c9a0b9158dc591d0d0a8ca7fac65d4a36ede91ac0f85ccea3c97e67e8d3b3e35fa56c8f4144b2d107de7f69fee8ed06072ae4cf253178d7d4a14cb006cf50f568a7d77edee173dd3b8f22f9b9c2e0756ad4b56c50cc5465b5343fd926efac6e786c9b86130b4e922d3a68a94d05951142a81d800d926936111120444404444044440444404444044440444404444044440a6a530c0ab00548b1040208ef066ada539b9d155f33875a6ddb419a90fb2bd5f49b5c40e675f99ac21f63138a5ee6e8587a2891af333437e2ebdbb92983e66f3a8446c73ec1f345a397db7c4d5ee7a8aabf7141f59b2e8be47e8ec3d8d2c2d10c363b2ebd41c1dee479cce440444404444044440444404444044440444404444044440444404444044440444404444044440444404444044440444404444044440444404444044440fffd9),
(5, 'Punta para soldar', 'este producto ayuda....', NULL, 0xffd8ffe000104a46494600010100000100010000ffdb00840009060713071215111213111312161516131715171616161918151718161e1818151818202820181a251d1715223121262b2b2e2e30171f3338332d37282d2e2b010a0a0a0505050e05050e2b1913192b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b2bffc000110800e100e103012200021101031101ffc4001b00010003000301000000000000000000000004050602030701ffc4003a10000201020403050507040105000000000001020311040521311241510613617181223291d1f014234252a1b1c1153362f14334728292e1ffc40014010100000000000000000000000000000000ffc40014110100000000000000000000000000000000ffda000c03010002110311003f00f7100000000042c4e6d470b2e09d48c65d2fb79f4f526465c4aeb54f5b81f40000000000000000000000000000000000000000000000000000819ee25e0e84e71dd24afd2ed2be9e64f3af11423898ca12578c938b5d5303c971188bcb57aa5cddf6e7fbfc0d2f6133b7c0a9cdb706db84ada455dfb37fafdccef68bb393c3d6709d4bd3776bab5cb65e7a6bb1dd924fb95dc3bab3525c9ffb03d5414f92e365650a9a3da37e8b4b3f81700000000000000000000000000000000000000000000000000000056e7b962cca9d9594e3ac5f8f43cf2b61b82cdb92af16b8537cdbd5fe897a9eaa52e6b97f753fb4535ed68a4b93f3f3fe1302ab218fdba9abb4a71dd7e2bbdaeefaad3f4b1a7c2d7e3d1fbcbf53359841fb38ba1ef256946eecd5d71292dd4959f935e65b61f111c6463569cae9eabe4efb35d00b7074e1abaaebc79a3b800000000000000000000000000000000000000000000000001f1ab9f4019ec4d2fe9b51defdd4ed7f077dfcb64fd083466f27aa97fc13e5f965749789a9c5505898b8be664738af1c0d3ee6aa6ddd2a6faf25193fc36fcdd1f3d40d0b7c0d4e3ea4fa35956574fd3a1e6d8baf8aa349b751b4b85c629da3ecdfdeb6ad6ab9eb65b11b21ed7d583e1ae92d6dc6b4b7fe37dbc501eac0a7c0670ab5aed495b75f5a96b4eaaabb3b81cc000000000000000000000000000000000000000000000000a2ed460562a1b6ad35eaacd3fae85e90f35871c3c9afd74fe40c3e5f375d383e57b7a6f733b9f64fc3ed2d3cb91a0c553fb0d672765193bf93f91c33be3a94ef1870c1c77968e7e9ba8ebbe8df2e4d855f6230f8aaf2fbb7f731769ce5ac6fcd42ceee5b69b2bea7a224e9db5d573d8a9ecde68abd349a8a51495a2b8636f2fd49b5b1bdec94217949ea92dedcdbbfbb1f17bedd2e17d46aaa8aff00139c64a5b34ca58519535ed59c9db457b795deff0005e477616a7712f07b816a02770000000000000000000000000000000000000000000ebc4478e325e0cec0062b30c142ad584aa454a9c22ec9cacbbc6e29712e6adb78f226e6ce3c1adf55a2dfcdebcb6f893b34c12826ed78be5d1fa94982c07f50b352b52dbbc4f59a5ca9748ff9ff00eabf1019ec4578e59793d1b766dadba5e2b56f6492d7fede7aeecd56a4e0fbbbb9369ce52b71c9f59db4f24b45c92444ceb21856a7684545c57b365b7cdf8bdf9989ecf636ae4f886a77e07cacbf4bedbbf3f881eb535c5e647ab1b9cb0959568a945defa9cf1328d35c52692daef4df65e6076e02b7e17e9f226951864ebd9c6e96faef6f22dc000000000000000000000000000000000000000000000aace9f78b81df85ad6dcee50e1b1b2cbea468ceee9b8a54ea5f5ba56b4fabb73f035f5e8aacacfe267333c02aca5092eabffa80b097de2f0325da7c995452924d73bae4faf813fb398e95394b0b57df86b1959da707b6bb5f4fd19f73bcca55af470c9b7ac65574b2e4e34efa39759bf663aeeee9067bb2d9ee23034e50a918351970c2f26b66d3e4eeb6d3c0d2e0b05571b6ab59b93fc3a70f0a7bf0c7fe35e7ed3e6f914388c8eb60d2abc51e25ab493692e91babd92e7a1aec8336a79b42f0e564d356b3d3afc40b4cbaa271b73ebd49856ce3dd3bad2c4ea1555557f881d80000000000000000000000000000000000000000000045c761bbf575ef2dbe44a006763972c44f8b87da578df54d27baf03ee3f2a54e2adeca76dbf0b5b7a69b1a138d482a89a7b3033d97d7fb745c66ad38fb325cafd5754d6bebe666f174a7d98c42ad0e278796938f249dbda4baad3d11a1ccb0b3c14d4e9fbd1e5b29c39c5f8f4f15e276d48c337a5a2bc64bd53f2e4d01330d888e3a2a49dd349a6bebc4e5093c3bbadb9af031f95626590d6ee2a37ddb778cdf2bdf4bf4dbe933652b5457f002c212e3575b1f4adc2d7ee25c2fdd7cfa164000000000000000000000000000000000000000000000000074e2a82c446cfd3cccc49bcaaa395ad4e52fbc5f964f4e3f27cfe3d4d690733c1fda237b26f66baae680a2cff2a59941db75ac5f47f3b90bb2d9db9b785ab75521a272fc51fe592f2caaf0727879b7c2ff00b527cd7e46f9c959dbaaf2657f6af2772b57a575521ae9cd7d6e06a2a24ff724607117f61fa143d9cce16714f5b29c74947f2c97f05ad4a5c16b3d573fae605b03a3095fbe5fe4b73bc0000000000000000000000000000000000000000000000000a5cef2e5555d5d6a9a6b78c96d25ea45cbb13f6b8ba75125521a49727d251f0668e7153567b33359ae0a5879aa90f7e37b7f9c6fac1f4f9d80cc67985a9d9daeb1745374dbfbc82d9ae7ebe26d32ec64332a71a9069c64affefeb911e32866d4b6ba92d53dd3e8d7269fea63f03889764b11ddd4ff00a6a8f4e916f66bc3e5e570dd36e84b896ffba2d28d55555d15f16ababa69ecd35b3470c3d5fb34bfc5ee05b03e2773e80000000000000000000000000000000000000000000003a7134162159fa3f13b80191ad7ca2a3a96fbb6fef17e57caa7975f0b3e5af767d95c337a4e2f5baba7d1f997798e13bf574aeedb755d0cf602b7d865dccbfb72fedb7cbad37e296abc2fd00a8ecae6f2c0cbec95dfb49fb0df38eaede893dfa1b29c14d196ed764af151ef69dd548abdd74f4e7f5c891d91cfbfa947bb9e9561ecc975f15f5fb81a3c0e27bb7c127a72f3e8589515e8f122660713deae17ef2fd57cc09600000000000000000000000000000000000000000000000052e77972aa9bb68da7a6ea57ba92e8ef677ea5d1f251e2567b303399662dd6bd2a9fdc8efd2517b4979fe8efeb94ed2e5b3c96b2c5d0d15fdb5cadcefe1f33519ce0a58692a90f7e37717d57384bc1fc9f23b6954866b4fc1dd38be4f9a7ea073c9f318e694d4e3b35aae69f46b9122a41c1a6b46b530309cbb238969f13a13e7a68babf2fe4f40a3516262a49a69aba7d5016186aeababf3e6bc4ed2a6151e1a575b735e05a426a6935b3d40e4000000000000000000000000000000000000000000000003ab1341622367e8fa332d898cb2ba8ea2f776a91f0e535e2b9f55e48d710f32c1fda55d7bcbf5f0028b39cba19dd2717669ad1f476fd8ccf64336965159e06bb7a3fbb93db5fc377f5a9a0c049e027ddbd2949be17f965f93c9eb6f8742176cb21fea905529ab5682bc5ed75bd9fc00d5545de2f0180ace93e07b3dbcccdf6533d96329704e3395683e092517ed3b2d53f5d7c99acc261dc7da9db8ba2da3e1e2fc40940000000000000000000000000000000000000000000000000002a33acbd568b695d3f797f245cb215aac1c1a574f85547b38db4934bf16eadb697db4342d5cf918a8e8b44047c160a182568ad5eadf36deed924000000000000000000000000000000000000000000000000000000000000000000000000003fffd9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_usuario`
--

CREATE TABLE `tipo_de_usuario` (
  `Tipo_de_usuario` int(11) NOT NULL,
  `descripcion_usuario` varchar(45) NOT NULL,
  `usuario_eliminacion` varchar(45) DEFAULT NULL,
  `fecha_eliminacion` datetime DEFAULT NULL,
  `usuario_actualizacion` varchar(45) DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL,
  `usuario_insercion` varchar(45) NOT NULL,
  `fecha_insercion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_de_usuario`
--

INSERT INTO `tipo_de_usuario` (`Tipo_de_usuario`, `descripcion_usuario`, `usuario_eliminacion`, `fecha_eliminacion`, `usuario_actualizacion`, `fecha_actualizacion`, `usuario_insercion`, `fecha_insercion`) VALUES
(1, 'administrador', NULL, NULL, NULL, NULL, 'root@localhost', '2023-05-18 15:03:32'),
(2, 'cliente', NULL, NULL, NULL, NULL, 'root@localhost', '2023-05-18 15:02:16');

--
-- Disparadores `tipo_de_usuario`
--
DELIMITER $$
CREATE TRIGGER `before_insert_tipousuario` BEFORE INSERT ON `tipo_de_usuario` FOR EACH ROW BEGIN
  SET NEW.usuario_insercion = CURRENT_USER;
  SET NEW.fecha_insercion = CURRENT_TIMESTAMP ;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_tipousuario` BEFORE UPDATE ON `tipo_de_usuario` FOR EACH ROW BEGIN
  SET NEW.usuario_actualizacion = CURRENT_USER;
  SET NEW.fecha_actualizacion = CURRENT_TIMESTAMP ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Documento` int(20) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Telefono` bigint(20) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Contraseña` varchar(45) DEFAULT NULL,
  `fk_Tipo_de_usuario` int(11) NOT NULL,
  `usuario_eliminacion` varchar(45) DEFAULT NULL,
  `fecha_eliminacion` datetime DEFAULT NULL,
  `usuario_actualizacion` varchar(45) DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL,
  `usuario_insercion` varchar(45) NOT NULL,
  `fecha_insercion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Documento`, `Nombre`, `Apellidos`, `Telefono`, `Correo`, `Contraseña`, `fk_Tipo_de_usuario`, `usuario_eliminacion`, `fecha_eliminacion`, `usuario_actualizacion`, `fecha_actualizacion`, `usuario_insercion`, `fecha_insercion`) VALUES
(1234, 'Juan Daniel', 'Guzman Oliveros ', 2212222, 'allanjg@gamil.com', '1234', 2, NULL, NULL, NULL, NULL, 'root@localhost', '2023-08-15 14:55:55'),
(1109411200, 'Juan David', 'Rios Escudero', 3172272934, 'riosescudero192004@gmail.com', '12345', 2, NULL, NULL, NULL, NULL, 'root@localhost', '2023-07-23 13:14:45');

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `before_insert_usuario` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
  SET NEW.usuario_insercion = CURRENT_USER;
  SET NEW.fecha_insercion = CURRENT_TIMESTAMP ;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_usuario` BEFORE UPDATE ON `usuario` FOR EACH ROW BEGIN
  SET NEW.usuario_insercion = CURRENT_USER;
  SET NEW.fecha_insercion = CURRENT_TIMESTAMP ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `link`, `descripcion`) VALUES
(12, 'hola', 'hola', 'hola'),
(13, 'Allan es mk', 'danieltambien', 'y no tengo que decir lo contrario'),
(14, 'DANIEL', 'jajajaj', 'es mk');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`N_serial`);

--
-- Indices de la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  ADD PRIMARY KEY (`Id_ORDEN`),
  ADD KEY `fk_Orden_Servicio_Dispositivo1_idx` (`Dispositivo_Serial`),
  ADD KEY `fk_Orden_Servicio_Usuario1_idx` (`fk_Usuario_Documento`),
  ADD KEY `fk_Orden_Servicio_Usuario2_idx` (`fk_Usuario_Documento_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipo_de_usuario`
--
ALTER TABLE `tipo_de_usuario`
  ADD PRIMARY KEY (`Tipo_de_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Documento`) USING BTREE,
  ADD KEY `fk_Usuario_Tipo_de_usuario1_idx` (`fk_Tipo_de_usuario`),
  ADD KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  MODIFY `Id_ORDEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  ADD CONSTRAINT `fk_Orden_Servicio_Dispositivo1` FOREIGN KEY (`Dispositivo_Serial`) REFERENCES `dispositivo` (`N_serial`),
  ADD CONSTRAINT `fk_Orden_Servicio_Usuario1` FOREIGN KEY (`fk_Usuario_Documento`) REFERENCES `usuario` (`Documento`),
  ADD CONSTRAINT `fk_Orden_Servicio_Usuario2` FOREIGN KEY (`fk_Usuario_Documento_cliente`) REFERENCES `usuario` (`Documento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Tipo_de_usuario1` FOREIGN KEY (`fk_Tipo_de_usuario`) REFERENCES `tipo_de_usuario` (`Tipo_de_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
