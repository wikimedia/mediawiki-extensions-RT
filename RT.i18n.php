<?php
/**
 * Internationalisation file for the RT extension.
 *
 * @file
 * @ingroup Extensions
 */

/**
 * Get all extension messages
 *
 * @return array
 */

$messages = array();

/** English
 *  Greg Sabino Mullane <greg@endpoint.com>
 */
$messages['en'] = array(
	'rt-desc'         => 'Fancy interface to RT (Request Tracker)',
	'rt-inactive'     => 'The RT extension is not active.',
	'rt-badquery'     => 'The RT extension encountered an error when talking to the RT database.',
	'rt-badlimit'     => "Invalid LIMIT (l) arg: must be a number.
You tried: '''\$1'''",
	'rt-badorderby'   => "Invalid ORDER BY (ob) arg: must be a standard field (see documentation).
You tried: '''\$1'''",
	'rt-badstatus'    => "Invalid status (s) arg: must be a standard field (see documentation).
You tried: '''\$1'''",
	'rt-badcfield'    => "Invalid custom field arg: must be a simple word (see documentation).
You tried: '''\$1'''",
	'rt-badqueue'     => "Invalid queue (q) arg: must be a simple word.
You tried: '''\$1'''",
	'rt-badowner'     => "Invalid owner (o) arg: must be a valid username.
You tried: '''\$1'''",
	'rt-nomatches'    => 'No matching RT tickets were found.',
);

/** Message documentation (Message documentation)
 * @author Fryed-peach
 * @author McDutchie
 * @author Purodha
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'rt-desc' => '{{desc|name=RT|url=http://www.mediawiki.org/wiki/Extension:RT}}',
	'rt-inactive' => 'Used as minimal output to indicate the extension is not active.',
	'rt-badquery' => 'Used as fatal error message.',
	'rt-badlimit' => '{{doc-important|Do not translate "<code>LIMIT (l)</code>".\'\'\' The "<code>(l)</code>" is a lowercase L.}}
Translate "arg" as argument, parameter.',
	'rt-badorderby' => '{{doc-important|Do not translate "<code>ORDER BY (ob)</code>".}}
Translate "arg" as argument, parameter.',
	'rt-badstatus' => '{{doc-important|Do not translate "<code>status (s)</code>".}}
Translate "arg" as argument, parameter.',
	'rt-badcfield' => 'Used as fatal error message. Parameters:
* $1 - word',
	'rt-badqueue' => '{{doc-important|Do not translate "<code>queue (q)</code>".}}
Translate "arg" as argument, parameter.',
	'rt-badowner' => '{{doc-important|Do not translate "<code>owner (o)</code>".}}
Translate "arg" as argument, parameter.',
	'rt-nomatches' => 'Used as minimal output to indicate the query returned empty result.',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'rt-desc' => 'واجهة فاخرة لمتتبع الطلبات',
	'rt-inactive' => 'امتداد متتبع الطلبات غير مُفعّل',
	'rt-badquery' => 'واجه امتداد متتبع الطلبات خطأً أثناء التخاطب مع قاعدة بيانات متتبع الطلبات',
	'rt-badlimit' => "محدد LIMIT (l) غير صحيح: يجب أن يكون رقما.
أنت جربت: '''$1'''",
	'rt-badorderby' => "محدد ORDER BY (ob) غير صحيح: يجب أن يكون حقلا قياسيا (انظر التوثيق).
أنت جربت: '''$1'''",
	'rt-badstatus' => "محدد حالة (s) غير صحيح: يجب أن يكون حقلا قياسيا (انظر التوثيق).
أنت جربت: '''$1'''",
	'rt-badcfield' => "محدد حالة (s) غير صحيح: يجب أن يكون كلمة بسيطة (انظر التوثيق).
أنت جربت: '''$1'''",
	'rt-badqueue' => "محدد طابور (q) غير صحيح: يجب أن يكون كلمة بسيطة.
أنت جربت: '''$1'''",
	'rt-badowner' => "محدد مالك (o) غير صحيح: يجب أن يكون اسم مستخدم صحيحا.
أنت جربت: '''$1'''",
	'rt-nomatches' => 'لا تذاكر RT مطابقة تم العثور عليها',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'rt-desc' => 'Interfaz guapa pa RT (Request Tracker)',
	'rt-inactive' => 'La estensión RT nun ta activa.',
	'rt-badquery' => 'La estensión RT alcontró un error al comunicase cola base de datos RT.',
	'rt-badlimit' => "Argumentu inválidu de LIMIT (l): tien de ser un númberu.
Intentó: '''$1'''",
	'rt-badorderby' => "Argumentu inválidu de ORDER BY (ob): tien de ser un campu estándar (ver la documentación).
Intentó: '''$1'''",
	'rt-badstatus' => "Argumentu inválidu de status (s): tien de ser un campu estándar (ver la documentación).
Intentó: '''$1'''",
	'rt-badcfield' => "Argumentu inválidu de campu personalizáu: tien de ser un pallabra simple (ver la documentación).
Intentó: '''$1'''",
	'rt-badqueue' => "Argumentu inválidu de queue (q): tien de ser una pallabra simple.
Intentó: '''$1'''",
	'rt-badowner' => "Argumentu inválidu de owner (o): tien de ser un nome d'usuariu válidu.
Intentó: '''$1'''",
	'rt-nomatches' => "Nun s'alcontraron tickets RT que casen.",
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author McDutchie
 */
