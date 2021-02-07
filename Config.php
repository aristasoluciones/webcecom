$webRoot = 'http://' . $_SERVER['HTTP_HOST'] . '';
  $webRoot = 'http://' . $_SERVER['HTTP_HOST'] . '';
  $docRoot = $_SERVER['DOCUMENT_ROOT'] . '';
  $docRoot = $_SERVER['DOCUMENT_ROOT'] . '';
  $sqlUser = 'root';
  $sqlUser = 'root';
  $sqlPw = 'root';
  $sqlPw = 'root';
  $sqlHost = 'localhost';
  $sqlHost = 'localhost';
  $sqlDb = '';
  $sqlDb = '';

  /** RUTAS GENERALES **/
  /** RUTAS GENERALES **/

  define('DOC_ROOT', $docRoot);
  define('DOC_ROOT', $docRoot);
  define('WEB_ROOT', $webRoot);
  define('WEB_ROOT', $webRoot);


  /** BASE DE DATOS **/
  /** BASE DE DATOS **/

  define('SQL_HOST', $sqlHost);
  define('SQL_HOST', $sqlHost);
  define('SQL_DATABASE', $sqlDb);
  define('SQL_DATABASE', $sqlDb);
  define('SQL_USER', $sqlUser);
  define('SQL_USER', $sqlUser);
  define('SQL_PASSWORD', $sqlPw);
  define('SQL_PASSWORD', $sqlPw);

  define('USER_PAC', '');
  define('USER_PAC', '');
  define('PW_PAC', '');
  define('PW_PAC', '');


  /** SMTP **/
  /** SMTP **/

  define('SMTP_HOST', 'mail.avantika.com.mx');
  define('SMTP_HOST', 'mail.avantika.com.mx');
  define('SMTP_PORT', 587);
  define('SMTP_PORT', 587);
  define('SMTP_USER', 'smtp@avantika.com.mx');
  define('SMTP_USER', 'smtp@avantika.com.mx');
  define('SMTP_PASS', 'smtp1234');
  define('SMTP_PASS', 'smtp1234');


  /** PAGINACION **/
  /** PAGINACION **/

  define('ITEMS_PER_PAGE', '20');
  define('ITEMS_PER_PAGE', '20');


  /** NOMBRE DEL SISTEMA **/
  /** NOMBRE DEL SISTEMA **/

  define('PROJECT_NAME', 'CECOM');
  define('PROJECT_NAME', 'CECOM');
  define('FOOTER', 'CECOM');