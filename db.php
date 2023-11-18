<?
  require_once 'config.php';

  try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $err) {
      die("Ошибка подключения: " . $err->getMessage());
  }

  function getBooks($pdo) {
    $sql = "SELECT author, title, year_read FROM books";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function getBooksByYears($pdo, $year) {
    $sql = "SELECT * FROM books WHERE year_read = :year ORDER BY sort_order ASC;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':year', $year, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function getDistinctYears($pdo) {
    $sql = "SELECT DISTINCT year_read FROM books ORDER BY year_read ASC;";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
  }

?>