$messages['be-tarask'] = array(
	'rt-desc' => 'Палепшаны інтэрфэйс для RT (адсочваньне запытаў)',
	'rt-inactive' => 'Пашырэньне RT не ўключана',
	'rt-badquery' => 'У пашырэньні RT узьнікла памылка пад час абмену зьвесткамі з базай зьвестак RT',
	'rt-badlimit' => "Няслушны аргумэнт LIMIT (l): ён павінен быць лікай.
Вы спрабавалі ўвесьці: '''$1'''",
	'rt-badorderby' => "Няслушны аргумэнт ORDER BY (ob): ён павінен мець стандартны выгляд (глядзіце дакумэнтацыю).
Вы спрабавалі ўвесьці: '''$1'''",
	'rt-badstatus' => "Няслушны аргумэнт status (s): ён павінен мець стандартны выгляд (глядзіце дакумэнтацыю).
Вы спрабавалі ўвесьці: '''$1'''",
	'rt-badcfield' => "Няслушны аргумэнт для нестандартнага поля: мусіць мець стандартны выгляд (глядзіце дакумэнтацыю).
Вы спрабавалі ўвесьці: '''$1'''",
	'rt-badqueue' => "Няслушны аргумэнт queue (q): ён павінен быць простам словам.
Вы спрабавалі ўвесьці: '''$1'''",
	'rt-badowner' => "Няслушны аргумэнт owner (o): павінна быць існуючае імя ўдзельніка.
Вы спрабавалі ўвесьці: '''$1'''",
	'rt-nomatches' => 'Ня знойдзена супадзеньняў з RT',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'rt-desc' => 'Etrefas plijus evit RT (Request Tracker)',
	'rt-inactive' => "An astenn RT n'eo ket oberiant",
	'rt-badquery' => 'Ur fazi zo bet gant an astenn RT en ur eskemm gant an diaz roadennoù RT',
	'rt-badlimit' => "Arguzenn LIMIT (l) direizh : rankout a ra bezañ un niver.
Lakaet hoc'h eus : '''$1'''",
	'rt-badorderby' => "Arguzenn ORDER BY (ob) direizh : rankout a ra bezañ ur vaezienn voutin(gwelet an teuliadur).
Lakaet hoc'h eus : '''$1'''",
	'rt-badstatus' => "Arguzenn status direizh (s) : rankout a ra bezañ ur vaezienn voutin (gwelet an teuliadur).
Lakaet hoc'h eus : '''$1'''",
	'rt-badcfield' => "Arguzenn maezienn bersonelaet direizh : rankout a ra bezañ ur ger eeun (sellit ouzh an teulioù titouriñ).
Klasket hoc'h eus gant : '''$1'''",
	'rt-badqueue' => "Arguzenn queue (o) direizh : rankout a ra bezañ ur ger eeun.
Lakaet hoc'h eus : '''$1'''",
	'rt-badowner' => "Arguzenn owner (o) direizh : rankout a ra bezañ un anv implijer reizh.
Lakaet hoc'h eus : '''$1'''",
	'rt-nomatches' => "N'eus bet kavet tiked RT ebet o klotañ",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'rt-desc' => 'Moderni interfejs za RT (Praćenje zahtjeva)',
	'rt-inactive' => 'RT proširenje nije aktivno',
	'rt-badquery' => 'RT proširenje je javilo grešku pri kontaktiranju RT baze podataka',
	'rt-badlimit' => "Nevaljan LIMIT (l) argument: mora biti broj.
Pokušali ste: '''$1'''",
	'rt-badorderby' => "Nevaljan ORDER BY (ob) argument: mora biti standardno polje (vidi dokumentaciju).
Pokušali ste: '''$1'''",
	'rt-badstatus' => "Nevaljan status (s) argument: mora biti standardno polje (vidi dokumentaciju).
Pokušali ste: '''$1'''",
	'rt-badcfield' => "Nevaljan proizvoljno polje argumenta: mora biti jednostavna riječ (vidi dokumentaciju).
Pokušali ste: '''$1'''",
	'rt-badqueue' => "Nevaljan queue (q) argument: mora biti jednostavna riječ.
Pokušali ste: '''$1'''",
	'rt-badowner' => "Nevaljan owner (o) argument: mora biti validno korisničko ime.
Vi ste pokušali: '''$1'''",
	'rt-nomatches' => 'Nisu pronađeni odgovarajući RT kuponi',
);

/** German (Deutsch)
 * @author Imre
 * @author LWChris
 * @author Pill
 */
$messages['de'] = array(
	'rt-desc' => 'Modisches Interface für RT (Request Tracker)',
	'rt-inactive' => 'Die RT-Erweiterung ist nicht aktiv',
	'rt-badquery' => 'Die RT-Erweiterung hat einen Fehler bei der Kommunikation mit der RT-Datenbank festgestellt',
	'rt-badlimit' => "Parameter „LIMIT (l)“ ungültig: Muss eine Zahl sein.
Deine Eingabe: '''$1'''",
	'rt-badorderby' => "Ungültiger ORDER BY (ob)-Parameter: muss ein Standardfeld sein (siehe Dokumentation).
Versuchte Eingabe: '''$1'''",
	'rt-badstatus' => "Ungültiger status (s)-Parameter: muss ein Standardfeld sein (siehe Dokumentation).
Versuchte Eingabe: '''$1'''",
	'rt-badcfield' => "Ungültiger Parameter für benutzerdefiniertes Feld: muss ein einfaches Wort sein (siehe Dokumentation).
Versuchte Eingabe: '''$1'''",
	'rt-badqueue' => "Parameter „queue (q)“ ungültig: Muss ein einfaches Wort sein.
Deine Eingabe: '''$1'''",
	'rt-badowner' => "Parameter „owner (o)“ ungültig: Muss ein gültiger Benutzername sein.
Deine Eingabe: '''$1'''",
	'rt-nomatches' => 'Es wurden keine passenden RT-Tickets gefunden',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'rt-badlimit' => "Parameter „LIMIT (l)“ ungültig: Muss eine Zahl sein.
Ihre Eingabe: '''$1'''",
	'rt-badqueue' => "Parameter „queue (q)“ ungültig: Muss ein einfaches Wort sein.
Ihre Eingabe: '''$1'''",
	'rt-badowner' => "Parameter „owner (o)“ ungültig: Muss ein gültiger Benutzername sein.
Ihre Eingabe: '''$1'''",
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'rt-desc' => 'Pěkny interfejs za RT (Request Tracker)',
	'rt-inactive' => 'Rozšyrjenje RT njejo aktiwne',
	'rt-badquery' => 'Rozšyrjenje RT jo namakało zmólku pśi komunikaciji z datoweju banku RT',
	'rt-badlimit' => "Njepłaśiwy argument LIMIT (l): musy licba byś.
Sy wopytał: '''$1'''",
	'rt-badorderby' => "Njepłaśiwy argument ORDER BY (ob): musy standardne pólo byś (glědaj dokumentaciju).
Sy wopytał: '''$1'''",
	'rt-badstatus' => "Njepłaśiwy argument status (s): musy standardne pólo byś (glědaj dokumentaciju).
Sy wopytał: '''$1'''",
	'rt-badcfield' => "Njepłaśiwy swójski pólny argument: musy jadnore słowo byś (glědaj dokumentaciju).
Sy wopytał: '''$1'''",
	'rt-badqueue' => "Njepłaśiwy argument queue (q): musy jadnore słowo byś.
Sy wopytał: '''$1'''",
	'rt-badowner' => "Njepłaśiwy argument owner (o): musy płaśiwe wužywarske mě byś.
Sy wopytał: '''$1'''",
	'rt-nomatches' => 'Wótpowědne nastupnosće RT njejsu se namakali',
);

/** Greek (Ελληνικά)
 * @author ZaDiak
 */
$messages['el'] = array(
	'rt-inactive' => 'Η επέκταση RT δεν είναι ενεργή',
);

/** Spanish (español)
 * @author Antur
 * @author Crazymadlover
 * @author Pertile
 * @author Translationista
 */
$messages['es'] = array(
	'rt-desc' => 'Interfaz bonita para el RT (Request Tracker)',
	'rt-inactive' => 'La extensión RT no está activa',
	'rt-badquery' => 'La extensión RT encontró un error cuando se comunicaba con la base de datos RT',
	'rt-badlimit' => "LIMITE inválido (l) arg: debe ser un número.
Intentaste: '''$1'''",
	'rt-badorderby' => "ORDEN inválido por (ob) arg: debe ser un campo estándar (ver documentación).
Intentaste: '''$1'''",
	'rt-badstatus' => "status inválido (s) arg: debe ser un campo estándar (ver documentación).
Intentaste: '''$1'''",
	'rt-badcfield' => "Argumento de campo personalizado inválido: debe ser una palabra simple (consulte la documentación).
Ha intentado: '''$1'''.",
	'rt-badqueue' => "cola inválida (q) arg: debe ser una palabra simple.
Intentaste: '''$1'''",
	'rt-badowner' => "propietario inválido (o) arg: debe ser un nombre de usuario.
Intentaste: '''$1'''",
	'rt-nomatches' => 'No se encontraron tickets RT coincidentes.',
);

/** Finnish (suomi)
 * @author Centerlink
 * @author Nike
 */
$messages['fi'] = array(
	'rt-desc' => 'Hieno käyttöliittymä RT-ohjelmistolle',
	'rt-inactive' => 'RT-laajennus ei ole aktiivinen',
	'rt-badquery' => 'RT-laajennus havaitsi virheen viestinnässä RT-tietokantaan',
	'rt-badlimit' => "Virheellinen LIMIT (l)-argumentti: sen on oltava luku.
Yritit: '''$1'''",
	'rt-badowner' => "Virheellinen owner (o)-argumentti: sen on oltava kelvollinen käyttäjänimi.
Yritit: '''$1'''",
);

/** French (français)
 * @author Crochet.david
 * @author IAlex
 * @author Peter17
 */
$messages['fr'] = array(
	'rt-desc' => 'Interface pour RT (Request Tracker)',
	'rt-inactive' => 'L’extension RT n’est pas active',
	'rt-badquery' => 'L’extension RT a rencontré une erreur lors d’une requête sur la base de données de RT',
	'rt-badlimit' => "Argument LIMIT (l) invalide : il doit être un nombre.
Vous avez essayé : '''$1'''",
	'rt-badorderby' => "Argument ORDER BY (ob) invalide : il doit être un champ standard (voir la documentation).
Vous avez essayé : '''$1'''",
	'rt-badstatus' => "Argument status (s) invalide : il doit être un champ standard (voir la documentation).
Vous avez essayé : '''$1'''",
	'rt-badcfield' => "Argument de champ personnalisé invalide : doit être un mot simple (voir documentation).
Vous avec essayé : '''$1'''",
	'rt-badqueue' => "Argument queue (q) invalide : il doit être un mot simple.
Vous avez essayé : '''$1'''",
	'rt-badowner' => "Argument owner (o) invalide : il doit être un nom d’utilisateur valide.
Vous avez essayé : '''$1'''",
	'rt-nomatches' => 'Aucun ticket RT n’a été trouvé',
);

/** Galician (galego)
 * @author McDutchie
 * @author Toliño
 */
$messages['gl'] = array(
	'rt-desc' => "Interface da extensión RT (''Request Tracker'')",
	'rt-inactive' => 'A extensión RT non está activa',
	'rt-badquery' => 'A extensión RT atopou un erro ao conectar coa súa base de datos',
	'rt-badlimit' => "O argumento LIMIT (l) é inválido: debe ser un número.
Vostede intentou: '''$1'''",
	'rt-badorderby' => "O argumento ORDER BY (ob) é inválido: debe ser un campo estándar (véxase a documentación).
Vostede intentou: '''$1'''",
	'rt-badstatus' => "O argumento status (s) é inválido: debe ser un campo estándar (véxase a documentación).
Vostede intentou: '''$1'''",
	'rt-badcfield' => "O argumento do campo personalizado é inválido: debe ser unha palabra simple (véxase a documentación).
Vostede intentou: '''$1'''",
	'rt-badqueue' => "O argumento queue (q) é inválido: debe ser unha palabra simple.
Vostede intentou: '''$1'''",
	'rt-badowner' => "O argumento owner (o) é inválido: debe ser un nome de usuario válido.
Vostede intentou: '''$1'''",
	'rt-nomatches' => 'Non se atoparon boletos RT que coincidisen',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'rt-desc' => 'Uusgfalle Interface fir RT (Request Tracker)',
	'rt-inactive' => 'D RT-Erwyterig isch nit aktiv',
	'rt-badquery' => 'D RT-Erwyterig het e Fähler gfunde bim Kontakt zue dr RT-Datebank',
	'rt-badlimit' => "Nit giltig LIMIT (l)-Argumänt: muess e Zahl syy.
Du hesch yygee: '''$1'''",
	'rt-badorderby' => "Nit giltig ORDER BY (ob)-Argumänt: muess e Standardfäld syy (lueg Dokumäntation).
Du hesch yygee: '''$1'''",
	'rt-badstatus' => "Nit giltig status (s)-Argumänt: muess e Standard fäld syy (lueg Dokumäntation).
Du hesch yygee: '''$1'''",
	'rt-badcfield' => "Nit giltig Argumänt fir benutzerdefinierti Fälder: muess e eifach Wort syy (lueg Dokumäntation).
Du hesch yygee: '''$1'''",
	'rt-badqueue' => "Nit giltig queue (q)-Argumänt: muess e eifach Wort syy.
Du hesch yygee: '''$1'''",
	'rt-badowner' => "Nit giltig owner (o)-Argumänt: muess e giltige Benutzername Wort syy.
Du hesch yygee: '''$1'''",
	'rt-nomatches' => 'S sin kei RT-Tickets gfunde wore',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'rt-desc' => 'ממשק יפה ל־Request Tracker&rlm; (RT)',
	'rt-inactive' => 'הרחבת RT אינה פעילה',
	'rt-badquery' => 'הרחבת RT נתקלה בשגיאה בעת ההתקשרות עם מסד הנתונים של RT',
	'rt-badlimit' => "ארגומנט LIMIT (l)&lrm; אינו תקין: צריך להיות מספר.
אתם ניסיתם: '''$1'''",
	'rt-badorderby' => "ארגומנט ORDER BY (ob)&lrm; בלתי תקין: צריך להיות שדה תקני (ר' תיעוד).
אתם ניסיתם: '''$1'''",
	'rt-badstatus' => "ארגומנט status (s)&lrm; בלתי תקין: צריך להיות שדה תקני (ר' תיעוד).
אתם ניסיתם: '''$1'''",
	'rt-badcfield' => "ארגומנט שדה מותאם אישי בלתי תקין: צריכה להיות מילה פשוטה (ר' תיעוד).
אתם ניסיתם: '''$1'''",
	'rt-badqueue' => "ארגומנט queue (q)&lrm; בלתי תקין: צריכה להיות מילה פשוטה (ר' תיעוד).
אתם ניסיתם: '''$1'''",
	'rt-badowner' => "ארגומנט owner (o)&lrm; בלתי תקין: צריך להיות שם משתמש.
אתם ניסיתם: '''$1'''",
	'rt-nomatches' => 'לא נמצאו כרטיסיות RT תואמות',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'rt-desc' => 'Šikwany interfejs za RT (Request Tracker)',
	'rt-inactive' => 'Rozšěrjenje RT aktiwne njeje',
	'rt-badquery' => 'Rozšěrjenje RT je při komunikaciji z datowej banku RT zmylk namakało',
	'rt-badlimit' => "Njepłaćiwy argument LIMIT (l): dyrbi ličba być.
Sy spytał: '''$1'''",
	'rt-badorderby' => "Njepłaćiwy argument ORDER BY (ob): dyrbi standardne polo być (hlej dokumentaciju).
Sy spytał: '''$1'''",
	'rt-badstatus' => "Njepłaćiwy argument status (s): dyrbi standardne polo być (hlej dokumentaciju).
Sy spytał: '''$1'''",
	'rt-badcfield' => "Njepłaćiwy swójski pólny argument: dyrbi jednore słowo (hlej dokumentaciju). Sy spytał: '''$1'''",
	'rt-badqueue' => "Njepłaćiwy argument queue (q): dyrbi jednore słowo być.
Sy spytał: '''$1'''",
	'rt-badowner' => "Njepłaćiwy argument owner (o): dyrbi płaćiwe wužiwarske mjeno być.
Sy spytał: '''$1'''",
	'rt-nomatches' => 'Wotpowědne naležnosće RT njebuchu namakane',
);

/** Hungarian (magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'rt-desc' => 'Díszes felület az RT-hez (Request Tracker)',
	'rt-inactive' => 'Az RT kiterjesztés nem aktív',
	'rt-badquery' => 'Az RT kiterjesztés hibát észlelt az RT adatbázissal való kommunikáció közben',
	'rt-badlimit' => "Érvénytelen „LIMIT (l)” argumentum: számnak kell lennie.
A következőt próbáltad: '''$1'''",
	'rt-badorderby' => "Érvénytelen ORDER BY (ob) paraméter: standard mezőnek kell lennie (lásd a dokumentációt).
A következőt próbáltad: '''$1'''",
	'rt-badstatus' => "Érvénytelen status (s) paraméter: standard mezőnek kell lennie (lásd a dokumentációt).
A következőt próbáltad: '''$1'''",
	'rt-badcfield' => "Érvénytelen egyedi mező argumentum: egyszerű szónak kell lennie (lásd a dokumentációt).
A következőt próbáltad: '''$1'''",
	'rt-badqueue' => "Érvénytelen queue (q) paraméter: egyszerű szónak kell lennie.
A következőt próbáltad: '''$1'''",
	'rt-badowner' => "Érvénytelen „owner (o)” argumentum: érvényes felhasználói névnek kell lennie.
A következőt próbáltad: '''$1'''",
	'rt-nomatches' => 'Nem található egyező RT jegy',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'rt-desc' => 'Interfacie elegante a RT (Request Tracker)',
	'rt-inactive' => 'Le extension RT non es active',
	'rt-badquery' => 'Le extension RT incontrava un error durante le communication con le base de datos RT',
	'rt-badlimit' => "Le parametro LIMIT (l) es invalide: debe esser un numero.
Tu entrava: '''$1'''",
	'rt-badorderby' => "Le parametro ORDER BY (ob) es invalide: debe esser un campo standard (vide le documentation).
Tu entrava: '''$1'''",
	'rt-badstatus' => "Le parametro status (s) es invalide: debe esser un campo standard (vide le documentation).
Tu entrava: '''$1'''",
	'rt-badcfield' => "Le parametro de campo personalisate es invalide: debe esser un parola simple (vide le documentation).
Tu entrava: '''$1'''",
	'rt-badqueue' => "Le parametro queue (q) es invalide: debe esser un parola simple.
Tu entrava: '''$1'''",
	'rt-badowner' => "Le parametro owner (o) es invalide: debe esser un nomine de usator valide.
Tu entrava: '''$1'''",
	'rt-nomatches' => 'Nulle billet RT trovate que corresponde a iste criterios',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Farras
 */
$messages['id'] = array(
	'rt-desc' => 'Antarmuka keren untuk RT (Request Tracker)',
	'rt-inactive' => 'Pengaya RT tidak aktif',
	'rt-badquery' => 'Pengaya RT menemui kesalahan pada saat berbicara dengan basis data RT',
	'rt-badlimit' => "Argumen LIMIT (1) tidak sah: harus sebuah angka.
Anda mencoba: '''$1'''",
	'rt-badorderby' => "Argumen ORDER BY (ob) tidak sah: harus standar (lihat dokumentasi).
Anda mencoba: '''$1'''",
	'rt-badstatus' => "Argumen status (s) tidak sah: harus standar (lihat dokumentasi).
Anda mencoba: '''$1'''",
	'rt-badcfield' => "Argumen bidang status tidak sah: harus sederhana (lihat dokumentasi).
Anda mencoba: '''$1'''",
	'rt-badqueue' => "Argumen queue (q) tidak sah: harus kata sederhana.
Anda mencoba: '''$1'''",
	'rt-badowner' => "Argumen owner (o) tidak sah: harus nama pengguna yang sah
Anda mencoba: '''$1'''",
	'rt-nomatches' => 'Tidak ada tiket RT yang sesuai yang ditemukan',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'rt-desc' => 'Interfaccia di fantasia per RT (Request Tracker)',
	'rt-inactive' => "L'estensione RT non è attiva",
	'rt-badquery' => "L'estensione RT ha incontrato un errore durante lo scambio di dati con il database RT",
	'rt-badlimit' => "Parametro \"LIMIT (l)\" non valido: deve essere un numero.
Hai inserito: '''\$1'''",
	'rt-badorderby' => "Parametro \"ORDER BY (ob)\" non valido: deve essere un campo standard (vedi documentazione).
Hai inserito: '''\$1'''",
	'rt-badstatus' => "Parametro \"status (s)\" non valido: deve essere un campo standard (vedi documentazione).
Hai inserito: '''\$1'''",
	'rt-badcfield' => "Parametro per campo personalizzato non valido: deve essere una parola semplice (vedi documentazione).
Hai inserito: '''$1'''",
	'rt-badqueue' => "Parametro \"queue (q)\" non valido: deve essere una parola semplice.
Hai inserito: '''\$1'''",
	'rt-badowner' => "Parametro \"owner (o)\" non valido: deve essere un nome utente valido.
Hai inserito: '''\$1'''",
	'rt-nomatches' => 'Nessuna corrispondenza a ticket RT trovata.',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'rt-desc' => '要求追跡 (RT) システムの装飾的なインターフェイス',
	'rt-inactive' => 'RT 拡張機能は無効になっています。',
	'rt-badquery' => 'RT 拡張機能の RT データベースと通信する際にエラーが発生しました。',
	'rt-badlimit' => "LIMIT (l) の引数が無効: 数値でなければなりません。
指定した値: '''$1'''",
	'rt-badorderby' => "ORDER BY (ob) の引数が無効: 標準のフィールドでなければなりません (ドキュメントを参照)。
指定した値: '''$1'''",
	'rt-badstatus' => "status (s) の引数が無効: 標準のフィールドでなければなりません (ドキュメントを参照)。
指定した値: '''$1'''",
	'rt-badcfield' => "カスタムフィールドの引数が無効: 単純な単語でなければなりません (ドキュメントを参照)。
指定した値: '''$1'''",
	'rt-badqueue' => "queue (q) の引数が無効: 単純な単語でなければなりません。
指定した値: '''$1'''",
	'rt-badowner' => "owner (o) の引数が無効: 有効な利用者名でなければなりません。
指定した値: '''$1'''",
	'rt-nomatches' => '一致する RT チケットが見つかりませんでした。',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'rt-desc' => 'Ene schecke Zohjreff op dä RT (<i lang="en">Request Tracker</i>) för de Aanforderungs-Verfoljung.',
	'rt-inactive' => 'Dä RT (<i lang="en">Request Tracker</i>) för de Aanforderungs-Verfoljung es nit aanjeschalldt.',
	'rt-badquery' => 'Däm RT (<i lang="en">Request Tracker</i>) för de Aanforderungs-Verfoljung sing Datebangkzohjreff meldt ene Fähler.',
	'rt-badlimit' => 'Dinge Versooch met „$1“ för dä Parrameeter „<code lang="en">LIMIT (l)</code>“ wor nix. De häts en Zahl aanjävve möße.',
	'rt-badorderby' => 'Dinge Versooch met „$1“ för dä Parrameeter „<code lang="en">ORDER BY (ob)</code>“ wohr nix. De häts en shtandatt Feld aanjävve möße. Loor Der de Dokkemäntazjuhn aan, wat dat es.',
	'rt-badstatus' => 'Dinge Versooch met „$1“ för dä Parrameeter „<code lang="en">status (s)</code>“ wohr nix. De häts e shtandatt Feld aanjävve möße. Loor Der de Dokkemäntazjuhn aan, wat dat es.',
	'rt-badcfield' => 'Dä Parrameeter för e selfsjemaat Feld es nix: Dat moß eijfach ei Woot sin.
Loor Der de Dokkemäntazjuhn aan, wat domet es.
Do hatts „$1“ probeet.',
	'rt-badqueue' => 'Dinge Versooch met „$1“ för dä Parrameeter „<code lang="en">queue (q)</code>“ wohr nix. De häts e eijnfach Woot aanjävve möße.',
	'rt-badowner' => 'Dinge Versooch met „$1“ för dä Parrameeter „<code lang="en">owner (o)</code>“ wohr nix. De häts ene jöltijje Name för ene Metmaacher aanjävve möße.',
	'rt-nomatches' => 'Mer hann kein zopaß Aanforderunge (ov <i lang="en">tickets</i>) em RT (<i lang="en">Request Tracker</i>) för de Aanforderungs-Verfoljung jevonge.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'rt-desc' => 'Interface fir RT (Request Tracker)',
	'rt-inactive' => "D'RT-Erweiderung ass net aktiv",
	'rt-badquery' => "D'RT-Erweiderung hat bäi der Kommunikatioun mat der RT-Datebank e Problem",
	'rt-badlimit' => "Parameter \"LIMIT (l)\" net valabel: Et muss eng Zuel sinn.
Dir hutt '''\$1''' probéiert",
	'rt-nomatches' => 'Et goufe keng RT Tickete fonnt déi dorop passen',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'rt-desc' => 'Збогатен посредник за RT (Request Tracker, „Следење на барања“)',
	'rt-inactive' => 'Додатокот RT не е активен',
	'rt-badquery' => 'Додатокот RT наиде на грешка при општењето со базата на податоци RT',
	'rt-badlimit' => "Неважечки LIMIT (l) аргумент: мора да биде број.
Вие наведовте: '''$1'''",
	'rt-badorderby' => "Неважечки ORDER BY (ob) аргумент: мора да биде стандардно поле (погледајте во документацијата).
Вие наведовте: '''$1'''",
	'rt-badstatus' => "Неважечки status (s) аргумент: мора да биде стандардно поле (погледајте во документацијата).
Вие наведовте: '''$1'''",
	'rt-badcfield' => "Погрешен аргумент за прилагодливо поле: мора да е прост збор (видете во документацијата).
Вие се обидовте со: '''$1'''",
	'rt-badqueue' => "Неважечки queue (q) аргумент: мора да биде прост збор.
Вие наведовте: '''$1'''",
	'rt-badowner' => "Неважечки owner (o) аргумент: мора да биде важечко корисничко име.
Вие наведовте: '''$1'''",
	'rt-nomatches' => 'Не се пронајдени совпаѓачки RT билети',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'rt-desc' => 'Fancy grensesnitt til RT (Request Tracker)',
	'rt-inactive' => 'RT-utvidelsen er ikke aktiv',
	'rt-badquery' => 'RT-utvidelsen støtte på en feil når den forsøkte å kommunisere med RT-databasen',
	'rt-badlimit' => "Ugyldig LIMIT (l) argument: må være et tall.
Du prøvde: '''$1'''",
	'rt-badorderby' => "Ugyldig ORDER BY (ob) argument: må være et standardfelt (se dokumentasjonen).
Du prøvde: '''$1'''",
	'rt-badstatus' => "Ugyldig status (s) argument: må være et standardfelt (se dokumentasjonen).
Du prøvde: '''$1'''",
	'rt-badcfield' => "Ugyldig egendefinert feltargument: må være et enkelt ord (se dokumentasjonen).
Du prøvde: '''$1'''",
	'rt-badqueue' => "Ugyldig queue (q) argument: må være et enkelt ord.
Du prøvde: '''$1'''",
	'rt-badowner' => "Ugyldig owner (o) argument: må være et gyldig brukernavn.
Du prøvde: '''$1'''",
	'rt-nomatches' => 'Ingen matchende RT-billetter ble funnet',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author Siebrand
 */
$messages['nl'] = array(
	'rt-desc' => 'Interface naar RT (Request Tracker)',
	'rt-inactive' => 'De uitbreiding RT is niet actief',
	'rt-badquery' => 'In de uitbreiding RT is een fout opgetreden in de communicatie met de RT-database',
	'rt-badlimit' => "Ongeldige parameter \"LIMIT\" (l): het moet een getal zijn.
U hebt het volgende geprobeerd: '''\$1'''",
	'rt-badorderby' => "Ongeldige parameter \"ORDER BY\" (ob): dit moet een standaard veld zijn (zie documentatie).
U hebt het volgende geprobeerd: '''\$1'''",
	'rt-badstatus' => "Ongeldige parameterstatus (s): moet een standaard veld zijn (zie documentatie).
U hebt het volgende geprobeerd: '''$1'''",
	'rt-badcfield' => "Ongeldig maatwerkveldargument: het moet een eenvoudig woord zijn (zie documentatie).
U hebt geprobeerd: '''$1'''",
	'rt-badqueue' => "Ongeldige parameter \"queue\" (q): dit moet een eenvoudig woord zijn.
U hebt het volgende geprobeerd: '''\$1'''",
	'rt-badowner' => "Ongeldige parameter \"owner\" (o): dit moet een geldige gebruikersnaam zijn.
U hebt het volgende geprobeerd: '''\$1'''",
	'rt-nomatches' => 'Er zijn geen RT-meldingen gevonden die aan de critera voldoen',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'rt-desc' => 'Interfàcia per RT (Request Tracker)',
	'rt-inactive' => 'L’extension RT es pas activa',
	'rt-badquery' => "L'extension RT a rencontrat una error al moment d'una requèsta sus la banca de donadas de RT",
	'rt-badlimit' => "Argument LIMIT (l) invalid : deu èsser un nombre.
Avètz ensajat : '''$1'''",
	'rt-badorderby' => "Argument ORDER BY (ob) invalid : deu èsser un camp estandard (vejatz la documentacion).
Avètz ensajat : '''$1'''",
	'rt-badstatus' => "Argument status (s) invalid : deu èsser un camp estandard (vejatz la documentacion).
Avètz ensajat : '''$1'''",
	'rt-badcfield' => "Argument de camp personalizat invalid : deu èsser un mot simple (veire documentacion).
Avètz ensajat : '''$1'''",
	'rt-badqueue' => "Argument queue (q) invalid : deu èsser un mot simple.
Avètz ensajat : '''$1'''",
	'rt-badowner' => "Argument owner (o) invalid : deu èsser un nom d'utilizaire valid.
Avètz ensajat : '''$1'''",
	'rt-nomatches' => 'Cap de ticket RT es pas estat trobat',
);

/** Polish (polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'rt-desc' => 'Specjalny interfejs systemu obsługi zgłoszeń',
	'rt-inactive' => 'Rozszerzenie „system obsługi zgłoszeń” nie jest aktywne',
	'rt-badquery' => 'Wystąpił błąd podczas komunikacji z bazą danych rozszerzenia „systemu obsługi zgłoszeń”',
	'rt-badlimit' => "Nieprawidłowe LIMIT (l) – argument musi być liczbą.
Próbowałeś '''$1'''",
	'rt-badorderby' => "Nieprawidłowe ORDER BY (ob) – argument musi być standardowym polem (sprawdź w dokumentacji).
Próbowałeś '''$1'''",
	'rt-badstatus' => "Nieprawidłowe status (s) – argument musi być standardowym polem (sprawdź w dokumentacji).
Próbowałeś '''$1'''",
	'rt-badcfield' => "Nieprawidłowy argument w niestandardowym polu – musi to być proste słowo (sprawdź w dokumentacji).
Próbowałeś – '''$1'''",
	'rt-badqueue' => "Nieprawidłowe queue (s) – argument musi być prostym słowem.
Próbowałeś '''$1'''",
	'rt-badowner' => "Nieprawidłowe owner (o) – argument musi być poprawną nazwą użytkownika.
Próbowałeś '''$1'''",
	'rt-nomatches' => 'Brak pasujących zgłoszeń w „systemie obsługi zgłoszeń”',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'rt-desc' => "Antërfassa pensà për RT (Trassador d'arceste)",
	'rt-inactive' => "L'estension RT a l'é pa ativa",
	'rt-badquery' => "L'estension RT a l'ha ancontrà n'eror an parland al database RT",
	'rt-badlimit' => "Arg LIMIT (1) pa bon: a deuv esse un nùmer.
It l'has provà: '''$1'''",
	'rt-badorderby' => "Arg ORDER BY (ob) pa bon: a deuv esse un camp standard (varda la documentassion).
It l'has provà: '''$1'''",
	'rt-badstatus' => "Arg status (s) pa bon: a deuv esse un camp standard (varda la documentassion).
It l'has provà: '''$1'''",
	'rt-badcfield' => "Argoment dël camp utent pa bon: a deuv esse na paròla sola (varda la documentassion).
It l'has provà: '''$1'''",
	'rt-badqueue' => "Arg queue (s) pa bon: a deuv esse na paròla sempia.
It l'has provà: '''$1'''",
	'rt-badowner' => "Arg owner (o) pa bon: a deuv esse në stranòm vàlid.
It l'has provà: '''$1'''",
	'rt-nomatches' => 'A son pa stàit trovà gnun ticket RT che a quadro',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Lijealso
 * @author Luckas
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'rt-desc' => 'Interface bonita para o RT (Request Tracker)',
	'rt-inactive' => 'A extensão RT não está ativa.',
	'rt-badquery' => 'A extensão RT encontrou um erro ao comunicar com a base de dados RT',
	'rt-badlimit' => "Parâmetro LIMIT (l) inválido: deve ser um número.
Tentou: '''$1'''",
	'rt-badorderby' => "Parâmetro ORDER BY (ob) inválido: deve ser um campo padrão (veja a documentação).
Tentou: '''$1'''",
	'rt-badstatus' => "Parâmetro status (s) inválido: deve ser um campo padrão (veja a documentação).
Tentou: '''$1'''",
	'rt-badcfield' => "Argumento inválido para o campo personalizado: tem de ser uma palavra simples (consulte a documentação).
Tentou: '''$1'''",
	'rt-badqueue' => "Parâmetro queue (q) inválido: deve ser uma palavra simples.
Tentou: '''$1'''",
	'rt-badowner' => "Parâmetro owner (o) inválido: deve ser um nome de utilizador válido.
Tentou: '''$1'''",
	'rt-nomatches' => 'Não foram encontrados pedidos RT correspondentes',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 * @author Giro720
 */
$messages['pt-br'] = array(
	'rt-desc' => 'Interface para o RT (Request Tracker)',
	'rt-inactive' => 'A extensão RT não está ativa',
	'rt-badquery' => 'A extensão RT encontrou um erro enquanto se comunicava com a base de dados do RT',
	'rt-badlimit' => "Parâmetro LIMIT (l) inválido: é necessário que seja um número.
Você tentou: '''$1'''",
	'rt-badorderby' => "Parâmetro ORDER BY (ob) inválido: é necessário que seja um campo padrão (veja a documentação).
Você tentou: '''$1'''",
	'rt-badstatus' => "Parâmetro status (s) inválido: é necessário que seja um campo padrão (veja a documentação).
Você tentou: '''$1'''",
	'rt-badcfield' => "Argumento inválido para o campo personalizado: tem de ser uma palavra simples (consulte a documentação).
Tentou: '''$1'''",
	'rt-badqueue' => "Parâmetro queue (q) inválido: é preciso que seja uma palavra simples.
Você tentou: '''$1'''",
	'rt-badowner' => "Parâmetro owner (o) inválido: é necessário que seja um nome de utilizador válido.
Você tentou: '''$1'''",
	'rt-nomatches' => 'Nenhum ticket RT correspondente foi encontrado',
);

/** Romanian (română)
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'rt-inactive' => 'Extensia RT nu este activă',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'rt-desc' => 'Inderfacce de fandasìe a RT (Request Tracker)',
	'rt-inactive' => "L'estenzione RT non g'è attivate",
	'rt-badquery' => "L'estenzione RT ha acchiate 'n'errore quanne parlave cu 'u database RT.",
	'rt-badlimit' => "LIMIT Invalide (l) l'argomende: adda essere 'nu numere.
E' pruvate cu: '''$1'''",
	'rt-badorderby' => "ORDER BY Invalide (ob) l'argomende: adda essere 'nu cambe standàrd ('ndruche 'a documendazione).
E' pruvate cu: '''$1'''",
	'rt-badstatus' => "status (s) de l'argomende invalide: adda essere 'nu cambe standàrd ('ndruche 'a documendazione).
Tu è pruvate: \"\$1\"",
	'rt-badcfield' => "L'argomende du cambe personalizzate jè invalide: adda essere 'na parola semblice ('ndruche 'a documendazione).
Tu è pruvate: \"\$1\"",
	'rt-badqueue' => 'queue (q) de l\'argomende invalide: adda essere \'na parola semblice.
Tu è pruvate: "$1"',
	'rt-badowner' => 'owner (o) de l\'argomende invalide: adda essere \'nu nome utende valide.
Tu è pruvate: "$1"',
	'rt-nomatches' => 'Nisciune ticket RT ha state acchiate.',
);

/** Russian (русский)
 * @author Ferrer
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'rt-desc' => 'Простой интерфейс для RT (Request Tracker, отслеживание запросов)',
	'rt-inactive' => 'Расширение RT неактивно',
	'rt-badquery' => 'Расширение RT обнаружило ошибку в базе данных RT',
	'rt-badlimit' => "Неверный аргумент LIMIT (l): должно быть число.
Вы указали: '''$1'''",
	'rt-badorderby' => "Неверный аргумент ORDER BY (ob): должно быть стандартное поле (смотрите документацию).
Вы указали: '''$1'''",
	'rt-badstatus' => "Неверный аргумент status (s): должно быть стандартное поле (смотрите документацию).
Вы указали: '''$1'''",
	'rt-badcfield' => "Недопустимый аргумент пользовательского поля: должно быть простое слово (см. документацию).
Вы указали: '''$1'''",
	'rt-badqueue' => "Неверный аргумент queue (l): должно простое слово.
Вы указали: '''$1'''",
	'rt-badowner' => "Неверный аргумент owner (o): должно быть верное имя участника.
Вы указали: '''$1'''",
	'rt-nomatches' => 'Не найдено соответствующих карточек RT',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'rt-desc' => 'Pekné rozhranie k sledovaniu požiadaviek (RT - Request Tracker)',
	'rt-inactive' => 'Rozšírenie RT nie je aktívne',
	'rt-badquery' => 'V rozšírení RT nastala chyba pri komunikácii s databázou RT',
	'rt-badlimit' => "Neplatný argument LIMIT (l): musí byť číslo.
Skúšali ste: '''$1'''",
	'rt-badorderby' => "Neplatný argument ORDER BY (ob): musí byť štandardné pole (pozri dokumentáciu).
Skúšali ste: '''$1'''",
	'rt-badstatus' => "Neplatný argument status (s): musí byť štandardné pole (pozri dokumentáciu).
Skúšali ste: '''$1'''",
	'rt-badqueue' => "Neplatný argument queue (q): musí byť jednoduché slovo.
Skúšali ste: '''$1'''",
	'rt-badowner' => "Neplatný argument owner (o): musí byť platné používateľské meno.
Skúšali ste: '''$1'''",
	'rt-nomatches' => 'Neboli nájdené zodpovedajúce požiadavky v RT',
);

/** Swedish (svenska)
 * @author Fluff
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'rt-desc' => 'Fint gränssnitt för RT (Request Tracker)',
	'rt-inactive' => 'RT-tillägget är inte aktivt',
	'rt-badquery' => 'RT-tillägget stötte på ett fel i kommunikationen med RT-databasen',
	'rt-badlimit' => "Ogiltig LIMIT (l) argument: måste vara ett nummer.
Du försökte: '''$1'''",
	'rt-badorderby' => "Ogiltig ORDER BY (ob) argument: måste vara ett standardfält (se dokumentationen).
Du försökte: '''$1'''",
	'rt-badstatus' => "Ogiltig status (s) argument: måste vara ett standardfält (se dokumentationen).
Du försökte: '''$1'''",
	'rt-badcfield' => "Ogiltigt anpassat fältargument: måste vara ett enkelt ord (se dokumentationen).
Du försökte: '''$1'''",
	'rt-badqueue' => "Ogiltigt queue (q) argument: måste vara ett enkelt ord.
Du försökte: '''$1'''",
	'rt-badowner' => "Ogiltigt owner (o) argument: måste vara ett giltigt användarnamn.
Du försökte: '''$1'''",
	'rt-nomatches' => 'Inga matchande RT-tickets hittades',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'rt-desc' => 'Makapritsong hugpungang-mukha sa RT (Request Tracker)',
	'rt-inactive' => 'Hindi gumagana ang dugtong sa RT',
	'rt-badquery' => 'Nakasalubong ng kamalian ang dugtong na RT habang nakikipag-usap sa talaan ng mga dato ng RT',
	'rt-badlimit' => "Hindi tanggap na  LIMIT (l) katwiran: dapat na isang bilang.
Sinubok mo ang: '''$1'''",
	'rt-badorderby' => "Hindi tanggap na ORDER BY (ob) katwiran: dapat na pampantayang larangan (tingnan ang dokumentasyon).
Sinubok mo ang: '''$1'''",
	'rt-badstatus' => "Hindi tanggap na status (s) katwiran: dapat na pampamantayang larangan (tingnan ang dokumentasyon).
Sinubok mo ang: '''$1'''",
	'rt-badcfield' => "Hindi tanggap na pasadyang larangan, katwiran: dapat na isang payak na salita (tingnan ang dokumentasyon).
Sinubok mo ang: '''$1'''",
	'rt-badqueue' => "Hindi tanggap na queue (q) katwiran: dapat na isang payak na salita.
Sinubok mo ang: '''$1'''",
	'rt-badowner' => "Hindi tanggap na owner (o) katwiran: dapat na isang tanggap na pangalan ng tagagamit.
Sinubok mo ang: '''$1'''",
	'rt-nomatches' => 'Walang natagpuang tumutugma na mga tiket ng RT',
);

/** Ukrainian (українська)
 * @author Ата
 */
$messages['uk'] = array(
	'rt-desc' => 'Простий інтерфейс для RT (Request Tracker, відслідковування запитів)',
	'rt-inactive' => 'Розширення RT неактивне',
	'rt-badquery' => 'Розширення RT виявило помилку у базі даних RT',
	'rt-badlimit' => "Недопустимий аргумент LIMIT (l): має бути число.
Ви вказали: '''$1'''",
	'rt-badorderby' => "Неприпустимий аргумент ORDER BY (ob): має бути стандартне поле (див. документацію).
Ви вказали: '''$1'''",
	'rt-badstatus' => "Неприпустимий аргумент status (s): має бути стандартне поле (див. документацію).
Ви вказали: '''$1'''",
	'rt-badcfield' => "Неприпустимий аргумент користувацького поля: має бути просте слово (див. документацію).
Ви вказали: '''$1'''",
	'rt-badqueue' => "Неприпустимий аргумент queue (q): має бути просте слово.
Ви вказали: '''$1'''",
	'rt-badowner' => "Неприпустимий аргумент owner (o): має бути дійсне ім'я користувача.
Ви вказали: '''$1'''",
	'rt-nomatches' => 'Не знайдено відповідних карток RT',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'rt-desc' => 'Giao diện đẹp cho RT (Request Tracker - Yêu cầu Bộ dò)',
	'rt-inactive' => 'Phần mở rộng RT không được kích hoạt',
	'rt-badquery' => 'Phần mở rộng RT gặp lỗi khi trao đổi với cơ sở dữ liệu RT',
	'rt-badlimit' => "Thông số LIMIT (l) sai: phải sử dụng số.
Bạn đã gọi: '''$1'''",
	'rt-badorderby' => "Thông số ORDER BY (ob) sai: phải là một trường chuẩn (xem tài liệu đi kèm).
Bạn đã gọi: '''$1'''",
	'rt-badstatus' => "Thông số status (s) sai: phải là một trường chuẩn (xem tài liệu đi kèm).
Bạn đã gọi: '''$1'''",
	'rt-badcfield' => "Thông số trường tùy biến sai: phải là một từ đơn giản (xem tài liệu đi kèm).
Bạn đã gọi: '''$1'''",
	'rt-badqueue' => "Thông số hàng đợi (q) sai: phải là từ đơn giản.
Bạn đã gọi: '''$1'''",
	'rt-badowner' => "Thông số owner (o) sai: phải là một tên người dùng đã có.
Bạn đã gọi: '''$1'''",
	'rt-nomatches' => 'Không tìm thấy thẻ RT nào trùng với tìm kiếm',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'rt-desc' => 'RT（请求跟踪器）的花哨接口',
	'rt-inactive' => 'RT扩展未激活',
	'rt-badquery' => '与RT数据库交流时RT扩展遇到一个错误',
);
